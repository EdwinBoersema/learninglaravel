@extends('templates.simple')

@section('content')
	
</div>
<div id="wrapper">
	<div id="page" class="container">
		@foreach ($articles as $article)
			<div>
				<div class="title"><h2>{{ $article->title }}</h2></div>
				<p>{{ $article->content }}</p>
			</div>
		@endforeach
	</div>
</div>
<div id="copyright" class="container">
	<p>&copy; Untitled. All rights reserved. | Photos by <a href="http://fotogrph.com/">Fotogrph</a> | Design by <a href="http://templated.co" rel="nofollow">TEMPLATED</a>.</p>
</div>
@endsection