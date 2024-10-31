<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\StislaController;
use App\Http\Requests\Product\SizeRequest;
use App\Models\Size;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class SizeController extends StislaController
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
        $this->viewFolder            = 'sizes';
        $this->newModalForm          = true;

        $this->middleware('can:Sizes');
        $this->middleware('can:Sizes Create')->only(['create', 'store']);
        $this->middleware('can:Sizes Update')->only(['edit', 'update']);
        $this->middleware('can:Sizes Delete')->only(['destroy']);
    }

    /**
     * get index data
     *
     * @return array
     */
    protected function getIndexData()
    {
        $data = Size::latest('id')->get();

        $defaultData = $this->getDefaultDataIndex(__('Size'), 'Sizes', 'products.sizes');
        
        return array_merge($defaultData, [
            'data'         => $data,
            'isAjax'       => true,
        ]);
    }

    /**
     * prepare store data
     *
     * @param SizeRequest $request
     * @return array
     */
    private function getStoreData(SizeRequest $request)
    {
        $data = $request->only([
            'size',
        ]);

        return $data;
    }

    /**
     * get detail data
     *
     * @param Size $size
     * @param bool $isDetail
     * @return array
     */
    private function getDetailData(Size $size, bool $isDetail = false)
    {
        $title       = __('Size');
        $defaultData = $this->getDefaultDataDetail($title, 'products.sizes', $size, $isDetail);
        
        return array_merge($defaultData, [
            'fullTitle'       => $isDetail ? __('Detail Size') : __('Ubah Size'),
        ]);
    }

    /**
     * showing sizes page
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
                'data'    => view('stisla.products.sizes.table', $data)->render(),
            ]);
        }

        return view('stisla.products.sizes.index', $data);
    }


    /**
     * showing add new sizes page
     *
     * @param Request $request
     * @return Response
     */
    public function create(Request $request)
    {
        $title      = __('Size');
        $fullTitle  = __('Create Size');
        $data       = $this->getDefaultDataCreate($title, 'products.sizes');

        $data       = array_merge($data, [
            'fullTitle'       => $fullTitle,
        ]);

        return view('stisla.products.sizes.only-form', $data);
    }

    /**
     * save new sizes to db
     *
     * @param SizeRequest $request
     * @return Response
     */
    public function store(SizeRequest $request)
    {
        $data   = $this->getStoreData($request);
        $result = Size::create($data);
        $successMessage = successMessageCreate("Size");

        if ($request->ajax()) {
            return response()->json([
                'success' => true,
                'message' => $successMessage,
            ]);
        }

        return back()->with('successMessage', $successMessage);
    }

    /**
     * showing edit sizes page
     *
     * @param Request $request
     * @param Size $size
     * @return Response
     */
    public function edit(Request $request, Size $size)
    {
        $data = $this->getDetailData($size);

        return view('stisla.products.sizes.only-form', $data);
    }

    /**
     * update data to db
     *
     * @param SizeRequest $request
     * @param Size $size
     * @return Response
     */
    public function update(SizeRequest $request, Size $size)
    {
        $data    = $this->getStoreData($request);
        $category = Size::find($size->id);

        $newData = $category->update($data);
        $successMessage = successMessageUpdate("Size");

        if ($request->ajax()) {
            return response()->json([
                'success' => true,
                'message' => $successMessage,
            ]);
        }

        return back()->with('successMessage', $successMessage);
    }

    public function show(Size $size)
    {
        $data = $this->getDetailData($size, true);

        return view('stisla.products.sizes.only-form', $data);
    }

    /**
     * delete sizes from db
     *
     * @param Size $size
     * @return Response
     */
    public function destroy(Size $size)
    {
        $category = Size::find($size->id);
        $category->delete();
        $successMessage = successMessageDelete("Size");

        if (request()->ajax()) {
            return response()->json([
                'success' => true,
                'message' => $successMessage,
            ]);
        }

        return back()->with('successMessage', $successMessage);
    }
}
