@extends('konten1')

@section('head')
<title>{{base64_decode($_GET['key'])}}</title>
@endsection

@section('bg')
@endsection

@section('header')
 <a class="navbar-brand" href="#">{{(base64_decode($_GET['key']))}}</a>
	

@endsection

@section('content')

<img src="{{base64_decode($_GET['img'])}}" width ="990px" onerror="this.onerror=null;this.src='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQh_l3eQ5xwiPy07kGEXjmjgmBKBRB7H2mRxCGhv1tFWg5c_mWT'; alt="{{(base64_decode($_GET['key']))}}" title="{{(base64_decode($_GET['key']))}}"">
<script>
window.history.replaceState({}, document.title, "/");
</script>
@endsection
