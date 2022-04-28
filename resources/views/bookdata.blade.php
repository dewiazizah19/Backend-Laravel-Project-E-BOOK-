@extends('utama.mainlayout')

@section('content')

<section class="content-header">
    <h1>
      Book Data
      <small>Data Buku</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">Master Data</a></li>
        <li class="active">Book Data</li>
      </ol>
    </section>
<!-- Main content -->
<section class="content">

  <table class="table table-bordered">
      <thead>
        <tr>
          <th>No</th>
          <th>Judul</th>
          <th>Genre</th>
          <th>Pengarang</th>
          <th>Penerbit</th>
          <th>Cover</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <?php $no=1; ?>
        @foreach ($bookdata as $bd)
            <tr>
              <td>{{ $no++ }}</td>
              <td>{{ $bd->judul }}</td>
              <td>{{ $bd->genre }}</td>
              <td>{{ $bd->pengarang }}</td>
              <td>{{ $bd->penerbit }}</td>
              <td><img src="{{ url('cover_buku/'.$bd->cover) }}"width="100px"></td>
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