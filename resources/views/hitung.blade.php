@extends('layout.page')

@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Perhitungan</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Perhitungan</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Bobot</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">

                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>{{ $widget1['toko'] }}</th>
                    <th>{{ $widget2['toko'] }}</th>
                    <th>{{ $widget3['toko'] }}</th>
                    <th>{{ $widget4['toko'] }}</th>
                    <th>{{ $widget5['toko'] }}</th>
                    <th>{{ $widget6['toko'] }}</th>
                  </tr>
                  </thead>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Normalisasi</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">

                <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>Nama Alternatif</th>
                    <th>C1</th>
                    <th>C2</th>
                    <th>C3</th>
                    <th>C4</th>
                    <th>C5</th>
                    <th>C6</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($data as $alternatif)
                    <tr>
                        <td>{{$alternatif->nama_alternatif }}</td>
                        <td>{{$C1min['alternatif'] / $alternatif->jumlah_pesaing}}</td>
                        <td>{{$alternatif->infrastruktur / $C2max['alternatif']}}</td>
                        <td>{{$C3min['alternatif'] / $alternatif->harga_sewa}}</td>
                        <td>{{$alternatif->kepadatan_penduduk / $C4max['alternatif']}}</td>
                        <td>{{$alternatif->ketersediaan_air / $C5max['alternatif']}}</td>
                        <td>{{$alternatif->luas_lahan / $C6max['alternatif']}}</td>
                    </tr>
                @endforeach
                </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Hasil</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">

                <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>Nama Alternatif</th>
                    <th>Hasil</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($data as $alternatif)
                    <tr>
                        <td>{{$alternatif->nama_alternatif}}</td>
                        {{-- Hasil --}}
                        <td>
                            {{(($C1min['alternatif'] / $alternatif->jumlah_pesaing)*$widget1['toko'])+
                            (($alternatif->infrastruktur / $C2max['alternatif'])*$widget2['toko'])+
                            (($C3min['alternatif'] / $alternatif->harga_sewa)*$widget1['toko'])+
                            (($alternatif->kepadatan_penduduk / $C4max['alternatif'])*$widget4['toko'])+
                            (($alternatif->ketersediaan_air / $C5max['alternatif'])*$widget5['toko'])+
                            (($alternatif->luas_lahan / $C6max['alternatif'])*$widget6['toko'])}}
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
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->

  </div>
  
  @endsection
