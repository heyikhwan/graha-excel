<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\StislaController;
use App\Http\Requests\Product\ReviewRequest;
use App\Models\Product;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ReviewController extends StislaController
{

    /**
     * constructor method
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();

        $this->icon                  = 'fa fa-atom';
        $this->viewFolder            = 'reviews';
        $this->newModalForm          = true;

        $this->middleware('can:Reviews');
        $this->middleware('can:Reviews Create')->only(['create', 'store']);
        $this->middleware('can:Reviews Update')->only(['edit', 'update']);
        $this->middleware('can:Reviews Delete')->only(['destroy']);
    }

    /**
     * get index data
     *
     * @return array
     */
    protected function getIndexData()
    {
        $data = Review::latest('id')->get();

        $defaultData = $this->getDefaultDataIndex(__('Review'), 'Reviews', 'products.reviews');
        
        return array_merge($defaultData, [
            'data'         => $data,
            'isAjax'       => true,
        ]);
    }

    /**
     * prepare store data
     *
     * @param ReviewRequest $request
     * @return array
     */
    private function getStoreData(ReviewRequest $request)
    {
        $data = $request->only([
            'product',
            'name',
            'review',
        ]);

        return $data;
    }

    /**
     * get detail data
     *
     * @param Review $review
     * @param bool $isDetail
     * @return array
     */
    private function getDetailData(Review $review, bool $isDetail = false)
    {
        $title       = __('Review');
        $defaultData = $this->getDefaultDataDetail($title, 'products.reviews', $review, $isDetail);

        $products = Product::get();
        $options = [];
        foreach ($products as $product) {
            $options[$product->id] = $product->title;
        }
        
        return array_merge($defaultData, [
            'selectOptions'   => $options,
            'fullTitle'       => $isDetail ? __('Detail Review') : __('Ubah Review'),
        ]);
    }

    /**
     * showing reviews page
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $data = $this->getIndexData();

        if ($request->ajax()) {
            return response()->json([
                'success' => true,
                'data'    => view('stisla.products.reviews.table', $data)->render(),
            ]);
        }

        return view('stisla.products.reviews.index', $data);
    }


    /**
     * showing add new reviews page
     *
     * @param Request $request
     * @return Response
     */
    public function create(Request $request)
    {
        $title      = __('Review');
        $fullTitle  = __('Create Review');
        $data       = $this->getDefaultDataCreate($title, 'products.reviews');
        $products = Product::get();
        $options = [];
        foreach ($products as $product) {
            $options[$product->id] = $product->title;
        }
        $data       = array_merge($data, [
            'selectOptions'   => $options,
            'fullTitle'       => $fullTitle,
        ]);

        return view('stisla.products.reviews.only-form', $data);
    }

    /**
     * save new reviews to db
     *
     * @param ReviewRequest $request
     * @return Response
     */
    public function store(ReviewRequest $request)
    {
        $data   = $this->getStoreData($request);
        $result = Review::create($data);
        $successMessage = successMessageCreate("Review");

        if ($request->ajax()) {
            return response()->json([
                'success' => true,
                'message' => $successMessage,
            ]);
        }

        return back()->with('successMessage', $successMessage);
    }

    /**
     * showing edit reviews page
     *
     * @param Request $request
     * @param Review $review
     * @return Response
     */
    public function edit(Request $request, Review $review)
    {
        $data = $this->getDetailData($review);

        return view('stisla.products.reviews.only-form', $data);
    }

    /**
     * update data to db
     *
     * @param ReviewRequest $request
     * @param Review $review
     * @return Response
     */
    public function update(ReviewRequest $request, Review $review)
    {
        $data    = $this->getStoreData($request);
        $category = Review::find($review->id);

        $newData = $category->update($data);
        $successMessage = successMessageUpdate("Review");

        if ($request->ajax()) {
            return response()->json([
                'success' => true,
                'message' => $successMessage,
            ]);
        }

        return back()->with('successMessage', $successMessage);
    }

    public function show(Review $review)
    {
        $data = $this->getDetailData($review, true);

        return view('stisla.products.reviews.only-form', $data);
    }

    /**
     * delete reviews from db
     *
     * @param Review $review
     * @return Response
     */
    public function destroy(Review $review)
    {
        $category = Review::find($review->id);
        $category->delete();
        $successMessage = successMessageDelete("Review");

        if (request()->ajax()) {
            return response()->json([
                'success' => true,
                'message' => $successMessage,
            ]);
        }

        return back()->with('successMessage', $successMessage);
    }
}
