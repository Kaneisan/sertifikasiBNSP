@extends('master')
@section('content')
<div>
<p>Nomor: {{$surat->nomor}}</p>
<p>Kategori: {{$surat->kategori}}</p>
<p>Judul: {{$surat->judul}}</p>
<p>Waktu Unggah: {{$surat->created_at}}</p>
<embed src="{{asset('storage/'.$surat->pdf)}}" type="application/pdf" width="100%" height="2000px">
</div>
@endsection