@extends('admin.layouts.master')
@section('content')
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-primary">
              <div class="inner">
                <h3>{{ $totalMultimedia }}</h3>

                <p>Multimedia</p>
              </div>
              <div class="icon">
                <i class="ion ion-android-color-palette"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-primary">
              <div class="inner">
                <h3>{{ $totalNetwork }}</h3>

                <p>Network</p>
              </div>
              <div class="icon">
                <i class="ion ion-wifi"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-primary">
              <div class="inner">
                <h3>{{ $totalSoftware }}</h3>

                <p>Software</p>
              </div>
              <div class="icon">
                <i class="ion ion-code"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-12">
            <div class="card">
                <div class="card-header">
                  <h3 class="card-title"><b>DATA PESERTA PCC CLASS 2024</b></h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example2" class="table table-bordered table-hover">
                    <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama</th>
                      <th>NIM</th>
                      <th>Prodi</th>
                      <th>Jurusan</th>
                      <th>Pelatihan</th>
                      <th>No Whatsapp</th>
                      <th>Bukti SS Group</th>
                      <th>Bukti Follow IG PCC</th>
                      <th>Bukti Follow IG Workshop</th>
                      <th>Status</th>
                      <th>Aksi</th>
                    </tr>
                    </thead>
                    <tbody>
                      @foreach ($pendaftarans as $pendaftaran)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{$pendaftaran->nama}}</td>
                                        <td>{{$pendaftaran->nim}}</td>
                                        <td>{{$pendaftaran->prodi}}</td>
                                        <td>{{$pendaftaran->jurusan}}</td>
                                        <td>{{$pendaftaran->pelatihan}}</td>
                                        <td>{{$pendaftaran->nowa}}</td>
                                        <td>
                                          <a href="{{ asset('storage/'.$pendaftaran->ss_angtif) }}" data-lightbox="images" data-title="Image 1">
                                              <img src="{{ asset('storage/'.$pendaftaran->ss_angtif) }}" width="90px" height="60px" alt="image">
                                          </a>
                                      </td>
                                      <td>
                                          <a href="{{ asset('storage/'.$pendaftaran->ss_pcc) }}" data-lightbox="images" data-title="Image 2">
                                              <img src="{{ asset('storage/'.$pendaftaran->ss_pcc) }}" width="90px" height="60px" alt="image">
                                          </a>
                                      </td>
                                      <td>
                                          <a href="{{ asset('storage/'.$pendaftaran->ss_workshop) }}" data-lightbox="images" data-title="Image 3">
                                              <img src="{{ asset('storage/'.$pendaftaran->ss_workshop) }}" width="90px" height="60px" alt="image">
                                          </a>
                                      </td>
                                        <td>
                                          @if ($pendaftaran->status == 'Pending')
                                            <button class="btn btn-warning btn-sm">
                                                <i class="fa fa-clock-o"></i> {{$pendaftaran->status}}
                                            </button>
                                        @elseif ($pendaftaran->status == 'Waiting List')
                                            <button class="btn btn-secondary btn-sm">
                                                <i class="fa fa-list"></i> {{$pendaftaran->status}}
                                            </button>
                                        @else
                                            <button class="btn btn-default btn-sm">
                                                <i class="fa fa-clock-o"></i> {{$pendaftaran->status}}
                                            </button>
                                        @endif
                                        </td>
                                        <td>
                                          <form action="{{ route('update.status', ['id_peserta' => $pendaftaran->id_peserta]) }}" method="post">
                                              @csrf
                                              @method('put')
                                              
                                              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editModal">
                                                  <i class="fa fa-edit"></i>
                                              </button>
                                              @if ($pendaftaran->status == 'Pending' || $pendaftaran->status == 'Waiting List')
                                                  <button type="submit" class="btn btn-sm btn-success" name="status" value="Verify">
                                                      <i class="fa fa-check"></i>
                                                  </button>
                                                  <button type="submit" class="btn btn-sm btn-danger" name="status" value="Not Verify">
                                                      <i class="fa fa-trash"></i>
                                                  </button>
                                              @endif
                                          </form>
                                      </td>
                                    </tr>
                                @endforeach
                    </tbody>
                    
                  </table>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
        </div>
        </div>
        <!-- /.row -->
          </section>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    
  </div>
</div>
<!-- ./wrapper -->
@stop