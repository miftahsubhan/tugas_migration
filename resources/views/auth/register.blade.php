@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Library</title>
</head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="../../index2.html" class="h1"><b>Library</b></a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Register a new membership</p>

      <form action="../../index.html" method="post">
        <div class="input-group mb-3">
              <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" 
              name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Full name">

              @error('name')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-user"></span>
                </div>
              </div>
        </div>
        <div class="input-group mb-3">
              <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" 
              name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="email">

              @error('email')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-envelope"></span>
                </div>
              </div>
        </div>
        <div class="input-group mb-3">
              <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" 
              name="password" required autocomplete="new-password" placeholder="password">

              @error('password')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-lock"></span>
                </div>
              </div>
        </div>
        <div class="input-group mb-3">
              <input id="password-confirm" type="password" class="form-control" 
              name="password_confirmation" required autocomplete="new-password" placeholder="Retype password">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-lock"></span>
                  </div>
                </div>
        </div>        
        <!-- /.col -->
        <div class="col-4">
          <button type="submit" class="btn btn-primary btn-block">Register</button>
        </div>
          <!-- /.col -->        
      </form>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->
</body>
</html>

@endsection
