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
          <th>Harga (Rp)</th>
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
              <td>{{ $bd->harga }}</td>
              <td>
                <a href="" class="btn btn-sm btn-warning">Edit</a>
                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete{{ $bd->id_buku }}">
                  Delete
                </button>
              </td>
            </tr>
        @endforeach
      </tbody>
  </table>

  @foreach ($bookdata as $bd)
  <div class="modal modal-danger fade" id="delete{{ $bd->id_buku }}">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">{{ $bd->judul }}</h4>
        </div>
        <div class="modal-body">
          <p>Apakah Anda Yakin Ingin Menghapus Data Ini?&hellip;</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">No</button>
          <a href="/bookdata/delete/{{ $bd->id_buku }}" class="btn btn-outline">Yes</a>
        </div>
      </div>
  @endforeach
<!-- ./row -->
@endsection
