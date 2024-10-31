@extends('pages.layouts.app')
@section('title', 'PROJECT NAME')

@section('style')
<!-- script -->
@endsection

@section('content')
    <div id="content" class="main-content-wrapper">
        <section class="page-default">
            <div class="row align-items-center" style="background:#EBE6DB">
                <div class="col-md-6 sidebox-ctx single-wp">
                    <h1 style="font-size: 42px;margin-bottom: 30px;">PROSES KERJA<br/>YANG TRANSPARAN</h1>
                    <p class="lead f-6">Caranya:<br/>Bekerja sama dengan suplier terpercaya dan menggunakan material terbaik + inovasi melalui <i>research &amp; development + ethical pricing</i></p>
                </div>
                <div class="col-md-6 sidebox">
                    <img src="{{asset('assets/web/img/placeholder/proses-transparansi-excel.jpg')}}" alt="Transparansi Excel">
                </div>
            </div>

            <div class="row align-items-center">
                <div class="col-md-6 sidebox">
                    <img src="{{asset('assets/web/img/placeholder/proses-produksi-yang-transparan.jpg')}}" alt="Proses Produksi yang Transparan">
                </div>
                <div class="col-md-6 sidebox-ctx">
                    <h3>PROSES PRODUKSI<br/>YANG TRANSPARAN</h3>
                    <p class="lead">Di GRAHAEXCEL, kami ingin anda menentukan produk untuk rumah semudah menikmati akhir pekan dengan keluarga. Karena itu kami berbagi cerita tentang proses pembuatan, material, harga sampai ke distribusi.</p>
                    <p class="lead">Caranya :  Bekerja sama dengan suplier terpercaya dan menggunakan material terbaik + inovasi melalui research & development + ethical pricing<p>
                    <p class="lead">Inilah cara baru yang kami sebut proses yang transparan.</p>
                </div>
            </div>

            <div class="row align-items-center">
                <div class="col-md-6 sidebox-ctx">
                    <h4>KUALITAS</h4>
                    <h3>Designed to last</h3>
                    <p class="lead">DI GRAHAEXCEL, kami bukan penggemar kemasan dan gimmick. Kami ingin Anda dapat menggunakan produk kami dalam jangka waktu yang lama. Itulah sbabnya kami hanya menggunakan materila premium seperti AISI 304 Stainless Steel, dan plastik HMW-HDPE.</p>
                </div>
                <div class="col-md-6 sidebox">
                    <img src="{{asset('assets/web/img/placeholder/excel-aisi-304.jpg')}}" alt="Excel AISI 304">
                </div>
            </div>

            <div class="row align-items-center">
                <div class="col-md-6 sidebox">
                    <img src="{{asset('assets/web/img/placeholder/excel-the-ethical-way.jpg')}}" alt="The Ethical Way - Excel">
                </div>
                <div class="col-md-6 sidebox-ctx">
                    <h3>ETHICAL PRICING</h3>
                    <p class="lead">Dengan menggunakan material terbaik, kami memutar otak untuk memberikan Ethical Pricing. Kami percaya dengan menggunakan kemasan on point, mengurangi desain yang kompleks, meninggalkan bahan kemasan berat seperti karton, box, label, dan segala sesuatu yang ‘pasti akan dibuang’ setelah sekali pakai akan membuat harga lebih bersaing. Goal kami adalah menjaga produk di dalamnya hanya dengan menggunakan kemasan yang dibutuhkan.</p>
                    <p class="lead">Simple Packaging = Reduce Waste = Better Pricing</p>
                </div>
            </div>

            <div class="tenaga-kerja" style="background-image: url({{url('public/main/img/tenaga.jpg')}})">
                <div class="container">
                    <div class="row justify-content-md-center text-center">
                        <div class="col-md-8">
                            <h2 style="font-weight: bold;">TENAGA KERJA</h2>
                            <br/>
                            <h5>Tenaga kerja kami adalah inti dari GRAHAEXCEL. Kami menghargai dan berkomitmen untuk memberikan kelayakan; upah yang layak, jam kerja yang masuk akal, linkungan yang mendukung.</h5>
                            <br/>
                            <h5>Kami selalu memberikan yang pantas kami berikan. Dengan apresiasi ini, pekerja kami bekerja efisien dan memberikan sepenuhnya.</h5>
                            <br/>
                            <h5>Dengan kerja sama yang baik ini, kami bisa memotong jam kerja tidak efisien dan ongkos produksi akibat kelalaian serta hal lainya yang tidak diperlukan.</h5>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row align-items-center">
                <div class="col-md-6 sidebox-ctx">
                    <h3>TENTANG WARNA</h3>
                    <p>Di tahap awal produksi, kami bekerja sama dengan 6 vendor pigment untuk memastikan agar warna di tangki air tidak luntur walaupun dijemur di bawah terik matahari selama bertahun-tahun dan warna tetap cantik & menarik.</p>
                    <p>Pastinya, kami harus memastikan agar semua warna yang dipakai aman dipakai untuk tempat penampungan air maupun makanan. Proses nya sangat sulit dan melelahkan.</p>
                    <p>Kami melakukan perjalanan jauh ke banyak tempat dan akirnya menemukan inspirasi.</p>
                    <p>Dimulailah produksi HPPM – High Performance Pigments for Masterbatch; kinerja warna pigment sesuai standard di Jepang dan GRAHAEXCEL tentunya.</p>
                    <p>Untuk memastikan warna tetap terjaga dan aman untuk kesehatan. Tahun 2011, kami bekerja-sama untuk meluncurkan produk tangki air blow series. Sejak itu kami tidak pernah pindah ke vendor lainya.</p>
                </div>
                <div class="col-md-6 sidebox">
                    <img src="{{asset('assets/web/img/placeholder/tentang-warna.jpg')}}" alt="Tentang Warna">
                </div>
            </div>

            <div class="row align-items-center">
                <div class="col-md-6 sidebox">
                    <img src="{{asset('assets/web/img/placeholder/pigment-lab-japan.jpg')}}" alt="Pigment Lab Japan">
                </div>
                <div class="col-md-6 sidebox-ctx">
                    <h3>PIGMENT LAB</h3>
                    <p>Kami sedikit obsesif dan selalu memberikan perhatian khusus ke detail. Karena itu, Kami mencari supplier terbaik di seluruh dunia agar selalu dapat memberikan Yang terbaik untuk anda.</p>
                    <p>Berikut adalah 2 warna kebanggaan GRAHAEXCEL. Pilihan warna ini menunjukan kualitas pigment yang GRAHAEXCEL gunakan. Belum ada pabrikan lain yang dapat menandingi warna secantik tangki air kami.</p>
                    <p>Yang terpenting: pigment ini aman bagi kesehatan</p>
                </div>
            </div>

            <img src="{{asset('assets/web/img/placeholder/mandarin-orange-electric-blue.jpg')}}" alt="Warna Mandarin Orange dan Electric Blue">

            <div class="container">
                <div class="row ptb--80 ptb-md--60">
                    <div class="col-md-6 mb-sm--40">
                        <img src="{{asset('assets/web/img/placeholder/bahan-dasar-yang-digunakan.jpg')}}" alt="Bahan Dasar yang Digunakan">
                        <br/>
                        <br/>
                        <br/>
                        <div>
                            <h4>MATERIAL</h4>
                            <h3>BAHAN BAKU</h3>
                            <p>Ketika anda menggunakan bahan makanan berkualitas, Anda tidak memerlukan bahan mewah lainya untuk membuat makanan yang nikmat. Hal ini serupa dengan produk kami. Kami mengurangi biaya extra di kemasaan yang akan dibuang dan hanya akan membuat anda membayar lebih mahal. Sebagai gantinya, kami mengunakan bahan dasar terbaik untuk memberi anda produk berkualitas dan tahan lama. Sebab, kami percaya produk berkualitas tidak selalu harus dibayar dengan harga extra. Berikut detail bahan baku yang kami pakai untuk seluruh produk GRAHAEXCEL, dimulai dari Stainless Steel dan semua Polymer yang kami gunakan.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="airi-element-carousel banner-carousel nav-style-2 pd-20"
                            data-slick-options='{
                                "slidesToShow": 1,
                                "slidesToScroll": 1,
                                "autoplaySpeed": 5000,
                                "speed": 1000,
                                "arrows": true,
                                "prevArrow": "dl-icon-left",
                                "nextArrow": "dl-icon-right"
                            }'
                        >
                            <div class="item">
                                <div class="banner-box banner-type-4 banner-hover-1">
                                    <div class="banner-inner">
                                        <div class="banner-info">
                                            <h4>Material</h4>
                                            <h2>STAINLESS AISI 304</h2>
                                            <p>Sejak tahun 1969, kami terus berinovasi untuk mencari produk terbaik bagi anda. Berbagai tipe Stainless dari berbagai negara telah kami uji ketahananya sebelum memutuskan untuk menggunakan Stainless Steel AISI 304.</p>
                                            <p>Dengan komposisi 18% kromium, 8% nikel dan tidak mengandung bahan berbahaya seperti Merkuri dan Zinc, bahan kami terjamin aman bagi kesehatan anda. Disisi lain, penampilan elegan dari Tangki Excel juga didukung dengan kekuatan, tahan lama, anti korosi, bebas lumut dan bahan non magnetik.</p>
                                            <p>Fun Facts: Cobalah menaruh magnet pada tangki stainless steel anda, bila magnet tersebut menempel berarti material yang digunakan bukanlah AISI 304 dan tidak baik untuk kesehatan anda.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="banner-box banner-type-4 banner-hover-1">
                                    <div class="banner-inner">
                                        <div class="banner-info">
                                            <h4>Material</h4>
                                            <h2>HMW-HDPE<br/>UNTUK TANGKI AIR BLOW</h2>
                                            <p>Tangki Air Blow Series kami menggunakan bahan HMW-HDPE (High Molecular Weight – High Density Polyethylene) yang mempunyai ikatan molekul extra padat sehingga meningkatkan kekuatan plastik menjadi 2 kali lipat dari plastik PE yang ada dipasaran.</p>
                                            <p>Berkat kekuatan ekstra dari molekul tambahan, plastic HDPE dapat menggantikan material yang lebih berat dan mengurangi dampak buruk bagi lingkungan. Contohnya 60 gram plastic HDPE dapat menampung 4 liter susu dan dapat mengurangi penggunaan pemakaian plastik, limbah, energi dan potensi global warming dari alternatif lainya.</p>
                                            <p>Kami juga memilih HDPE karena bahan ini tidak mudah berakhir di Tempat Pembuangan. Mudahnya mendaur ulang jenis plastik ini membuat hampir semua program daur ulang menerima plastik HDPE dan permintaanya terus menerus melonjak. Dengan menggunakan bahan plastik ini, kami tetap bisa memenuhi janji kami untuk selalu memberikan bahan terbaik yang juga berdampak positif bagi lingkungan.</p>
                                            <p>Kelebihan HDPE:
                                                <ul>
                                                    <li>• Flexible, ringan tetapi sangat kuat</li>
                                                    <li>• Lebih kuat dan tahan lama dibanding PE biasa</li>
                                                    <li>• Aman untuk iklim ekstrim seperti Indonesia</li>
                                                    <li>• Tahan terhadap bahan kimia beroksidan lemah dan reducing agents</li>
                                                    <li>• Tidak berbau, tidak berasa dan tahan korosi</li>
                                                    <li>• FDA Approved</li>
                                                </ul>
                                            </p>
                                            <p>Fun Facts: Uji ketahanan tangki air Excel – blow series dengan cara memukul sekuat-kuatnya.</p>
                                        </div>
                                    </div>
                                </div> 
                            </div>
                            <div class="item">
                                <div class="banner-box banner-type-4 banner-hover-1">
                                    <div class="banner-inner">
                                        <div class="banner-info">
                                            <h4>Material</h4>
                                            <h2>POLYURATHANE – COOL BOX</h2>
                                            <p>Polyurethane untuk Cool Box adalah polymer khusus yang mempunyai resistensi tinggi terhadap benturan, minyak, solvents dan dapat menjaga suhu udara didalam box hingga 48 jam.</p>
                                            <p>Polyurethane mempunyai peran penting untuk melestarikan lingkungan kita. Lapisan Polyurethane memastikan umur sebuah produk diperpanjang jauh diatas batas pemakaian seharusnya sehingga satu produk bisa dipakai dalam jangka waktu yang sangat panjang.</p>
                                            <p>Grahaexcel sangat mendukung environmental sustainability dan kami menggunakan bahan ini karena selain pengunaanya yang menghemat berbagai energi, Satu produk saja dapat di pakai ulang dengan berbagai fungsi contohnya membuat produk bertahan sangat lama, membuat produk baru, menghemat pemakaian energi, bahkan dapat membuat energi panas dengan petrochemical yang terdapat didalamnya.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="banner-box banner-type-4 banner-hover-1">
                                    <div class="banner-inner">
                                        <div class="banner-info">
                                            <h4>Material</h4>
                                            <h2>POLYPROPYLENE (PP)</h2>
                                            <p>Atap lembaran dan gelombang membutuhkan plastik yang mempunyai titik leleh tinggi untuk cuaca iklim extrim seperti di Indonesia. Ekspansi termal menyebabkan pemuaian dan penyusutan di atap menjadi masalah yang lebih sulit untuk dikendalikan. Disaat kami mencari plastik yang paling ideal dengan masalah ini, kami dapat menyimpulkan bahwa Polypropylene adalah solusi kami. Dengan pemakaian bahan polypropylene, kami dapat mengendalikan ekspansi termal tersebut dengan lebih mudah sehingga atap lembaran dan gelombang Excel tidak akan meleleh ataupun pecah.</p>
                                            <p>Diproses dengan cara polymerizing propylene, plastik PP mempunyai banyak kesamaan dengan HDPE (High Density Polyethylene) namun lebih kaku/kuat dibanding (PE) biasa.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="banner-box banner-type-4 banner-hover-1">
                                    <div class="banner-inner">
                                        <div class="banner-info">
                                            <h4>Material</h4>
                                            <h2>POLYCARBONATE</h2>
                                            <p>Apakah kaca anti peluru dibuat dari kaca atau plastik? Jawabanya adalah iya. Biasanya kaca anti peluru dibuat menggunakan kedua bahan ini, dan plastik yang digunakan adalah Polycarbonate.</p>
                                            <p>Polycarbonate adalah thermoplastic transparant yang sangat kuat, stabil, tidak beracun dan dapat menahan suhu hingga 280°F dan serendah -40 °F. Sewaktu kami mencari bahan yang dapat mengantarkan cahaya, Polycarbonate adalah jawaban kami. Mirip seperti kaca, bahan ini transparan dan cocok untuk pencahayaan.</p>
                                            <p>Polycarbonate tidak dapat hancur dan 10 kali lebih kuat dari kaca atau plastik biasa walaupun bahan ini lebih ringan dan tipis. Dengan pemakaian bahan ini, kami dapat memberikan anda penerangan yang aman, kuat dan tahan lama untuk anda.</p>
                                            <p>Kelebihan utama dari Atap Polycarbonate adalah ringan (kira-kira 1/10 dari berat kaca) tapi kuat. Berikut adalah sifat-sifat lain dari Polycarbonate :</p>
                                            <p>
                                                <ul>
                                                    <li>• Flexible tanpa merubah bentuk.</li>
                                                    <li>• Kuat.</li>
                                                    <li>• Transparant.</li>
                                                    <li>• Tahan terhadap panas.</li>
                                                    <li>• Filter terhadap UV rays.</li>
                                                    <li>• Memiliki variasi warna yang cantik.</li>
                                                    <li>• Posisi Tegak</li>
                                                </ul>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="banner-box banner-type-4 banner-hover-1">
                                    <div class="banner-inner">
                                        <div class="banner-info">
                                            <h4>Material</h4>
                                            <h2>UPVC</h2>
                                            <p>UPVC adalah Polivinyl Chloride yang diperkuat dengan proses dan teknik tertentu yang dinamakan Unplastized menjadikanya lebih kuat daripada PVC biasa. Dipakai di Atap UPVC EXCELtech dan Atap UPVC Eliteroof. Unplastizied Polivinyl Chloride dalam 1 dekade belakangan sangat populer digunakan di negara maju seperti Amerika, Eropa, Jepang dan Korea karena ketahananya dan kemampuanya untuk menyerap panas serta mempertahankan suhu udara didalam ruangan. UPVC juga mempunya sifat sebagai berikut :</p>
                                            <p>
                                                <ul>
                                                    <li>• Kuat dan tahan lama.</li>
                                                    <li>• Tahan api.</li>
                                                    <li>• Dapat menurunkan suhu ruangan hingga 4°C dibanding suhu luar.</li>
                                                    <li>• Tahan terhadap korosi dan oksidasi yang disebabkan oleh bahan kimia.</li>
                                                    <li>• Cocok untuk wilayah bersuhu extrim seperti Indonesia.</li>
                                                </ul>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row" id="faq">
                    <div class="col-md-12 text-center">
                        <h3>F.A.Q</h3>
                        <br/>
                        <br/>
                    </div>
                    <div class="col-md-4">
                        <div class="accordion__single mb--50 mb-lg--75 mb-md--55 mb-sm--40">
                            <div class="accordion__header" id="headingOne">
                                <a class="accordion__link" data-target="#accordion1">
                                Mengapa Tangki Excel adalah pilihan terbaik untuk tempat penampungan air dan kimia?
                                </a>
                            </div>
                            <div id="accordion1" class="accordion__body">
                                <div class="accordion__text">
                                    <ul>
                                        <li>• Tangki Excel dibuat sesuai dengan Standard Nasional Indonesia (SNI)</li>
                                        <li>• Tangki HMW-HDPE Excel terbukti 2 kali lebih kuat dari Tangki PE merek apapun yang ada di Indonesia saat ini</li>
                                        <li>• Tangki Excel dibuat menggunakan pigment dan additive khusus dari Jepang sehingga warna tidak mudah luntur</li>
                                        <li>• Tangki Air Excel dilengkapi dengan lapisan pengontrol lumut</li>
                                        <li>• Harga Tangki HMW-HDPE dapat dikatakan lebih economical dibanding harga fiberglass ataupun Tangki Stainless Steel</li>
                                        <li>• Tangki Excel dibuat tanpa sambungan sehingga tangki bebas bocor dan memudahkan anda untuk membersihkan tangki</li>
                                        <li>• Tangki Excel memiliki ketahanan benturan yang sangat tinggi • Memiliki ketahanan terhadap berbagai macam bahan kimia</li>
                                        <li>• Tangki Excel tahan korosi</li>
                                        <li>• Tahan terhadap korosi</li>
                                        <li>• Mudah dalam perawatan</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="accordion__single mb--50 mb-lg--75 mb-md--55 mb-sm--40">
                            <div class="accordion__header" id="headingOne">
                                <a class="accordion__link" data-target="#accordion2">
                                Bahan Kimia apa yang dapat disimpan di Tangki/ Tandon Excel?
                                </a>
                            </div>
                            <div id="accordion2" class="accordion__body">
                                <div class="accordion__text">
                                <p>Tangki/ Tandon Excel merupakan pilhan yang tepat untuk digunakan sebagai tangki penyimpanan bahan kimia. Kumpulkan informasi lengkap mengenai bahan kimia yang akan digunakan seperti suhu dan konsentrasi. Contoh: Acetic Acid CH3CO2H, konsentrasi 30%, suhu 21 °C. Untuk informasi lebih lanjut bisa dilihat di tabel Ketahanan Produk Terhadap Bahan Kimia</p>
                                <p>Bila informasi tidak dapat ditemukan, anda dapat menhubungi Customer Care Tangki Excel di 021-6393394 dan kami akan membantu anda secepatnya.</p>
                                <p><em>*Kami mempunyai tangki standar kimia dan kimia khusus (untuk produk kimia dengan suhu panas yang tinggi dan produk kimia dengan tingkat korosif yang tinggi)</em></p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion__single mb--50 mb-lg--75 mb-md--55 mb-sm--40">
                            <div class="accordion__header" id="headingOne">
                                <a class="accordion__link" data-target="#accordion7">
                                Berapa suhu maksimum yang mampu ditahan oleh Tangki Excel?
                                </a>
                            </div>
                            <div id="accordion7" class="accordion__body">
                                <div class="accordion__text">
                                <p>Sesuai dengan standar ASTM, Tangki/ Toren Excel direkomendasikan untuk pemakaian suhu maksimum 60 °C. Apabila akan digunakan untuk suhu diatas 60 °C, anda dapat menghubungi Customer Care EXCEL di 021-6393394 dan kami akan membuatkan tangki dengan standard kimia khusus untuk anda.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion__single mb--50 mb-lg--75 mb-md--55 mb-sm--40">
                            <div class="accordion__header" id="headingOne">
                                <a class="accordion__link" data-target="#accordion10">
                                Berapa lama garansi Tangki Excel?
                                </a>
                            </div>
                            <div id="accordion10" class="accordion__body">
                                <div class="accordion__text">
                                <p>Tangki Stainless Steel Excel bergaransi 10 tahun, Tangki Roto Excel bergaransi 10 tahun dan Tangki HMW-HDPE Excel bergaransi 12 tahun. EXCEL memberikan Garansi Terbatas kepada pembeli produk kami. Excel menjamin selama masa garansi (dalam waktu yang wajar dengan penggunaan yang wajar) akan memperbaiki cacat pada tangki apabila dianggap perlu.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion__single mb--50 mb-lg--75 mb-md--55 mb-sm--40">
                            <div class="accordion__header" id="headingOne">
                                <a class="accordion__link" data-target="#accordion13">
                                Apakah Tangki Excel dapat dipesan dengan aksesoris/fitting tambahan serta standard lebih dari yang biasanya?
                                </a>
                            </div>
                            <div id="accordion13" class="accordion__body">
                                <div class="accordion__text">
                                <p>Ya. EXCEL memberikan layanan khusus untuk penambahan lubang fitting/aksesoris serta dapat dipesan sesuai dengan spesifikasi kebutuhan konsumen. Hubungi Customer Care di 021-6393394 untuk informasi lebih lanjut.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion__single mb--50 mb-lg--75 mb-md--55 mb-sm--40">
                            <div class="accordion__header" id="headingOne">
                                <a class="accordion__link" data-target="#accordion16">
                                Bagaimana cara menentukan kapasitas tangki yang tepat dirumah?
                                </a>
                            </div>
                            <div id="accordion16" class="accordion__body">
                                <div class="accordion__text">
                                <p>Normalnya per orang menggunakan 250 liter air sehari untuk mandi, mencuci dan lainya. Bila rumah anda berpenghuni 8 orang maka tangki air yang tepat untuk anda berukuran 250 liter x 8 orang = 2000 liter. Penjelasan lebih lanjut tentang ukuran yang tepat dapat dilihat di: http://www.grahaexcel.com/id/size-tepat</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="accordion__single mb--50 mb-lg--75 mb-md--55 mb-sm--40">
                            <div class="accordion__header" id="headingOne">
                                <a class="accordion__link" data-target="#accordion3">
                                Bahan apa yang EXCEL gunakan untuk memproduksi Tangki?
                                </a>
                            </div>
                            <div id="accordion3" class="accordion__body">
                                <div class="accordion__text">
                                    <p>Tangki Excel dibuat dengan 2 tipe bahan.</p>
                                    <ul>
                                        <li>•Tangki EXCEL (Roto) dengan 100% Polyethylene murni (tanpa campuran) biasa digunakan sebagai tangki air dan tangki kimia. Memiliki ketahanan terhadap benturan dan radiasi sinar UV</li>
                                        <li>•Tangki EXCEL (Blow) dan dibuat dengan bahan khusus HMW-HDPE (High Molecule Weight- High Density Polyethylene) yang saat ini hanya dimiliki oleh EXCEL. Terbukti 2 kali lebih kuat dari tangki plastik apapun yang sekarang tersedia di Indonesia, 2 kali lebih tahan benturan, 2 kali lebih tahan terhadap sinar UV dan 2 kali lebih tahan terhadap lumut, jamur dan kotoran.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="accordion__single mb--50 mb-lg--75 mb-md--55 mb-sm--40">
                            <div class="accordion__header" id="headingOne">
                                <a class="accordion__link" data-target="#accordion4">
                                Apa yang membedakan Tangki Excel dengan Tangki merek lainya?
                                </a>
                            </div>
                            <div id="accordion4" class="accordion__body">
                                <div class="accordion__text">
                                <p>EXCEL menjamin kualitas produk tangki kami. Kami tantang semua merek di Indonesia untuk dipakai secara bersamaan sebagai tangki air dan tangki kimia. Perbedaan kualitas Tangki EXCEL dan tangki lainya dapat dilihat setelah 2 tahun untuk air dan 1 tahun untuk kimia. Setelah 2 tahun pemakaian:</p>
                                <ul>
                                    <li>• Tangki merek lain sudah mulai lembek dinding nya</li>
                                    <li>• Tangki merek lain sudah korosif • Warna tangki merek lain sudah mulai luntur (ini berbahaya bagi kesehatan)</li>
                                </ul>
                                </div>
                            </div>
                        </div>

                        <div class="accordion__single mb--50 mb-lg--75 mb-md--55 mb-sm--40">
                            <div class="accordion__header" id="headingOne">
                                <a class="accordion__link" data-target="#accordion8">
                                Apakah Tangki Plastik Excel dapat digunakan sebagai tempat penyimpanan BBM ?
                                </a>
                            </div>
                            <div id="accordion8" class="accordion__body">
                                <div class="accordion__text">
                                <p>Tangki Roto & Tangki HMW-HDPE Excel dapat dipakai sebagai tempat penyimpanan solar. Sedangkan Tangki Stainless Steel Excel dapat digunakan sebagai tempat penyimpanan minyak. Untuk bahan bakar minyak lainya, anda dapat menghubungi Customer Care EXCEL di 021-6393394 atau email di info@grahaexcel.com</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion__single mb--50 mb-lg--75 mb-md--55 mb-sm--40">
                            <div class="accordion__header" id="headingOne">
                                <a class="accordion__link" data-target="#accordion11">
                                Berapa lama masa penggunaan Tangki Excel yang direkomendasikan?
                                </a>
                            </div>
                            <div id="accordion11" class="accordion__body">
                                <div class="accordion__text">
                                <p>Lama penggunaan tangki/ tandon/ toren biasa dipengaruhi oleh beberapa faktor. Contoh: jenis produk yang disimpan (air/kimia/gula ataupun makanan), suhu produk, konsentrasi produk yg disimpan, cara pemasangan tangki serta pipa penyambung. Biasanya tangki rusak karena kesalahan dalam pemasangan tangki, pastikan anda memahami instruksi cara pemasangan tangki yang tertera pada sticker produk Tangki Excel. Tangki yang dipakai untuk menyimpan air pasti akan lebih tahan daripada tangki yang dipakai untuk menyimpan bahan kimia. Tangki yang digunakan didalam ruangan juga akan lebih tahan dibanding tangki yang ter-ekspose langsung oleh radiasi sinar UV. Semua ini dapat mempengaruhi faktor umur tangki.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion__single mb--50 mb-lg--75 mb-md--55 mb-sm--40">
                            <div class="accordion__header" id="headingOne">
                                <a class="accordion__link" data-target="#accordion14">
                                Dimana saya dapat menghubungi Customer Care/ Technical Support Excel?
                                </a>
                            </div>
                            <div id="accordion14" class="accordion__body">
                                <div class="accordion__text">
                                <p>EXCEL dapat dihubungi melalui email di info@grahaexcel.com serta telepon di 021-6393394. Technical support akan menjawab pertanyaan anda dalam jangka waktu 24-48 jam.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion__single mb--50 mb-lg--75 mb-md--55 mb-sm--40">
                            <div class="accordion__header" id="headingOne">
                                <a class="accordion__link" data-target="#accordion17">
                                Dimana saya bisa mendapatkan Tangki EXCEL?
                                </a>
                            </div>
                            <div id="accordion17" class="accordion__body">
                                <div class="accordion__text">
                                <p>Tangki Excel dapat dibeli di toko toko bangunan terdekat, untuk petunjuk toko lebih lanjut anda dapat menghubungi Customer Care di 021-6393394 dan kami akan memberikan arahan ke toko bangunan terkdekat dari hunian anda.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="accordion__single mb--50 mb-lg--75 mb-md--55 mb-sm--40">
                            <div class="accordion__header" id="headingOne">
                                <a class="accordion__link" data-target="#accordion5">
                                Berapa ketebalan yang baik untuk tangki?
                                </a>
                            </div>
                            <div id="accordion5" class="accordion__body">
                                <div class="accordion__text">
                                    <p>Tangki/ Tandon Excel dibuat sesuai dengan Standar Nasional Indonesia (SNI). Namun ketebalan pada dinding sebenarnya tidak bisa dijadikan indikator dalam menentukan kualitas dari tangki. Produsen lain dapat membuat dinding tangki lebih tebal tapi daya dan kekuatan pasti tidak akan lebih baik dari kualitas Tangki Excel. Untuk membuat tangki yang baik ditentukan oleh bahan baku, teknologi mesin serta cetakan. Bahan baku kualitas rendah akan membutukan dinding tangki yang lebih tebal. Sedangkan dengan formulasi yang tepat, EXCEL menjamin bahwa tangki kami merupakan tangki terkuat.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion__single mb--50 mb-lg--75 mb-md--55 mb-sm--40">
                            <div class="accordion__header" id="headingOne">
                                <a class="accordion__link" data-target="#accordion6">
                                Apakah Tangki Excel dapat digunakan sebagai tempat penampungan air minum?
                                </a>
                            </div>
                            <div id="accordion6" class="accordion__body">
                                <div class="accordion__text">
                                    <p>Tangki/ Toren Excel sangat cocok dan direkomendasikan sebagai tempat penampungan air minum maupun makanan karena seluruh bahan baku yang digunakan telah memenuhi standar FDA dan mempunyai sertifikat FDA-USA. Selain itu Excel menggunakan bahan dasar terbaik sehingga aman bagi kesehatan.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion__single mb--50 mb-lg--75 mb-md--55 mb-sm--40">
                            <div class="accordion__header" id="headingOne">
                                <a class="accordion__link" data-target="#accordion9">
                                Apakah Tangki Excel dapat ditanam untuk tangki bawah tanah?
                                </a>
                            </div>
                            <div id="accordion9" class="accordion__body">
                                <div class="accordion__text">
                                <p>Tidak. Gunakan Tangki Tanam Excel untuk aplikasi tangki bawah tanah.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion__single mb--50 mb-lg--75 mb-md--55 mb-sm--40">
                            <div class="accordion__header" id="headingOne">
                                <a class="accordion__link" data-target="#accordion12">
                                Apakah suhu beku mempengaruhi Tangki Excel?
                                </a>
                            </div>
                            <div id="accordion12" class="accordion__body">
                                <div class="accordion__text">
                                <p>Suhu dibawah 0 °C tidak berpengaruh terhadap Tangki Excel namun dapat berpengaruh terhadap produk cairan didalam tangki. Sisakan sedikit ruangan untuk pemuaian pada saat cairan mencair atau pada saat pembekuan terjadi.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion__single mb--50 mb-lg--75 mb-md--55 mb-sm--40">
                            <div class="accordion__header" id="headingOne">
                                <a class="accordion__link" data-target="#accordion15">
                                Berapa kapasitas tangki yang sesuai untuk kebutuhan saya?
                                </a>
                            </div>
                            <div id="accordion15" class="accordion__body">
                                <div class="accordion__text">
                                <p>Umum nya seseorang membutuhkan 250 liter air sehari untuk kebutuhan dasar seperti: flushing toilet 15 liter, mandi 100 liter, dan lainya. Direkomendasikan untuk memakai tangki 1000 liter untuk rumah berpenghuni 4 orang agar pompa air menyala hanya 1X per harinya. Ini penting untuk menghemat listrik dirumah. Info lebih lanjut dapat dilihat di http://www.grahaexcel.com/id/size-tepat</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@section('script')
<!-- script -->
@endsection