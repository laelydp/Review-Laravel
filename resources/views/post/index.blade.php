@extends('template.dashboard')

@section('content')
<div class="card">
    <div class="card-header">
      <h3 class="card-title">Data Post</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table id="data-table" class="table table-bordered table-hover">
        <thead>
        <tr>
          <th>NO</th>
          <th>Title</th>
          <th>Body</th>
          <th>Action</th>
        </tr>
        </thead>
    <tbody>
      <tr>
        @forelse ($datapost as $item=>$value)
        <tr>
          <td>{{ $item + 1 }}</td>
          <td>{{ $value->title }}</td>
          <td>{{ $value->body }}</td>
          <td>
            <!-- <form action="/post/{{ $value->id }}" method="POST">
            <a href="/post/{{ $value->id }}">detail</a>
            <a href="/post/{{ $value->id }}/edit">edit</a> -->
            <form action ="/post/{{ $value->id }}" method="POST">
              <a class="btn btn-sm btn-info mr-3" href="/post/{{ $value->id }}">Detail</a>
              <a class="btn  btn-sm btn-warning mr-3" href= "/post/{{ $value->id }}/edit">Edit</a>
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