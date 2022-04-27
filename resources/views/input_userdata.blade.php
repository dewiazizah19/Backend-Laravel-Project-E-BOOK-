@extends('utama.mainlayout')

@section('content')

<section class="content-header">
    <h1>
      Input Data
      <small>Control panel</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Input Data</li>
    </ol>
</section>

  <!-- Main content -->
<section class="content">
  <form action="/input_userdata/insert" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="content">
      <div class="row">
          <div class="col-sm-6">
            <div class="form-group">
                <label>Email</label>
                <input name="email" class="form-control" value="{{ old('email') }}">
                <div class="text-danger">
                  @error('email')
                      {{ $message }}
                  @enderror
                </div>
            </div>

            <div class="form-group">
                <label>Username</label>
                <input name="username" class="form-control" value="{{ old('username') }}">
                <div class="text-danger">
                  @error('username')
                      {{ $message }}
                  @enderror
                </div>
            </div>

            <div class="form-group">
              <label>ID Pengguna</label>
              <input name="id_pengguna" class="form-control" value="{{ old('id_pengguna') }}">
              <div class="text-danger">
                @error('id_pengguna')
                    {{ $message }}
                @enderror
              </div>
          </div>

            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" id="inputPassword3" value="{{ old('password') }}">
                <div class="text-danger">
                  @error('password')
                      {{ $message }}
                  @enderror
                </div>
            </div>

            <div class="form-group">
              <label>Last Login</label>
              <input name="last_login" class="form-control" value="{{ old('last_login') }}">
              <div class="text-danger">
                @error('last_login')
                    {{ $message }}
                @enderror
              </div>
          </div>

            <br>
            <div class="form-group">
              <button class="btn btn-primary btn-sm">Create</button>
            </div>
          </div>
      </div>
    </div>
  </form>
</section>
@endsection