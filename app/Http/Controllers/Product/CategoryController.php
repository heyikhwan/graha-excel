<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\StislaController;
use App\Http\Requests\Product\CategoryRequest;
use App\Models\Category;
use App\Models\Upload;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class CategoryController extends StislaController
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
        $this->viewFolder            = 'categories';
        $this->newModalForm          = true;

        $this->middleware('can:Categories');
        $this->middleware('can:Categories Create')->only(['create', 'store']);
        $this->middleware('can:Categories Update')->only(['edit', 'update']);
        $this->middleware('can:Categories Delete')->only(['destroy']);
    }

    /**
     * get index data
     *
     * @return array
     */
    protected function getIndexData()
    {
        $data = Category::latest('id')->get();

        $defaultData = $this->getDefaultDataIndex(__('Category'), 'Categories', 'products.categories');
        
        return array_merge($defaultData, [
            'data'         => $data,
            'isAjax'       => true,
        ]);
    }

    /**
     * prepare store data
     *
     * @param CategoryRequest $request
     * @return array
     */
    private function getStoreData(CategoryRequest $request)
    {
        $data = $request->only([
            'name',
            'description',
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

        $data['image'] = $upload->id ?? 0;
        $data['idx'] = $data['ordering'];

        return $data;
    }

    /**
     * get detail data
     *
     * @param Category $category
     * @param bool $isDetail
     * @return array
     */
    private function getDetailData(Category $category, bool $isDetail = false)
    {
        $title       = __('Category');
        $defaultData = $this->getDefaultDataDetail($title, 'products.categories', $category, $isDetail);
        
        return array_merge($defaultData, [
            'fullTitle'       => $isDetail ? __('Detail Category') : __('Ubah Category'),
        ]);
    }

    /**
     * showing attributes page
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
                'data'    => view('stisla.products.categories.table', $data)->render(),
            ]);
        }

        return view('stisla.products.categories.index', $data);
    }


    /**
     * showing add new attributes page
     *
     * @param Request $request
     * @return Response
     */
    public function create(Request $request)
    {
        $title      = __('Category');
        $fullTitle  = __('Create Category');
        $data       = $this->getDefaultDataCreate($title, 'products.categories');

        $data       = array_merge($data, [
            'fullTitle'       => $fullTitle,
        ]);

        return view('stisla.products.categories.only-form', $data);
    }

    /**
     * save new attributes to db
     *
     * @param CategoryRequest $request
     * @return Response
     */
    public function store(CategoryRequest $request)
    {
        $data   = $this->getStoreData($request);
        $result = Category::create($data);
        $successMessage = successMessageCreate("Category");

        if ($request->ajax()) {
            return response()->json([
                'success' => true,
                'message' => $successMessage,
            ]);
        }

        return back()->with('successMessage', $successMessage);
    }

    /**
     * showing edit attributes page
     *
     * @param Request $request
     * @param Category $category
     * @return Response
     */
    public function edit(Request $request, Category $category)
    {
        $data = $this->getDetailData($category);

        return view('stisla.products.categories.only-form', $data);
    }

    /**
     * update data to db
     *
     * @param CategoryRequest $request
     * @param Category $category
     * @return Response
     */
    public function update(CategoryRequest $request, Category $category)
    {
        $data    = $this->getStoreData($request);
        $category = Category::find($category->id);

        $newData = $category->update($data);
        $successMessage = successMessageUpdate("Category");

        if ($request->ajax()) {
            return response()->json([
                'success' => true,
                'message' => $successMessage,
            ]);
        }

        return back()->with('successMessage', $successMessage);
    }

    public function show(Category $category)
    {
        $data = $this->getDetailData($category, true);

        return view('stisla.products.categories.only-form', $data);
    }

    /**
     * delete attributes from db
     *
     * @param Category $category
     * @return Response
     */
    public function destroy(Category $category)
    {
        $category = Category::find($category->id);
        $category->delete();
        $successMessage = successMessageDelete("Category");

        if (request()->ajax()) {
            return response()->json([
                'success' => true,
                'message' => $successMessage,
            ]);
        }

        return back()->with('successMessage', $successMessage);
    }
}
