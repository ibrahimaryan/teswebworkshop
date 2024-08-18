@extends('layout.app')

@section('title')
UKM PCC
@endsection

@section('hero')
<section id="hero" class="hero d-flex align-items-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 d-flex flex-column justify-content-center">
                <h1 data-aos="fade-up">Training</h1>
                <h2 data-aos="fade-up" data-aos-delay="400">UKM Polytechnic Computer Club</h2>
                <div data-aos="fade-up" data-aos-delay="600">
                    <div class="text-center text-lg-start">
                        <a href="{{url('/form_pendaftar')}}"
                            class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                            <span>Registration</span>
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
                <img src="{{asset('/images/hero.png')}}" class="img-fluid" alt="">
            </div>
        </div>
    </div>

</section><!-- End Hero -->
@endsection

@section('main')
<!-- ======= Latest Training ======= -->
<section id="latest_training" class="latest">
    <div class="container" data-aos="fade-up">
        <header class="section-header">
            <h2>Workshop</h2>
            <p>Latest Training</p>
        </header>
        
        <div class="latest-item filter-app">
            <div class="latest-wrap">
                <img src="{{asset('/images/pamfletclose.png')}}" class="img-fluid" alt="">
                <div class="latest-info">
                    <h4>Pelatihan</h4>
                    <p>PCC Class</p>
                    <div class="latest-links">
                        <a href="{{asset('/images/pamfletclose.png')}}" title="More Details"><i
                                class="bi bi-link"></i></a>
                        <a class="share-link" title="Share"
                            onclick="shareImage('{{asset('images/pamfletclose.png')}}')"><i class="bi bi-share"></i></a>
                    </div>
                </div>
            </div>
                <div class="col-lg-12 d-flex justify-content-center">
                    <ul id="latest-flters">
                        <a href="{{url('/latest_training')}}" class="btn-buy">More</a>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
</section><!-- End Latest Training -->

<!-- ======= About Training ======= -->
<section id="about_training" class="values">
    <div class="container" data-aos="fade-up">
        <header class="section-header">
            <h2>Workshop</h2>
            <p>About Training</p>
        </header>
        <div class="row justify-content-center">
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                <div class="box">
                    <img src="{{asset('images/6.png')}}" width="300px" class="img-fluid" alt="">
                    <h3>Training Basic</h3>
                    <p>Training Basic merupakan salah satu program kerja UKM PCC yang berupa pelatihan mengenai 3 bidang yaitu
                        Multimedia, Network dan Software. Dimana Training Basic dapat diikuti oleh seluruh mahasiswa Politeknik Negeri Semarang
                        secara gratis dengan banyak benefit yang dapat didapatkan seperti relasi, pengetahuan dan hadiah kejutan lainnya.
                        Tujuan dari Training Basic adalah untuk berbagi pengetahuan mengenai IT.
                    </p>
                    <div class="text-center text-lg-start">
                    </div>
                </div>
            </div>

            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
                <div class="box">
                    <img src="{{asset('images/7.png')}}" width="300px" class="img-fluid" alt="">
                    <h3>PCC Class</h3>
                    <p>PCC Class merupakan program kerja lanjutan UKM PCC setelah Training Basic, dimana PCC Class dapat diikuti secara gratis
                        oleh Anggota Aktif UKM PCC. Pelatihan yang diberikan mengenai 3 bidang utama UKM PCC yaitu Multimedia, Network dan Software.
                        PCC Class dapat diikuti secara gratis dan peserta akan mendapatkan banyak benefit dari acara ini. Selain Pengetahuan akan banyak 
                        hadiah lainnya pada kegiatan PCC Class.
                    </p>
                    <div class="text-center text-lg-start">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!-- End About Training -->

