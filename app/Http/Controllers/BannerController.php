<?php

namespace App\Http\Controllers;

use App\Http\Requests\BannerRequest;
use App\Models\Banner;
use App\Models\Upload;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class BannerController extends StislaController
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
        $this->viewFolder            = 'banner';
        $this->newModalForm          = true;

        $this->middleware('can:Banner');
        $this->middleware('can:Banner Create')->only(['create', 'store']);
        $this->middleware('can:Banner Update')->only(['edit', 'update']);
        $this->middleware('can:Banner Delete')->only(['destroy']);
    }

    /**
     * get index data
     *
     * @return array
     */
    protected function getIndexData()
    {
        $data = Banner::latest('id')->get();

        $defaultData = $this->getDefaultDataIndex(__('Banner'), 'Banner', 'banner');
        
        return array_merge($defaultData, [
            'data'         => $data,
            'isAjax'       => true,
        ]);
    }

    /**
     * prepare store data
     *
     * @param BannerRequest $request
     * @return array
     */
    private function getStoreData(BannerRequest $request)
    {
        $data = $request->only([
            'title',
            'image',
            'mobile_image',
            'content',
            'link',
        ]);

        $data['image'] = $request->image ? $this->getFileId($request->image) : 0;
        $data['mobile_image'] = $request->mobile_image ? $this->getFileId($request->mobile_image) : 0;

        return $data;
    }

    /**
     * get detail data
     *
     * @param Banner $banner
     * @param bool $isDetail
     * @return array
     */
    private function getDetailData(Banner $banner, bool $isDetail = false)
    {
        $title       = __('Banner');
        $defaultData = $this->getDefaultDataDetail($title, 'banner', $banner, $isDetail);
        return array_merge($defaultData, [
            'fullTitle'       => $isDetail ? __('Detail Banner') : __('Ubah Banner'),
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
                'data'    => view('stisla.banner.table', $data)->render(),
            ]);
        }

        return view('stisla.banner.index', $data);
    }


    /**
     * showing add new crud example page
     *
     * @param Request $request
     * @return Response
     */
    public function create(Request $request)
    {
        $title      = __('Banner');
        $fullTitle  = __('Create Banner');
        $data       = $this->getDefaultDataCreate($title, 'banner');
        $data       = array_merge($data, [
            'fullTitle'       => $fullTitle,
        ]);

        return view('stisla.banner.only-form', $data);
    }

    /**
     * save new crud example to db
     *
     * @param BannerRequest $request
     * @return Response
     */
    public function store(BannerRequest $request)
    {
        $data   = $this->getStoreData($request);
        $result = Banner::create($data);
        $successMessage = successMessageCreate("Banner");

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
     * @param Banner $banner
     * @return Response
     */
    public function edit(Request $request, Banner $banner)
    {
        $data = $this->getDetailData($banner);

        return view('stisla.banner.only-form', $data);
    }

    /**
     * update data to db
     *
     * @param BannerRequest $request
     * @param Banner $banner
     * @return Response
     */
    public function update(BannerRequest $request, Banner $banner)
    {
        $data    = $this->getStoreData($request);
        $category = Banner::find($banner->id);

        $newData = $category->update($data);
        $successMessage = successMessageUpdate("Banner");

        if ($request->ajax()) {
            return response()->json([
                'success' => true,
                'message' => $successMessage,
            ]);
        }

        return back()->with('successMessage', $successMessage);
    }

    public function show(Banner $banner)
    {
        $data = $this->getDetailData($banner, true);

        return view('stisla.banner.only-form', $data);
    }

    /**
     * delete crud example from db
     *
     * @param Banner $banner
     * @return Response
     */
    public function destroy(Banner $banner)
    {
        $category = Banner::find($banner->id);
        $category->delete();
        $successMessage = successMessageDelete("Banner");

        if (request()->ajax()) {
            return response()->json([
                'success' => true,
                'message' => $successMessage,
            ]);
        }

        return back()->with('successMessage', $successMessage);
    }

    private function getFileId($file)
    {
        if(!is_null($file) && is_string($file)){
            $folder = storage_path('files') .DIRECTORY_SEPARATOR. '1';
            $filename = preg_replace('/^\d{4}-\d{2}-\d{2}-\d{6}-/', '', basename($file));
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

            return $upload->id;
        }

        return null;
    }
}
