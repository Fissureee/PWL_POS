<html>
    <head>
        <title>Data Level Pengguna</title>
    </head>
    <body>
        <h1>Data Level Pengguna</h1>
        <table>
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
                </tr>
            @endforeach
        </table>
    </body>
</html>