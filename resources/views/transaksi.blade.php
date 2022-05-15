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
                          <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete{{ $tr->id_transaksi }}">
                            Delete
                          </button>
                        </td>
                      </tr>
                  @endforeach
                </tbody>
              </table>
            </div>

  @foreach ($transaksi as $tr)
  <div class="modal modal-danger fade" id="delete{{ $tr->id_transaksi }}">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">{{ $tr->id_transaksi }}</h4>
        </div>
        <div class="modal-body">
          <p>Apakah Anda Yakin Ingin Menghapus Data Ini?&hellip;</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">No</button>
          <a href="/bookdata/delete/{{ $tr->id_transaksi }}" class="btn btn-outline">Yes</a>
        </div>
      </div>
  @endforeach
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