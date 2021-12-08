@extends('utama.mainlayout')

@section('content')

<section class="content-header">
    <h1>
      Data Pengguna
      <small>advanced tables</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">Master Data</a></li>
        <li class="active">Data Pengguna</li>
      </ol>
    </section>
<!-- Main content -->
<section class="content">

    <div class="row">
      <div class="col-md-12">
        <div class="box box-primary">
          <div class="box-header">

              <div class="card-tools">
                <a href="#" class="btn btn-success">Tambah Data <i class="fas fa-plus-square"></i></a>
              </div>

          <div class="card-body">
            <table class="table table-bordered text-center">
              <tr>
                <th>Gmail</th>
                <th>Username</th>
                <th>Id Pengguna</th>
                <th>Password</th>
                <th>Last Login</th>
                <th>Member Since</th>
              </tr>
              <tr>
                <td>rihanna@gmail.com</td>
                <td>badgalriri</td>
                <td>0000023</td>
                <td>han*****</td>
                <td>28 September 2021</td>
                <td>2 September 2021</td>
              </tr>
              <tr>
                <td>miley@gmail.com</td>
                <td>mileycyrus</td>
                <td>0000024</td>
                <td>mil*****</td>
                <td>22 September 2021</td>
                <td>2 September 2021</td>
              </tr>
              <tr>
                <td>ariana@gmail.com</td>
                <td>arianagrande</td>
                <td>0000025</td>
                <td>ari*****</td>
                <td>20 September 2021</td>
                <td>2 September 2021</td>
              </tr>
            </table>
          </div>
          </div>
          <!-- /.box -->
        </div>
      </div>
      <!-- /.col -->
    </div>
<!-- ./row -->
@endsection