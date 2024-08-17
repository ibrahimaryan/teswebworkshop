@extends('admin.layouts.master')
@section('content')
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Data Peserta Network</h1>
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
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                      <h3 class="card-title">Pelatihan Network</h3>
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
                            @foreach ($networks as $network)
                                          <tr>
                                              <td>{{ $loop->iteration }}</td>
                                              <td>{{$network->nama}}</td>
                                              <td>{{$network->nim}}</td>
                                              <td>{{$network->prodi}}</td>
                                              <td>{{$network->jurusan}}</td>
                                              <td>{{$network->pelatihan}}</td>
                                              <td>{{$network->nowa}}</td>
                                              <td>
                                                <a href="{{ asset('storage/'.$network->ss_angtif) }}" data-lightbox="images" data-title="Image 1">
                                                    <img src="{{ asset('storage/'.$network->ss_angtif) }}" width="70px" height="70px" alt="image">
                                                </a>
                                            </td>
                                            <td>
                                                <a href="{{ asset('storage/'.$network->ss_pcc) }}" data-lightbox="images" data-title="Image 2">
                                                    <img src="{{ asset('storage/'.$network->ss_pcc) }}" width="70px" height="70px" alt="image">
                                                </a>
                                            </td>
                                            <td>
                                                <a href="{{ asset('storage/'.$network->ss_workshop) }}" data-lightbox="images" data-title="Image 3">
                                                    <img src="{{ asset('storage/'.$network->ss_workshop) }}" width="70px" height="70px" alt="image">
                                                </a>
                                            </td>
                                              <td><button class="btn btn-warning btn-sm">
                                                  <i class="fa fa-clock-o"></i> {{$network->status}}
                                              </button></td>
                                              <td>
                                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editModal">
                                                  Edit
                                                </button>
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
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
</div>
<!-- ./wrapper -->

<!-- Modal -->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title fs-5" id="editModalLabel">Edit Data</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="nama" class="col-form-label">Nama :</label>
            <input type="text" class="form-control" id="nama">
          </div>
          <div class="form-group">
            <label for="nim" class="col-form-label">NIM :</label>
            <input type="text" class="form-control" id="nim">
          </div>
          <div class="form-group">
            <label for="nim" class="col-form-label">Prodi :</label>
            <input type="text" class="form-control" id="prodi">
          </div>
          <div class="form-group">
            <label for="jurusan" class="col-form-label">Jurusan :</label>
            <input type="text" class="form-control" id="jurusan">
          </div>
          <div class="form-group">
            <label for="jurusan" class="col-form-label">Status :</label>
            <input type="text" class="form-control" id="jurusan">
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save</button>
      </div>
    </div>
  </div>
</div>

@stop