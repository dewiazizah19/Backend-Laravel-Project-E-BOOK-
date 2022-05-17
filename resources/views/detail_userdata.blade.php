@extends('utama.mainlayout')

@section('content')

<section class="content-header">
    <h1>
      Detail Data
      <small>Control panel</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Detail Data</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
<table class="table">
    <tr>
        <th width="100px">Email</th>
        <th width="30px">:</th>
        <th>{{ $userdata->email }}</th>
    </tr>
    <tr>
        <th width="100px">Username</th>
        <th width="30px">:</th>
        <th>{{ $userdata->username }}</th>
    </tr>
    <tr>
        <th width="100px">Password</th>
        <th width="30px">:</th>
        <th>{{ $userdata->password }}</th>
    </tr>
    <tr>
        <th><a href="/userdata" class="btn btn-succes tbn-sm">kembali</a></th>
    </tr>
</table>
</section>
@endsection