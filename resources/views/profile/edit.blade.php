@extends('template.dashboard')

@section('content')
  <form action="{{ route('profile.update', [$profiles->id]) }}"  method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="telepon" value="{{ $profiles->telepon}}">
    <input type="text" name="alamat" value="{{ $profiles->alamat }}">
         {{-- <a href="/profile">Kembali</a> --}} -->
    <input type="submit" value="Update">
</form>
@endsection