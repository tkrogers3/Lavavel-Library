@extends('layout')
@section('content')
    
<div class="container">
<h1 class="text-center">Books</h1>


@foreach($books as $book)
<p><b>Title:</b>  {{$book->title}}</p>

    @foreach($book->authors as $author)
    <p><b>Author:</b>  {{$author->name}}</p>
   
    @endforeach
    <hr>
@endforeach

</div>
@endsection