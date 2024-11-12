<?php

namespace App\Http\Controllers;

use App\Http\Requests\NewsCategoryRequest;
use App\Models\NewsCategory;
use App\Models\Upload;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class NewsCategoryController extends StislaController
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
        $this->viewFolder            = 'news-category';
        $this->newModalForm          = true;

        $this->middleware('can:News Category');
        $this->middleware('can:News Category Create')->only(['create', 'store']);
        $this->middleware('can:News Category Update')->only(['edit', 'update']);
        $this->middleware('can:News Category Delete')->only(['destroy']);
    }

    /**
     * get index data
     *
     * @return array
     */
    protected function getIndexData()
    {
        $data = NewsCategory::latest('id')->get();

        $defaultData = $this->getDefaultDataIndex(__('News Category'), 'News Category', 'news-categories');
        
        return array_merge($defaultData, [
            'data'         => $data,
            'isAjax'       => true,
        ]);
    }

    /**
     * prepare store data
     *
     * @param NewsCategoryRequest $request
     * @return array
     */
    private function getStoreData(NewsCategoryRequest $request)
    {
        $data = $request->only([
            'title',
            'image',
            'description',
            'page_title',
            'meta_description',
            'url_title',
        ]);
        $data['url_title'] = $request->url_title == "" || $request->url_title == null ? Str::slug($request->title, '-') : $request->url_title;
        
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

        return $data;
    }

    /**
     * get detail data
     *
     * @param NewsCategory $newsCategory
     * @param bool $isDetail
     * @return array
     */
    private function getDetailData(NewsCategory $newsCategory, bool $isDetail = false)
    {
        $title       = __('News Category');
        $defaultData = $this->getDefaultDataDetail($title, 'news-categories', $newsCategory, $isDetail);
        return array_merge($defaultData, [
            'fullTitle'       => $isDetail ? __('Detail News Category') : __('Ubah News Category'),
        ]);
    }

    /**
     * showing crud example page
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
                'data'    => view('stisla.news-category.table', $data)->render(),
            ]);
        }

        return view('stisla.news-category.index', $data);
    }


    /**
     * showing add new crud example page
     *
     * @param Request $request
     * @return Response
     */
    public function create(Request $request)
    {
        $title      = __('News Category');
        $fullTitle  = __('Create News Category');
        $data       = $this->getDefaultDataCreate($title, 'news-categories');
        $data       = array_merge($data, [
            'fullTitle'       => $fullTitle,
        ]);

        return view('stisla.news-category.only-form', $data);
    }

    /**
     * save new crud example to db
     *
     * @param NewsCategoryRequest $request
     * @return Response
     */
    public function store(NewsCategoryRequest $request)
    {
        $data   = $this->getStoreData($request);
        $result = NewsCategory::create($data);
        $successMessage = successMessageCreate("News Category");

        if ($request->ajax()) {
            return response()->json([
                'success' => true,
                'message' => $successMessage,
            ]);
        }

        return back()->with('successMessage', $successMessage);
    }

    /**
     * showing edit crud example page
     *
     * @param Request $request
     * @param NewsCategory $newsCategory
     * @return Response
     */
    public function edit(Request $request, NewsCategory $newsCategory)
    {
        $data = $this->getDetailData($newsCategory);

        return view('stisla.news-category.only-form', $data);
    }

    /**
     * update data to db
     *
     * @param NewsCategoryRequest $request
     * @param NewsCategory $newsCategory
     * @return Response
     */
    public function update(NewsCategoryRequest $request, NewsCategory $newsCategory)
    {
        $data    = $this->getStoreData($request);
        $category = NewsCategory::find($newsCategory->id);

        $newData = $category->update($data);
        $successMessage = successMessageUpdate("News Category");

        if ($request->ajax()) {
            return response()->json([
                'success' => true,
                'message' => $successMessage,
            ]);
        }

        return back()->with('successMessage', $successMessage);
    }

    public function show(NewsCategory $newsCategory)
    {
        $data = $this->getDetailData($newsCategory, true);

        return view('stisla.news-category.only-form', $data);
    }

    /**
     * delete crud example from db
     *
     * @param NewsCategory $newsCategory
     * @return Response
     */
    public function destroy(NewsCategory $newsCategory)
    {
        $category = NewsCategory::find($newsCategory->id);
        $category->delete();
        $successMessage = successMessageDelete("News Category");

        if (request()->ajax()) {
            return response()->json([
                'success' => true,
                'message' => $successMessage,
            ]);
        }

        return back()->with('successMessage', $successMessage);
    }
}
