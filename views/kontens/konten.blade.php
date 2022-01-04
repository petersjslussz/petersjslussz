@extends('konten1')

@section('head')

<title>{{ ucwords(str_replace('-', ' ', $konten)) }}</title>
@endsection

@section('content')
	@include('kontens.' . $konten)
@endsection