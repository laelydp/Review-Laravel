<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Edit Profile</title>
</head>
<body>
  <h1>Edit Profile</h1>
  <form action="{{ route('profile.update', [$profiles->id]) }}"  method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="nama" value="{{ $profiles->nama }}">
    <input type="text" name="alamat" value="{{ $profiles->alamat }}">
         <!-- {{-- <a href="/profile">Kembali</a> --}} -->
         <input type="submit" value="Update">
</form>
</body>
</html>
