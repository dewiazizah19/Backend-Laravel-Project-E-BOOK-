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
            <table class="table table-hover">
                <thead>
                    <th>Email</th>
                    <th>Username</th>
                    <th>Id Pengguna</th>
                    <th>Password</th>
                    <th>Last Login</th>
                </thead>
                @foreach($data_user as $du)
                    <tbody>
                      <tr>
                        <td>{{ $du->email }}</td>
                        <td>{{ $du->username }}</td>
                        <td>{{ $du->id_pengguna }}</td>
                        <td>{{ $du->password }}</td>
                        <td>{{ $du->last_login }}</td>
                        <td><a href="#">Edit</a> - <a href="#">Hapus</a></td>
                      </tr>
                    </tbody>
                  @endforeach
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
