@extends('templates.simple')

@section('head')
    <link href="/css/bootstrap.min.css" rel="stylesheet" type="text/css">
@endsection

@section('content')
    
<div id="wrapper">
    <div id="page">
        <div class="container">
            <h1>New Article</h1>

            <form  action="/articles/{{ $article->id }}" method="POST">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="">title</label>
                    <input type="text" name="title" class="form-control" value="{{ $article->title }}">
                </div>

                <div class="form-group">
                    <label for="">content</label>
                    <textarea name="content" class="form-control">{{ $article->content }}</textarea>
                </div>

                <div class="form-group">
                    <button class="btn btn-primary" type="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection