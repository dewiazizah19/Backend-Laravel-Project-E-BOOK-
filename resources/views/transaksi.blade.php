@extends('utama.mainlayout')

@section('content')

<section class="content-header">
    <h1>
      Transaksi
      <small>Control panel</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Transaksi</li>
    </ol>
</section>
    <!-- Main content -->
    <section class="content">

      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Mei 2022</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>NO Transaksi</th>
                    <th>ID Buku</th>
                    <th>Judul</th>
                    <th>Harga (Rp)</th>
                    <th>Total</th>
                    <th>Waktu Transaksi</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $no=1; ?>
                  @foreach ($transaksi as $tr)
                      <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $tr->id_transaksi }}</td>
                        <td>{{ $tr->id_buku }}</td>
                        <td>{{ $tr->judul }}</td>
                        <td>{{ $tr->harga }}</td>
                        <td>{{ $tr->total }}</td>
                        <td>{{ $tr->waktu_transaksi }}</td>
                        <td>
                          <a href="" class="btn btn-sm btn-warning">Edit</a>
                          <a href="" class="btn btn-sm btn-danger">Delete</a>
                        </td>
                      </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
</div>
  <!-- /.content-wrapper -->
@endsection