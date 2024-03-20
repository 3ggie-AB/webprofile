@extends('template.layar')
@section('body')
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">
        <div class="container" data-aos="zoom-out" data-aos-delay="100">
            <h1><span>Egi Ahmad Baihaqi</span></h1><br><br>
            <h2>From Merkul</h2>
            <div class="d-flex">
                <!-- <a href="#about" class="btn-get-started scrollto">Get Started</a>
                            <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="glightbox btn-watch-video"><i class="bi bi-play-circle"></i><span>Watch Video</span></a> -->
            </div>
        </div>
    </section><!-- End Hero -->

    <!-- ======= Sambutan Section ======= -->

    @include('template.sambutan')

    <!-- End Sambutan Section -->


    <!-- ======= About Section ======= -->
    <section id="about" class="about section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h3><span>Biodata</span></h3>
                <p>data ini adalah data asli jangan disalahgunakan</p>
                <br> <br>
                <div class="border border-primary"></div>
                <br><br>
            </div>

            <div class="row">
                <div class="col-lg-6 pt-4 pt-lg-0 content d-flex flex-column justify-content-center" data-aos="fade-up"
                    data-aos-delay="100">
                    <h5>
                        Nama : Egi Ahmad Baihaqi <br>
                        Umur : 19 <br>
                        Jenis Kelamin : Laki-Laki <br>
                        Asal Negara : Indonesia <br>
                        Tempat dan Tanggal Lahir : Cirebon, 11 juni 2005 <br>
                        Alamat : Desa Mertapada Kulon <br>
                        Minat : Coding, Robotika, Aplikasi, Database , Logic <br>
                    </h5>
                </div>
                <div class="col-lg-6" data-aos="fade-right" data-aos-delay="700">
                    <h5>
                        Sedang bekerja di : Patwa Mart <br>
                        Keterampilan : Ngoding, Analisa Masalah, Supporting, Strategi <br>
                        Nomor HP : <a href="tel:+6285875477952">085875477952</a><br>
                        Email : <a href="mailto:3ggie5ensei@gmail.com">3ggie5ensei@gmail.com</a><br>
                        Riwayat Pendidikan : <a href="menu/pendidikan/">Lihat Lengkap</a> <br>
                        Riwayat Kerja : <a href="menu/kerja/">Lihat Lengkap</a> <br>
                        Whatsapp : <a href="https://wa.me/+6285875477952?text=Halo">085875477952 atau Klik
                            Disini</a>
                        <br>
                    </h5>
                </div>
            </div>

        </div>
    </section>
    <!-- End About Section -->

    <!-- ======= Skills Section ======= -->
    <section id="skills" class="skills section-bg1">
        <div class="col-lg-12 container" data-aos="fade-up">
            <div class="section-title">
                <h3><span>Coding</span></h3><br><br>
                <div class="border border-primary opacity-25"></div>
                <br><br>
            </div>
            <div class="row skills-content">

                <div class="col-lg-6">

                    <div class="progress">
                        <span class="skill">HTML <i class="val">70%</i></span>
                        <div class="progress-bar-wrap">
                            <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0"
                                aria-valuemax="100">
                            </div>
                        </div>
                    </div>

                    <div class="progress">
                        <span class="skill">CSS <i class="val">60%</i></span>
                        <div class="progress-bar-wrap">
                            <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0"
                                aria-valuemax="100">
                            </div>
                        </div>
                    </div>

                    <div class="progress">
                        <span class="skill">C++ <i class="val">75%</i></span>
                        <div class="progress-bar-wrap">
                            <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0"
                                aria-valuemax="100">
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-lg-6">

                    <div class="progress">
                        <span class="skill">PHP <i class="val">55%</i></span>
                        <div class="progress-bar-wrap">
                            <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0"
                                aria-valuemax="100">
                            </div>
                        </div>
                    </div>

                    <div class="progress">
                        <span class="skill">LARAVEL<i class="val">40%</i></span>
                        <div class="progress-bar-wrap">
                            <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="0"
                                aria-valuemax="100">
                            </div>
                        </div>
                    </div>

                    <div class="progress">
                        <span class="skill">GITHUB <i class="val">80%</i></span>
                        <div class="progress-bar-wrap">
                            <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0"
                                aria-valuemax="100">
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </section><!-- End Skills Section -->

    <!-- ======= Services Section ======= -->

    <section id="services" class="services">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h3><span>Infomasi yang Mungkin Kamu Cari</span></h3> <br><br>
                <div class="border border-primary opacity-50"></div> <br><br>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon-box">
                        <div class="icon"><i class="bx bxl-dribbble"></i></div>
                        <h4><a href="">Lorem Ipsum</a></h4>
                        <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in"
                    data-aos-delay="200">
                    <div class="icon-box">
                        <div class="icon"><i class="bx bx-file"></i></div>
                        <h4><a href="">Sed ut perspiciatis</a></h4>
                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in"
                    data-aos-delay="300">
                    <div class="icon-box">
                        <div class="icon"><i class="bx bx-tachometer"></i></div>
                        <h4><a href="">Magni Dolores</a></h4>
                        <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in"
                    data-aos-delay="100">
                    <div class="icon-box">
                        <div class="icon"><i class="bx bx-world"></i></div>
                        <h4><a href="">Nemo Enim</a></h4>
                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in"
                    data-aos-delay="200">
                    <div class="icon-box">
                        <div class="icon"><i class="bx bx-slideshow"></i></div>
                        <h4><a href="">Dele cardo</a></h4>
                        <p>Quis consequatur saepe eligendi voluptatem consequatur dolor consequuntur</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in"
                    data-aos-delay="300">
                    <div class="icon-box">
                        <div class="icon"><i class="bx bx-arch"></i></div>
                        <h4><a href="">Divera don</a></h4>
                        <p>Modi nostrum vel laborum. Porro fugit error sit minus sapiente sit aspernatur</p>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- End Services Section -->

    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h3><span>Pertanyaan Cepat</span></h3><br><br>
                <div class="border border-primary"></div><br><br>
            </div>

            <div class="row justify-content-center">
                <div class="col-xl-10">
                    <ul class="faq-list">

                        <li>
                            <div data-bs-toggle="collapse" class="collapsed question" href="#faq1">Apakah Saya
                                Membuat Web ini
                                dengan Template ? <i class="bi bi-chevron-down icon-show"></i><i
                                    class="bi bi-chevron-up icon-close"></i></div>
                            <div id="faq1" class="collapse" data-bs-parent=".faq-list">
                                <p>
                                    Ya, Saya Membuat Web Ini dengan Template. <br>
                                    Template Tersebut Saya dapat dari Bootsrapmade. Nama Template tersebut adalah
                                    Bizland. <br>
                                    <a href="https://bootstrapmade.com/bizland-bootstrap-business-template">Klik
                                        Disini
                                        untuk
                                        Mendapatkan Templatenya</a>
                                </p>
                            </div>
                        </li>

                        <li>
                            <div data-bs-toggle="collapse" href="#faq2" class="collapsed question">Feugiat
                                scelerisque varius morbi
                                enim nunc faucibus a pellentesque? <i class="bi bi-chevron-down icon-show"></i><i
                                    class="bi bi-chevron-up icon-close"></i></div>
                            <div id="faq2" class="collapse" data-bs-parent=".faq-list">
                                <p>
                                    Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id
                                    interdum
                                    velit laoreet id
                                    donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium.
                                    Est
                                    pellentesque
                                    elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa
                                    tincidunt
                                    dui.
                                </p>
                            </div>
                        </li>

                        <li>
                            <div data-bs-toggle="collapse" href="#faq3" class="collapsed question">Dolor sit
                                amet
                                consectetur
                                adipiscing elit pellentesque habitant morbi? <i
                                    class="bi bi-chevron-down icon-show"></i><i
                                    class="bi bi-chevron-up icon-close"></i></div>
                            <div id="faq3" class="collapse" data-bs-parent=".faq-list">
                                <p>
                                    Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci.
                                    Faucibus
                                    pulvinar
                                    elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum
                                    tellus pellentesque
                                    eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at
                                    elementum eu facilisis
                                    sed odio morbi quis
                                </p>
                            </div>
                        </li>

                        <li>
                            <div data-bs-toggle="collapse" href="#faq4" class="collapsed question">Ac odio
                                tempor
                                orci dapibus.
                                Aliquam eleifend mi in nulla? <i class="bi bi-chevron-down icon-show"></i><i
                                    class="bi bi-chevron-up icon-close"></i></div>
                            <div id="faq4" class="collapse" data-bs-parent=".faq-list">
                                <p>
                                    Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id
                                    interdum
                                    velit laoreet id
                                    donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium.
                                    Est
                                    pellentesque
                                    elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa
                                    tincidunt
                                    dui.
                                </p>
                            </div>
                        </li>

                        <li>
                            <div data-bs-toggle="collapse" href="#faq5" class="collapsed question">Tempus quam
                                pellentesque nec nam
                                aliquam sem et tortor consequat? <i class="bi bi-chevron-down icon-show"></i><i
                                    class="bi bi-chevron-up icon-close"></i></div>
                            <div id="faq5" class="collapse" data-bs-parent=".faq-list">
                                <p>
                                    Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim
                                    suspendisse in
                                    est ante in.
                                    Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit
                                    adipiscing
                                    bibendum est.
                                    Purus gravida quis blandit turpis cursus in
                                </p>
                            </div>
                        </li>

                        <li>
                            <div data-bs-toggle="collapse" href="#faq6" class="collapsed question">Tortor vitae
                                purus faucibus
                                ornare. Varius vel pharetra vel turpis nunc eget lorem dolor? <i
                                    class="bi bi-chevron-down icon-show"></i><i
                                    class="bi bi-chevron-up icon-close"></i></div>
                            <div id="faq6" class="collapse" data-bs-parent=".faq-list">
                                <p>
                                    Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies
                                    leo
                                    integer malesuada
                                    nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem
                                    dolor
                                    sed. Ut
                                    venenatis tellus in metus vulputate eu scelerisque. Pellentesque diam volutpat
                                    commodo sed egestas
                                    egestas fringilla phasellus faucibus. Nibh tellus molestie nunc non blandit
                                    massa
                                    enim nec.
                                </p>
                            </div>
                        </li>

                    </ul>
                </div>
            </div>

        </div>
    </section>

    <!-- End Frequently Asked Questions Section -->

    <div class="container py-4">
        <div class="copyright">
            &copy; Copyright <strong><span>BizLand</span></strong>. All Rights Reserved. Designed by <a
                href="https://bootstrapmade.com/">BootstrapMade</a>
            and Redesign by Me
        </div>
    </div>
    </footer><!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>
  @endsection
