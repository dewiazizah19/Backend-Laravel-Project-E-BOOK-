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
              <h3 class="box-title">September 2021</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>No_Pesanan</th>
                  <th>Kode_Buku</th>
                  <th>Judul</th>
                  <th>Harga</th>
                  <th>Waktu Transaksi</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td>0001</td>
                  <td>03.1
                  </td>
                  <td>The Book of Ikigai</td>
                  <td>Rp 30.0000</td>
                  <td>20/09/2021 [05.17 pm]</td>
                </tr>
                <tr>
                  <td>0002</td>
                  <td>02.1
                  </td>
                  <td>Anothe I</td>
                  <td>Rp 27.000</td>
                  <td>22/09/2021 [03.33 pm]</td>
                </tr>
                <tr>
                  <td>0003</td>
                  <td>01.2
                  </td>
                  <td>Girls in the Dark</td>
                  <td>Rp 13.000</td>
                  <td>23/09/2021 [08.00 am]</td>
                </tr>
                <tr>
                  <td>0004</td>
                  <td>02.4
                  </td>
                  <td>Book of Amazing Science</td>
                  <td>Rp 30.000</td>
                  <td>29/09/2021 [10.47 am]</td>
                </tr>
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