@extends('template.simple')

@section('content')

<div id="wrapper">
    <div id="page">
        <div class="container">
            <h1>New Article</h1>

            <form action="">
                <div class="field">
                    <label for="title">Title</label>
                    <div class="control">
                        <input type="text" name="title" id="title"> 
                    </div>

                    <div class="field">
                        <label for="content">Content</label>
                        <div class="control">
                            <textarea class="textarea" name="content" id="content">
                        </div>
                    </div>

                    <div class="field-is-grouped">
                        <div class="control">
                            <button class="button is-link" type="submit">Submit</button>
                        </div>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>

@endsection