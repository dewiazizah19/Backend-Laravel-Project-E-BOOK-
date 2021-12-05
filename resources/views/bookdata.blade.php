@extends('utama.mainlayout')

@section('content')

<section class="content-header">
    <h1>
      Data Buku
      <small>Data Genre Buku</small>
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
                  <div class="col-md-3 col-sm-4"><a href="./transaksi.html"><img src="Template/dist/img/ensiklopedia.png" class="user-image" alt="User Image"></a>Ensiklopedia</div>
                  <div class="col-md-3 col-sm-4"><img src="Template/dist/img/biografi.png" class="user-image" alt="User Image">Biografi</div>
                  <div class="col-md-3 col-sm-4"><img src="Template/dist/img/sejarah.png" class="user-image" alt="User Image">Sejarah</div>
                  <div class="col-md-3 col-sm-4"><img src="Template/dist/img/sains.png" class="user-image" alt="User Image">Sains Populer</div>
                  <div class="col-md-3 col-sm-4"><img src="Template/dist/img/filsafat.png" class="user-image" alt="User Image">Filsafat</div>
                  <div class="col-md-3 col-sm-4"><img src="Template/dist/img/autobiografi.png" class="user-image" alt="User Image">Autobiografi</div>
                  <div class="col-md-3 col-sm-4"><img src="Template/dist/img/memoir.png" class="user-image" alt="User Image">Memoir</div>
                  <div class="col-md-3 col-sm-4"><img src="Template/dist/img/kamus.png" class="user-image" alt="User Image">Kamus</div>
                  <div class="col-md-3 col-sm-4"><img src="Template/dist/img/jurnalis.png" class="user-image" alt="User Image">Jurnal</div>
                  <div class="col-md-3 col-sm-4"><img src="Template/dist/img/psikologi.png" class="user-image" alt="User Image">Psikologi</div>
                  <div class="col-md-3 col-sm-4"><img src="Template/dist/img/travel.png" class="user-image" alt="User Image">Catatan Travel</div>
                  <div class="col-md-3 col-sm-4"><img src="Template/dist/img/humor.png" class="user-image" alt="User Image">Humor</div>
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