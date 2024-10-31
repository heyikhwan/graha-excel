@extends('pages.layouts.app')
@section('title', 'PROJECT NAME')

@section('style')
<!-- script -->
@endsection

@section('content')
    <div id="content" class="main-content-wrapper">
        <section class="page-padding">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-xs-12 text-center">
                        <h1 style="font-size:24px; font-weight: bold; margin-bottom: 20px;">Cara Memilih Ukuran Tangki Air Excel</h1>
                    </div>
                </div>
                <div class="row justify-content-center align-items-center text-center">
                    <div class="col-md-8">
                        <h3>GRAHAEXCEL menyediakan berbagai macam ukuran tangki air dan kimia dari kapasitas 300 liter – 22.500 liter. Pilih ukuran tandon / tangki yang tepat untuk hunian maupun tempat usaha anda dengan memperhitungkan faktor jumlah manusia, listrik dan air pam mati, pompa rusak dan sebagainya.</h3>
                        <br/>
                        <br/>
                        <br/>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <img src="{{asset('assets/web/img/placeholder/dimensi.jpg')}}" alt="Dimensi - Ukur Tempat yang Tersedia dan Cek Ukuran Tangki yang akan Dibeli">
                    </div>
                    <div class="col-md-4">
                        <img src="{{asset('assets/web/img/placeholder/tipe-tangki.jpg')}}" alt="Tipe Tangki - Pilih Tangki Air Sesuai Fungsi yang Dibutuhkan">
                    </div>
                    <div class="col-md-4">
                        <img src="{{asset('assets/web/img/placeholder/ukuran.jpg')}}" alt="Ukuran - Pilih Volume Sesuai Kebutuhan">
                    </div>
                </div>
                <br/>
                <br/>
                <div class="row">
                    <div class="col-md-12">
                        <h4>Berikut langkah-langkah untuk menentukan tangki air yang tepat:</h4>

                        <h5>Dimensi</h5>
                        <p>Ukur tempat yang tersedia dan cek ukuran tandon air yang akan dibeli</p>

                        <h5>Tipe Tangki</h5>
                        <p>Pilih tangki sesuai kebutuhan. Contoh: tangki tanam untuk penampungan air di bawah tanah, bak bulat dapat dipakai untuk penampungan air hujan ataupun pengadukan makanan sedangkan tangki kimia (roto) dapat diletakkan di tanah datar/ menara</p>

                        <h5>Ukuran</h5>
                        <p>Tentukan ukuran (liter) tangki sesuai kebutuhan</p>

                        <h5>Contoh</h5>
                        <p>Sebuah rumah dengan 4 penghuni. Rata-rata pemakaian adalah 250 liter/orang/hari. Maka size yang tepat untuk anda adalah :</p>
                        <div class="text-center">
                        <img src="{{asset('assets/web/img/contoh-memilih-tangki-air.png')}}" alt="Contoh Memilih Tangki Air" class="img-tk">
                        </div>

                        <p>Mengantisipasi berbagai macam faktor yang sering terjadi di Indonesia seperti listrik padam, banjir, dan lainya serta untuk menghemat listrik disarankan untuk menggunakan tangki type GE/AL-2000 berkapasitas 1000-2000 liter.</p>

                        <h5 class="upper">Aktifitas Dan Banyaknya Air Yang Digunakan</h5>

                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Aktifitas</th>
                                    <th>Banyak Air <span>(Liter)</span></th>
                                    <th>5x/hari</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Flushing Toilet</td>
                                    <td>10</td>
                                    <td>2x/hari</td>
                                </tr>
                                <tr>
                                    <td>Mandi</td>
                                    <td>70 - 100</td>
                                    <td>3 piring/hari</td>
                                </tr>
                                <tr>
                                    <td>Cuci Piring</td>
                                    <td>20 -25</td>
                                    <td>Table cell</td>
                                </tr>
                                <tr>
                                    <td>Menyiram Tanaman</td>
                                    <td>9 - 15</td>
                                    <td>per 10 menit</td>
                                </tr>
                                <tr>
                                    <td>Laundry</td>
                                    <td>10</td>
                                    <td>1kg/hari</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@section('script')
<!-- script -->
@endsection