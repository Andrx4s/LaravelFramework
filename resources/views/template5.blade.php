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
<h1 style="color: cornflowerblue">Задание 5</h1>
@foreach($array as $item)
    <div style="color: green; font-size: 20px"> Кто - {{$item}}</div>
@endforeach
</body>
</html>
