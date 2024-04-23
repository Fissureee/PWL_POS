<html>

<head>
    <title>Data Level User</title>
</head>

<body>
    <h1>Data User</h1>
    <a href="">Tambah Level</a>
    <table border="1" cellpadding="2" cellspacing="0">
        <tr>
            <th>ID</th>
            <th>Kode Level</th>
            <th>Name Level</th>
        </tr>
        @foreach ($data as $d)
            <tr>
                <td>{{ $d->level_id }}</td>
                <td>{{ $d->level_kode }}</td>
                <td>{{ $d->level_nama }}</td>
                <td><a href=>ubah</a> | <a href=>hapus</a></td>
            </tr>
        @endforeach
    </table>
</body>

</html>