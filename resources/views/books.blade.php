@extends ('layout')

@section('css')
    <style>
        ul {
            margin-top: 25px;
        }
    </style>
@endsection

@section ('content')
{{--<div>--}}
{{--    <p>--}}
{{--        @foreach($books as $book)--}}
{{--            <li>{{ $book->title }} by {{ $book->author->author }}</li>--}}
{{--            <p>Cost: ${{$book->price}}</p> <a  href="{{ url('checkout') }}" class="btn btn-primary">Buy Now</a>--}}
{{--            <span>Genre: {{$book->genre->genre}}</span>--}}
{{--        <br>--}}
{{--        @endforeach--}}
{{--    </p>--}}
{{--</div>--}}

{{--
<div class="content-wrapper">

        @foreach($books as $book)
            <ul>
                <li>{{ $book->title }} by {{ $book->author->author }}</li>
                <li>Cost: ${{$book->price}}</li>
                <li>Genre: {{$book->genre->genre}}</li>
            </ul>

            <a  href="{{ url('checkout') }}" class="btn btn-primary">Buy Now</a>

        @endforeach

</div>
--}}
{{--<div class="container">--}}
{{--    <div class="row">--}}
{{--        <div class="col-xs-12">--}}
{{--            @foreach($books as $book)--}}
{{--                <ul>--}}
{{--                    <li>{{ $book->title }} by {{ $book->author->author }}</li>--}}
{{--                    <li>Cost: ${{$book->price}}</li>--}}
{{--                    <li>Genre: {{$book->genre->genre}}</li>--}}
{{--                </ul>--}}

{{--                <a  href="{{ url('checkout') }}" class="btn btn-primary">Buy Now</a>--}}

{{--            @endforeach--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}


<div class="container">
    <h1>Browse Books</h1>
    @foreach($books as $book)
        <div class="row">
            <div class="col-xs-6">

                <ul>
                    <li>{{ $book->title }} by {{ $book->author->author }}</li>
                    <li>Cost: ${{$book->price}}</li>
                    <li>Genre: {{$book->genre->genre}}</li>
                </ul>

            </div>

            <div class="col-xs-6">
                <a  href="{{ url('checkout') }}" class="btn btn-primary">Buy Now</a>
            </div>
        </div>
    @endforeach
</div>

@endsection

