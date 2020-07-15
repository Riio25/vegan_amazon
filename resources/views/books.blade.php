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
        @foreach($book as $books)
            <li>{{ $books->title }} by {{ $books->author_id }}</li>
            <p>Cost: {{$books->price}}</p>
        @endforeach
    </p>
</div>

</body>
</html>
