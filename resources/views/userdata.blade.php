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
            <i class="fa fa-edit"></i>

            <h3 class="box-title">September 2021</h3>
          </div>
            <table class="table table-bordered text-center">
              <tr>
                <th>Username</th>
                <th>Gmail</th>
                <th>Password</th>
                <th>Id Pengguna</th>
                <th>Last Login</th>
                <th>Member Since</th>
              </tr>
              <tr>
                <td>badgalriri</td>
                <td>rihanna@gmail.com</td>
                <td>han*****</td>
                <td>0000023</td>
                <td>28 September 2021</td>
                <td>2 September 2021</td>
              </tr>
              <tr>
                <td>mileycyrus</td>
                <td>miley@gmail.com</td>
                <td>mil*****</td>
                <td>0000024</td>
                <td>22 September 2021</td>
                <td>2 September 2021</td>
              </tr>
              <tr>
                <td>arianagrande</td>
                <td>ariana@gmail.com</td>
                <td>ari*****</td>
                <td>0000025</td>
                <td>20 September 2021</td>
                <td>2 September 2021</td>
              </tr>
            </table>
          </div>
          <!-- /.box -->
        </div>
      </div>
      <!-- /.col -->
    </div>
<!-- ./row -->
@endsection