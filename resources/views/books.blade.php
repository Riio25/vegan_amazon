<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Books on Books</title>
</head>
<body>
<div>
    <p>
        @foreach($books as $book)
            <li>{{ $book->title }} by {{ $book->author->author }}</li>
            <p>Cost: ${{$book->price}}</p>
            <span>Genre: {{$book->genre->genre}}</span>
        <br>
        @endforeach
    </p>
</div>

</body>
</html>
