@extends('admin.layouts.master')
@section('title', 'Profile')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Hồ sơ</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                    <li class="breadcrumb-item active">Hồ sơ người dùng</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">

                <!-- Profile Image -->
                <div class="card card-primary card-outline">
                    <div class="card-body box-profile">
                        <div class="text-center">
                            @if ($user->avatar)
                            <img class="img-thumbnail" width="120px" src="{{ asset($user->avatar) }}" alt="{{ $user->name }}" />
                            @endif
                        </div>

                        <h3 class="profile-username text-center">{{$user->name}}</h3>

                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
                <!-- /.card -->
            </div>
            <!-- /.col -->
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header p-2">
                        <ul class="nav nav-pills">
                            <li class="nav-item"><a class="nav-link  @if (!$errors->any()) active @endif" href="#activity" data-toggle="tab">Mô tả</a></li>

                            <li class="nav-item"><a class="nav-link @error('password') active @enderror @error('new_password') active @enderror" href="#timeline" data-toggle="tab">Thay đổi mật khẩu</a></li>

                            <li class="nav-item"><a class="nav-link @error('name') active @enderror @error('check') active @enderror " href="#settings" data-toggle="tab">Cập nhật hồ sơ</a></li>
                        </ul>
                    </div><!-- /.card-header -->
                    <div class="card-body">
                        <div class="tab-content">

                            <div class="tab-pane @if(!$errors->any()) active @endif" id="activity">
                                <!-- About Me Box -->
                                <div class="card card-primary">
                                    <div class="card-header">
                                        <h3 class="card-title">Mô tả </h3>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body">

                                        <strong>Tên</strong>

                                        <p class="text-muted">{{$user->name}}</p>

                                        <strong>Email</strong>

                                        <p class="text-muted">{{$user->email}}</p>

                                        <strong> Địa chỉ</strong>

                                        <p class="text-muted">{{$user->address}}</p>
                                        <strong>
                                            Ngày sinh
                                        </strong>
                                        <p class="text-muted">{{$user->dob}}</p>

                                    </div>
                                    <!-- /.card-body -->
                                </div>


                            </div>
                            <!-- /.tab-pane -->
                            <div class="tab-pane @error('password') active @enderror @error('new_password') active @enderror " id="timeline">

                                <form class="form-horizontal" method="post" action="{{route('profile.change.password')}}">
                                    @csrf
                                    @method('put')
                                    <div class="form-group row">
                                        <label for="inputName" class="col-sm-2 col-form-label">Nhập mật khẩu hiện tại</label>
                                        <div class="col-sm-10">
                                            <input type="password" name="password" class="form-control @error('password') is-invalid @enderror " id="inputName">
                                            @error('password')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputEmail" class="col-sm-2 col-form-label">Nhập mật khẩu mới</label>
                                        <div class="col-sm-10">
                                            <input type="password" name="new_password" class="form-control @error('new_password') is-invalid @enderror" id="inputEmail">
                                            @error('new_password')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputName2" class="col-sm-2 col-form-label">Xác nhận mật khẩu </label>
                                        <div class="col-sm-10">
                                            <input type="password" name="verify_password" class="form-control @error('verify_password') is-invalid @enderror" id="inputName2">
                                            @error('verify_password')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="offset-sm-2 col-sm-10">
                                            <button type="submit" class="btn btn-danger">Sửa đổi</button>
                                        </div>
                                    </div>
                                </form>

                            </div>
                            <!-- /.tab-pane -->

                            <div class="tab-pane @error('name') active @enderror @error('check') active @enderror" id="settings">
                                <form method="post" class="form-horizontal" enctype="multipart/form-data" action="{{route('profile.setting')}}">
                                    @csrf
                                    @method('put')
                                    <div class="form-group row">
                                        <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{$user->name}}">
                                            @error('name')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror

                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                                        <div class="col-sm-10">
                                            <input type="email" style="background: #00bc8c" class="form-control " name="email" id="email" value="{{$user->email}}" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputName2" class="col-sm-2 col-form-label">Địa chỉ</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="inputName2" name="address" value="{{$user->address}}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputExperience" class="col-sm-2 col-form-label">Ngày sinh</label>
                                        <div class="col-sm-10">
                                            <input type="date" class="form-control" id="date" name="birthday" value="{{$user->dob}}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputSkills"  class="col-sm-2 col-form-label">Chi nhánh </label>
                                        <div class="col-sm-10">
                                            <input type="text" style="background: #00bc8c" class="form-control" id="branch_id" name="branch_id" value="{{$user->branch_id}}" disabled>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="inputSkills" class="col-sm-2 col-form-label">Avatar</label>

                                        <div class="col-sm-10">
                                            <input type="file" class="form-control" id="avatar" name="avatar" value="{{$user->avatar}}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="offset-sm-2 col-sm-10">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="check" class="@error('check') is-invalid @enderror"> Tôi đồng ý với <a href="#">mọi điều khoản</a>

                                                    @error('check')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="offset-sm-2 col-sm-10">
                                            <button type="submit" class="btn btn-danger">Sửa đổi</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- /.tab-pane -->
                        </div>
                        <!-- /.tab-content -->
                    </div><!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</section>
<!-- /.content -->
@endsection