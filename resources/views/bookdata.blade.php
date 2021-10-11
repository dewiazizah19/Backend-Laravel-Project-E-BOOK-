@extends('utama.mainlayout')

@section('content')

<section class="content-header">
    <h1>
      Data Buku
      <small>advanced tables</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">Master Data</a></li>
        <li class="active">Data Buku</li>
      </ol>
    </section>
<!-- Main content -->
<section class="content">

    <div class="row">
      <div class="col-md-12">
        <div class="nav-tabs-custom">
          <div class="tab-content">
            <!-- Genre Buku -->
              <section id="new">
                <h4 class="page-header">Non Fiksi</h4>
                <div class="row fontawesome-icon-list">
                  <div class="col-md-3 col-sm-4"><i class="fa fa-fw fa-map"></i>Ensiklopedia</div>
                  <div class="col-md-3 col-sm-4"><i class="fa fa-fw fa-clone"></i>Biografi</div>
                  <div class="col-md-3 col-sm-4"><i class="fa fa-fw fa-calendar-minus-o"></i>Sejarah</div>
                  <div class="col-md-3 col-sm-4"><i class="fa fa-fw fa-object-ungroup"></i>Sains Populer</div>
                  <div class="col-md-3 col-sm-4"><i class="fa fa-fw fa-hourglass"></i>Filsafat</div>
                </div>
              </section>
          </div>
          <!-- /.box -->
        </div>
      </div>
      <!-- /.col -->
    </div>
<!-- ./row -->
@endsection