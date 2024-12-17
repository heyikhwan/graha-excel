@extends('pages.layouts.app')
@section('title', 'PROJECT NAME')

@section('style')
<!-- script -->
<style>
    .header-inner { padding-bottom: 0px !important; }
    .bg-head{
        margin-bottom:40px;
    }
    .bg-left-box {
      /*background-image: url("<?php echo url(asset('assets/web/img/calculator-left-bg.jpg')); ?>");*/
      /*background-repeat: no-repeat;*/
      /*background-size: 100% auto;*/
    }
    h5 { font-size: 20px; margin-bottom: 10px; }
    h6 { font-size: 11px; }
    .margin-left-box{
        margin-left:35%;
        margin-top:8px;
        padding-right:2rem;
    }
    .margin-left-box .content {
        padding: 10%;
    }
    .form-box-result-calc{
        margin-top:5%;
    }
    .form-box-result-calc label{
        color:white;
        font-size:14px;
        margin-top:1rem;
        margin-bottom:1.1rem;
    }
    #warna_atap{
        height:55px;
    }
    #aksesoris{
        height:20px;
    }
    .w-60{
        width:50%;
        box-shadow: -9px 9px 20px rgba(0, 0, 0, 0.4);
    }
    label{
        font-size:14px;
    }
    .mb-0{
        margin-bottom:0rem !important;
    }
    .select-icon { width: 20%; margin-right: 2%; display: inline-block; text-align: center; }
    .select-icon.active label { font-weight: bold; }
    .content-bottom { margin-top:7%; }
    .calculator-left { position: relative; display: block; }
    /* .calculator-left .background { position:absolute;width:100%;left:0;top:0;z-index:2 } */
    /* .calculator-left .content { position:absolute;width:62%;left:36%;top:0;z-index:3; margin-top:50px; } */
    .calculator-left .content { left: 6%;top: 0;z-index: 3; margin-top: 7%; }
    .calculator-left .options { margin-bottom: 10px; font-size: 14px; line-height: 18px; }
    .calculator-left .title { margin-top: 5%; margin-bottom:6px; }
    .not-small { display: block; }
    .small-only { display: none; }
    .form-box-result-calc .col-11 { margin-bottom: 20px; }
    .form-box-result-calc input { width: 50%; }
    .form-box-result-calc .unit { color:white; padding:5px 5px 3px; width: 30%; min-width:90px; font-size: 14px;}

    .opsi_atap img{
        width: 80%;
    }

    .content_warna {
        border-color: #D4D4D4;
        background-color: white;
        min-height: 4rem;
        line-height: 4rem;
        margin-right: 1.5%;
    }

    .content_warna:hover, .content_warna:active, .content_warna:focus, .content_warna:visited{
        background-color: #D4D4D4;
        color: white;
        border: none;
    }

    .calculator-left {
        border-image: linear-gradient(to right, #C2C2C2 0%, #F2F2F2 100%) 1;
        border-width: 15px;
        border-style: solid;
    }

    @media (min-width:1240px) and (max-width: 1310px) {
        .calculator-left .content { width: 55%; }
        .content-bottom { margin-top:100px; }
        .select-icon label { font-size: 0.8rem; }
    }
    @media (min-width:1200px) and (max-width: 1239px) {
        .calculator-left .content { width: 55%; }
        .content-bottom { margin-top:70px; }
        .select-icon label { font-size: 0.8rem; }
        h5 { font-size: 14px; margin-bottom: 10px; }
        h6 { font-size: 13px; }
    }
    @media (min-width:993px) and (max-width: 1199px) {
        .calculator-left .content { margin-top: 33px; width: 55%; }
        .select-icon label { font-size: 0.7rem; }
        h5 { font-size: 12px; margin-bottom: 0; }
        h6 { font-size: 11px; }
        .calculator-left .options { font-size: 10px; line-height: 12px; }
        #warna_atap { height: 40px; }
        #aksesoris { height: 10px; }
        .user-input input { width: 100%; }
        .content-bottom { margin-top: 45px; }
        .form-box-result-calc label {
            color: white;
            font-size: 10px;
            margin-top: 2px;
            margin-bottom: 8px;
        }
        .content_warna {
            margin-top: 5px;
            min-height: 3rem;
            line-height: 3rem;
            padding: 0 1rem;
        }
        .panjang, .lebar{
            height: 22px!important;
            width: 115px!important;
        }

        .jumlah_lembaran, .total_kebutuhan, .jumlah_gep{
            height: 22px!important;
            width: 143px!important;
            border: 5px solid #efefef!important;
        }
    }
    @media (max-width:992px) {
        .calculator-left { width: 60%; margin-left: 20%; border-style: none;}
        .calculator-left .background { position: relative; }
        .calculator-left .content { width: 80%; left: 10%; margin-top: 35px; }
        .not-small { display: none; }
        .small-only { display: block; }
        .select-icon label { font-size: 0.75rem; }
        .content-bottom { margin-top: 40px; margin-left: 10%;}

        .form-box-result-calc label {
            font-size: 10px;
        }
        .form-box-result-calc .unit {
            font-size: 10px;
        }
        .form-box-result-calc .col-11 {
            margin-bottom: 10px;
        }
        .content_warna{
            margin-top: 5px;
            min-height: 3rem;
            line-height: 3rem;
        }

        .calculator-left .title {
            margin-top: 2%;
        }

        .h6_aksesoris{
            margin-top: 15%!important;
        }

        .user-input input {
            height: 22px;
            width: 143px;
        }

        .panjang, .lebar{
            height: 22px!important;
            width: 115px!important;
        }

        .jumlah_lembaran, .total_kebutuhan, .jumlah_gep{
            height: 22px!important;
            width: 143px!important;
            border: 5px solid #efefef!important;
        }
        label {
            font-size: 10px;
        }
        h5 { font-size: 12px; margin-bottom: 0; }
        h6 { font-size: 11px; }
        .pilih_jenis {
            font-size:14px!important;
        }
        .h6_aksesoris{
            margin-top: 10%!important;
        }
    }
    
    @media (max-width:720px) {
        .content-bottom { margin-top: 100px; }
        /*h5 { font-size: 12px; margin-bottom: 0; }*/
        /*h6 { font-size: 11px; }*/
        /*.calculator-left .options { font-size: 10px; line-height: 12px; }*/
        /*#warna_atap { height: 25px; }*/
        /*#aksesoris { height: 10px; }*/
        /*.user-input input { width: 100%; }*/
        /*.content-bottom { margin-top: 45px; }*/
        /*.form-box-result-calc label {*/
        /*    color: white;*/
        /*    font-size: 10px;*/
        /*    margin-top: 2px;*/
        /*    margin-bottom: 8px;*/
        /*}*/
    }
    @media (max-width:695px) {
        .calculator-left { width: 80%; margin-left: 10%; }
        .content-bottom { margin-top: 200px; }
    }
     @media (max-width:630px) {
         .calculator-left { width: 90%; margin-left: 5%; }
         
     }
     @media (max-width:560px) {
         .calculator-left { width: 100%; margin-left: 0%; }
         .content-bottom { margin-top: 160px; }
         
     }
     
     @media (max-width: 480px) {
        .calculator-left .options { font-size: 10px; line-height: 12px; }
        #warna_atap { height: 40px; }
        #aksesoris { height: 10px; }
        .user-input input { width: 100%; }
        .form-box-result-calc label {
            color: white;
            font-size: 10px;
            margin-top: 2px;
            margin-bottom: 8px;
        }
        .form-box-result-calc .unit { padding: 5px 5px 2px; }

        .pilih_jenis {
            font-size:14px!important;
            margin-top:0%;
        }
        .title {
            font-size: 12px !important;
        }
        .content_warna {
            line-height: 2.5rem;
            font-size: 12px !important;
        }
        .form-box-result-calc {
            margin-top: 15%;
        }
        .jumlah_lembaran, .total_kebutuhan, .jumlah_gep {
            width: 200px !important;
        }
        .lebar_label {
            margin-left: 25%;
        }
        .panjang, .lebar {
            height: 22px !important;
            width: 125px !important;
        }
        .lebar {
            margin-left: 25% !important;
        }

        .content-bottom {
            margin-top: 20px !important;
            margin-left: 40px !important;
        }
        .form-box-result-calc label {
            font-size: 11px;
        }
        .bg-head h1, .atap-calc h2 {
            font-size: 18px!important;
        }
        .add-to-cart {
            margin-bottom: 30px!important;
        }
     }
     @media (max-width: 430px) {
         .content-bottom { margin-top: 70px; margin-left: 40px;}
         .form-box-result-calc .col-11 {
            margin-bottom: 20px;
        }
        .form-box-result-calc .unit {
            font-size: 10px;
        }
     }
     @media (max-width: 400px) {
        .pilih_jenis {
            font-size:12px!important;
            margin-top:0%;
        }
         .content-bottom { margin-top: 80px; }
         .calculator-left .title {
            margin-top: 1%;
            margin-bottom: 1px;
        }
        
        #aksesoris {
            height: 5px;
        }
        .form-box-result-calc .col-11 {
            margin-bottom: 5px;
        }
        .form-box-result-calc {
            margin-top: 15%;
        }
        .panjang, .lebar {
            height: 22px !important;
            width: 120px !important;
        }
        .jumlah_lembaran, .total_kebutuhan, .jumlah_gep {
            height: 22px !important;
            width: 150px !important;
            border: 5px solid #efefef !important;
        }
        .title {
            font-size: 10px !important;
        }
        .content_warna {
            margin-top: 5px;
            min-height: 2.5rem;
            line-height: 2.5rem;
            font-size: 10px !important;
        }
        .h6_aksesoris {
            margin-top: 15% !important;
        }
     }
     @media (max-width: 370px) {
         .content-bottom { margin-top: 50px; }
        .title {
            font-size:9px!important;
        }
        .pilih_jenis {
            font-size:10px!important;
        }
        .content-bottom {
            margin-top: 20px!important;
            margin-left: 30px!important;
        }
        .content-bottom .row .col-11 {
            margin-bottom: 0px!important;
        }
        .form-box-result-calc label {
            font-size: 9px;
        }
        .jumlah_lembaran, .total_kebutuhan, .jumlah_gep{
            height: 22px!important;
            width: 110px!important;
            border: 5px solid #efefef!important;
        }
        .lebar {
            margin-left:50%!important;
        }
        .lebar_label {
            margin-left:50%;
        }
        .content_warna{
            margin-top: 5px;
            min-height: 2rem;
            line-height: 2rem;
            font-size:9px!important;
        }

        .h6_aksesoris{
            margin-top: 10%!important;
        }

        .calculator-left { border-style: none;}
        .calculator-left .content { width: 80%; left: 10%; margin-top: 15px; }

        .pilih_jenis {
            margin-top: 2%;
        }

        .panjang, .lebar {
            height: 22px !important;
            width: 100px !important;
        }

        .form-box-result-calc {
            margin-top: 5%;
        }
     }
     ul {
      margin: 0;
    }
    ul.dashed {
      list-style-type: none;
    }
    ul.dashed > li {
      text-indent: -10px;
    }
    ul.dashed > li:before {
      content: "- ";
      text-indent: -10px; 
    }