<!-- ======= Team Workshop ======= -->
<section id="team_workshop" class="team_workshop">
    <div class="container" data-aos="fade-up">
        <header class="section-header">
            <h2>Team</h2>
            <p>Workshop</p>
        </header>
        <div class="row gy-4">
        <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="500">
                <div class="member">
                    <div class="member-img">
                        <img src="{{asset('images/workshop/ibrahim-Photoroom.png')}}" class="img-fluid" alt="">
                        <div class="social">
                            <a href="#blank"><i class="bi bi-twitter"></i></a>
                            <!-- <a href=""><i class="bi bi-facebook"></i></a> -->
                            <a href="https://www.instagram.com/ibrahimaryan_/" target="_blank"><i class="bi bi-instagram"></i></a>
                            <a href="https://www.linkedin.com/in/ibrahim-aryan-faridzi/" target="_blank"><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                    <div class="member-info">
                        <h4>Ibrahim Aryan Faridzi</h4>
                        <span>Wakil Kepala Divisi Workshop</span>
                        <p>Bertanggung jawab atas hardskill anggota UKM PCC dan membuat serta mengkoordinasi pelatihan-pelatihan yang ada didalamnya..</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                <div class="member">
                    <div class="member-img">
                        <img src="{{asset('images/workshop/aufa-Photoroom.png')}}" class="img-fluid" alt="">
                        <div class="social">
                            <a href="#blank"><i class="bi bi-twitter"></i></a>
                            <!-- <a href=""><i class="bi bi-facebook"></i></a> -->
                            <a href="https://www.instagram.com/afhmdh_/" target="_blank"><i class="bi bi-instagram"></i></a>
                            <a href="https://www.linkedin.com/in/aufaahamiidah/" target="_blank"><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                    <div class="member-info">
                        <h4>Aufaa Hamiidah Aryana</h4>
                        <span>Kepala Divisi Workshop</span>
                        <p>Bertanggung jawab atas hardskill anggota UKM PCC dan membuat serta mengkoordinasi pelatihan-pelatihan yang ada didalamnya..</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
                <div class="member">
                    <div class="member-img">
                        <img src="{{asset('images/workshop/dimas-Photoroom.png')}}" class="img-fluid" alt="">
                        <div class="social">
                            <a href="#blank"><i class="bi bi-twitter"></i></a>
                            <!-- <a href=""><i class="bi bi-facebook"></i></a> -->
                            <a href="https://www.instagram.com/dimas_gambas/" target="_blank"><i class="bi bi-instagram"></i></a>
                            <a href="https://www.linkedin.com/in/dimas-irsyad-b551361a4/" target="_blank"><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                    <div class="member-info">
                        <h4>Dimas Irsyad Maulana</h4>
                        <span>Staff Divisi Workshop</span>
                        <p>Bertanggung jawab atas hardskill anggota UKM PCC dan membuat serta mengkoordinasi pelatihan-pelatihan yang ada didalamnya..</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row gy-4">
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">
                <div class="member">
                    <div class="member-img">
                        <img src="{{asset('images/workshop/nabila-Photoroom.png')}}" class="img-fluid" alt="">
                        <div class="social">
                            <a href="#blank"><i class="bi bi-twitter"></i></a>
                            <!-- <a href=""><i class="bi bi-facebook"></i></a> -->
                            <a href="https://www.instagram.com/nabbilabill/" target="_blank"><i class="bi bi-instagram"></i></a>
                            <a href="https://www.linkedin.com/in/nabilakdp/" target="_blank"><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                    <div class="member-info">
                        <h4>Nabila Khairunnisa Dian Pranata</h4>
                        <span>Staff Divisi Workshop</span>
                        <p>Bertanggung jawab atas hardskill anggota UKM PCC dan membuat serta mengkoordinasi pelatihan-pelatihan yang ada didalamnya.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="500">
                <div class="member">
                    <div class="member-img">
                        <img src="{{asset('images/workshop/hanif-Photoroom.png')}}" class="img-fluid" alt="">
                        <div class="social">
                            <a href="#blank"><i class="bi bi-twitter"></i></a>
                            <!-- <a href=""><i class="bi bi-facebook"></i></a> -->
                            <a href="https://www.instagram.com/hanif_abdusy/" target="_blank"><i class="bi bi-instagram"></i></a>
                            <a href="https://www.linkedin.com/in/hanif-abdusy/" target="_blank"><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                    <div class="member-info">
                        <h4>Hanif Abdusy Syakur</h4>
                        <span>Staff Divisi Workshop</span>
                        <p>Bertanggung jawab atas hardskill anggota UKM PCC dan membuat serta mengkoordinasi pelatihan-pelatihan yang ada didalamnya..</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="600">
                <div class="member">
                    <div class="member-img">
                        <img src="{{asset('images/workshop/sabrina-Photoroom.png')}}" class="img-fluid" alt="">
                        <div class="social">
                            <a href="#blank"><i class="bi bi-twitter"></i></a>
                            <!-- <a href=""><i class="bi bi-facebook"></i></a> -->
                            <a href="https://www.instagram.com/sabriinashh/" target="_blank"><i class="bi bi-instagram"></i></a>
                            <a href=""><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                    <div class="member-info">
                        <h4>Sabrina Shofia Anggi</h4>
                        <span>Staff Divisi Workshop</span>
                        <p>Bertanggung jawab atas hardskill anggota UKM PCC dan membuat serta mengkoordinasi pelatihan-pelatihan yang ada didalamnya..</p>
                    </div>
                </div>
            </div>
        </div>
</section>

<style>
.team_workshop {
  background: #fff;
  padding: 60px 0;
  margin-top: 40px;
  margin-bottom: 40px;
}

.team_workshop .member {
  overflow: hidden;
  margin: 25px;
  text-align: center;
  border-radius: 5px;
  background: #fff;
  box-shadow: 0px 0 30px rgba(1, 41, 112, 0.08);
  transition: 0.3s;
}

.team_workshop .member .member-img {
  position: relative;
  overflow: hidden;
}

.team_workshop .member .member-img:after {
  position: absolute;
  content: "";
  left: 0;
  bottom: 0;
  height: 100%;
  width: 100%;
  background: url(../img/team_workshop-shape.svg) no-repeat center bottom;
  background-size: contain;
  z-index: 1;
}

.team_workshop .member .social {
  position: absolute;
  right: -100%;
  top: 30px;
  opacity: 0;
  border-radius: 4px;
  transition: 0.5s;
  background: rgba(255, 255, 255, 0.3);
  z-index: 2;
}

.team_workshop .member .social a {
  transition: color 0.3s;
  color: rgba(1, 41, 112, 0.5);
  margin: 15px 12px;
  display: block;
  line-height: 0;
  text-align: center;
}

.team_workshop .member .social a:hover {
  color: rgba(1, 41, 112, 0.8);
}

.team_workshop .member .social i {
  font-size: 18px;
}

.team_workshop .member .member-info {
  padding: 10px 15px 20px 15px;
}

.team_workshop .member .member-info h4 {
  font-weight: 700;
  margin-bottom: 5px;
  font-size: 20px;
  color: #012970;
}

.team_workshop .member .member-info span {
  display: block;
  font-size: 14px;
  font-weight: 400;
  color: #aaaaaa;
}

.team_workshop .member .member-info p {
  font-style: italic;
  font-size: 14px;
  padding-top: 15px;
  line-height: 26px;
  color: #5e5e5e;
}

.team_workshop .member:hover {
  transform: scale(1.08);
  box-shadow: 0px 0 30px rgba(1, 41, 112, 0.1);
}

.team_workshop .member:hover .social {
  right: 8px;
  opacity: 1;
}
</style>


<!-- Team Workshop -->

<!-- ======= Team Department ======= -->
<section id="team_department" class="pricing">

    <div class="container" data-aos="fade-up">

        <header class="section-header">
            <h2>Workshop</h2>
            <p>Team Department</p>
        </header>

        <div class="row gy-4" data-aos="fade-left">

            <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="100">
                <div class="box">
                    <h3 style="color: #4154f1;">Multimedia</h3>
                    <img src="{{asset('images/mulmed-Photoroom.png')}}" class="img-fluid" alt="">
                    <ul>
                        <li>Departemen Multimedia adalah salah satu departemen di UKM PCC yang berfokus pada desain dan
                            editing video serta memiliki tanggung jawab menggembangkan skill anggota dan mengadakan
                            pelatihan mengenai multimedia.</li>
                    </ul>
                    <a href="{{url('/team_multimedia')}}" class="btn-buy">More</a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="300">
                <div class="box">
                    <h3 style="color: #4154f1;">Network</h3>
                    <img src="{{asset('images/network-Photoroom.png')}}" class="img-fluid" alt="">
                    <ul>
                        <li>Departemen Network adalah salah satu departemen di UKM PCC yang bertanggung jawab terhadap
                            pelatihan yang berkaitan dengan Network serta menghasilkan produk dan portofolio yang
                            berkaitan dengan Network</li>
                    </ul>
                    <a href="{{url('/team_network')}}" class="btn-buy">More</a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="400">
                <div class="box">
                    <h3 style="color: #4154f1;">Software</h3>
                    <img src="{{asset('images/software-Photoroom.png')}}" class="img-fluid" alt="">
                    <ul>
                        <li>Departemen Software adalah salah satu departemen di UKM PCC yang bertanggung jawab terhadap
                            pelatihan yang berkaitan dengan Software serta menghasilkan produk dan portofolio yang
                            berkaitan dengan Software</li>
                    </ul>
                    <a href="{{url('/team_software')}}" class="btn-buy">More</a>
                </div>
            </div>
        </div>
    </div>
