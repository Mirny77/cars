<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @if($models)
    <title>{{$models[0]->brand->name}}</title>
    @endif
</head>
<body>
    @if($models)
<h1> Продажа новых
    автомобилей {{$models[0]->brand->name}} в Санкт-Петербурге
     </h1>
     @endif
</body>
</html>
