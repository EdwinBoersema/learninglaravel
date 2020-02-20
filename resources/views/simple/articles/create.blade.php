@extends('templates.simple')

@section('head')
<link href="/css/bootstrap.min.css" rel="stylesheet" type="text/css">
@endsection

@section('content')

<div id="wrapper">
    <div id="page">
        <div class="container">
            <h1>New Article</h1>

            <form action="/articles" method="POST">
                @csrf

                <div class="form-group">
                    <label for="">title</label>
                    <input 
                        type="text" 
                        name="title" 
                        class="form-control @error('title') border-danger @enderror"
                        value="{{ old('title') }}"
                    >

                    @error('title')
                    <p class="text-danger">{{ $errors->first('title') }}</p>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="">content</label>
                    <textarea 
                        name="content" 
                        class="form-control @error('content') border-danger @enderror"
                    >{{ old('content') }}</textarea>

                    @error('content')
                    <p class="text-danger">{{ $errors->first('content') }}</p>
                    @enderror
                </div>

                <div class="form-group">
                    <button class="btn btn-primary" type="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection