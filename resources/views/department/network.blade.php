@extends('layout.app')

@section('title')
Team Network
@endsection

@section('main')

<div id="hero_team" class="hero_team">
    <div class="hero_network">
        <div class="container" data-aos="fade-up">
            <div class="row">
                <div class="col-lg-6 hero-content d-flex flex-column justify-content-center" data-aos="zoom-out"
                    data-aos-delay="200">
                    <h1 data-aos="fade-up">Network</h1>
                    <h2 data-aos="fade-up" data-aos-delay="400">UKM Polytechnic Computer Club</h2>
                </div>
                <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
                    <img src="{{asset('/images/dept/9.png')}}" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </div>
</div>

<section id="team_workshop" class="team_workshop">
    <div class="container" data-aos="fade-up">
        <header class="section-header">
            <h2>Team</h2>
            <p>Network</p>
        </header>

        <div class="row gy-4">

            <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                <div class="member">
                    <div class="member-img">
                        <img src="{{asset('images/dept/network/alvin-Photoroom.png')}}" class="img-fluid" alt="">
                        <div class="social">
                            <a href=""><i class="bi bi-twitter"></i></a>
                            {{-- <a href=""><i class="bi bi-facebook"></i></a> --}}
                            <a href=""><i class="bi bi-instagram"></i></a>
                            <a href=""><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                    <div class="member-info">
                        <h4>Alvin Putra Nurtan</h4>
                        <span>Staff Departemen Network</span>
                        <p>Bertanggung jawab terhadap pelatihan yang berkaitan dengan Network serta menghasilkan produk dan portofolio.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                <div class="member">
                    <div class="member-img">
                        <img src="{{asset('images/dept/network/aldo-Photoroom.png')}}" class="img-fluid" alt="">
                        <div class="social">
                            <a href=""><i class="bi bi-twitter"></i></a>
                            {{-- <a href=""><i class="bi bi-facebook"></i></a> --}}
                            <a href=""><i class="bi bi-instagram"></i></a>
                            <a href=""><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                    <div class="member-info">
                        <h4>Aldo Ramadhana</h4>
                        <span>Kepala Departemen Network</span>
                        <p>Bertanggung jawab terhadap pelatihan yang berkaitan dengan Network serta menghasilkan produk dan portofolio.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
                <div class="member">
                    <div class="member-img">
                        <img src="{{asset('images/dept/network/ariel-Photoroom.png')}}" class="img-fluid" alt="">
                        <div class="social">
                            <a href=""><i class="bi bi-twitter"></i></a>
                            {{-- <a href=""><i class="bi bi-facebook"></i></a> --}}
                            <a href=""><i class="bi bi-instagram"></i></a>
                            <a href=""><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                    <div class="member-info">
                        <h4>M Ariel Gunawan</h4>
                        <span>Staff Departemen Network</span>
                        <p>Bertanggung jawab terhadap pelatihan yang berkaitan dengan Network serta menghasilkan produk dan portofolio.</p>
                    </div>
                </div>
            </div>
            
        <div class="row gy-4 justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                <div class="member">
                    <div class="member-img">
                        <img src="{{asset('images/dept/network/alwy-Photoroom.png')}}" class="img-fluid" alt="">
                        <div class="social">
                            <a href=""><i class="bi bi-twitter"></i></a>
                            {{-- <a href=""><i class="bi bi-facebook"></i></a> --}}
                            <a href=""><i class="bi bi-instagram"></i></a>
                            <a href=""><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                    <div class="member-info">
                        <h4>Alwy Ma'shum</h4>
                        <span>Staff Departemen Network</span>
                        <p>Bertanggung jawab terhadap pelatihan yang berkaitan dengan Network serta menghasilkan produk dan portofolio.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                <div class="member">
                    <div class="member-img">
                        <img src="{{asset('images/dept/network/mila-Photoroom.png')}}" class="img-fluid" alt="">
                        <div class="social">
                            <a href=""><i class="bi bi-twitter"></i></a>
                            {{-- <a href=""><i class="bi bi-facebook"></i></a> --}}
                            <a href=""><i class="bi bi-instagram"></i></a>
                            <a href=""><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                    <div class="member-info">
                        <h4>Mila Dewi Nurhidayah</h4>
                        <span>Staff Departemen Network</span>
                        <p>Bertanggung jawab terhadap pelatihan yang berkaitan dengan Network serta menghasilkan produk dan portofolio.</p>
                    </div>
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
@endsection