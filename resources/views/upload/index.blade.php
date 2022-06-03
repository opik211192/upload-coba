<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index</title>
</head>
<body>
   <a href="{{ route('upload.create') }}">Tambah Data</a>
   <br><br>
   <table border="1">
    <thead>
        <tr>
            <th>No</th>
            <th>Judul Arsip</th>
            <th>Jenis Arsip</th>
            <th>No berkas</th>
            <th>Pencipta Arsip</th>
            <th>Tahun</th>
            <th>File</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
            @foreach ($uploads as $upload)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{ $upload->judul_arsip }}</td>
                <td>{{ $upload->jenis_arsip }}</td>
                <td>{{ $upload->no_berkas }}</td>
                <td>{{ $upload->pencipta_arsip }}</td>
                <td>{{ $upload->tahun }}</td>
                <td>{{ $upload->filename }}</td>
                <td>
                    <a href="{{ route('upload.edit', $upload->id) }}">Edit</a>
                </td>
            </tr>
            @endforeach
    </tbody>
   </table>
</body>
</html>