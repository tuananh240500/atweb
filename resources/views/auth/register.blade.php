<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Registration Page</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="vendor/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="vendor/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="vendor/dist/css/adminlte.min.css">
</head>

<body class="hold-transition register-page">
  <div class="register-box">


    <div class="card">
      <div class="card-body register-card-body">
        <h2 class="login-box-msg">Đăng kí thành viên</h2>

        @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          <div>
            {{ session('success')}}
          </div>
        </div>
        @endif

        @if (session()->has('error'))
        <div class="alert alert-danger d-flex align-items-center" role="alert">
          <div>
            {{ session('error')}}
          </div>
        </div>
        @endif
        <form action="{{route('register.post')}}" method="post">
          @csrf
          <div class="input-group mb-3">
            <input type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Tên" name="name" value="{{old('name','')}}">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-user"></span>
              </div>
            </div>
            @error('name')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>
          <div class="input-group mb-3">
            <input type="text" class="form-control @error('email') is-invalid @enderror" placeholder="Email" name="email" value="{{old('email','')}}">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
            @error('email')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>
          <div class="input-group mb-3">
            <input type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Mật khẩu" name="password" value="">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
            @error('password')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>
          <div class="input-group mb-3">
            <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror" placeholder="Gõ lại mật khẩu" name="password_confirmation">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
            @error('password_confirmation')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>
          <div class="row">
            <div class="col-8">
              <div class="icheck-primary">
                <input type="checkbox" @if (old('terms'))checked @endif class="form-control @error('terms') is-invalid @enderror" id="agreeTerms" name="terms" value="agree">
          
                <label for="agreeTerms">
                  Tôi đồng ý với điều khoản
            
                </label>
                  @error('terms')
                  <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
              </div>
            </div>
            <!-- /.col -->
            <div class="col-4">
              <button type="submit" class="btn btn-primary btn-block">Đăng kí</button>
            </div>
            <!-- /.col -->
          </div>
        </form>

        <div class="social-auth-links text-center">
          <p>- OR -</p>
          <a href="" class="btn btn-block btn-primary">
            <i class="fab fa-facebook mr-2"></i>
            Đăng nhập bằng Facebook
          </a>
          <a href="" class="btn btn-block btn-danger">
            <i class="fab fa-google-plus mr-2"></i>
            Đăng nhập bằng Google+
          </a>
        </div>

        <a href="" class="text-center">Tôi đã là thành viên</a>
      </div>
      <!-- /.form-box -->
    </div><!-- /.card -->
  </div>
  <!-- /.register-box -->

  <!-- jQuery -->
  <script src="vendor/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="vendor/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="vendor/dist/js/adminlte.min.js"></script>
</body>

</html>
