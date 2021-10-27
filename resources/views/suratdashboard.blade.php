@extends('master')
@section('content')
<h1>Arsip Surat</h1>
<>Berikut ini adalah surat-surat yang telah terbit dan diarsipkan.</p>
<p>Klik"Lihat" pada kolom aksi untuk menampilkan surat.</p>
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nomor</th>
      <th scope="col">Kategori</th>
      <th scope="col">Judul</th>
      <th scope="col">Waktu Pengarsipan</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    @foreach($surats as $surat)
    <tr>
      <th scope="row">1</th>
      <td>{{$surat->nomor}}</td>
      <td>{{$surat->kategori}}</td>
      <td>{{$surat->judul}}</td>
      <td>{{$surat->created_at}}</td>
      <td><a href="/destroy/delete{{ $surat->id }}" target="_blank" class="btn btn-danger">Hapus</button>
        <a href="{{route('surat.unduh',[$surat->pdf])}}" class="btn btn-warning" target="_blank">Unduh</a>
        <!-- <a href="/storage/{{$surat->pdf}}" class="btn btn-warning" target="_blank">Unduh</a> -->
        <a href="{{route('surat.show',[$surat->id])}}" class="btn btn-primary">Lihat</button></td>
        <!-- <a href="/surat/{{$surat->id}}" class="btn btn-primary">Lihat</button></td> -->
    </tr>
    @endforeach
  </tbody>
</table>
<a href="surat/create" class="btn btn-primary float-left">Arsipkan Surat</a>
@endsection