@extends ('layout')

@section ('content')


<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ route('/books') }}">Books</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}">Register</a>
                @endif
            @endauth
        </div>
    @endif




    <div class="content">
        <div class="title m-b-md">
       Laravel Library 
        </div>

        <div class="links">
        
            <a href="/books">Books</a>
            <a href="/register">Register for Library Membership</a>

        </div>
    </div>
</div>
@endsection