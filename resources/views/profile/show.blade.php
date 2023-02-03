@extends('template.dashboard')

@section('content')
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Detail Profile</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{ route ('profile.store') }}" method="POST">
                 @csrf
                <div class="card-body">
                    <input type="text" name="telepon" value="{{ $profiles->telepon}}" disabled>
                    <input type="text" name="alamat" value="{{ $profiles->alamat }}" disabled>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                <a class="btn btn-primary" href="{{ route('profile.index') }}">Kembali</a>
                </div>
              </form>
            </div>
            </form>
            <!-- /.card -->
@endsection