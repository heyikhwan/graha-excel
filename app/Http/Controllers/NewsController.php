<?php

namespace App\Http\Controllers;

use App\Http\Requests\NewsRequest;
use App\Models\News;
use App\Models\NewsCategory;
use App\Models\Upload;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class NewsController extends StislaController
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
        $this->viewFolder            = 'news';
        $this->newModalForm          = true;

        $this->middleware('can:News');
        $this->middleware('can:News Create')->only(['create', 'store']);
        $this->middleware('can:News Update')->only(['edit', 'update']);
        $this->middleware('can:News Delete')->only(['destroy']);
    }

    /**
     * get index data
     *
     * @return array
     */
    protected function getIndexData()
    {
        $data = News::latest('id')->get();

        $defaultData = $this->getDefaultDataIndex(__('News'), 'News', 'news');
        
        return array_merge($defaultData, [
            'data'         => $data,
            'isAjax'       => true,
        ]);
    }

    /**
     * prepare store data
     *
     * @param NewsRequest $request
     * @return array
     */
    private function getStoreData(NewsRequest $request)
    {
        $data = $request->only([
            'title',
            'category',
            'image',
            'description',
            'page_title',
            'meta_description',
            'url_title',
            'dt_published',
        ]);
        $data['url_title'] = $request->url_title == "" || $request->url_title == null ? Str::slug('$request->title', '-') : $request->url_title;
        
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
     * @param News $news
     * @param bool $isDetail
     * @return array
     */
    private function getDetailData(News $news, bool $isDetail = false)
    {
        $title       = __('News');
        $defaultData = $this->getDefaultDataDetail($title, 'news', $news, $isDetail);

        $categories = NewsCategory::get();
        $options = [];

        foreach ($categories as $category) {
            $options[$category->id] = $category->title;
        }
        
        return array_merge($defaultData, [
            'selectOptions'   => $options,
            'fullTitle'       => $isDetail ? __('Detail News') : __('Ubah News'),
        ]);
    }

    /**
     * showing news page
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
                'data'    => view('stisla.news.table', $data)->render(),
            ]);
        }

        return view('stisla.news.index', $data);
    }


    /**
     * showing add new news page
     *
     * @param Request $request
     * @return Response
     */
    public function create(Request $request)
    {
        $title      = __('News');
        $fullTitle  = __('Create News');
        $data       = $this->getDefaultDataCreate($title, 'news');
        $categories = NewsCategory::get();
        $options = [];
        foreach ($categories as $category) {
            $options[$category->id] = $category->title;
        }
        $data       = array_merge($data, [
            'selectOptions'   => $options,
            'fullTitle'       => $fullTitle,
        ]);

        return view('stisla.news.only-form', $data);
    }

    /**
     * save new news to db
     *
     * @param NewsRequest $request
     * @return Response
     */
    public function store(NewsRequest $request)
    {
        $data   = $this->getStoreData($request);
        $result = News::create($data);
        $successMessage = successMessageCreate("News");

        if ($request->ajax()) {
            return response()->json([
                'success' => true,
                'message' => $successMessage,
            ]);
        }

        return back()->with('successMessage', $successMessage);
    }

    /**
     * showing edit news page
     *
     * @param Request $request
     * @param News $news
     * @return Response
     */
    public function edit(Request $request, News $news)
    {
        $data = $this->getDetailData($news);

        return view('stisla.news.only-form', $data);
    }

    /**
     * update data to db
     *
     * @param NewsRequest $request
     * @param News $news
     * @return Response
     */
    public function update(NewsRequest $request, News $news)
    {
        $data    = $this->getStoreData($request);
        $category = News::find($news->id);

        $newData = $category->update($data);
        $successMessage = successMessageUpdate("News");

        if ($request->ajax()) {
            return response()->json([
                'success' => true,
                'message' => $successMessage,
            ]);
        }

        return back()->with('successMessage', $successMessage);
    }

    public function show(News $news)
    {
        $data = $this->getDetailData($news, true);

        return view('stisla.news.only-form', $data);
    }

    /**
     * delete news from db
     *
     * @param News $news
     * @return Response
     */
    public function destroy(News $news)
    {
        $category = News::find($news->id);
        $category->delete();
        $successMessage = successMessageDelete("News");

        if (request()->ajax()) {
            return response()->json([
                'success' => true,
                'message' => $successMessage,
            ]);
        }

        return back()->with('successMessage', $successMessage);
    }
}
