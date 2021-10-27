@extends('master')
@section('content')
<div>
<embed src="{{asset('storage/'.$surat->pdf)}}" type="application/pdf" width="100%" height="2000px">
</div>
@endsection