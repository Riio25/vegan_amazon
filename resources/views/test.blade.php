<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Altered</title>
</head>
<body>
<h1>Your data was {{ $value }}.</h1>

<div>
    <a href="{{url('/bt')}}">Initial CRUD</a>
</div>
<div>
    <a href="{{url('/foods')}}">Category CRUD</a>
</div>

</body>
</html>
