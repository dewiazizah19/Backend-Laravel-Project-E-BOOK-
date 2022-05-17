@extends('utama.mainlayout')

@section('content')

<section class="content-header">
    <h1>
      Detail Book Data
      <small>Control panel</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Detail Book Data</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
<table class="table">
    <tr>
        <th width="100px">Judul</th>
        <th width="30px">:</th>
        <th>{{ $bookdata->judul }}</th>
    </tr>
    <tr>
        <th width="100px">Genre</th>
        <th width="30px">:</th>
        <th>{{ $bookdata->genre }}</th>
    </tr>
    <tr>
        <th width="100px">Pengarang</th>
        <th width="30px">:</th>
        <th>{{ $bookdata->pengarang }}</th>
    </tr>
    <tr>
        <th width="100px">Penerbit</th>
        <th width="30px">:</th>
        <th>{{ $bookdata->penerbit }}</th>
    </tr>
    <tr>
        <th width="100px">Harga</th>
        <th width="30px">:</th>
        <th>{{ $bookdata->harga }}</th>
    </tr>
    <tr>
        <th width="100px">Pengarang</th>
        <th width="30px">:</th>
        <th><img src="{{ url('cover_buku/'.$bookdata->cover) }}"width="100px"></th>
    </tr>
    <tr>
        <th><a href="/bookdata" class="btn btn-succes tbn-sm">kembali</a></th>
    </tr>
</table>
</section>
@endsection