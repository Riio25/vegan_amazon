<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Food Category</title>
</head>
<body>

<h1>Check out these {{ $post ?? 'Bananas' }}!</h1>
<div>{!! $description ?? '' !!}</div>
<br>
<h2>Create:</h2>
<form action="{{ route('save-data') }}" method="get">
    <label for="fruits">Product Name:</label>
    <br>
    <input type="text" name="itsfruit">
    <br>
    <label for="price">Price:</label>
    <br>
    <input type="text" name="price">
    <br>
    <label for="description">Product Description:</label>
    <br>
    <input type="text" name="description">
    <br>
    <input type="submit" name="Save">
</form>

<div>
    <h2>Read:</h2>
    <h3>Our current stock is:</h3>
    <p>
        @foreach ($stock as $stocks)
            <li>{{ $stocks->product_name }}: ${{$stocks->price}}</li>
        @endforeach
    </p>
</div>

<div>
    <h2>Update:</h2>
    <form action="{{ route('update-data') }}" method="get">
        <label for="product_name">Product Name</label>
        <br>
        <input type="text" name="product_name">
        <br>
        <label for="price">Price</label>
        <br>
        <input type="text" name="price">
        <br>
        <label for="description">Description</label>
        <br>
        <input type="text" name="description">
        <br>
        <input type="submit">
    </form>
</div>
<div>
    <h2>Delete:</h2>
    <form action="{{route('delete-data')}}" method=""get>
        <label for="fruits">What stock should be removed?</label>
        <br>
        <input type="text" name="deleted">
        <br>
        <input type="submit">
    </form>
</div>

</body>
</html>
