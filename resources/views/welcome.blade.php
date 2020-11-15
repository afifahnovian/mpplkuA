@extends('layouts.landing-page')
@section('content')
        <!-- Loader -->
        <div id="preloader">
            <div id="status">
                <div class="spinner">
                    <div class="double-bounce1"></div>
                    <div class="double-bounce2"></div>
                </div>
            </div>
        </div>
        <!-- Landing page Start -->
        <section class="bg-half-170 border-bottom agency-wrapper d-table w-100" id="home">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7 col-md-7 order-1 order-md-2">
                        <div class="title-heading mt-4 ml-lg-5">
                            <h1 class="heading mb-3">Sistem Manajemen Arsip FMIPA IPB (SIMARSIP)</h1>
                            <p class="para-desc text-muted">Ajukan surat kemahasiswaan dengan mudah melalui SIMARSIP</p>
                        </div>
                    </div><!--end col-->

                    <div class="col-lg-5 col-md-5 order-2 order-md-1 mt-4 pt-2 mt-sm-0 pt-sm-0">
                        <img src="landrick/images/customer/customer.png" class="img-fluid" alt="">
                    </div>
                </div><!--end row-->
            </div><!--end container--> 
        </section><!--end section-->
        <!-- Landing page End -->

        <!-- Pelayanan Surat Simarsip Start -->
        <section class="section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 text-center">
                        <div class="section-title mb-4 pb-2">
                            <h4 class="title mb-4">Pengajuan Surat Kemahasiswaan</h4>
                            <p class="text-muted para-desc mx-auto mb-0">Melalui <span class="text-primary font-weight-bold">SIMARSIP</span> kamu dapat mengajukan surat kemahasiswaan dengan mudah</p>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->

                <div class="row justify-content-center ">
                    <div class="col-lg-4 col-md-6 mt-4 pt-2">
                        <div class="key-feature d-flex p-3 bg-white rounded shadow">
                            <div class="icon text-center rounded-pill mr-3">
                                <i class="mdi mdi-numeric-1 text-primary"></i>
                            </div>
                            <div class="content mt-2">
                                <h4 class="title mb-0">Surat Keterangan Mahasiswa Aktif</h4>
                            </div>
                        </div>
                    </div><!--end col-->
                    
                    <div class="col-lg-4 col-md-6 mt-4 pt-2">
                        <div class="key-feature d-flex p-3 bg-white rounded shadow">
                            <div class="icon text-center rounded-pill mr-3">
                                <i class="mdi mdi-numeric-2 text-primary"></i>
                            </div>
                            <div class="content mt-2">
                                <h4 class="title mb-0">Surat Keterangan Lulus Mahasiswa</h4>
                            </div>
                        </div>
                    </div><!--end col-->
                    
                    <div class="col-lg-4 col-md-6 mt-4 pt-2">
                        <div class="key-feature d-flex p-3 bg-white rounded shadow">
                            <div class="icon text-center rounded-pill mr-3">
                                <i class="mdi mdi-numeric-3 text-primary"></i>
                            </div>
                            <div class="content mt-2">
                                <h4 class="title mb-0">Surat Pepanjangan Masa Studi Mahasiswa</h4>
                            </div>
                        </div>
                    </div><!--end col-->
                    
                    <div class="col-lg-4 col-md-6 mt-4 pt-2">
                        <div class="key-feature d-flex p-3 bg-white rounded shadow">
                            <div class="icon text-center rounded-pill mr-3">
                                <i class="mdi mdi-numeric-4 text-primary"></i>
                            </div>
                            <div class="content mt-2">
                                <h4 class="title mb-0">Surat Pengunduran Diri mahasiswa</h4>
                            </div>
                        </div>
                    </div><!--end col-->
                    
                    <div class="col-lg-4 col-md-6 mt-4 pt-2">
                        <div class="key-feature d-flex p-3 bg-white rounded shadow">
                            <div class="icon text-center rounded-pill mr-3">
                                <i class="mdi mdi-numeric-5 text-primary"></i>
                            </div>
                            <div class="content mt-2">
                                <h4 class="title mb-0">Surat Keterangan  Cuti Mahasiswa</h4>
                            </div>
                        </div>
                    </div><!--end col-->
                    
                    <div class="col-lg-4 col-md-6 mt-4 pt-2">
                        <div class="key-feature d-flex p-3 bg-white rounded shadow">
                            <div class="icon text-center rounded-pill mr-3">
                                <i class="mdi mdi-numeric-6 text-primary"></i>
                            </div>
                            <div class="content mt-2">
                                <h4 class="title mb-0">Surat Keterangan Aktif Setelah Cuti</h4>
                            </div>
                        </div>
                    </div><!--end col-->
                    
                    <div class="col-lg-4 col-md-6 mt-4 pt-2" >
                        <div class="key-feature d-flex p-3 bg-white rounded shadow">
                            <div class="icon text-center rounded-pill mr-3">
                                <i class="mdi mdi-numeric-7 text-primary"></i>
                            </div>
                            <div class="content mt-2">
                                <h4 class="title mb-0">Legalisir Transkrip</h4>
                            </div>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </section><!--end section-->
        <!-- Pelayanan Surat End -->

        <!-- Shape Start -->
        <div class="position-relative">
            <div class="shape overflow-hidden text-footer">
                <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
                </svg>
            </div>
        </div>
        <!--Shape End-->

        <!-- Footer Start -->
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h4 class="text-light footer-head">Hubungi Kami</h4>
                        <p class="mt-4">Jika memiliki keluh kesah, saran ataupun masukan, bisa ditulis disini</p>
                        <form>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="foot-subscribe form-group position-relative">
                                        <label>Nama<span class="text-danger">*</span></label>
                                        <input name="name" id="namecomplain" class="form-control rounded" placeholder="Nama : " required>
                                    </div>
                                    <div class="foot-subscribe form-group position-relative">
                                        <label>Email<span class="text-danger">*</span></label>
                                        <input type="email" name="email" id="emailcomplain" class="form-control rounded" placeholder="Email : " required>
                                    </div>
                                    <div class="foot-subscribe form-group position-relative">
                                        <label>Pesan<span class="text-danger">*</span></label>
                                        <textarea name="complain" id="complain" class="form-control rounded" placeholder="Tulis pesanmu disini.... " required></textarea>
                                    </div>
                                    
                                </div>
                                <div class="col-lg-12">
                                    <input type="submit" id="submitsubscribe" name="send" class="btn btn-primary w-100" value="Kirim Pesan">
                                </div>
                            </div>
                        </form>
                    </div><!--end col-->
                    <div class="col">
                    <h4 class="text-light footer-head">Alamat</h4>
                    <p>Jalan Meranti, Kampus IPB Dramaga. Bogor 16680, Jawa Barat, Indonesia.</p>
                    <br>
                    <p>Telp: +62 251 8625481</p>
                    <p>Fax: +62 251 8625708</p>
                    <p>Email: simarsipfmipa@apps.ipb.ac.id</p>
                    </div>
                </div><!--end row-->
            </div><!--end container-->
        </footer><!--end footer-->
        <footer class="footer footer-bar">
            <div class="container text-center">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <div class="text-sm-left">
                            <p class="mb-0">© 2019-20 Landrick. Design with <i class="mdi mdi-heart text-danger"></i> by <a href="http://www.shreethemes.in/" target="_blank" class="text-success">Shreethemes</a>.</p>
                        </div>
                    </div><!--end col-->

                    <div class="col-sm-6 mt-4 mt-sm-0 pt-2 pt-sm-0">
                        <ul class="list-unstyled text-sm-right mb-0">
                            <li class="list-inline-item"><a href="javascript:void(0)"><img src="images/payments/american-ex.png" class="avatar avatar-ex-sm" title="American Express" alt=""></a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)"><img src="images/payments/discover.png" class="avatar avatar-ex-sm" title="Discover" alt=""></a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)"><img src="images/payments/master-card.png" class="avatar avatar-ex-sm" title="Master Card" alt=""></a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)"><img src="images/payments/paypal.png" class="avatar avatar-ex-sm" title="Paypal" alt=""></a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)"><img src="images/payments/visa.png" class="avatar avatar-ex-sm" title="Visa" alt=""></a></li>
                        </ul>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </footer><!--end footer-->
        <!-- Footer End -->

        <!-- Back to top -->
        <a href="#" class="back-to-top rounded text-center" id="back-to-top"> 
            <i class="mdi mdi-chevron-up d-block"></i>
        </a>
        <!-- Back to top -->
@endsection