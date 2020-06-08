@extends ('layout')

@section ('content')
    <div class="content">
        <div class="title m-b-mid">
            Vegan-Amazon Clothing
        </div>
    </div>
    <div class="links">
        <a href="127.0.0.01:8000/clothing/SST">Short Sleeve T-Shirts</a>
        <a href="127.0.0.01:8000/clothing/LST">Long Sleeve T-Shirts</a>
        <a href="127.0.0.01:8000/clothing/BUT">Button up T-Shirts</a>
        <a href="127.0.0.01:8000/clothing/SP">Short Pants</a>
        <a href="127.0.0.01:8000/clothing/LP">Long Pants</a>
        <a href="127.0.0.01:8000/clothing/SL">Slacks</a>
        <a href="127.0.0.01:8000/clothing/SH">Shoes</a>
    </div>
    <div>
        <p>
            @foreach ($slug as $slugs)
                <li>{{ $slugs->description }}: {{ $slugs->price }}</li>
            @endforeach
        </p>
    </div>


@endsection
