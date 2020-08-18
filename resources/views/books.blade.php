@extends ('layout')

@section ('content')
<div>
    <p>
        @foreach($books as $book)
            <li>{{ $book->title }} by {{ $book->author->author }}</li>
            <p>Cost: ${{$book->price}}</p> <a  href="{{ url('checkout') }}" class="btn btn-primary">Buy Now</a>
            <span>Genre: {{$book->genre->genre}}</span>
        <br>
        @endforeach
    </p>
</div>

@endsection

