@extends ('layout')

@section ('content')

    <div class="container">
        <div>
            <h1>Shopping Books</h1>
        </div>


        <div>
                @foreach($books as $book)
                    <ul style="list-style-type: none">
                        <li style="text-decoration: none"><h2>{{ $book->title }}</h2> by {{ $book->author->author }}</li>
                        <li>Genre: {{$book->genre->genre}}</li>
                        <li>Cost: ${{$book->price}}</li>
                    </ul>

                    <a  style="margin-left: 35px;" href="{{ url('checkout/'. $book->id) }}" class="btn btn-primary">Buy Now</a>

                <br>
                @endforeach
        </div>
    </div>

@endsection

