<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('upload.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="judul_arsip">Judul Arsip</label>
        <input type="text" id="judul_arsip" name="judul_arsip">
        <br><br>
        <label for="jenis_arsip">Jenis Arsip</label>
        <input type="text" name="jenis_arsip" id="jenis_arsip">
        <br><br>
        <label for="no_berkas">No Berkas</label>
        <input type="text" id="no_berkas" name="no_berkas">
        <br><br>
        <label for="pencipta_arsip">Pencipta Arsip</label>
        <input type="text" id="pencipta_arsip" name="pencipta_arsip">
        <br><br>
        <label for="tahun">Tahun</label>
        <input type="number" name="tahun" id="tahun">
        <br><br>
        <label for="user_id">User</label>
        <input type="text" name="user_id" id="user_id" value="{{ $user->id }}">
        <br><br>
        <label for="filename">File Upload</label>
        <input type="file" name="filename" id="filename">
        <br><br>
        <button type="submit">Simpan</button>
    </form>
</body>
</html>