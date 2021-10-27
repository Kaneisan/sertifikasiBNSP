@extends('master')
@section('content')

<h1>Arsip Surat >> Uggah</h1>
<p>Unggah surat  yang telah terbit pada form ini untuk diarsipkan.</p>
<p>Catatan :</p>
<ul>
<li>Gunakan file berformat pdf</li>
</ul>
<form action='/surat' method="POST" enctype="multipart/form-data" enctype="multipart/form-data">
@csrf
  <div class="form-group">
    <label for="exampleFormControlInput1">Nomor Surat</label>
    <input type="text" class="form-control border border-dark" id="nomor" name="nomor">
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Kategori</label>
    <select class="form-control border border-dark" id="kategori" name="kategori">
      <option value='Undangan'>Undangan</option>
      <option value='Pengumuman'>Pengumuman</option>
      <option value='Nota Dinas'>Nota Dinas</option>
      <option value='Pemberitahuan'>Pemberitahuan</option>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Judul</label>
    <input type="input" class="form-control border border-dark" id="judul" name="judul">
  </div>
  <div class="form-group">
    <label#ccc" for="exampleFormControlInput1">File Surat</label>
    <input type="file" class="form-control-file border border-dark" id="pdf" name="pdf">
  </div>
  <div>
  <button a href="/surat" name="add" class="btn btn-primary float-left mr-4 ">Kembali</button>
  <button type="submit" name="add" class="btn btn-primary">Tambah Data</button>
  </div>
</form>
@endsection