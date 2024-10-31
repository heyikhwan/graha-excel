<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\StislaController;
use App\Http\Requests\Product\AttributeRequest;
use App\Models\Product;
use App\Models\Attribute;
use App\Models\Upload;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class AttributeController extends StislaController
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
        $this->viewFolder            = 'attributes';
        $this->newModalForm          = true;

        $this->middleware('can:Attributes');
        $this->middleware('can:Attributes Create')->only(['create', 'store']);
        $this->middleware('can:Attributes Update')->only(['edit', 'update']);
        $this->middleware('can:Attributes Delete')->only(['destroy']);
    }

    /**
     * get index data
     *
     * @return array
     */
    protected function getIndexData()
    {
        $data = Attribute::latest('id')->get();

        $defaultData = $this->getDefaultDataIndex(__('Attribute'), 'Attributes', 'products.attributes');
        
        return array_merge($defaultData, [
            'data'         => $data,
            'isAjax'       => true,
        ]);
    }

    /**
     * prepare store data
     *
     * @param AttributeRequest $request
     * @return array
     */
    private function getStoreData(AttributeRequest $request)
    {
        $data = $request->only([
            'product',
            'title',
            'image',
            'description',
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

        if (strpos($data['title'], 'Aksesoris') !== false) {
            $data['idx'] = 1;
        }elseif (strpos($data['title'], 'Cara Pemasangan') !== false) {
            $data['idx'] = 2;
        }elseif (strpos($data['title'], 'Fitur') !== false) {
            $data['idx'] = 3;
        }else{
            $data['idx'] = 10;
        }

        return $data;
    }

    /**
     * get detail data
     *
     * @param Attribute $attribute
     * @param bool $isDetail
     * @return array
     */
    private function getDetailData(Attribute $attribute, bool $isDetail = false)
    {
        $title       = __('Attribute');
        $defaultData = $this->getDefaultDataDetail($title, 'products.attributes', $attribute, $isDetail);

        $products = Product::get();
        $options = [];
        foreach ($products as $product) {
            $options[$product->id] = $product->title;
        }
        
        return array_merge($defaultData, [
            'selectOptions'   => $options,
            'fullTitle'       => $isDetail ? __('Detail Attribute') : __('Ubah Attribute'),
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
                'data'    => view('stisla.products.attributes.table', $data)->render(),
            ]);
        }

        return view('stisla.products.attributes.index', $data);
    }


    /**
     * showing add new attributes page
     *
     * @param Request $request
     * @return Response
     */
    public function create(Request $request)
    {
        $title      = __('Attribute');
        $fullTitle  = __('Create Attribute');
        $data       = $this->getDefaultDataCreate($title, 'products.attributes');
        $products = Product::get();
        $options = [];
        foreach ($products as $product) {
            $options[$product->id] = $product->title;
        }
        $data       = array_merge($data, [
            'selectOptions'   => $options,
            'fullTitle'       => $fullTitle,
        ]);

        return view('stisla.products.attributes.only-form', $data);
    }

    /**
     * save new attributes to db
     *
     * @param AttributeRequest $request
     * @return Response
     */
    public function store(AttributeRequest $request)
    {
        $data   = $this->getStoreData($request);
        $result = Attribute::create($data);
        $successMessage = successMessageCreate("Attribute");

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
     * @param Attribute $attribute
     * @return Response
     */
    public function edit(Request $request, Attribute $attribute)
    {
        $data = $this->getDetailData($attribute);

        return view('stisla.products.attributes.only-form', $data);
    }

    /**
     * update data to db
     *
     * @param AttributeRequest $request
     * @param Attribute $attribute
     * @return Response
     */
    public function update(AttributeRequest $request, Attribute $attribute)
    {
        $data    = $this->getStoreData($request);
        $category = Attribute::find($attribute->id);

        $newData = $category->update($data);
        $successMessage = successMessageUpdate("Attribute");

        if ($request->ajax()) {
            return response()->json([
                'success' => true,
                'message' => $successMessage,
            ]);
        }

        return back()->with('successMessage', $successMessage);
    }

    public function show(Attribute $attribute)
    {
        $data = $this->getDetailData($attribute, true);

        return view('stisla.products.attributes.only-form', $data);
    }

    /**
     * delete attributes from db
     *
     * @param Attribute $attribute
     * @return Response
     */
    public function destroy(Attribute $attribute)
    {
        $category = Attribute::find($attribute->id);
        $category->delete();
        $successMessage = successMessageDelete("Attribute");

        if (request()->ajax()) {
            return response()->json([
                'success' => true,
                'message' => $successMessage,
            ]);
        }

        return back()->with('successMessage', $successMessage);
    }
}
