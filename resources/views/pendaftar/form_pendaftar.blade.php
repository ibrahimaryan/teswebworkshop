@extends('layouts.app')

@section('title')
Training Registration
@endsection

@section('main')

<div class="container-form mt-10">
    <div class="alert alert-warning" role="alert" data-aos="fade-up" data-aos-delay="300" style="text-align: center;">
        <span style="vertical-align: middle;">
            <i class="fa fa-exclamation-triangle fa-3x"></i>
        </span><br>
        Pastikan untuk mengisi formulir dengan benar sebelum mengirimkan pendaftaran.<br><br>
        Pastikan data sudah masuk di tabel peserta.<br><br>
        Tunggu data anda sampai status diVerif Oleh panitia.
    </div>
    <div class="gform" data-aos="fade-up" data-aos-delay="600">
        @if(session('success'))
        <div id="success-popup" class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif

        @if(session('error'))
        <div id="error-popup" class="alert alert-danger">
            {{ session('error') }}
        </div>
        @endif
        <h2>Registration PCC Class</h2>
        <form method="POST" action="{{ url('/submit-form') }}" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Lengkap" required>
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" id="nim" name="nim" placeholder="NIM" required>
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" id="prodi" name="prodi" placeholder="Program Studi" required>
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" id="jurusan" name="jurusan" placeholder="Jurusan" required>
            </div>
            <div class="mb-3">
                <label class="d-block mb-3"><strong>Pilihan Pelatihan :</strong></label>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="pelatihan" value="Multimedia" required>
                    <label class="form-check-label" for="Multimedia"><strong>Multimedia</strong><br>
                        "Prototyping an Interactive Mobile Application with Figma"<br></label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="pelatihan" value="Network" required>
                    <label class="form-check-label" for="Network"><strong>Network</strong><br>
                        "Introduction Container and Docker"<br></label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="pelatihan" value="Software" required>
                    <label class="form-check-label" for="Software"><strong>Software</strong><br>
                        "DOM Manipulation for Interactive Web Development"<br></label>
                </div>
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" id="nowa" name="nowa" placeholder="Nomer WA" required>
            </div>
            <div class="mb-3">
                <label for="bukti_ss_group" class="form-label">Bukti SS Group Anggota Aktif</label>
                <input type="file" class="form-control" id="ss_angtif" name="ss_angtif" required>
            </div>
            <div class="mb-3">
                <label for="bukti_follow_ig_pcc" class="form-label">Bukti Follow IG PCC (@pccpolines)</label>
                <input type="file" class="form-control" id="ss_pcc" name="ss_pcc" required>
            </div>
            <div class="mb-3">
                <label for="bukti_follow_ig_workshop" class="form-label">Bukti Follow IG Workshop
                    (@workshop.pcc)</label>
                <input type="file" class="form-control" id="ss_workshop" name="ss_workshop" required>
            </div>
            <button type="submit" class="btn">Daftar</button>
        </form>
    </div>
</div>

<!-- ======= Section Table ======= -->
<section id="data" class="data">
    <div class="container" data-aos="fade-up">
        <header class="section-header">
            <h2>DATA PESERTA</h2>
            <p>Data Peserta PCC Class 2024</p>
        </header>

        <div class="row table-responsive">
            <table id="dtBasicExample" class="table table-hover table-bordered table-sm" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <!-- <th>NIM</th> -->
                        <!-- <th>Program Studi</th> -->
                        <th>Jurusan</th>
                        <th>Pelatihan</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pendaftarans as $pendaftaran)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{$pendaftaran->nama}}</td>
                        <!-- <td>{{$pendaftaran->nim}}</td> -->
                        <!-- <td>{{$pendaftaran->prodi}}</td> -->
                        <td>{{$pendaftaran->jurusan}}</td>
                        <td>{{$pendaftaran->pelatihan}}</td>

                        <td>
                            @if ($pendaftaran->status == 'Pending')
                            <button class="btn btn-warning btn-sm">
                                <i class="fa fa-clock-o"></i> {{$pendaftaran->status}}
                            </button>
                            @elseif ($pendaftaran->status == 'Waiting List')
                            <button class="btn btn-secondary btn-sm">
                                <i class="fa fa-list"></i> {{$pendaftaran->status}}
                            </button>
                            @elseif ($pendaftaran->status == 'Verify')
                            <button class="btn btn-success btn-sm">
                                <i class="fa fa-check"></i> {{$pendaftaran->status}}
                            </button>
                            @elseif ($pendaftaran->status == 'Not Verify')
                            <button class="btn btn-danger btn-sm">
                                <i class="fa fa-close"></i> {{$pendaftaran->status}}
                            </button>
                            @else
                            <button class="btn btn-default btn-sm">
                                <i class="fa fa-clock-o"></i> {{$pendaftaran->status}}
                            </button>
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div id="pagination" class="pagination">
                <button id="prevPage" class="btn btn-primary">Previous</button>
                <button id="nextPage" class="btn btn-primary">Next</button>
            </div>
        </div>
    </div>
</section>
@endsection