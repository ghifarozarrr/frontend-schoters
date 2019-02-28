@extends('layouts.app')
@section('style')
<style>
	p{
		font-size: 24pt;
		color: #545454 !important;
		padding-bottom: 28px;
	}

	.choosen{
		text-align: center;
		vertical-align: middle;
		padding: 10px;
	}
</style>
@endsection

@section('content')
	<nav aria-label="breadcrumb ">
          <ol class="breadcrumb bg-transparent">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Profile</a></li>
            <li class="breadcrumb-item"><a href="/">Preference</a></li>
            <li class="breadcrumb-item" aria-current="page">Your choice</li>
          </ol>
      </nav>
	<div class="container choosen">
		<p>5 top scholarship categories you have picked</p>
			@foreach($categories as $c)
				<p class="category choosen">{{$c['value']}}</p>
			@endforeach
	</div>
@endsection