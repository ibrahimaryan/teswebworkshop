@extends('layout.app')

@section('title')
Latest Training
@endsection

@section('main')
<section id="latest_training" class="latest" style="margin-top: 100px;">
    <div class="container" data-aos="fade-up">
        <header class="section-header">
            <p>Latest Training</p>
        </header>
        <div class="row gy-4 latest-container" data-aos="fade-up" data-aos-delay="200">
            <div class="latest-item filter-app">
                <div class="latest-wrap">
                    <img src="{{asset('/images/pamfletclose.png')}}" class="img-fluid" alt="">
                    <div class="latest-info">
                        <h4>Pelatihan</h4>
                        <p>PCC Class</p>
                        <div class="latest-links">
                            <a href="{{asset('images/pamfletclose.png')}}" title="More Details" onclick="closeDetails()"><i
                                    class="bi bi-link"></i></a>
                            <a class="share-link" title="Share"
                                onclick="shareImage('{{asset('images/pamfletclose.png')}}')"><i class="bi bi-share"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="info" data-aos="fade-up" data-aos-delay="100" style="margin-top: 40px;">
            <div class="col-lg-12 d-flex justify-content-center">
                <ul id="info">
                    <li>
                        <p>
                            <span>
                                <h4>📢 <strong>POLYTECHNIC COMPUTER CLUB PROUDLY PRESENT</strong> 📢<br></h4>
                                ✨ <strong>PCC CLASS 2024</strong> ✨<br><br>
                                ⚠️ Khusus untuk seluruh Mahasiswa Aktif Polines ⚠️<br><br>
                            </span>
                            Haloo teman-teman semua!! 👋👋 Gimana nih kabarnya?<br>
                            Kami UKM PCC hadir kembali dengan info menarik nih!<br>
                            Khusus buat kalian yang ingin belajar dan mengasah skill dibidang IT, Polytechnic Computer Club memberikan
                            kesempatan kepada teman-teman Anggota Aktif untuk bergabung pada <strong>PCC CLASS 2024</strong> dengan tema "Upgrade
                            Knowledge and Potential Skills in Technology". <br>
                            Acara ini akan diadakan pada
                            :<br><br>
                            📆 : Sabtu, 9 Maret 2024<br>
                            ⏰ : 08.00 - 12.00 WIB<br>
                            📍 : Gedung MST Lantai 3<br><br>
                            Ada 3 bidang yang bisa dipilih :<br>
                            1. Pelatihan Software -> <strong>"DOM Manipulation for Interactive Web
                                Development"</strong><br>
                            2. Pelatihan Multimedia -> <strong>"Prototyping an Interactive Mobile Application with
                                Figma"</strong><br>
                            3. Pelatihan Network-> <strong>"Introduction Container and Docker"</strong><br><br>
                            💲 <b>HTM FREE</b> 💲<br><br>
                            🎁 <strong>Benefit</strong> 🎁<br>
                            - E-Sertifikat<br>
                            - Materi<br>
                            - Relasi<br>
                            - Hadiah Menarik<br>
                            - Token Dicoding<br><br><br>
                            
                            Daftarkan diri kalian segera, sebelum kehabisan kursi!<br><br>
                            
                            Isi formulir pendaftarannya sekarang juga!<br>
                            👇👇<br>
                            <a href="https://workshop.ukmpcc.org/form_pendaftar"
                                target="_blank">DAFTAR</a><br><br>
                                
                                
                            Terakhir pengisian pada 23 Febuari 2024 ( Pendaftaran otomatis ditutup ketika kuota peserta
                            sudah memenuhi 30 orang/bidang)<br><br>
                            🔥 <strong>Don't miss it</strong> 🔥<br><br
                        
                            Buat yang ingin tahu info lebih lanjut bisa menghubungi CP berikut :<br>
                            📞 Ardhilla : <a href="https://wa.me/+6282143096625"
                                target="_blank">wa.me/+6282143096625</a><br>
                            📞 Adi : <a href="https://wa.me/6285784539532" target="_blank">wa.me/6285784539532</a><br>
                        </p>
                    </li>
                </ul>
            </div>
        </div>

    </div>
</section><!-- End Latest Training -->
@endsection