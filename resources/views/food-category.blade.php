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
<div>{{ $description ?? '' }}</div>
<br>

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

</body>
</html>
