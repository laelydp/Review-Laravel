@extends('template.dashboard')

@section('content')
<div class="card">
    <div class="card-header">
      <h3 class="card-title">Data Profile</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table id="data-table" class="table table-bordered table-hover">
        <thead>
        <tr>
          <th>NO</th>
          <th>telepon</th>
          <th>Alamat</th>
          <th>Action</th>
        </tr>
        </thead>
    <tbody>
      @forelse ($profiles as $profile)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $profile->telepon }}</td>
            <td>{{ $profile->alamat }}</td>

            <td>
            <form action ="{{ route('profile.destroy', $profile->id) }}" method="POST")>
            
            <a class="btn btn-sm btn-info mr-3" href="{{ route('profile.show', $profile->id) }}">Detail</a>
            <a class="btn  btn-sm btn-warning mr-3" href="{{ route('profile.edit', $profile->id) }}">Edit</a>
            @csrf
            @method('DELETE')
            <input type="submit" class="btn btn-sm btn-danger mr-3" value="Delete">
            </form>
            </td>
        </tr>
        @empty       
        <tr>
            <td>Data Masih Kosong</td>
        </tr>
      @endforelse
    </tbody>
  </table>
  @endsection
</body>
</html>