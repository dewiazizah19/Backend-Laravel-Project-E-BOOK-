@extends('utama.mainlayout')

@section('content')

<section class="content-header">
    <h1>
      Data Pengguna
      <small>advanced tables</small>
    </h1>

    <h1>
       <a href="input_userdata.html" class="btn btn-lg btn-info">Create</a>
    </h1>

    @if (session('pesan'))
    <div class="alert alert-success alert-dismissible">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
      <h4><i class="icon fa fa-check"></i> Success!</h4>
      {{ session('pesan') }}
  </div>
    @endif

    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">Master Data</a></li>
        <li class="active">Data Pengguna</li>
      </ol>
    </section>

<!-- Main content -->
<section class="content">

  <table class="table table-bordered">
      <thead>
        <tr>
          <th>No</th>
          <th>Email</th>
          <th>Username</th>
          <th>ID Pengguna</th>
          <th>Password</th>
          <th>Last Login</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
          <?php $no=1; ?>
          @foreach ($userdata as $data)
              <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $data->email }}</td>
                <td>{{ $data->username }}</td>
                <td>{{ $data->id_pengguna }}</td>
                <td>{{ $data->password }}</td>
                <td>{{ $data->last_login }}</td>
                <td>
                  <a href="" class="btn btn-sm btn-warning">Edit</a>
                  <a href="" class="btn btn-sm btn-danger">Delete</a>
                </td>
              </tr>
          @endforeach
      </tbody>
  </table>
<!-- ./row -->
@endsection
