<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Alternate</title>
<!-- could not get pictures to work from resources folder. possibly not moved
    could not move boxes higher than about -50px on the background/carousel.
-->
    <style>
        .box{
            display: inline-block;
            border: 1px black solid;
            margin: 0 25px;
            padding: 4px;
            z-index: 100;
            background-color: lightblue;
        }
        .boxes{
            margin-top: -75px;
        }
        .nav{
            text-align: center;
        }
        .top{
            margin-left: 10px;
        }
        div > span:nth-child(-n+2) {
            display: inline;
            padding-top: 20px;
            margin-left: 10px;
            margin-right: 60px;
        }
        h4 {
            margin-left: 10px;
        }


    </style>
</head>
<body>
@yield('contents')
</body>
</html>
