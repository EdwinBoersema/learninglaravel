@extends('templates.simple')

@section('head')
	<link href="/css/bootstrap.min.css" rel="stylesheet" type="text/css">
@endsection

@section('content')
</div>
<div id="wrapper">
	<div id="page" class="container">
		<div id="content">
			<div class="title">
				<h2>{{ $article->title }}</h2>
			<p><img src="/images/banner.jpg" alt="" class="image image-full" /> </p>
			<p>{{ $article->content }}</p>
		</div>
	</div>
</div>

<div class="justify-content-end">
	<a class="btn btn-success" href="/articles/{{ $article->id }}/edit">Edit</a>
</div>

<div id="copyright" class="container">
	<p>&copy; Untitled. All rights reserved. | Photos by <a href="http://fotogrph.com/">Fotogrph</a> | Design by <a href="http://templated.co" rel="nofollow">TEMPLATED</a>.</p>
</div>
@endsection