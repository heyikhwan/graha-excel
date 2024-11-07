<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Attribute;
use App\Models\Banner;
use App\Models\Category;
use App\Models\News;
use App\Models\NewsCategory;
use App\Models\Product;
use App\Models\ProductImageColor;
use App\Models\Review;
use App\Models\Setting;
use App\Models\Upload;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    /**
     * Menampilkan halaman dashboard
     *
     * @return Response
     */
    public function index()
    {
        $data = [
            'setNews'   => News::orderBy('id', 'desc')->limit(3)->get(),
            'articles'   => News::where('category',3)->where('created_at', '<', date("Y-m-d H:i:s"))->orderBy('id', 'desc')->paginate(3),
            'newscategories'   => NewsCategory::orderBy('id', 'asc')->limit(3)->get(),
            'getData'   => Product::orderBy('id', 'desc')->limit(6)->get(),
            'pageTitle'   => 'Distributor Toren air EXCEL, Tangki Kimia dan Atap uPVC',
            'metaDescription'   => 'Grahaexcel telah dikenal sebagai distributor toren air excel, tangki kimia dan atap uPVC sejak tahun 1969.',
            'banners'   => Banner::orderBy('id', 'asc')->get(),
        ];

        return view('pages.home', $data);
    }

    // product
    public function listProduct (Request $request)
    {
        $resData = Product::join('categories', 'products.categories', '=', 'categories.id')->select('products.*')->orderBy('products.ordering','asc');
        if ($request->input('query')) {
            $resData->where('title', 'like', '%' .$request->input('query'). '%');
        }

        if ($request->input('cat')) {
            $resData->where('categories', $request->input('cat'));
        }

        if ($request->input('subcat')) {
            $resData->where('sub_cat', $request->input('subcat'));
        }
        $data = [
            'getProduct'    => $resData->where('products.deleted_at', '=', Null)->paginate(12),
            'getCat'    => Category::whereNull('deleted_at')->orderBy('idx', 'asc')->get(),
            'canonical'    => "https://www.grahaexcel.com/products",
            'pageTitle'    => 'Jual Tangki Air Excel, Atap uPVC, Atap Transparan dan Lainnya',
            'metaDescription'    => 'Grahaexcel menjual Tangki Air Excel, Atap uPVC, Atap transparan dan Lainnya. Produk kami dikenal dengan kualitas terbaik',
        ];
        
        return view('pages.product', $data);
    }

    public function listProductByCategory (Request $request)
    {
        $resData = Product::where('categories.url_title', $request->urlTitle)
                    ->leftJoin('categories', 'products.categories', '=', 'categories.id')
                    ->select('products.*', 'categories.name');
        // }
        $data['url_title'] = $request->urlTitle;
        $data['getProduct'] = $resData->whereNull('products.deleted_at')->orderBy('products.id','desc')->paginate(9);
        $data['getCat'] = Category::orderBy('ordering', 'asc')->get();
        $data['curCat'] = $category = DB::table('categories')->where('url_title', $request->urlTitle)->first();
        if($category->page_title == "") $page_title = $category->name;
        else $page_title = $category->page_title;
        if($category->meta_description == "") $meta_description = strip_tags($category->description);
        else $meta_description = $category->meta_description;
        $data['pageTitle'] = $page_title;
        $data['metaDescription'] = $meta_description;
        
        return view('pages.listProductByCategory', $data);
    }

    public function detailProduct($id)
    {
        $data['getProduct'] = $getProduct = Product::where('products.id', $id)
                                ->leftJoin('categories', 'products.categories', '=', 'categories.id')
                                ->select('products.id', 'products.title', 'products.description', 'products.color', 'products.size', 'products.dimention', 'products.image', 'categories.name', 'products.page_title', 'products.meta_description')
                                ->first();
        if($getProduct == null)
        {
            $data['getProduct'] = $getProduct = Product::where('products.url_title', $id)
                                ->leftJoin('categories', 'products.categories', '=', 'categories.id')
                                ->select('products.id', 'products.title', 'products.description', 'products.color', 'products.size', 'products.dimention', 'products.image', 'categories.name', 'products.page_title', 'products.meta_description')
                                ->first();
        }
        if($getProduct == null) { return redirect('/'); exit; }
        $id = $getProduct->id;
        
        
        $data['getReview'] = Review::where('product', $id)->get();
        $data['getAttr'] = Attribute::where('product', $id)->orderBy('idx', 'asc')->get();
        $data['getCat'] = Category::orderBy('ordering', 'asc')->get();
        $data['getRelated'] = Product::inRandomOrder()->limit(4)->get();
        if($getProduct->page_title == "") $page_title = $getProduct->title;
        else $page_title = $getProduct->page_title;
        if($getProduct->meta_description == "") $meta_description = strip_tags($getProduct->description);
        else $meta_description = $getProduct->meta_description;
        $data['pageTitle'] = $page_title;
        $data['metaDescription'] = $meta_description;

        return view('pages.product-detail', $data);
    }
    
    public function detailProductNew($id)
    {
        $data['getProduct'] = $getProduct = Product::where('products.id', $id)
                                ->leftJoin('categories', 'products.categories', '=', 'categories.id')
                                ->select('products.*')
                                ->first();
        if($getProduct == null)
        {
            $data['getProduct'] = $getProduct = Product::where('products.url_title', $id)
                                ->leftJoin('categories', 'products.categories', '=', 'categories.id')
                                ->select('products.*')
                                ->first();
        }
        if($getProduct == null) { return redirect('/'); exit; }
        $id = $getProduct->id;
        
        
        $data['getReview'] = Review::where('product', $id)->get();
        $data['getAttr'] = Attribute::where('product', $id)->orderBy('idx', 'asc')->get();
        $data['getCat'] = Category::orderBy('ordering', 'asc')->get();
        $data['getRelated'] = Product::inRandomOrder()->limit(4)->get();
        if($getProduct->page_title == "") $page_title = $getProduct->title;
        else $page_title = $getProduct->page_title;
        if($getProduct->meta_description == "") $meta_description = strip_tags($getProduct->description);
        else $meta_description = $getProduct->meta_description;
        $data['pageTitle'] = $page_title;
        $data['metaDescription'] = $meta_description;
        
        return view('pages.product-detail-new', $data);
    }

    // pages
    public function pageKenapaMemilihExcel ()
    {
        $data['pageTitle'] = 'Kenapa Memilih Toren Air Excel - Grahaexcel';
        $data['metaDescription'] = 'Pilih Toren air Sehat, bebas lumut dan tahan lama. Tandon air Excel memberikan kualitas yang terbaik.';
        return view('pages.page-1', $data);
    }

    public function pageExcelHighTech ()
    {
        $data['pageTitle'] = 'Teknologi Toren air dan Atap uPVC dari Grahaexcel';
        $data['metaDescription'] = 'Grahaexcel menggunakan teknologi yang canggih untuk memproduksi tangki air, atap upvc, atap transparan yang berkualitas tinggi.';
        return view('pages.page-2', $data);
    }

    public function pageMemilihUkuranYangTepat ()
    {
        $data['pageTitle'] = 'Cara Memilih Ukuran Tangki Air Excel yang Tepat - Grahaexcel';
        $data['metaDescription'] = 'Mau tahu cara untuk jenis tangki air dan cara mengukur toren air dengan tepat? Baca panduan dari kami ini.';
        return view('pages.page-3', $data);
    }

    public function pageRadicalTransparency ()
    {
        $data['pageTitle'] = 'Informasi Transparan Grahaexcel';
        $data['metaDescription'] = 'Visi perusahaan kami adalah selalu memberikan informasi yang transparan tentang proses dan bahan baku yang kami gunakan.';
        return view('pages.page-4', $data);
    }
    
    public function pageWaspada ()
    {
        $data['pageTitle'] = 'Waspada Penipuan Mengatasnamakan Grahaexcel - Grahaexcel';
        $data['metaDescription'] = 'Hati-hati penipuan yang menggunakan nama Grahaexcel atau merek-merek kami. Berikut daftar pihak-pihak yang bersangkutan. ';
        return view('pages.waspada', $data);
    }
    
        public function kalkulatorAtap ()
    {
        $data['pageTitle'] = 'Kalkulator Biaya Atap - Grahaexcel';
        $data['metaDescription'] = 'Grahaexcel menghadirkan kalkulator atap yang praktis dan mudah digunakan untuk membantu Anda menghitung kebutuhan atap untuk project Anda.';
        return view('pages.calculator_page', $data);
    }

    // news
    public function articles ()
    {
        $data['pageTitle'] = 'Berita, Tips, dan Events - Grahaexcel';
        $data['metaDescription'] = 'Temukan berbagai macam berita, tips, dan events terkait dengan Grahaexcel.';
        $data['articleCategories'] = Newscategory::orderBy('title', 'asc')->paginate(10);
        return view('pages.articles', $data);
    }

    public function articlesCategory (Request $request)
    {
        $data['currentCategory'] = $category = Newscategory::where('url_title', $request->categoryUrlTitle)->first();
        $_num_of_post_per_page = Setting::firstOrCreate(
            ['key' => 'num_of_post_per_page'],
            ['value' => '15']
        )->value;
        if($category->id == 3)
        {
            $data['articles'] = News::with(["article_category"])->whereIn('category',[3,4,5])->where('created_at', '<', date("Y-m-d H:i:s"))->orderBy('id', 'desc')->paginate($_num_of_post_per_page);
        }
        else
        {
            $data['articles'] = News::with(["article_category"])->where('category',$category->id)->where('created_at', '<', date("Y-m-d H:i:s"))->orderBy('id', 'desc')->paginate($_num_of_post_per_page);
        }
        
        if($category->page_title == "") $page_title = $category->title;
        else $page_title = $category->page_title;
        if($category->meta_description == "") $meta_description = strip_tags($category->description);
        else $meta_description = $category->meta_description;
        $data['pageTitle'] = $page_title;
        $data['metaDescription'] = $meta_description;
        return view('pages.articlesCategory', $data);
    }

    public function articlesDetail (Request $request)
    {
        $data['pageTitle'] = 'Grahaexcel - ';
        $data['metaDescription'] = '';
        $data['currentCategory'] = $category = Newscategory::where('url_title', $request->categoryUrlTitle)->first();
        if (empty($category)){
            return redirect('/articles');
        }
        
        $data['getNews'] = $article = News::where('url_title', $request->urlTitle)->where('category', $category->id)->first();
        if(!$article)
        {
            $redirect_article = News::where('url_title', $request->urlTitle)->first();
            if (empty($redirect_article)){
                return redirect('/articles');
            }
            $redirect_category = Newscategory::where("id", $redirect_article->category)->first();
            return redirect('/articles/'.$redirect_category->url_title.'/'.$redirect_article->url_title);
        }
        if($article->page_title == "") $page_title = $article->title;
        else $page_title = $article->page_title;
        if($article->meta_description == "") $meta_description = substr(str_replace("\n", " ",strip_tags($article->description)),0,150)."..";
        else $meta_description = $article->meta_description;
        $data['pageTitle'] = $page_title;
        $data['metaDescription'] = $meta_description;

        if($request->type == "amp") return view('pages.ampArticlesDetail', $data);
        else return view('pages.articlesDetail', $data);
    }

    public function atapUpvc ()
    {
        $data['pageTitle'] = 'Apa itu Atap uPVC dan Keuntungannya - Grahaexcel';
        $data['metaDescription'] = 'Pelajari lebih lengkap tentang apa itu atap uPVC dan keuntungan-keuntungannya. Dan, temukan kenapa atap uPVC sangat populer dipakai pada saat ini.';
        return view('pages.atapUpvc', $data);
    }
    
    public function sitemap(Request $request)
    {
        return response()->file(storage_path('app/public/sitemap.xml'), [
            'Content-Type' => 'application/xml'
        ]);
    }
    
    public function showImage(Request $request)
    {
        $upload = Upload::where('hash', $request->hashcode)->first();
        $arr = explode("/", $upload->path);
        $filename = $arr[sizeof($arr)-1];
        $upload_path = storage_path('uploads/'.$filename);
        return response()->file($upload_path);
    }

}