</style>
@endsection

@section('content')
    <div id="content" class="main-content-wrapper">
        <section style="margin-top:0;">
            <div class="container">
                
                <div class="row bg-head">
                    <div class="col-12">
                        <h1 class="text-center my-5" style="font-size: 32px">KALKULATOR BIAYA ATAP</h1>
                        <img src="{{asset('assets/web/img/banner-calculator.png')}}" alt="Kalkulator Biaya Atap" style="width:100%;">
                    </div>
                </div>

                <div class="row atap-calc" style="margin-bottom: 5%;">
                    <div class="col-12 col-lg-12">
                        <h2 class="text-center my-3 my-md-5" style="font-size: 24px">PERHITUNGAN BIAYA ATAP</h2>
                        <div class="calculator-left">
                            <div class="background">
                                <img src="<?php echo url(asset('assets/web/img/calc-bg-new.jpg')); ?>" style="width:100%;" class="not-small" />
                                <img src="<?php echo url(asset('assets/web/img/calculator-left-bg.jpg')); ?>" style="width:100%;" class="small-only" />
                            </div>
                            <div class="row" style="position: absolute;top: 0;width: 100%;">
                                <div class="col-lg-6 content">
                                    <p class="pilih_jenis" style="font-size: 20px;margin-bottom: 10px;">PILIH JENIS ATAP <b>SESUAI KEBUTUHAN</b></p>
                                    <p class="title" style="font-size: 11px;"><b>PILIH PRODUK ATAP</b></p>
                                    <div class="row list_opsi_atap">
                                        <div class="col-12">
                                            <div class="select-icon">
                                                <a class="opsi_atap" data-id="sk785"><img src="{{asset('assets/web/img/iconbox1.png')}}" alt="Foto Excel sejak tahun 1969" style="width:80%"></a>
                                                <label>SKYDECK 785</label>
                                            </div>
                                            <div class="select-icon">
                                                <a class="opsi_atap" data-id="sk1000"><img src="{{asset('assets/web/img/iconbox2.png')}}" alt="Foto Excel sejak tahun 1969" style="width:80%"></a>
                                                <label>SKYDECK 1000</label>
                                            </div>
                                            <div class="select-icon">
                                                <a class="opsi_atap" data-id="elite"><img src="{{asset('assets/web/img/iconbox3.png')}}" alt="Foto Excel sejak tahun 1969" style="width:80%"></a>
                                                <label>ELITEROOF</label>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="title" style="font-size: 11px;"><b>PILIH WARNA ATAP</b></p>
                                    <div id="warna_atap" class="options warna_atap"></div>
                                    <p class="title h6_aksesoris" style="font-size: 11px;"><b>AKSESORIS</b></p>
                                    <div id="aksesoris" class="options aksesoris"></div>
                                    <p class="title" style="font-size: 11px;"><b>UKURAN ATAP</b></p>
                                    <div class="col-lg-9 row user-input">
                                        <div class="col-6 p-0">
                                            <input type="number" class="panjang" id="panjang" style="background: #efefef; border: 1px solid #efefef;height: 35px;width: 190px;"></input>
                                            <br>
                                            <label>Panjang (Meter)</label>
                                        </div>
                                        <div class="col-6 p-0">
                                            <input type="number" class="lebar" id="lebar" style="background: #efefef; border: 1px solid #efefef;height: 35px;width: 190px;"></input>
                                            <br>
                                            <label class="lebar_label">Lebar (Meter)</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 content-bottom">
                                    <p class="text-light not-small" style="font-size: 20px"><b>PREDIKSI KEBUTUHAN</b></p>
                                    <div class="form-box-result-calc">
                                        <div class="row">
                                            <div class="col-11">
                                                <input type="number" class="jumlah_lembaran" id="jumlah_lembaran" readonly style="background: #efefef; border: 10px solid #efefef;display:inline-block;" />
                                                <div class="unit" style="display:inline-block">LEMBAR</div>
                                                <label>Jumlah lembaran atap UPVC</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-11">
                                                <input type="number" class="total_kebutuhan" id="total_kebutuhan" readonly style="background: #efefef; border: 10px solid #efefef;display:inline-block;" />
                                                <div class="unit" style="display:inline-block">METER LARI</div>
                                                <label>Total kebutuhan atap UPVC</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-11">
                                                <input type="number" class="jumlah_gep" id="jumlah_gep" readonly style="background: #efefef; border: 10px solid #efefef;display:inline-block;" />
                                                <div class="unit" style="display:inline-block">PAK</div>
                                                <label class="jumlah_gep_label" id="jumlah_gep_label">Jumlah GEP Weather Seal K<br />*) 1 pak = 20 pcs</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="row mt-4">
                    <div class="col-12 col-lg-6">
                        <h3 style="font-size: 24px; text-transform: uppercase; font-weight: 600; margin-bottom: 5px;"><b>Catatan :</b></h3>
                        <ul class="ml-5 dashed">
                            <li>Kalkulator ini untuk atap standar</li>
                            <li>Warna "others" bisa dipesan dengan batas minimal kuantitas</li>
                            <li>Jika ingin menanyakan harga sesuai kebutuhan,<br>bisa hubungi customer care kami di:</li>
                        </ul>
                        <br>
                        <p class=""><b>+62 21 - 6393394</b> (hotline)<br><b>+62 21 - 6393394</b> (fax)<br><b>+62 81399808057</b> (whatsapp)</b></p>
                        <div class="text-center">
                            <a href="https://www.grahaexcel.com/page/kenapa-memilih-excel#contact-us"  class='btn btn-style-1 btn-medium add-to-cart' style="min-width: 100%; margin-bottom: 150px; margin-left: auto; margin-right: auto; background: #cf987e; margin-top:40px;">HUBUNGI KAMI</a>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 text-right">
                        <img src="{{asset('assets/web/img/right bottom box.png')}}" alt="Foto Excel sejak tahun 1969" style="width:95%">
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
@section('script')
<script>
    var id = "";
    $('.opsi_atap').click(function(){
        $('.select-icon').removeClass('active');
        $(this).closest('.select-icon').addClass('active');
        id = $(this).data("id");
        if(id == "sk785"){
            $('.warna_atap').html("<a class='content_warna btn btn-outline-dark'>Solid White</a><a class='content_warna btn btn-outline-dark'>Semitransparant</a><a class='content_warna btn btn-outline-dark'>Others*</a>");
            $('.aksesoris').html("<div>GEP Weather Seal K</div>");
        }
        else if(id == "sk1000"){
            $('.warna_atap').html("<a class='content_warna btn btn-outline-dark'>Solid White</a><a class='content_warna btn btn-outline-dark'>Light Blue</a><a class='content_warna btn btn-outline-dark'>Others*</a>");
            $('.aksesoris').html("<div>GEP Weather Seal K</div>");
        }
        else if(id == "elite"){
            $('.warna_atap').html("<a class='content_warna btn btn-outline-dark'>Natural</a>");
            $('.aksesoris').html("<div>GEP Weather Seal B</div>");
        }
        calculate();
    })
    
    $(document).on("click",".content_warna", function(){
        $(".content_warna").css("font-weight","unset").css("background-color","white")
        $(this).css("font-weight","bold")
        $(this).css("background-color","#D4D4D4")
    })
    
    function calculate(){
        var panjang = $('.panjang').val()
        var lebar = $('.lebar').val()
        if(panjang == "" || lebar == "")
        {
            $('.jumlah_lembaran').val("")
            $('.total_kebutuhan').val("")
            $('.jumlah_gep').val("")
            return false
        }
        var lebar_efektif = 0
        var jumlah_lembaran_atap = 0
        var total_atap = 0
        var jumlah_gep = 0
        
        if(id == ""){
            alert("Silakan pilih produk atap dulu")
            return false
        }
        
        if(id == "sk785"){
            lebar_efektif = 0.785
        }
        else if(id == "sk1000"){
            lebar_efektif = 1.07
        }
        else if(id == "elite"){
            lebar_efektif = 0.8
        }
        
        if(id == "sk785" || id == "sk1000"){
            jumlah_lembaran_atap = Math.ceil(lebar/lebar_efektif)
            total_atap = panjang*jumlah_lembaran_atap
            jumlah_gep = Math.ceil(((4*panjang)*jumlah_lembaran_atap)/20)
            $('.jumlah_gep_label').html("Jumlah GEP Weather Seal K")
        }
        else if(id == "elite"){
            jumlah_lembaran_atap = Math.ceil(Math.ceil((lebar/lebar_efektif))*Math.ceil((panjang/2)))
            total_atap = jumlah_lembaran_atap*2.25
            jumlah_gep = Math.ceil((jumlah_lembaran_atap*9)/20)
            $('.jumlah_gep_label').html("Jumlah GEP Weather Seal B")
        }

        $('.jumlah_lembaran').val(jumlah_lembaran_atap)
        $('.total_kebutuhan').val(total_atap)
        $('.jumlah_gep').val(jumlah_gep)
    }
    
    $('.panjang').keyup(function(){
        calculate()
    })
    
    $('.lebar').keyup(function(){
        calculate()
    })
</script>
<!-- script -->
@endsection