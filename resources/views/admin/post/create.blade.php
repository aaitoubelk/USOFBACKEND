@extends('admin.layouts.app')

@section('main-content')
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-outline card-info">
              <div class="card-header">
                <h2 class="card-title">Title</h2>
              </div>
              {{-- @include('includes.messages') --}}
              <!-- /.card-header -->
              <!-- form start -->
              <form enctype="multipart/form-data" action=" {{route('post.store')}} " method="POST">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="title">Post title</label>
                    <input type="text" class="form-control" name="title" id="title" placeholder="Title">
                  </div>
                    <div class="form-group">
                        <label for="categories">Category</label>
                        <input type="text" class="form-control" name="categories" placeholder="Categories">
                    </div>
                  <div class="form-group">
                        <div class="form-group">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <label>Upload a picture</label>
                            <input type="file" class="form-control" name="images[]" multiple>
                        </div>
                  </div>
                    <div class="form-group">
                        <label for="categories">Status</label>
                        <select id="status" name="status" class="form-control custom-select">
                            <option selected disabled>Select one</option>
                            <option value="active">active</option>
                            <option value="inactive">inactive</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="title">Content</label>
                        <input type="text" name="content" class="form-control col-md-12" placeholder="Content">
                    </div>
                </div>
                <!-- /.card-body -->
            <!-- /.card-header -->
            <div class="card-footer">
              <button type="submit" class="btn btn-primary">Submit</button>
              <a href="{{route('post.index')}}" class="btn btn-primary">Back</a>
            </div>
            <!-- /.card -->
          </form>
        </div>
        <!-- /.col-->
      </div>
        </div>
      </div>
      <!-- ./row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection
