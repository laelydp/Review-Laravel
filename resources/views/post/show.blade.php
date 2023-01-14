!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post</title>
</head>
<body>
<h1>Hasil Detail</h1>
<form action="/post" method="POST">
                @csrf
                    <label for="title">nama</label>
                    <input type="text" name="title" class="form-control" id="exampleInputEmail1" placeholder="Masukan judul" value="{{ $showpostbyid->title }}" disabled>
                    <br>
                    <br>
                    <label for="body">lengkap</label>
                    <input type="text" name="body" class="form-control" id="exampleInputEmail1" placeholder="Masukan badan" value="{{ $showpostbyid->body }}" disabled>
</body>
</html>