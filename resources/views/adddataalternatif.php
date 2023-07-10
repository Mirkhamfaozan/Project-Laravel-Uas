@extends('layout.page')

@section('content')
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add User</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/alternatif/add">Home</a></li>
              <li class="breadcrumb-item active">Add User</li>
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
                <h3 class="card-title">Add User</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" action="{{ url('/alternatif/store')}}" class="form-horizontal">
                @csrf
                <div class="card-body">
                  <div class="form-group row">
                    <label for="nama_alternatif" class="col-sm-2 col-form-label">nama alternatif</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="nama_alternatif" placeholder="nama_alternatif">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="jumlah_pesaing" class="col-sm-2 col-form-label">jumlah pesaing</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="jumlah_pesaing" placeholder="jumlah_pesaing">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="infrastruktur" class="col-sm-2 col-form-label">infrastruktur</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="infrastruktur" placeholder="infrastruktur">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="harga_sewa" class="col-sm-2 col-form-label">harga sewa</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="harga_sewa" placeholder="harga_sewa">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="kepadatan_penduduk" class="col-sm-2 col-form-label">kepadatan penduduk</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="kepadatan_penduduk" placeholder="kepadatan_penduduk">
                    </div>
                    </div>
                    <div class="form-group row">
                    <label for="ketersediaan_air" class="col-sm-2 col-form-label">ketersediaan air</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="ketersediaan_air" placeholder="ketersediaan_air">
                    </div>
                    </div>
                    <div class="form-group row">
                    <label for="luas_lahan" class="col-sm-2 col-form-label">luas lahan</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="luas_lahan" placeholder="luas_lahan">
                    </div>
                    </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-success">Create</button>
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