@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="form-group">
            <label for="usr">Title:</label>
            {{$article->title}}
        </div>

        <div class="form-group">
            <label for="usr">body:</label>
            {{$article->body}}
        </div>


        <div class="form-group">
        <table class="table table-striped">
            <tr><td>Comments</td></tr>
            @foreach($article->comments as $com )
                <tr>
                    <td>{{$com->comment}}</td>
                </tr>
             @endforeach
        </table>
        </div>


            <form action="/read/{{$article->id}}" method="post">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="usr">body:</label>
                    <textarea rows="4" cols="50" name="body" class="form-control"></textarea>
                </div>
                <br>
                <input type="submit" value="add comment" class="btn btn-primary" >
            </form>


    </div>
@endsection
