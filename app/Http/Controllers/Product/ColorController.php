<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\StislaController;
use App\Http\Requests\Product\ColorRequest;
use App\Models\Color;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ColorController extends StislaController
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
        $this->viewFolder            = 'colors';
        $this->newModalForm          = true;

        $this->middleware('can:Colors');
        $this->middleware('can:Colors Create')->only(['create', 'store']);
        $this->middleware('can:Colors Update')->only(['edit', 'update']);
        $this->middleware('can:Colors Delete')->only(['destroy']);
    }

    /**
     * get index data
     *
     * @return array
     */
    protected function getIndexData()
    {
        $data = Color::latest('id')->get();

        $defaultData = $this->getDefaultDataIndex(__('Color'), 'Colors', 'products.colors');
        
        return array_merge($defaultData, [
            'data'         => $data,
            'isAjax'       => true,
        ]);
    }

    /**
     * prepare store data
     *
     * @param ColorRequest $request
     * @return array
     */
    private function getStoreData(ColorRequest $request)
    {
        $data = $request->only([
            'name',
            'color',
        ]);

        return $data;
    }

    /**
     * get detail data
     *
     * @param Color $color
     * @param bool $isDetail
     * @return array
     */
    private function getDetailData(Color $color, bool $isDetail = false)
    {
        $title       = __('Color');
        $defaultData = $this->getDefaultDataDetail($title, 'products.colors', $color, $isDetail);
        
        return array_merge($defaultData, [
            'fullTitle'       => $isDetail ? __('Detail Color') : __('Ubah Color'),
        ]);
    }

    /**
     * showing colors page
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
                'data'    => view('stisla.products.colors.table', $data)->render(),
            ]);
        }

        return view('stisla.products.colors.index', $data);
    }


    /**
     * showing add new colors page
     *
     * @param Request $request
     * @return Response
     */
    public function create(Request $request)
    {
        $title      = __('Color');
        $fullTitle  = __('Create Color');
        $data       = $this->getDefaultDataCreate($title, 'products.colors');

        $data       = array_merge($data, [
            'fullTitle'       => $fullTitle,
        ]);

        return view('stisla.products.colors.only-form', $data);
    }

    /**
     * save new colors to db
     *
     * @param ColorRequest $request
     * @return Response
     */
    public function store(ColorRequest $request)
    {
        $data   = $this->getStoreData($request);
        $result = Color::create($data);
        $successMessage = successMessageCreate("Color");

        if ($request->ajax()) {
            return response()->json([
                'success' => true,
                'message' => $successMessage,
            ]);
        }

        return back()->with('successMessage', $successMessage);
    }

    /**
     * showing edit colors page
     *
     * @param Request $request
     * @param Color $color
     * @return Response
     */
    public function edit(Request $request, Color $color)
    {
        $data = $this->getDetailData($color);

        return view('stisla.products.colors.only-form', $data);
    }

    /**
     * update data to db
     *
     * @param ColorRequest $request
     * @param Color $color
     * @return Response
     */
    public function update(ColorRequest $request, Color $color)
    {
        $data    = $this->getStoreData($request);
        $category = Color::find($color->id);

        $newData = $category->update($data);
        $successMessage = successMessageUpdate("Color");

        if ($request->ajax()) {
            return response()->json([
                'success' => true,
                'message' => $successMessage,
            ]);
        }

        return back()->with('successMessage', $successMessage);
    }

    public function show(Color $color)
    {
        $data = $this->getDetailData($color, true);

        return view('stisla.products.colors.only-form', $data);
    }

    /**
     * delete colors from db
     *
     * @param Color $color
     * @return Response
     */
    public function destroy(Color $color)
    {
        $category = Color::find($color->id);
        $category->delete();
        $successMessage = successMessageDelete("Color");

        if (request()->ajax()) {
            return response()->json([
                'success' => true,
                'message' => $successMessage,
            ]);
        }

        return back()->with('successMessage', $successMessage);
    }
}
