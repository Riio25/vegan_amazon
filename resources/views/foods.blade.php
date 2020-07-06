<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Foods View</title>
</head>
<body>
@foreach($post as $posts)
    <li>Food: {{$posts->item}}</li>
    <ul>Category: {{$posts->category}}, {{$posts->color}}</ul>
@endforeach

<span>Add Entry:</span>
<br>
<input type="text" name="item" placeholder="Please enter item name.">
<br>
<input type="text" name="category" placeholder="Please enter category.">
<br>
<input type="text" name="color" placeholder="Please enter color.">
<br>
<input type="submit">
<br>

<span>Update an Entry:</span>
<br>
<select name="update" id="">
    <option value="0">Select an Item</option>
    @foreach($post as $posts)
        <option value="{{$posts->item}}">{{$posts->item}}</option>
    @endforeach
</select>
<br>
<input type="text" name="category" placeholder="Please enter category.">
<br>
<input type="text" name="color" placeholder="Please enter color.">
<br>
<button type="button" id="update">Update</button> <button type="button" id="delete">Delete</button>
</body>
</html>
