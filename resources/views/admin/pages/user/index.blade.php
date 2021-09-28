@extends('admin.layouts.master')
@section('title', 'Users')
@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>List all user</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">DataTables</li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">DataTable</h3>
             <button type="button" class="delete btn btn-success float-right">Add new user</button>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example2" class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Birthday</th>
                  <th>Phone</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php $i = 0; ?>
                @forelse ($users as $user)
                <?php $i++; ?>
                <tr>
                  <td>{{$user->id}}</td>
                  <td>{{$user->name}}</td>
                  <td>{{$user->email}}</td>
                  <td>{{$user->birthday}}</td>
                  <td>{{$user->phone}}</td>
                  <td>
                    <div class="btn-group" role="group" aria-label="Basic example">
                      <a class="btn btn-primary" href="#">Edit</a>
                      <button type="button" class="delete btn btn-danger">Delete</button>
                    </div>
                  </td>
                </tr>
                @empty
                <tr>
                  <td colspan="15">
                    <p>No users</p>
                  </td>
                <tr>
                  @endforelse
              </tbody>
            </table>
            <div class="d-flex justify-content-center">
              {{ $users->links('vendor.pagination.bootstrap-4') }}
            </div>

          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->

@endsection