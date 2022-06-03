<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create</title>
</head>
<body>
    <form action="{{ route('upload.update', ['upload' => $upload->id]) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="judul_arsip">Judul Arsip</label>
        <input type="text" id="judul_arsip" name="judul_arsip" value="{{ $upload->judul_arsip }}">
        <br><br>
        <label for="jenis_arsip">Jenis Arsip</label>
        <input type="text" name="jenis_arsip" id="jenis_arsip" value="{{ $upload->jenis_arsip }}">
        <br><br>
        <label for="no_berkas">No Berkas</label>
        <input type="text" id="no_berkas" name="no_berkas" value="{{ $upload->no_berkas }}">
        <br><br>
        <label for="pencipta_arsip">Pencipta Arsip</label>
        <input type="text" id="pencipta_arsip" name="pencipta_arsip" value="{{ $upload->pencipta_arsip }}">
        <br><br>
        <label for="tahun">Tahun</label>
        <select name="tahun" id="tahun" required>
            <option value="" selected disabled >Pilih Tahun</option>
            @for ($i = 1997; $i <= date('Y'); $i++)
            <option {{ $upload->tahun == $i ? 'selected' : '' }} value="{{ $i }}">{{ $i }}</option>
            @endfor
        </select>
        <br><br>
        <label for="user_id">User</label>
        <input type="text" name="user_id" id="user_id" value="{{ $upload->user_id }}">
        <br><br>
        <label for="filename">File Upload</label>
        <input type="file" name="filename" id="filename" value="{{ $upload->filename }}">
        <br><br>
        <button type="submit">Simpan</button>
    </form>
</body>
</html>