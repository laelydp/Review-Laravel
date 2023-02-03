@extends('template.dashboard')
@section('content')
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
              <form action="{{ route ('profile.store') }}" method="POST">
                 @csrf
                <div class="card-body">
                <input type="text" name="telepon" placeholder="Nama">
                <input type="text" name="alamat" placeholder="alamat">
   
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            </form>
            <!-- /.card -->
@endsection