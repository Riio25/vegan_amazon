<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Vegan-Amazon</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!--jQuery-->
    <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
    <!-- Styles -->
    <style>
        html, body {
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }
        .view {
            width: 100%;
        }
        div > span:nth-child(-n+2) {
            display: inline;
            padding-top: 20px;
            margin-left: 10px;
            margin-right: 60px;
        }

        img{
            z-index: -1;
        }
        .top-bar{
            background-color: #131A22;
            color: white;
        }
        h1 {
            text-align: center;
            color: black;
            padding: 75px;
        }

        .boxes4 {
            border: solid 1px black;
            margin: 0 15px;
        }
        #myBoxes {
            height: 1080px;
            width: 720px;
            margin: auto;
        }
        .bodies{
            padding-bottom: 10px;
        }
        input {
            display: inline;
            width: 450px;
        }
        .borders {
            background-color: #FF9900;
            color: black;
            padding: 5px;
        }
        .navish {
            background-color: #232F3E;
            color: white;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {

            padding: 0 5px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
        .margins {
            margin: 10px 25px;
        }
    </style>
</head>
<body>
    @yield ('content')
</body>
</html>
