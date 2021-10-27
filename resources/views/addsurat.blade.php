@extends('master')
@section('content')

<h1>Arsip Surat >> Uggah</h1>
<p>Unggah surat  yang telah terbit pada form ini untuk diarsipkan.</p>
<p>Catatan :</p>
<ul>
<li>Gunakan file berformat pdf</li>
</ul>
<form action='/surat' method="POST" enctype="multipart/form-data"enctype="multipart/form-data">
@csrf
  <div class="form-group">
    <label for="exampleFormControlInput1">Nomor Surat</label>
    <input type="text" class="form-control" id="nomor" name="nomor">
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Kategori</label>
    <select class="form-control" id="kategori" name="kategori">
      <option value='Pengumuman'>Pengumuman</option>
      <option value='Undangan'>Undangan</option>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Judul</label>
    <input type="input" class="form-control" id="judul" name="judul">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">File Surat</label>
    <input type="file" class="form-control-file" id="pdf" name="pdf">
  </div>
  <div>
  <button a href="" name="add" class="btn btn-primary float-left">Kembali</button>
  <button type="submit" name="add" class="btn btn-primary float-left">Tambah Data</button>
  </div>
</form>
@endsection