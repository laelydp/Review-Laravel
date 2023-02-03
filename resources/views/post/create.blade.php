@extends('template.dashboard')

@section('content')
<!-- <body>
  <h1>Halaman Create Post</h1>
  <form action="/post" method="POST">
    @csrf
    <input type="text" name="title" placeholder="Title">
    <input type="text" name="body" placeholder="Body">
    <button type="submit">Submit</button>
  </form> -->
  <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Create New Profile</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="/post" method="POST">
              @csrf
                <div class="card-body">
                <input type="text" name="title" placeholder="Title">
                <input type="text" name="body" placeholder="Body">
   
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            </form>
@endsection