<h2 class="widget-title">Produk</h2>
<ul class="product-categories">
@foreach($getCat as $setCat)
    @php 
        $excl_ids = [8, 9, 10, 2]; 
        if (in_array($setCat->id, $excl_ids)) { continue; } 
    @endphp
    <li><a href="{{url('/category') .'/'. $setCat->url_title}}" style="font-size:15px;"><b><u>{{$setCat->name}}</u></b></a>
        <ul>
        @php ($resProducts = DB::table('products')->where('sidebar_ordering', 'like', $setCat->id."%")->orderBy('sidebar_ordering', 'asc')->whereNull('deleted_at')->get())
        @foreach($resProducts as $resProduct)
            <li style="padding: 5px 0 0 10px; font-size: 12px">
                <a href="{{url('/product') .'/'. $resProduct->url_title}}">
                    {{$resProduct->title}}
                </a>
            </li>
        @endforeach
        </ul>
    </li>
@endforeach
</ul>