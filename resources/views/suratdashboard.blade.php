@extends('master')
@section('content')
<h1>Arsip Surat</h1>
<>Berikut ini adalah surat-surat yang telah terbit dan diarsipkan.</p>
<p>Klik"Lihat" pada kolom aksi untuk menampilkan surat.</p>
<div class="card my-4">
        <h5 class="card-header">Cari Surat</h5>
        <form class="card-body" action="{{route('surat.index')}}" method="GET" role="search">
           
            <div class="input-group">
                <input {{Request::get('judul')}} type="text" class="form-control" placeholder="Cari surat ..." name="judul">
                <span class="input-group-btn">
            <button class="btn btn-secondary" type="submit">Go!</button>
          </span>
            </div>
        </form>
    </div>
<table class="table">
  <thead class="thead-dark">
    <tr>
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
      <td>{{$surat->nomor}}</td>
      <td>{{$surat->kategori}}</td>
      <td>{{$surat->judul}}</td>
      <td>{{$surat->created_at}}</td>
      <td>
        <a href="/destroy/delete{{ $surat->id }}" onclick="return confirm('Anda yakin mau menghapus item ini ?')" class="btn btn-danger">Hapus</button>
        <!-- <a href="" onclick=”return confirm(‘Yakin Hapus?’)” class="btn btn-danger">Hapus</button> -->
        <a href="{{route('surat.unduh',[$surat->pdf])}}" class="btn btn-warning" target="_blank">Unduh</a>
        <!-- <a href="/storage/{{$surat->pdf}}" class="btn btn-warning" target="_blank">Unduh</a> -->
        <a href="{{route('surat.show',[$surat->id])}}" class="btn btn-primary">Lihat</button></td>
        <!-- <a href="/surat/{{$surat->id}}" class="btn btn-primary">Lihat</button></td> -->
    </tr>
    @endforeach
  </tbody>
  <tfoot>
    <tr>
      <td colspan="10">
        {{$surats->appends(Request::all())->links('pagination::bootstrap-4')}}
      </td>
    </tr>
  </tfoot>
</table>
<a href="surat/create" class="btn btn-primary float-left">Arsipkan Surat</a>
@endsection