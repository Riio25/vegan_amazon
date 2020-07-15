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
        <ul>Category: {{$posts->category}}, {{$posts->foodcolor}}</ul>
    @endforeach

    <span>Add Entry:</span>
    <form action="{{ route('save-data-foods') }}" method="get">
        <br>
        <input type="text" name="item" placeholder="Please enter item name.">
        <br>
        <input type="text" name="category" placeholder="Please enter category.">
        <br>
        <input type="text" name="color" placeholder="Please enter color.">
        <br>
        <input type="text" name="price" placeholder="Please enter the price of the item.">
        <br>
        <input type="submit" name="Save">
        <br>
    </form>


    <span>Update an Entry:</span>
    <br>
    <form method="get" action="{{route('update-data-foods')}}">
        <select name="update">
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
        <input type="text" name="price" placeholder="Please enter a price for the item.">
        <br>
        <input type="submit" value="Update">
    </form>
</body>
</html>
