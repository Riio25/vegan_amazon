@extends ('layout')

@section('content')
    <div class="content">
        <div class="title m-b-mid">
            Clothing Inventory Management
        </div>
    </div>

    @if (!isset($value))
        <div></div>
     @else
        <div>{{ $value }}</div>

    @endif

    <form class="margins" action="{{route('updateclothing')}}" method="get">
        <label for="description">Description</label>
        <br>
        <input type="text" name="description">
        <br>
        <label for="price">Price</label>
        <br>
        <input type="text" name="price">
        <br>
        <label for="category">Category</label>
        <br>
        <select name="category" id="category">
            <option value="sst">Short Sleeve T-Shirt</option>
            <option value="lst">Long Sleeve T-Shirt</option>
            <option value="but">Button Up T-Shirt</option>
            <option value="sp">Short Pants</option>
            <option value="lp">Long Pants</option>
            <option value="sl">Slacks</option>
            <option value="sh">Shoes</option>
        </select>
        <br>
        <input type="submit" name="save">
    </form>



@endsection
