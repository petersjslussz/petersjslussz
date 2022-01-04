@extends('layout')

@section('head')
<title>{{ ucwords($keyword) }}</title>
@endsection

@section('bg')
{{ collect($images)->random()['url'] }}
@endsection
@section('header1')
      <nav class="breadcrumb" style="padding-left:15px;margin-bottom:5px;">
          <ul xmlns:v="http://rdf.data-vocabulary.org/#">
              <li class="breadhome" typeof="v:Breadcrumb">
                  <a href="{{ home_url() }}" property="v:title" rel="v:url">
                      <span property="name">Home</span>
                  </a>
              </li> 
              <li>{{ ucwords($keyword) }}</li>
          </ul>
      </nav>

@endsection

@section('header')
	<h1 class="single-title"><a title="{{ ucwords($keyword) }}">{{ ucwords($keyword) }}</a></h1>

	@php
		shuffle($sentences);
	@endphp
         
		<div style="position:relative;width:100%;display:block;">   </div>
        <div class="ispost post-47213a4">
			@if(!empty($sentences))
					 <strong>{{ ucwords($keyword) }}</strong> - {{ @array_pop($sentences) }} {{ @array_pop($sentences) }} {{ @array_pop($sentences) }} {{ @array_pop($sentences) }}<br>
			@endif
        </div>

<div class="row">
@foreach(collect(keywords())->shuffle()->take(4)->chunk(3) as $chunked) 
				@foreach($chunked as $keyword)

		      <h2 style="font-weight:normal;"> <a href="{{ image_url($keyword) }}" title="{{ ucwords($keyword) }}">{{ ucwords($keyword) }}</a> </h2>	       
@endforeach 
				@endforeach
</div>


@endsection

@section('content')

				
	@foreach(collect($images)->take(30)->shuffle()->chunk(3) as $chunked)
	
	<div id="imgids"></div>
		<div class="get-posts gallery-47213a4">
  			<ul style="padding: 0px 1px 40px 1px;">
		@foreach($chunked as $image)
	


			<div class="gallery">
@foreach(collect(keywords())->shuffle()->take(1)->chunk(3) as $chunked2) 
@foreach($chunked2 as $keyword2)
						  		<a target="_blank" href="{{ konten_url($image['url'],ucwords($keyword)) }}">
		    		<img src="{{ $image['url'] }}" alt="{{ ucwords($keyword) }}.{{ $image['title'] }}" class="image" title="{{ ucwords($keyword) }} {{ucwords($keyword2) }}" width="" height="400px" onerror="this.onerror=null;this.src='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQh_l3eQ5xwiPy07kGEXjmjgmBKBRB7H2mRxCGhv1tFWg5c_mWT';">
		  		</a>
@endforeach
@endforeach
		  	</div>

		@endforeach
			</ul>
<div class="clear"></div>
		</div>		 
@endforeach 



	<div style="position:relative;width:100%;display:block;">    </div>
		<div class="istag">
			@foreach(collect(keywords())->shuffle()->take(50)->chunk(3) as $chunked) 
				@foreach($chunked as $keyword)
		        <span class="linkkey">
		          <a href="{{ image_url($keyword) }}" title="robin">{{ ucwords($keyword) }}</a>
		        </span>  
		        @endforeach 
			@endforeach 
		</div>

	
@endsection
