@extends('templates.simple')

@section('content')

<div id="wrapper">
    <div id="page">
        <div class="container">
            <h1>New Article</h1>

            <form  action="/articles/create" method="POST">
                @csrf

                <div class="form-group">
                    <label for="">title</label>
                    <input type="text" name="title" class="form-control">
                </div>

                <div class="form-group">
                    <label for="">content</label>
                    <textarea name="content" class="form-control"></textarea>
                </div>

                <div class="form-group">
                    <button class="btn btn-primary" type="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection