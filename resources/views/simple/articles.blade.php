@extends('templates.simple')

@section('content')
	
</div>
<div id="wrapper">
	<div id="page" class="container">
		@foreach ($articles as $article)
			<div>
				<div>{{ $article->title }}</div>
				<div>{{ $article->content }}</div>
			</div>
		@endforeach
	</div>
</div>
<div id="copyright" class="container">
	<p>&copy; Untitled. All rights reserved. | Photos by <a href="http://fotogrph.com/">Fotogrph</a> | Design by <a href="http://templated.co" rel="nofollow">TEMPLATED</a>.</p>
</div>d
@endsection