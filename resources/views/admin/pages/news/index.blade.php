@extends('admin.layouts.master')
@section('title', 'News')
@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>List all news</h1>
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

@include('admin/pages/_alert/default')
<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">DataTable</h3>
            <a href="#"><button type="button" class="create btn btn-success float-right">Add new news</button>
            </a>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example2" class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th>Id</th>
                  <th>Title</th>
                  <th>Content</th>
                  <th>Created by</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @forelse ($news as $new)
                <tr>
                  <td>{{$new->id}}</td>
                  <td>{{$new->title}}</td>
                  <td>{{$new->content}}</td>
                  <td>{{$new->createdBy->name}}</td>
                  <td class="w-1">
                    <div class="btn-group" role="group" aria-label="Basic example">
                      <a class="btn btn-primary" href="#">Edit</a>
                      <button type="button" class="delete btn btn-danger" data1="{{$new->id}}" data2="{{$new->title}}">Delete</button>
                    </div>
                  </td>
                </tr>
                @empty
                <tr>
                  <td colspan="15">
                    <p>No brands</p>
                  </td>
                <tr>
                  @endforelse
              </tbody>
            </table>
            <div class="d-flex justify-content-center">
              {{ $news->links('vendor.pagination.bootstrap-4') }}
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

@section('modal')
<!-- Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form action="{{route('admin.news.delete')}}" method="post">
      @csrf
      @method('DELETE')
      <input type="hidden" name="id" id="id" value="0">
      
      <div class="modal-header">
        <h5 class="modal-title" id="deleteModalLabel">Delete</h5>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">x</button>
      </div>
      <div class="modal-body">
        Do you want delete?
        <output name="name" id="name" value="0"></output>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" id="closed" data-bs-dismiss="modal">Cancel</button>
        <button type="submit" class="btn btn-danger">Delete</button>
      </div>
      </form>
    </div>
  </div>
</div>
@stop

@section('js')
<script type="text/javascript">
      $('.delete').click(function(){
          $('#deleteModal').modal('show')
          $('#id').val($(this).attr('data1'))
          $('#name').val($(this).attr('data2'))
      });
      $('#closed').click(function(){
          $('#deleteModal').modal('hide');
      });
      $('.close').click(function(){
          $('#deleteModal').modal('hide');
      });
</script>
@endsection


