<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\StislaController;
use App\Http\Requests\Product\SubCategoryRequest;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\Upload;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class SubCategoryController extends StislaController
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
        $this->viewFolder            = 'sub-categories';
        $this->newModalForm          = true;

        $this->middleware('can:Sub Categories');
        $this->middleware('can:Sub Categories Create')->only(['create', 'store']);
        $this->middleware('can:Sub Categories Update')->only(['edit', 'update']);
        $this->middleware('can:Sub Categories Delete')->only(['destroy']);
    }

    /**
     * get index data
     *
     * @return array
     */
    protected function getIndexData()
    {
        $data = SubCategory::latest('id')->get();

        $defaultData = $this->getDefaultDataIndex(__('Sub Category'), 'Sub Categories', 'products.sub-categories');
        
        return array_merge($defaultData, [
            'data'         => $data,
            'isAjax'       => true,
        ]);
    }

    /**
     * prepare store data
     *
     * @param SubCategoryRequest $request
     * @return array
     */
    private function getStoreData(SubCategoryRequest $request)
    {
        $data = $request->only([
            'parent',
            'name',
            'image',
            'page_title',
            'meta_description',
            'url_title',
            'ordering',
        ]);
        
        if($request->image){
            $folder = storage_path('files') .DIRECTORY_SEPARATOR. '1';
            $filename = preg_replace('/^\d{4}-\d{2}-\d{2}-\d{6}-/', '', basename($request->image));
            $path = $folder.DIRECTORY_SEPARATOR. $filename;
            $hash = strtolower(Str::random(20));

            $upload = Upload::where('name', $filename)->first();

            if(is_null($upload)){
                $upload = Upload::create([
                    "name" => $filename,
                    "path" => $path,
                    "extension" => pathinfo($filename, PATHINFO_EXTENSION),
                    "caption" => "",
                    "hash" => "",
                    "public" => 0,
                    "user_id" => Auth::user()->id,
                ]);
                while(true) {
                    if(!Upload::where("hash", $hash)->count()) {
                        $upload->hash = $hash;
                        break;
                    }
                }
                $upload->save();
            }
        }

        $data['image'] = $upload?->id ?? 0;
        $data['url_title'] = $request->url_title == "" || $request->url_title == null ? Str::slug($request->name, '-') : $request->url_title;
        $data['idx'] = $data['ordering'] ?? 0;

        return $data;
    }

    /**
     * get detail data
     *
     * @param SubCategory $sub_category
     * @param bool $isDetail
     * @return array
     */
    private function getDetailData(SubCategory $sub_category, bool $isDetail = false)
    {
        $title       = __('Sub Category');
        $defaultData = $this->getDefaultDataDetail($title, 'products.sub-categories', $sub_category, $isDetail);

        $categorys = Category::get();
        $options = [];
        foreach ($categorys as $category) {
            $options[$category->id] = $category->name;
        }
        
        return array_merge($defaultData, [
            'selectOptions'   => $options,
            'fullTitle'       => $isDetail ? __('Detail Sub Category') : __('Ubah Sub Category'),
        ]);
    }

    /**
     * showing categories page
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
                'data'    => view('stisla.products.sub-categories.table', $data)->render(),
            ]);
        }

        return view('stisla.products.sub-categories.index', $data);
    }


    /**
     * showing add new categories page
     *
     * @param Request $request
     * @return Response
     */
    public function create(Request $request)
    {
        $title      = __('Sub Category');
        $fullTitle  = __('Create Sub Category');
        $data       = $this->getDefaultDataCreate($title, 'products.sub-categories');
        $categorys = Category::get();
        $options = [];
        foreach ($categorys as $category) {
            $options[$category->id] = $category->name;
        }
        $data       = array_merge($data, [
            'selectOptions'   => $options,
            'fullTitle'       => $fullTitle,
        ]);

        return view('stisla.products.sub-categories.only-form', $data);
    }

    /**
     * save new categories to db
     *
     * @param SubCategoryRequest $request
     * @return Response
     */
    public function store(SubCategoryRequest $request)
    {
        $data   = $this->getStoreData($request);
        $result = SubCategory::create($data);
        $successMessage = successMessageCreate("Sub Category");

        if ($request->ajax()) {
            return response()->json([
                'success' => true,
                'message' => $successMessage,
            ]);
        }

        return back()->with('successMessage', $successMessage);
    }

    /**
     * showing edit categories page
     *
     * @param Request $request
     * @param SubCategory $sub_category
     * @return Response
     */
    public function edit(Request $request, SubCategory $sub_category)
    {
        $data = $this->getDetailData($sub_category);

        return view('stisla.products.sub-categories.only-form', $data);
    }

    /**
     * update data to db
     *
     * @param SubCategoryRequest $request
     * @param SubCategory $sub_category
     * @return Response
     */
    public function update(SubCategoryRequest $request, SubCategory $sub_category)
    {
        $data    = $this->getStoreData($request);
        $category = SubCategory::find($sub_category->id);

        $newData = $category->update($data);
        $successMessage = successMessageUpdate("Sub Category");

        if ($request->ajax()) {
            return response()->json([
                'success' => true,
                'message' => $successMessage,
            ]);
        }

        return back()->with('successMessage', $successMessage);
    }

    public function show(SubCategory $sub_category)
    {
        $data = $this->getDetailData($sub_category, true);

        return view('stisla.products.sub-categories.only-form', $data);
    }

    /**
     * delete categories from db
     *
     * @param SubCategory $sub_category
     * @return Response
     */
    public function destroy(SubCategory $sub_category)
    {
        $category = SubCategory::find($sub_category->id);
        $category->delete();
        $successMessage = successMessageDelete("Sub Category");

        if (request()->ajax()) {
            return response()->json([
                'success' => true,
                'message' => $successMessage,
            ]);
        }

        return back()->with('successMessage', $successMessage);
    }
}
