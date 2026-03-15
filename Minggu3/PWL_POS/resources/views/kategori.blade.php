<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Kategori Barang</title>
</head>

<body>
    <h1>Data Kategori Barang</h1>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>ID</th>
            <th>Kode Kategori</th>
            <th>Nama Kategori</th>
        </tr>
        @foreach ($data as $k)
        <tr>
            <td>{{ $k->kategori_id }}</td>
            <td>{{ $k->kategori_kode }}</td>
            <td>{{ $k->kategori_nama }}</td>
        </tr>
        @endforeach
    </table>
</body>

</html>