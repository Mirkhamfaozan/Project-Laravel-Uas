@extends('layout.page')

@section('content')
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Data toko</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit Data toko</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- Horizontal Form -->
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Edit Data toko</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" action="{{ url('/toko/update/'.$toko->id) }}" class="form-horizontal">
                @csrf
                <div class="card-body">
                  <div class="form-group row">
                    <label for="kode_kriteria" class="col-sm-2 col-form-label">kode kriteria</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="kode_kriteria" placeholder="kode kriteria"value="{{ $toko->kode_kriteria}}">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="nama_kriteria" class="col-sm-2 col-form-label">nama kriteria</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="nama_kriteria" placeholder="nama_kriteria"value="{{ $toko->nama_kriteria}}">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="nilai_bobot" class="col-sm-2 col-form-label">nilai bobot</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="nilai_bobot" placeholder="nilai_bobot"value="{{ $toko->nilai_bobot}}">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="jenis" class="col-sm-2 col-form-label">jenis</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="jenis" placeholder="jenis"value="{{ $toko->jenis}}">
                    </div>
                  </div>
                </div>
                    <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-success">Simpan</button>
                  <button type="submit" class="btn btn-default float-right">Clear</button>
                </div>
                <!-- /.card-footer -->
              </form>
            </div>
            <!-- /.card -->

          </div>
          <!--/.col (left) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
  @endsection