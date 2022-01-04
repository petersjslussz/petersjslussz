@extends('layout')

@section('head')
<title>{{ site_name() }}</title>
@endsection

@section('bg')
@endsection

@section('header')
	<h1 class="single-title"><a href="{{ home_url() }}" title="">{{ site_name() }}</a></h1>
	<div style="position:relative;width:100%;display:block;">  </div>
@endsection

@section('content')
	@if(isset($_GET['img']))

	@endif 
		@foreach(collect(keywords())->shuffle()->take(45)->chunk(3) as $chunked) 
				@foreach($chunked as $keyword)

							<div class="post-grid post-grid3">
								<div class="post-grid-entry">
									<h2 class="post-title title-grid3" style="position:relative;">
										<a href="{{ image_url($keyword) }}" >{{ ucwords($keyword) }}</a>
									</h2>
								</div><div class="clear"></div>
							</div><span></span>
				@endforeach 
		@endforeach 
		
@endsection
