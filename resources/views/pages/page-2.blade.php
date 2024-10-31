@extends('pages.layouts.app')
@section('title', 'PROJECT NAME')

@section('style')
<style>
    .has-tb {
        color: #000;
    }
    .has-tb .strong {
        font-weight: 600;
    }
    .has-tb .fa-star {
        color: orange;
        font-size: 16px;
    }
    .has-tb ul li {
        list-style: disc;
        font-size: 13px;
    }
    .has-tb .accordion__link {
        font-size:12px;
        text-transform: uppercase;
    }
</style>
@endsection

@section('content')
    <div id="content" class="main-content-wrapper">
        <section class="has-pd">
            <div class="container">
                <div class="row single-wp">
                    <div class="col-md-6">
                        <h4>Teknologi EXCEL</h4>
                        <h1 style="font-size: 42px;margin-bottom: 30px;">Teknologi Tangki Air</h1>
                        <p class="lead">Produk jual tangki air/tandon air serta tangki kimia EXCEL tersedia dengan berbagai macam warna dan ukuran. Didukung teknologi mesin otomatis (Full Automated System) dan Roto Moulding, tangki EXCEL dapat menghasilkan tangki air dengan perlindungan radiasi sinar UV dan perubahan suhu serta ketahanan terhadap lumut, jamur dan bakteri. Tangki blow EXCEL juga terbukti 2x (dua kali) lebih kuat dibanding tandon air PE merek lain di Indonesia.</p>
                    </div>
                    <div class="col-md-6">
                        <img src="{{asset('assets/web/img/placeholder/teknologi-excel.jpg')}}" alt="Teknologi Excel">
                    </div>
                </div>

                <div class="row justify-content-md-center text-center">
                    <div class="col-md-8">
                        <h2 class="hl">Hasilnya persediaan air di tangki akan lebih higienis, perawatan tandon air juga lebih mudah dan <span>tandon air akan lebih awet</span></h2>
                    </div>
                </div>

                <div class="img-b1">
                    <img src="{{asset('assets/web/img/placeholder/teknologi-uv-pigment-lab-japan.jpg')}}" alt="Teknologi UV + Pigment Lab Jaapan">
                </div>

                <div class="row">
                    <div class="col-md-12 sc-2 text-center">
                        <p>Perlindungan maksimal terhadap sinar radiasi UV dan perubahan suhu. Menurut data “Weather O Meter” atau “Xenon Tester”, tingginya radiasi sinar UV yang mencapai 140kly per harinya dapat merusak struktur bahan plastik. Hal tersebut dapat mempengaruhi perubahan warna, rapuh/getas, dan akhirnya pecah.</p>
                        <p>Dengan lapisan perlindungan UV dari GRAHAEXCEL ditambah HPPM – High Performance Pigments for Masterbatch; teknologi pigmentasi untuk memastikan warna tidak mudah luntur walaupun dijemur diterik matahari dan lembab karena hujan.</p>
                    </div>
                </div>

                <div class="row justify-content-md-center text-center">
                    <div class="col-md-8">
                        <h2 class="hl">Menjadikan performa warna 313%. Artinya kinerja warna 3x lipat lebih awet dibanding tangki plastik lainnya.<br/><span>Hasilnya tangki Anda lebih awet dan tangguh</span></h2>
                    </div>
                </div>

                <br/>
                <br/>

                <div class="row single-wp">
                    <div class="col-md-6">
                        <img src="{{asset('assets/web/img/placeholder/teknologi-deluxe-bright-tech.jpg')}}" alt="Teknologi Deluxe Bright Tech">
                    </div>
                    <div class="col-md-6">
                        <h4>Teknologi Deluxe Bright Tech</h4>
                        <h2>Bye Lumut</h2>
                        <p class="lead">Lumut terbentuk akibat cahaya matahari yang berinteraksi dengan oksigen didalam air. Dengan lapisan putih licin didalam tangki, menjadikan tangki air lebih kedap cahaya dan menghambat pertumbuhan lumut dan jamur serta kotoran-kotoran menempel.</p>
                        <br/>
                        <em>Note: Lumut / Kotoran yang ada didalam pipa air anda dapat mengalir dan berpindah ke tangki air. Lumut tersebut tidak akan berkembang didalam tangki air excel tapi untuk menjaga kebersihan air dari kotoran-kotoran tersebut, sebaiknya menguras tandon air selama 6 bulan sekali.</em>
                    </div>
                </div>
            </div>

            <div class="img-b1">
                <img src="{{asset('assets/web/img/placeholder/perbandingan-ketahanan-tangki-stainless-excel.jpg')}}" alt="Perbandingan Ketahanan Tangki Stainless Excel">
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-md-12 has-tb">
                        <h5 class="text-center">BERIKUT TABEL KETERANGAN TANGKI AIR & TANGKI<br/>KIMIA GUNA MENENTUKAN HARGA YANG SESUAI<br/>UNTUK TANDON AIR</h5>
                        <br/>
                        <br/>
                        <div class="row">
                            <div class="col-md-2"></div>
                            <div class="col-md-9">
                                <div class="row">
                                    <div class="col-md-3 strong">FRP</div>
                                    <div class="col-md-3 strong">TANGKI STAINLESS STEEL</div>
                                    <div class="col-md-3 strong">TANGKI ROTO</div>
                                    <div class="col-md-3 strong">TANGKI BLOW</div>
                                </div>
                            </div>
                        </div>
                        <hr/>
                        <div class="row">
                            <div class="col-md-2 strong">KELEBIHAN:</div>
                            <div class="col-md-9">
                                <div class="accordion__single">
                                    <div class="accordion__header" id="headingOne">
                                        <a class="accordion__link" data-target="#accordion1">
                                            Selengkapnya <i class="fa fa-caret-down"></i>
                                        </a>
                                    </div>
                                    <div id="accordion1" class="accordion__body">
                                        <div class="accordion__text">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <ul>
                                                        <li>Relatif Ringan</li>
                                                        <li>Terlihat kokoh</li>
                                                        <li>Pemasangan langsung ditempat</li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-3">
                                                    <ul>
                                                        <li>Mewah&amp; Eksklusif</li>
                                                        <li>Anti Lumut</li>
                                                        <li>Tidak tembus Sinar UV</li>
                                                        <li>Kokoh</li>
                                                        <li>FDA &amp; SNI approved</li>
                                                        <li>Mudah dipasang</li>
                                                        <li>Dapat dipakai untuk menampung minyak</li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-3">
                                                    <ul>
                                                        <li>Dicetak tanpa sambungan</li>
                                                        <li>Kokoh &amp; tidak mudah bocor</li>
                                                        <li>FDA &amp; SNI Approved</li>
                                                        <li>Dengan lapisan DeluxeBright Tech (tahan lumut&amp; anti jamur)</li>
                                                        <li>Mudah dipasang</li>
                                                        <li>Cocok untuk penampungan air dan kimia*</li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-3">
                                                    <ul>
                                                        <li>Mesin otomatis sehingga tangki lebih presisi (tanpa sambungan)</li>
                                                        <li>2X lebih kuat dari tangki PE merek apapun yang ada di Indonesia</li>
                                                        <li>Dengan lapisan Deluxebright Tech untuk mengontrol lumut dan jamur</li>
                                                        <li>FDA &amp; SNI Approved</li>
                                                        <li>Pigmen khusus dari Jepang untuk mengontrol sinar radiasi UV</li>
                                                        <li>Warna lebih hidup dan cantik</li>
                                                        <li>Dengan permukaan caviar finish sehingga badan tangki tidak mudah tergores</li>
                                                        <li>Mudah dipasang</li>
                                                        <li>Cocok untuk penampungan air dan kimia*</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr/>
                        <div class="row">
                            <div class="col-md-2 strong">KEKURANGAN:</div>
                            <div class="col-md-9">
                                <div class="accordion__single">
                                    <div class="accordion__header" id="headingOne">
                                        <a class="accordion__link" data-target="#accordion2">
                                            Selengkapnya <i class="fa fa-caret-down"></i>
                                        </a>
                                    </div>
                                    <div id="accordion2" class="accordion__body">
                                        <div class="accordion__text">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <ul>
                                                        <li>Serat fiber dapat rontok dan larut dalam air</li>
                                                        <li>Dinding tangki mudah retak</li>
                                                        <li>Tidak tahan oksidasi dan sinar radiasi UV</li>
                                                        <li>Harga mahal</li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-3">
                                                    <ul>
                                                        <li>Tidak tahan terhadap bahan kimia lain selain minyak</li>
                                                        <li>Bisa berkarat karena udara di daerah pantai</li>
                                                        <li>Korosif terhadap air tanah</li>
                                                        <li>Hanya untuk air PAM</li>
                                                        <li>Harga relatif tinggi</li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-3">
                                                    <ul>
                                                        <li>Terkesan kurang eksklusif dibanding stainless steel</li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-3">
                                                    <ul>
                                                        <li>Terkesan kurang eksklusif dibanding stainless steel</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr/>
                        <div class="row">
                            <div class="col-md-2 strong">CARA PERAWATAN:</div>
                            <div class="col-md-9">
                                <div class="accordion__single">
                                    <div class="accordion__header" id="headingOne">
                                        <a class="accordion__link" data-target="#accordion3">
                                            Selengkapnya <i class="fa fa-caret-down"></i>
                                        </a>
                                    </div>
                                    <div id="accordion3" class="accordion__body">
                                        <div class="accordion__text">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <ul>
                                                        <li>Biaya perawatan mahal</li>
                                                        <li>Dinding fiber yang keropos sulit diperbaiki</li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-3">
                                                    <ul>
                                                        <li>Kebocoran di dinding tangki sulit diperbaiki</li>
                                                        <li>Apabila berkarat harus diganti</li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-3">
                                                   <ul>
                                                        <li>Hanya perlu dibersihkan setiap 6 bulan sekali&nbsp;</li>
                                                        <li>Bebas perawatan karena mempunyai pengontrol sinar UV</li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-3">
                                                    <ul>
                                                        <li>Hanya perlu dibersihkan setiap 6 bulan sekali&nbsp;</li>
                                                        <li>Bebas perawatan karena mempunyai pengontrol sinar UV</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr/>
                        <div class="row">
                            <div class="col-md-2 strong">FAKTOR LAINNYA:</div>
                            <div class="col-md-9">
                                <div class="accordion__single">
                                    <div class="accordion__header" id="headingOne">
                                        <a class="accordion__link" data-target="#accordion4">
                                            Selengkapnya <i class="fa fa-caret-down"></i>
                                        </a>
                                    </div>
                                    <div id="accordion4" class="accordion__body">
                                        <div class="accordion__text">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <ul>
                                                        <li>Serat fiber yang rontok dapat menyebabkan ganguan kesehatan seperti kanker</li>
                                                        <li>Non SNI, Non FDA approved</li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-3">
                                                    <ul>
                                                        <li>FDA Approved</li>
                                                        <li>JIS Certification</li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-3">
                                                   <ul>
                                                        <li>FDA Approved</li>
                                                        <li>SNI Certification</li>
                                                        <li>FDA Certification</li>
                                                        <li>JIS Certification</li>
                                                        <li>Top Brand Award</li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-3">
                                                    <ul>
                                                        <li>FDA Approved</li>
                                                        <li>FDA Certification</li>
                                                        <li>JIS Certification</li>
                                                        <li>Top Brand Award</li>
                                                        <li>Mesin Otomatis</li>
                                                        <li>Pigmen khusus dari Jepang</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr/>
                        <div class="row">
                            <div class="col-md-2 strong">SKOR AKHIR:</div>
                            <div class="col-md-9">
                                <div class="row">
                                    <div class="col-md-3">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <div class="col-md-3">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <div class="col-md-3">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <div class="col-md-3">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr/>
                        <div class="star-desc" style="border:0;">
                            <div class="star-info">
                                <i class="fa fa-star"></i>
                                Tidak direkomendasikan
                            </div>
                            <div class="star-info">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                Kurang
                            </div>
                            <div class="star-info">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                Baik
                            </div>
                            <div class="star-info">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                Baik Sekali
                            </div>
                            <div class="star-info">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                Sangat Baik
                            </div>
                        </div>
                        <!-- <table class="table table-borderless">
                            <thead>
                                <tr>
                                    <th scope="col"></th>
                                    <th scope="col">FRP</th>
                                    <th scope="col">TANGKI STAINLESS STEEL</th>
                                    <th scope="col">TANGKI ROTO</th>
                                    <th scope="col">TANGKI BLOW</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="strong">KELEBIHAN:</td>
                                    <td>
                                        <div class="accordion__single">
                                            <div class="accordion__header" id="headingOne">
                                                <a class="accordion__link" data-target="#accordion1">
                                                    Selengkapnya <i class="fa fa-caret-down"></i>
                                                </a>
                                            </div>
                                            <div id="accordion1" class="accordion__body">
                                                <div class="accordion__text">
                                                    <ul>
                                                        <li>Relatif Ringan</li>
                                                        <li>Terlihat kokoh</li>
                                                        <li>Pemasangan langsung ditempat</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="accordion__single">
                                            <div class="accordion__header" id="headingOne">
                                                <a class="accordion__link" data-target="#accordion2">
                                                    Selengkapnya <i class="fa fa-caret-down"></i>
                                                </a>
                                            </div>
                                            <div id="accordion2" class="accordion__body">
                                                <div class="accordion__text">
                                                    <ul>
                                                        <li>Mewah&amp; Eksklusif</li>
                                                        <li>Anti Lumut</li>
                                                        <li>Tidak tembus Sinar UV</li>
                                                        <li>Kokoh</li>
                                                        <li>FDA &amp; SNI approved</li>
                                                        <li>Mudah dipasang</li>
                                                        <li>Dapat dipakai untuk menampung minyak</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="accordion__single">
                                            <div class="accordion__header" id="headingOne">
                                                <a class="accordion__link" data-target="#accordion3">
                                                    Selengkapnya <i class="fa fa-caret-down"></i>
                                                </a>
                                            </div>
                                            <div id="accordion3" class="accordion__body">
                                                <div class="accordion__text">
                                                    <ul>
                                                        <li>Dicetak tanpa sambungan</li>
                                                        <li>Kokoh &amp; tidak mudah bocor</li>
                                                        <li>FDA &amp; SNI Approved</li>
                                                        <li>Dengan lapisan DeluxeBright Tech (tahan lumut&amp; anti jamur)</li>
                                                        <li>Mudah dipasang</li>
                                                        <li>Cocok untuk penampungan air dan kimia*</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="accordion__single">
                                            <div class="accordion__header" id="headingOne">
                                                <a class="accordion__link" data-target="#accordion4">
                                                    Selengkapnya <i class="fa fa-caret-down"></i>
                                                </a>
                                            </div>
                                            <div id="accordion4" class="accordion__body">
                                                <div class="accordion__text">
                                                    <ul>
                                                        <li>Mesin otomatis sehingga tangki lebih presisi (tanpa sambungan)</li>
                                                        <li>2X lebih kuat dari tangki PE merek apapun yang ada di Indonesia</li>
                                                        <li>Dengan lapisan Deluxebright Tech untuk mengontrol lumut dan jamur</li>
                                                        <li>FDA &amp; SNI Approved</li>
                                                        <li>Pigmen khusus dari Jepang untuk mengontrol sinar radiasi UV</li>
                                                        <li>Warna lebih hidup dan cantik</li>
                                                        <li>Dengan permukaan caviar finish sehingga badan tangki tidak mudah tergores</li>
                                                        <li>Mudah dipasang</li>
                                                        <li>Cocok untuk penampungan air dan kimia*</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="strong">KEKURANGAN:</td>
                                    <td>
                                        <div class="accordion__single">
                                            <div class="accordion__header" id="headingOne">
                                                <a class="accordion__link" data-target="#accordion5">
                                                    Selengkapnya <i class="fa fa-caret-down"></i>
                                                </a>
                                            </div>
                                            <div id="accordion5" class="accordion__body">
                                                <div class="accordion__text">
                                                    <ul>
                                                        <li>Serat fiber dapat rontok dan larut dalam air</li>
                                                        <li>Dinding tangki mudah retak</li>
                                                        <li>Tidak tahan oksidasi dan sinar radiasi UV</li>
                                                        <li>Harga mahal</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="accordion__single">
                                            <div class="accordion__header" id="headingOne">
                                                <a class="accordion__link" data-target="#accordion6">
                                                    Selengkapnya <i class="fa fa-caret-down"></i>
                                                </a>
                                            </div>
                                            <div id="accordion6" class="accordion__body">
                                                <div class="accordion__text">
                                                    <ul>
                                                        <li>Tidak tahan terhadap bahan kimia lain selain minyak</li>
                                                        <li>Bisa berkarat karena udara di daerah pantai</li>
                                                        <li>Korosif terhadap air tanah</li>
                                                        <li>Hanya untuk air PAM</li>
                                                        <li>Harga relatif tinggi</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="accordion__single">
                                            <div class="accordion__header" id="headingOne">
                                                <a class="accordion__link" data-target="#accordion7">
                                                    Selengkapnya <i class="fa fa-caret-down"></i>
                                                </a>
                                            </div>
                                            <div id="accordion7" class="accordion__body">
                                                <div class="accordion__text">
                                                    <ul>
                                                        <li>Terkesan kurang eksklusif dibanding stainless steel</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="accordion__single">
                                            <div class="accordion__header" id="headingOne">
                                                <a class="accordion__link" data-target="#accordion8">
                                                    Selengkapnya <i class="fa fa-caret-down"></i>
                                                </a>
                                            </div>
                                            <div id="accordion8" class="accordion__body">
                                                <div class="accordion__text">
                                                    <ul>
                                                        <li>Terkesan kurang eksklusif dibanding stainless steel</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="strong">CARA PERAWATAN:</td>
                                    <td>
                                        <div class="accordion__single">
                                            <div class="accordion__header" id="headingOne">
                                                <a class="accordion__link" data-target="#accordion9">
                                                    Selengkapnya <i class="fa fa-caret-down"></i>
                                                </a>
                                            </div>
                                            <div id="accordion9" class="accordion__body">
                                                <div class="accordion__text">
                                                    <ul>
                                                        <li>Biaya perawatan mahal</li>
                                                        <li>Dinding fiber yang keropos sulit diperbaiki</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="accordion__single">
                                            <div class="accordion__header" id="headingOne">
                                                <a class="accordion__link" data-target="#accordion10">
                                                    Selengkapnya <i class="fa fa-caret-down"></i>
                                                </a>
                                            </div>
                                            <div id="accordion10" class="accordion__body">
                                                <div class="accordion__text">
                                                    <ul>
                                                        <li>Kebocoran di dinding tangki sulit diperbaiki</li>
                                                        <li>Apabila berkarat harus diganti</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="accordion__single">
                                            <div class="accordion__header" id="headingOne">
                                                <a class="accordion__link" data-target="#accordion11">
                                                    Selengkapnya <i class="fa fa-caret-down"></i>
                                                </a>
                                            </div>
                                            <div id="accordion11" class="accordion__body">
                                                <div class="accordion__text">
                                                    <ul>
                                                        <li>Hanya perlu dibersihkan setiap 6 bulan sekali&nbsp;</li>
                                                        <li>Bebas perawatan karena mempunyai pengontrol sinar UV</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="accordion__single">
                                            <div class="accordion__header" id="headingOne">
                                                <a class="accordion__link" data-target="#accordion12">
                                                    Selengkapnya <i class="fa fa-caret-down"></i>
                                                </a>
                                            </div>
                                            <div id="accordion12" class="accordion__body">
                                                <div class="accordion__text">
                                                <ul>
                                                    <li>Hanya perlu dibersihkan setiap 6 bulan sekali&nbsp;</li>
                                                    <li>Bebas perawatan karena mempunyai pengontrol sinar UV</li>
                                                </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="strong">FAKTOR LAINNYA:</td>
                                    <td>
                                        <div class="accordion__single">
                                            <div class="accordion__header" id="headingOne">
                                                <a class="accordion__link" data-target="#accordion13">
                                                    Selengkapnya <i class="fa fa-caret-down"></i>
                                                </a>
                                            </div>
                                            <div id="accordion13" class="accordion__body">
                                                <div class="accordion__text">
                                                <ul>
                                                    <li>Serat fiber yang rontok dapat menyebabkan ganguan kesehatan seperti kanker</li>
                                                    <li>Non SNI, Non FDA approved</li>
                                                </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="accordion__single">
                                            <div class="accordion__header" id="headingOne">
                                                <a class="accordion__link" data-target="#accordion14">
                                                    Selengkapnya <i class="fa fa-caret-down"></i>
                                                </a>
                                            </div>
                                            <div id="accordion14" class="accordion__body">
                                                <div class="accordion__text">
                                                <ul>
                                                    <li>FDA Approved</li>
                                                    <li>JIS Certification</li>
                                                </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="accordion__single">
                                            <div class="accordion__header" id="headingOne">
                                                <a class="accordion__link" data-target="#accordion15">
                                                    Selengkapnya <i class="fa fa-caret-down"></i>
                                                </a>
                                            </div>
                                            <div id="accordion15" class="accordion__body">
                                                <div class="accordion__text">
                                                <ul>
                                                    <li>FDA Approved</li>
                                                    <li>SNI Certification</li>
                                                    <li>FDA Certification</li>
                                                    <li>JIS Certification</li>
                                                    <li>Top Brand Award</li>
                                                </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="accordion__single">
                                            <div class="accordion__header" id="headingOne">
                                                <a class="accordion__link" data-target="#accordion16">
                                                    Selengkapnya <i class="fa fa-caret-down"></i>
                                                </a>
                                            </div>
                                            <div id="accordion16" class="accordion__body">
                                                <div class="accordion__text">
                                                <ul>
                                                    <li>FDA Approved</li>
                                                    <li>FDA Certification</li>
                                                    <li>JIS Certification</li>
                                                    <li>Top Brand Award</li>
                                                    <li>Mesin Otomatis</li>
                                                    <li>Pigmen khusus dari Jepang</li>
                                                </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-right strong">SKOR AKHIR:</td>
                                    <td class="text-center">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </td>
                                    <td class="text-center">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </td>
                                    <td class="text-center">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </td>
                                    <td class="text-center">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="star-desc">
                            <div class="star-info">
                                <i class="fa fa-star"></i>
                                Tidak direkomendasikan
                            </div>
                            <div class="star-info">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                Kurang
                            </div>
                            <div class="star-info">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                Baik
                            </div>
                            <div class="star-info">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                Baik Sekali
                            </div>
                            <div class="star-info">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                Sangat Baik
                            </div>
                        </div> -->
                    </div>
                </div>
                <br/>
                <br/>
                <br/>
                <div class="row justify-content-md-center">
                    <div class="col-md-8"><hr/></div>
                </div>

                <p class="leader text-center">Didukung teknologi terbaru, GRAHAEXCEL juga menyediakan tangki kimia (chemical grade tank) untuk keperluan penyimpanan bahan kimia. Berikut informasi tentang bahan kimia apa saja yang dapat disimpan di tangki kimia EXCEL.</p>
            </div>
        </section>
    </div>
@endsection

@section('script')
<!-- script -->
@endsection