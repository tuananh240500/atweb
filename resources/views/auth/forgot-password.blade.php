<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Forgot Password (v2)</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="vendor/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="vendor/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="vendor/dist/css/adminlte.min.css">
</head>

<body class="hold-transition login-page">
  <div class="login-box">
    <div class="card card-outline card-primary">
      <div class="card-header text-center">
        <h2 class="font-weight-bold">Thiết lập lại mật khẩu</h2>
      </div>
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


      <div class="card-body">
        <p class="login-box-msg">
          Bạn quên mật khẩu của mình? Tại đây bạn có thể dễ dàng lấy lại mật khẩu mới.</p>
        <form action="{{route('forgot.password.post')}}" method="post">
          @csrf
          <div class="input-group mb-3">
            <input type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email " name="email">
            @error('email')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-12">
              <button type="submit" class="btn btn-primary btn-block">submit</button>
            </div>
          </div>
        </form>
        <p class="mt-3 mb-1">
          <a href="#">Đăng nhập</a>
        </p>
      </div>
    </div>
  </div>
</body>

</html>
