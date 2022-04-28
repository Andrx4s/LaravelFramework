<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1 style="color: cornflowerblue">Задание 6</h1>
@foreach($number as $num)
    @if($num % 2 == 0)
        <span style="color: green; font-size: 20px">{{$num}}<br></span>
    @endif
@endforeach
</body>
</html>