</section><!-- Team Department -->

<!-- ======= Sponsor Section ======= -->
<section id="sponsor" class="sponsor">

    <div class="container" data-aos="fade-up">

        <header class="section-header">
            <h2>Workshop</h2>
            <p>Our Sponsorship</p>
        </header>

        <div class="sponsor-slider swiper">
            <div class="d-flex justify-content-center"><img src="{{asset('images/sponsor/dicoding_default.png')}}"
                    class="img-fluid" alt="" width="350"></div>
            <!-- <div class="swiper-wrapper align-items-center">
                <div class="swiper-slide"><img src="assets/img/clients/client-1.png" class="img-fluid" alt=""></div>
                <div class="swiper-slide"><img src="assets/img/clients/client-2.png" class="img-fluid" alt=""></div>
                <div class="swiper-slide"><img src="assets/img/clients/client-3.png" class="img-fluid" alt=""></div>
                <div class="swiper-slide"><img src="assets/img/clients/client-4.png" class="img-fluid" alt=""></div>
            </div> -->
            <div class="swiper-pagination"></div>
        </div>
    </div>


    <div class="container mt-5" data-aos="fade-up">
        <header class="section-header">
            <p>Supported by</p>
        </header>

        <div class="sponsor-slider swiper">
            <div class="d-flex justify-content-center"><img src="{{asset('images/sponsor/gdsc.png')}}" class="img-fluid"
                    alt="" width="200"></div>
            <div class="swiper-pagination"></div>
        </div>
    </div>

</section><!-- End Sponsor Section -->

<!-- ======= F.A.Q Section ======= -->
<section id="faq" class="faq">

    <div class="container" data-aos="fade-up">

        <header class="section-header">
            <h2>F.A.Q</h2>
            <p>Frequently Asked Questions</p>
        </header>

        <div class="row">
            <div class="col-lg-6">
                <!-- F.A.Q List 1-->
                <div class="accordion accordion-flush" id="faqlist1">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#faq-content-1">
                                Kapan pelatihan PCC Class diadakan?
                            </button>
                        </h2>
                        <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                            <div class="accordion-body">
                                PCC Class diadakan pada tanggal 8 Maret 2025.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#faq-content-2">
                                Bagaimana cara mendaftar pelatihan PCC Class?
                            </button>
                        </h2>
                        <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                            <div class="accordion-body">
                                Klik tombol Registration pada Website lalu masukan data diri dan pastikan data telah benar lalu kirim.
                                Apabila ada kendala dapat menghubungi CP terkait.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#faq-content-3">
                                Apakah ada biaya pendaftaran?
                            </button>
                        </h2>
                        <div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                            <div class="accordion-body">
                                Pelatihan ini diadakan secara gratis.
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-lg-6">

                <!-- F.A.Q List 2-->
                <div class="accordion accordion-flush" id="faqlist2">

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#faq2-content-1">
                                Apakah boleh mendaftar pelatihan lebih dari satu?
                            </button>
                        </h2>
                        <div id="faq2-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist2">
                            <div class="accordion-body">
                                Tidak Diperbolehkan, peserta hanya bisa memilih 1 pelatihan saja.
                            </div>
                        </div>
                    </div>


                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#faq2-content-3">
                                Apakah mengikuti PCC Class harus memiliki laptop?
                            </button>
                        </h2>
                        <div id="faq2-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist2">
                            <div class="accordion-body">
                                Untuk teman-teman yang terkendala pada device dapat menghubungi panitia. 
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#faq2-content-2">
                                Jika ingin mengikuti PCC Class apakah wajib mengikuti Training Basic terlebih dahulu?
                            </button>
                        </h2>
                        <div id="faq2-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist2">
                            <div class="accordion-body">
                                Tidak.
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>

    </div>
</section><!-- End F.A.Q Section -->
@endsection