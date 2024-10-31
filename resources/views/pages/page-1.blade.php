@extends('pages.layouts.app')
@section('title', 'PROJECT NAME')

@section('style')
<!-- script -->
<style>
    @media (max-width: 768px) {
        .sidebox img {
            height: auto!important;
            width: 100%;
        }
    }
    
</style>
@endsection

@section('content')
    <div id="content" class="main-content-wrapper">
        <section class="about-1">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h1 style="font-size: 24px; text-transform: uppercase; font-weight: 600; margin-bottom: 20px;">Tentang Grahaexcel</h1>
                        <p class="justifys">Dimulai dari tahun 1969, sebagai pelopor dan inovator dalam industri plastik pertama di Indonesia yang menerapkan Triple Construction System pada produk jual tangki air/tandon air, GRAHAEXCEL PLASTINDO selalu mempersembahkan produk-produk penampungan air/ kimia terbaik bagi masyarakat Indonesia.</p>
                        <p class="justifys">Komitmen kami terhadap konsumen terus kami kembangkan dengan memperkuat team Research & Development serta mengaplikasikan teknologi terbaru. Produk EXCEL diproduksi dengan teknologi tinggi oleh tenaga profesional yang telah melewati Quality Control yang ketat sesuai dengan standar SNI (Standard Nasional Indonesia), JIS (Japan Industrial Standard) dan Food and Drug Association (FDA-USA).</p>
                        <p class="justifys">Konsep utama GRAHAEXCEL adalah menjadi perusahaan dengan fondasi yang kokoh, profesional serta energetik. “Kokoh”, perusahaan yang akan selalu memberikan produk dan layanan yang memuaskan konsumen. “Profesional” – memberikan kontribusi untuk kesehatan dan pertumbuhan masyarakat serta lingkungan dengan kualitas produk yang aman bagi kesehatan. “Energetik” – mempunyai energi ingin selalu berkembang menjadi lebih baik.</p>
                    </div>
                    <div class="col-md-6">
                        <br/>
                        <img src="{{asset('assets/web/img/placeholder/excel-sejak-tahun-1969.jpg')}}" alt="Foto Excel sejak tahun 1969">
                    </div>
                </div>
            </div>
        </section>

        <section class="about-2 bg-grey-2" id="awards">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <img src="{{asset('assets/web/img/kenapa-memilih-produk-excel.jpg')}}" alt="Kenapa Memilih Produk Excel">
                    </div>
                    <div class="col-md-6">
                        <h2>AWARD AND CERTIFICATE</h2>
                        <p>GRAHAEXCEL adalah produsen plastik & stainless steel yang berspesialisasi menggunakan teknologi Roto-moulding, Blow Moulding, dan Co-extursion. Kami memproduksi berbagai macam tangki air dan kimia, atap serta menyediakan layanan custom mouldings.</p>
                        <p>Bekerja dengan berbagai macam bahan baku seperti PE, PP, PU, PC, HMW-HDPE, uPVC, dan stainless steel adalah salah satu keahlian kami. Semua produk EXCEL diproduksi menggunakan 100% resin murni sesuai dengan standard SNI & FDA.</p>
                        <p>Sebagai produsen tangki dengan kapasitas terbesar di Indonesia, kepuasan konsumen & kualitas produk adalah prioritas utama kami. Kami menyambut Anda untuk mencoba produk unggulan kami dan membuktikan komitmen tersebut.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="page-default" id="visi">
            <div class="visi-slider pt--80 pt-sm--60 bg-grey">
                <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="airi-element-carousel blog-carousel dot-style-1 slider-visi"
                            data-slick-options='{
                                "spaceBetween": 0,
                                "slidesToShow": 1,
                                "slidesToScroll": 1,
                                "dots": true,
                                "infinite": true
                            }'
                            data-slick-responsive='[
                                {"breakpoint":991, "settings": {"slidesToShow": 2} },
                                {"breakpoint":767, "settings": {"slidesToShow": 1} }
                            ]'
                        >
                            <div class="item">
                                <div class="row align-items-center">
                                    <div class="col-md-6">
                                        <img src="{{asset('assets/web/img/visi-misi-tahukah-anda.jpg')}}" alt="Tahukah Anda">
                                    </div>
                                    <div class="col-md-6">
                                        <div class="item-visi">
                                            <h2>Tahukah Anda</h2>
                                            <p>Setiap harinya, produk plastik sekali pakai seperti botol, kemasan plastik, sendok, dan lainnya yang terbuat dari petrokimia terbuang dalam jumlah yang sangat besar. Setiap hari juga kita membuang sampah plastik dalam jumlah besar. Indonesia bahkan membuang sekitar 3,2 juta metric ton sampah plastik dan 1.29 juta metric ton di antaranya menjadi sampah laut.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="row align-items-center">
                                    <div class="col-md-6">
                                        <img src="{{asset('assets/web/img/visi-misi-tahukah-anda.jpg')}}" alt="Visi Kami">
                                    </div>
                                    <div class="col-md-6">
                                        <div class="item-visi">
                                            <h2>Visi Kami</h2>
                                            <p>Kami ingin mendorong industri plastik ke arah yang lebih sustainable -- Artinya, keberhasilan suatu produk tidak hanya karena harga murah. Produk yang baik: harus tahan lama, desain cantik, tapi juga ramah lingkungan</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="row align-items-center">
                                    <div class="col-md-6">
                                        <img src="{{asset('assets/web/img/visi-misi-tahukah-anda.jpg')}}" alt="Visi">
                                    </div>
                                    <div class="col-md-6">
                                        <div class="item-visi">
                                            <p>Pakar industri memberitahu kami bahwa tidak mungkin ada jalan tengah bila kami ingin yang terbaik untuk manusia (harga), yang terbaik untuk planet kita (sustainable) dan terbaik untuk perusahaan (profit). GRAHAEXCEL ingin membuktikan bahwa perjalanan selaras antara ketiganya dapat dilakukan, maka:</p>
                                            <p>GRAHAEXCEL membangun brand berdasarkan R&D untuk selalu berinovasi dengan teknologi baru</p>
                                            <p>Berkomitmen untuk memberikan produk berkualitas dengan harga sesuai.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="row align-items-center">
                                    <div class="col-md-6">
                                        <img src="{{asset('assets/web/img/visi-misi-tahukah-anda.jpg')}}" alt="Visi">
                                    </div>
                                    <div class="col-md-6">
                                        <div class="item-visi">
                                            <p>"Kami telah belajar dari pengalaman, hal ini tidak mudah, namun kami akan terus mengejar visi ini untuk Indonesia tercinta dan jutaan orang yang menggunakan produk kami setiap harinya."</p>
                                            <p>-Nattalia Cipto<br/>CEO GRAHAEXCEL</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="row align-items-center">
                                    <div class="col-md-6">
                                        <img src="{{asset('assets/web/img/visi-misi-tahukah-anda.jpg')}}" alt="Tanah Air">
                                    </div>
                                    <div class="col-md-6">
                                        <div class="item-visi">
                                            <h2>Tanah Air</h2>
                                            <p>Indonesia adalah negara kelima di dunia yang menyumbang carbon footprint.</p>
                                            <p>Dengan menggunakan produk yang tahan lama, secara otomatis kita juga memberi dampak yang baik pada lingkungan.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-md-center">
                    <div class="col-md-8 text-center">
                            <p class="text-center">Pada akhirnya, kami hanyalah fasilitator.</p>
                            <p class="text-center">Proses yang terjadi di komunitas EXCEL adalah hasil kerja keras dari para pekerja kami, dan Anda sebagai konsumen yang mempercayakan produk dari GRAHAEXCEL sebagai brand pilihan Anda.</p>
                            <p class="text-center">Sesuai terjemahan kata EXCEL yang artinya “to go beyond good”. Mari kita bersama membuat</p>
                            <p class="text-center">perubahan untuk industri yang lebik baik sebagai penghargaan ke tanah air tercinta.</p>
                            <p class="text-center">Baik itu dari GRAHAEXCEL ataupun brand lainnya, kami berharap Anda dapat terus mendukung brand yang mementingkan kualitas dan lingkungannya.</p>
                            <p class="text-center" id="career">www.grahaexcel.com</p>
                    </div>
                </div>
                <br/>
                <br/>
                <br/>
            </div>
            
            <div class="bg--white">
                <div class="row align-items-center">
                    <div class="col-md-6 sidebox">
                        <img src="{{asset('assets/web/img/placeholder/hello-and-welcome.jpg')}}" alt="Hello and Welcome">
                    </div>
                    <div class="col-md-6 sidebox-ctx">
                        <br/>
                        <h2>KARIR</h2>
                        <p>Bila Anda mempunyai keinginan untuk menjadi lebih baik dan siap akan tantangan, Jangan ragu untuk bergabung dengan tim kami!</p>
                        <p>Kirim CV/Resume ke :<br/>Jl. Mangga Besar Raya No.4 DD – Jakarta Barat, 11180<br/>Email :<br/>info@grahaexcel.com<div id="contact-us"></div></p>
                        <br/>
                    </div>
                </div>
            </div>

            <div class="row align-items-center bg-grey">
                <div class="col-md-6 sidebox-ctx">
                    <h2>KONTAK</h2>
                    <p>Kepada seluruh pelanggan, waspadailah penipuan! Lakukan transaksi pembayaran melalui rekening perusahaan yang resmi PT. GRAHAEXCEL PLASTINDO</p>
                    <p>xxx-xxx-2288 Bank BCA/ PT Grahaexcel Plastindo</p>
                    <p>Teliti sebelum membeli, hubungi customer care kami untuk memastikan barang asli</p>
                    <p>Untuk layanan konsumen, pertanyaan mengenai produk, custom orders, distributor, dan lainnya, hubungi kami di :</p>
                    <p>
                    Website Resmi<br/>
                    www.grahaexcel.com<br>
                    www.skydeckroof.com
                    </p>
                    <p>
                        Kampung Periuk RT. 001/ RW. 04 Desa Periuk, Tangerang 15131, Indonesia
                    </p>
                    <p>
                        <a href="http://www.youtube.com/channel/UCgiAUAUXkWd7G2aQ3IPqA2A">Graha Excel Youtube</a><br/>
                        Dicari Agen &amp; Distributor di seluruh Indonesia!!
                    </p>
                    <p>
                        Customer Care<br/>
                        <a href="tel:+62216393394">+62 21 – 6393394 (hotline)</a>.<br/>
                        +62 21 – 6393396 (fax).<br/>
                        <a href="mailto:info@grahaexcel.com">info@grahaexcel.com</a><br/>
                        Monday – Friday 8 AM – 4.30 PM (WIB), Saturday 8 AM – 2 PM (WIB).
                    </p>
                </div>
                <div class="col-md-6 sidebox">
                    <img src="{{asset('assets/web/img/new/hubungi-excel.jpg')}}" alt="Hubungi Excel" style="height:690px;width:100%;object-fit:cover;">
                </div>
            </div>
        </section>
    </div>
@endsection

@section('script')
<!-- script -->
@endsection