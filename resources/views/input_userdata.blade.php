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
  <form action="/input_userdata/insert" method="POST" >
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
              <label>Password</label>
              <input name="password" class="form-control" value="{{ old('password') }}">
              <div class="text-danger">
                @error('password')
                    {{ $message }}
                @enderror
              </div>
          </div>

            <br>
            <div class="form-group">
              <button type="submit" class="btn btn-primary btn-sm">Create</button>
            </div>
          </div>
      </div>
    </div>
  </form>
</section>
@endsection