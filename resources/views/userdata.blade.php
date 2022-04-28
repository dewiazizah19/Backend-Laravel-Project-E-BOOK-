@extends('utama.mainlayout')

@section('content')

<section class="content-header">
    <h1>
      User Data
      <small>advanced tables</small>
    </h1>

    <h1>
       <a href="input_userdata.html" class="btn btn-lg btn-info">Create</a>
    </h1>

    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">Master Data</a></li>
        <li class="active">User Data</li>
      </ol>

      @if (session('pesan'))
      <div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h4><i class="icon fa fa-check"></i> Success!</h4>
        {{ session('pesan') }}.
      </div>
      @endif
    </section>

<!-- Main content -->
<section class="content">

  <table class="table table-bordered">
      <thead>
        <tr>
          <th>No</th>
          <th>Email</th>
          <th>Username</th>
          <th>Password</th>
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
                <td>{{ $data->password }}</td>
                <td>
                  <a href="" class="btn btn-sm btn-warning">Edit</a>
                  <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete{{ $data->id_pengguna }}">
                    Delete
                  </button>
                </td>
              </tr>
          @endforeach
      </tbody>
  </table>

@foreach ($userdata as $data)
  <div class="modal modal-danger fade" id="delete{{ $data->id_pengguna }}">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">{{ $data->username }}</h4>
        </div>
        <div class="modal-body">
          <p>Apakah Anda Yakin Ingin Menghapus Data Ini?&hellip;</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">No</button>
          <a href="/userdata/delete/{{ $data->id_pengguna }}" class="btn btn-outline">Yes</a>
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
@endforeach
<!-- ./row -->
@endsection
