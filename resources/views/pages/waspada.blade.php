@extends('pages.layouts.app')
@section('title', 'PROJECT NAME')

@section('style')
<style>
    .accordion__body {
        display: block!important;
    }
</style>
<!-- script -->
@endsection

@section('content')
    <div class="breadcrumb-area bg--white-6 pt--60 pb--70 pt-lg--40 pb-lg--50 pt-md--30 pb-md--40">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 text-center">
                    <h1 class="page-title">Waspada Penipuan</h1>
                </div>
            </div>
        </div>
    </div>
    <div id="content" class="main-content-wrapper">
        <div class="page-content-inner">
            <div class="container-fluid p-0">
                <div class="row justify-content-center">
                    <div class="col-md-8 mt--100 mt-lg--80 mt-md--60 pb--5">
                        <p>Berikut adalah pihak-pihak yang menggunakan dan merugikan Customer EXCEL dengan mengatasnamakan EXCEL:</p>
                        <br/>
                        <table border="0" cellspacing="0" cellpadding="1">
                            <tbody>
                                <tr>
                                    <td style="color: #333; border-bottom: 2px solid #ccc; text-align: center;">Kontak</td>
                                    <td style="color: #333; border-bottom: 2px solid #ccc; text-align: center;">Website</td>
                                    <td style="color: #333; border-bottom: 2px solid #ccc; text-align: center;">Nama/No. Rek</td>
                                </tr>
                                <tr>
                                    <td style="color: #999; padding-right: 15px; border-right: 2px solid #999; padding-bottom: 15px;line-height:25px;">Info.excel@gmail.com
                                        <br> pt.excelindonesia@gmail.com
                                        <br> hadisuseno007@gmail.com
                                        <br> info.excel80@gmail.com
                                        <br> cv.exceltradeindonesia@gmail.com
                                        <br> cv.excelindonesia@gmail.com
                                        <br> cv.excelindonesia@gmail.com
                                        <br>
                                        <br> 0822 4058 5252
                                        <br> 0812 1165 4244
                                        <br> 0812 9150 5827
                                        <br> 0812 9000 8628
                                        <br>
                                        <br> 021 3580 2663
                                        <br> 021 3580 2662
                                        <br> 021 8340 0844
                                        <br> 021 8340 0845
                                        <br> 021 5610 6822
                                        <br> 021 2936 0188
                                        <br> 021 5124 7030</td>
                                    <td style="color: #999; padding-right: 15px; border-right: 2px solid #999; padding-left: 5px;line-height:25px;" valign="top">http://ptexcelindonesia.blogspot.co.id/
                                        <br> ptexcelindonesia.blogspot.com
                                        <br> cvexcelindonesia.blogspot.com
                                        <br> excelmurah.blogspot.co.id
                                        <br> http://hadisuseno.blogspot.co.id/
                                        <br> https://ptexceltradingindo.indonetwork.co.id/
                                        <br> https://www.kota.com/id/biz/ptexcel-trading-indonesia/
                                        <br> http://excelmurah.blogspot.co.id/
                                        <br> https://pusatpenjualantangki.indonetwork.co.id/
                                        <br> https://cvexcelindonesia.indonetwork.co.id/
                                        <br> http://cvexcelindonesia.blogspot.co.id/</td>
                                    <td style="color: #999; padding-left: 5px;line-height:25px;" valign="top">Fauzi Ferdiansyah
                                        <br> BANK MANDIRI SYARIAH
                                        <br> 710-483-4234
                                        <br> CIMB NIAGA
                                        <br> 703653842900
                                        <br>
                                        <br> Hadi Purwanto
                                        <br> Bank Mandiri Syariah
                                        <br> 711-133-0764
                                        <br> CIMB NIAGA
                                        <br> 761432940700
                                        <br>
                                        <br> Hadi Suseno
                                        <br> Septya Bella Chintia
                                        <br> Daniel Gunawan
                                        <br> Robbi Kurniawan</td>
                                </tr>
                            </tbody>
                        </table>
                        <!--<div class="accordion-container">-->
                        <!--    <div class="row">-->
                        <!--        <div class="col-lg-6">-->
                        <!--            <div class="accordion__single mb--100 mb-lg--75 mb-md--55 mb-sm--40">-->
                        <!--                <div class="accordion__header" id="headingOne">-->
                        <!--                    <a class="accordion__link" data-target="#accordionOne">-->
                        <!--                        Quisque Ut Nulla Viverra lorem ?-->
                        <!--                    </a>-->
                        <!--                </div>-->
                        <!--                <div id="accordionOne" class="accordion__body" style="">-->
                        <!--                    <div class="accordion__text">-->
                        <!--                        Praesent sed ex vel mauris eleifend mollis. Vestibulum dictum sodales ante, ac pulvinar urna sollicitudin in. Suspendisse sodales dolor nec mattis convallis.-->
                        <!--                    </div>-->
                        <!--                </div>-->
                        <!--            </div>-->
                        <!--            <div class="accordion__single mb--100 mb-lg--75 mb-md--55 mb-sm--40">-->
                        <!--                <div class="accordion__header" id="headingTwo">-->
                        <!--                    <a class="accordion__link" data-target="#accordionTwo">-->
                        <!--                        Quisque Ut Nulla Viverra lorem ?-->
                        <!--                    </a>-->
                        <!--                </div>-->
                        <!--                <div id="accordionTwo" class="accordion__body" style="">-->
                        <!--                    <div class="accordion__text">-->
                        <!--                        Praesent sed ex vel mauris eleifend mollis. Vestibulum dictum sodales ante, ac pulvinar urna sollicitudin in. Suspendisse sodales dolor nec mattis convallis.-->
                        <!--                    </div>-->
                        <!--                </div>-->
                        <!--            </div>-->
                        <!--            <div class="accordion__single mb--100 mb-lg--75 mb-md--55 mb-sm--40">-->
                        <!--                <div class="accordion__header" id="headingThree">-->
                        <!--                    <a class="accordion__link" data-target="#accordionThree">-->
                        <!--                        Quisque Ut Nulla Viverra lorem ?-->
                        <!--                    </a>-->
                        <!--                </div>-->
                        <!--                <div id="accordionThree" class="accordion__body">-->
                        <!--                    <div class="accordion__text">-->
                        <!--                        Praesent sed ex vel mauris eleifend mollis. Vestibulum dictum sodales ante, ac pulvinar urna sollicitudin in. Suspendisse sodales dolor nec mattis convallis.-->
                        <!--                    </div>-->
                        <!--                </div>-->
                        <!--            </div>-->
                        <!--        </div>-->
                        <!--        <div class="col-lg-6">-->
                        <!--            <div class="accordion__single mb--100 mb-lg--75 mb-md--55 mb-sm--40">-->
                        <!--                <div class="accordion__header" id="headingFive">-->
                        <!--                    <a class="accordion__link" data-target="#accordionFour">-->
                        <!--                        Quisque Ut Nulla Viverra lorem ?-->
                        <!--                    </a>-->
                        <!--                </div>-->
                        <!--                <div id="accordionFour" class="accordion__body" style="">-->
                        <!--                    <div class="accordion__text">-->
                        <!--                        Praesent sed ex vel mauris eleifend mollis. Vestibulum dictum sodales ante, ac pulvinar urna sollicitudin in. Suspendisse sodales dolor nec mattis convallis.-->
                        <!--                    </div>-->
                        <!--                </div>-->
                        <!--            </div>-->
                        <!--            <div class="accordion__single mb--100 mb-lg--75 mb-md--55 mb-sm--40">-->
                        <!--                <div class="accordion__header" id="headingSix">-->
                        <!--                    <a class="accordion__link" data-target="#accordionFive">-->
                        <!--                        Quisque Ut Nulla Viverra lorem ?-->
                        <!--                    </a>-->
                        <!--                </div>-->
                        <!--                <div id="accordionFive" class="accordion__body" style="">-->
                        <!--                    <div class="accordion__text">-->
                        <!--                        Praesent sed ex vel mauris eleifend mollis. Vestibulum dictum sodales ante, ac pulvinar urna sollicitudin in. Suspendisse sodales dolor nec mattis convallis.-->
                        <!--                    </div>-->
                        <!--                </div>-->
                        <!--            </div>-->
                        <!--            <div class="accordion__single mb--100 mb-lg--75 mb-md--55 mb-sm--40">-->
                        <!--                <div class="accordion__header" id="headingSeven">-->
                        <!--                    <a class="accordion__link" data-target="#accordionSix">-->
                        <!--                        Quisque Ut Nulla Viverra lorem ?-->
                        <!--                    </a>-->
                        <!--                </div>-->
                        <!--                <div id="accordionSix" class="accordion__body">-->
                        <!--                    <div class="accordion__text">-->
                        <!--                        Praesent sed ex vel mauris eleifend mollis. Vestibulum dictum sodales ante, ac pulvinar urna sollicitudin in. Suspendisse sodales dolor nec mattis convallis.-->
                        <!--                    </div>-->
                        <!--                </div>-->
                        <!--            </div>-->
                        <!--        </div>-->
                        <!--    </div>-->
                        <!--</div>-->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
<!-- script -->
@endsection