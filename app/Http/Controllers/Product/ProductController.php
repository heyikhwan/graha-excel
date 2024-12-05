<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\StislaController;
use App\Http\Requests\Product\ProductRequest;
use App\Models\Category;
use App\Models\Color;
use App\Models\Product;
use App\Models\ProductImageColor;
use App\Models\ProductImageColorSize;
use App\Models\ProductImageSize;
use App\Models\Size;
use App\Models\SubCategory;
use App\Models\Upload;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProductController extends StislaController
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
        $this->viewFolder            = 'products';
        $this->newModalForm          = true;

        $this->middleware('can:Products');
        $this->middleware('can:Products Create')->only(['create', 'store']);
        $this->middleware('can:Products Update')->only(['edit', 'update']);
        $this->middleware('can:Products Delete')->only(['destroy']);
    }

    /**
     * get index data
     *
     * @return array
     */
    protected function getIndexData()
    {
        $data = Product::latest('id')->get();

        $defaultData = $this->getDefaultDataIndex(__('Product'), 'Products', 'products');
        
        return array_merge($defaultData, [
            'data'         => $data,
            'isAjax'       => true,
        ]);
    }

    /**
     * prepare store data
     *
     * @param ProductRequest $request
     * @return array
     */
    private function getStoreData(ProductRequest $request)
    {
        $data = $request->only([
            'image',
            'title',
            'description',
            'color',
            'size',
            'dimention',
            'categories',
            'sub_cat',
            'page_title',
            'meta_description',
            'url_title',
            'ordering',
            'sidebar_ordering',
            'Aksesoris',
            'cara_pasang',
            'slideshows',
            'below_banner_tagline',
            'below_banner_title',
            'below_banner_desc',
            'right_banner',
            'banner_bawah',
            'keunggulan_produk_1',
            'keunggulan_produk_2',
            'keunggulan_produk_3',
            'keunggulan_produk_4',
            'katalog_link',
            'banner_bawah_link',
            'keunggulan_text_1',
            'keunggulan_text_2',
            'keunggulan_text_3',
            'keunggulan_text_4',
            'keunggulan_link_4',
            'katalog_label',
            'keunggulan_link_3',
            'keunggulan_link_2',
            'keunggulan_link_1',
        ]);

        $data['url_title']  = $request->url_title ? $request->url_title : Str::slug($request->title);
        $data['color'] = $request->color ? json_encode($data['color']) : json_encode([]);
        $data['size'] = $request->size ? json_encode($data['size']) : json_encode([]);

        $data['image'] = $this->getFileId($request->image) ?? 0;

        $data['dimention'] = $request?->dimention ? $this->getFileId($request->dimention) : 0;

        $slidePaths = $request->input('slideshows');
        $slideIds = array_map(function($path) {
            return (string) $this->getFileId($path);
        }, $slidePaths);

        $slideIds = array_filter($slideIds, function($id) {
            return !empty($id);
        });

        $slideshows = json_encode(array_values($slideIds));

        $data['slideshows'] = $request->slideshows ? $slideshows : json_encode([]);
        $data['katalog_link'] = $request->katalog_link ? $this->getFileId($request->katalog_link) : 0;
        $data['Aksesoris'] = $request->Aksesoris ? $this->getFileId($request->Aksesoris) : 0;
        $data['cara_pasang'] = $request->cara_pasang ? $this->getFileId($request->cara_pasang) : 0;
        $data['right_banner'] = $request->right_banner ? $this->getFileId($request->right_banner) : 0;
        $data['banner_bawah'] = $request->banner_bawah ? $this->getFileId($request->banner_bawah) : 0;
        $data['keunggulan_produk_1'] = $request->keunggulan_produk_1 ? $this->getFileId($request->keunggulan_produk_1) : 0;
        $data['keunggulan_link_1'] = $request->keunggulan_link_1 ? $this->getFileId($request->keunggulan_link_1) : 0;
        $data['keunggulan_produk_2'] = $request->keunggulan_produk_2 ? $this->getFileId($request->keunggulan_produk_2) : 0;
        $data['keunggulan_link_2'] = $request->keunggulan_link_2 ? $this->getFileId($request->keunggulan_link_2) : 0;
        $data['keunggulan_produk_3'] = $request->keunggulan_produk_3 ? $this->getFileId($request->keunggulan_produk_3) : 0;
        $data['keunggulan_link_3'] = $request->keunggulan_link_3 ? $this->getFileId($request->keunggulan_link_3) : 0;
        $data['keunggulan_produk_4'] = $request->keunggulan_produk_4 ? $this->getFileId($request->keunggulan_produk_4) : 0;
        $data['keunggulan_link_4'] = $request->keunggulan_link_4 ? $this->getFileId($request->keunggulan_link_4) : 0;

        return $data;
    }

    /**
     * get detail data
     *
     * @param Product $product
     * @param bool $isDetail
     * @return array
     */
    private function getDetailData(Product $product, bool $isDetail = false)
    {
        $title       = __('Product');
        $defaultData = $this->getDefaultDataDetail($title, 'products', $product, $isDetail);
        
        $categories = Category::get();
        $categoryOptions = [];
        foreach ($categories as $category) {
            $categoryOptions[$category->id] = $category->name;
        }

        $sub_categories = SubCategory::get();
        $subCategoryOptions = [];
        foreach ($sub_categories as $category) {
            $subCategoryOptions[$category->id] = $category->name;
        }

        $colors = Color::get();
        $colorOptions = [];
        foreach ($colors as $color) {
            $colorOptions[$color->id] = $color->name;
        }

        $sizes = Size::get();
        $sizeOptions = [];
        foreach ($sizes as $size) {
            $sizeOptions[$size->id] = $size->size;
        }

        return array_merge($defaultData, [
            'categoryOptions'       => $categoryOptions,
            'subCategoryOptions'       => $subCategoryOptions,
            'colorOptions'       => $colorOptions,
            'sizeOptions'       => $sizeOptions,
            'fullTitle'       => $isDetail ? __('Detail Product') : __('Ubah Product'),
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
                'data'    => view('stisla.products.table', $data)->render(),
            ]);
        }

        return view('stisla.products.index', $data);
    }


    /**
     * showing add new attributes page
     *
     * @param Request $request
     * @return Response
     */
    public function create(Request $request)
    {
        $title      = __('Product');
        $fullTitle  = __('Create Product');
        $data       = $this->getDefaultDataCreate($title, 'products');

        $categories = Category::get();
        $categoryOptions = [];
        foreach ($categories as $category) {
            $categoryOptions[$category->id] = $category->name;
        }

        $sub_categories = SubCategory::get();
        $subCategoryOptions = [];
        foreach ($sub_categories as $category) {
            $subCategoryOptions[$category->id] = $category->name;
        }

        $colors = Color::get();
        $colorOptions = [];
        foreach ($colors as $color) {
            $colorOptions[$color->id] = $color->name;
        }

        $sizes = Size::get();
        $sizeOptions = [];
        foreach ($sizes as $size) {
            $sizeOptions[$size->id] = $size->size;
        }

        $data       = array_merge($data, [
            'categoryOptions'       => $categoryOptions,
            'subCategoryOptions'       => $subCategoryOptions,
            'colorOptions'       => $colorOptions,
            'sizeOptions'       => $sizeOptions,
            'fullTitle'       => $fullTitle,
        ]);

        return view('stisla.products.only-form', $data);
    }

    /**
     * save new attributes to db
     *
     * @param ProductRequest $request
     * @return Response
     */
    public function store(ProductRequest $request)
    {
        $data   = $this->getStoreData($request);

        $result = Product::create($data);

        if (isset($request['image_color_size'])) { 
            $hasValidImages = false;
        
            foreach ($request['image_color_size'] as $key => $imageData) {
                if (!empty($imageData)) {
                    $hasValidImages = true;
                    break;
                }
            }
        
            if ($hasValidImages) {
                foreach ($request['image_color_size'] as $key => $imageData) {
                    if (!empty($imageData)) {
                        list($colorValue, $sizeValue) = explode('-', $key);
        
                        ProductImageColorSize::create([
                            'product_id' => $result->id,
                            'color_id'   => $colorValue,
                            'size_id'    => $sizeValue,
                            'image'      => $this->getFileId($imageData),
                        ]);
                    }
                }
            }
        }
        
        $successMessage = successMessageCreate("Product");

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
     * @param Product $product
     * @return Response
     */
    public function edit(Request $request, Product $product)
    {
        $data = $this->getDetailData($product);

        return view('stisla.products.only-form', $data);
    }

    /**
     * update data to db
     *
     * @param ProductRequest $request
     * @param Product $product
     * @return Response
     */
    public function update(ProductRequest $request, Product $product)
    {
        $data    = $this->getStoreData($request);
        $product = Product::find($product->id);

        $newData = $product->update($data);

        if (isset($request['image_color_size'])) { 
            $receivedColorSizeIds = []; 
            $hasValidImages = false; 
        
            foreach ($request['image_color_size'] as $key => $imageData) { 
                if (!empty($imageData)) { 
                    $hasValidImages = true; 
                    break; 
                } 
            }
        
            if ($hasValidImages) {
                foreach ($request['image_color_size'] as $key => $imageData) {
                    [$colorValue, $sizeValue] = explode('-', $key);
        
                    $receivedColorSizeIds[] = "{$colorValue}-{$sizeValue}";
        
                    ProductImageColorSize::updateOrCreate(
                        [
                            'product_id' => $product->id,
                            'color_id' => $colorValue,
                            'size_id' => $sizeValue,
                        ],
                        [
                            'image' => $this->getFileId($imageData),
                        ]
                    );
                }
            }
        
            ProductImageColorSize::where('product_id', $product->id)
                ->whereNotIn(DB::raw("CONCAT(color_id, '-', size_id)"), $receivedColorSizeIds)
                ->delete();
        }
        
        $successMessage = successMessageUpdate("Product");

        if ($request->ajax()) {
            return response()->json([
                'success' => true,
                'message' => $successMessage,
            ]);
        }

        return back()->with('successMessage', $successMessage);
    }

    public function show(Product $product)
    {
        $data = $this->getDetailData($product, true);

        return view('stisla.products.only-form', $data);
    }

    /**
     * delete attributes from db
     *
     * @param Product $product
     * @return Response
     */
    public function destroy(Product $product)
    {
        $product = Product::find($product->id);
        $product?->image_color_sizes()?->delete();
        $product->delete();
        $successMessage = successMessageDelete("Product");

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
