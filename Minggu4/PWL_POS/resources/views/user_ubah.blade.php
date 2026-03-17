<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Ubah Data User</title>
</head>

<body>
    <h1>Form Ubah Data User</h1>
    <a href="/user">Kembali</a>
    <form action="/user/ubah_simpan/{{ $data->user_id }}" method="post">

        {{ csrf_field() }}
        {{ method_field('PUT') }}

        <label>Username</label>
        <input type="text" name="username" value="{{ $data->username }}" placeholder="Masukkan Usernane">

        <label>Nama</label>
        <input type="text" name="nama" value="{{ $data->nama }}" placeholder="Masukkan Nama">

        <label>Password</label>
        <input type="password" name="password" value="{{ $data->password }}" placeholder="Masukkan Password">

        <label>Level ID</label>
        <input type="number" name="level_id" value="{{ $data->level_id }}" placeholder="Masukkan  ID Level">

        <input type="submit" class="btn btn-success" value="Ubah">
    </form>
</body>

</html>