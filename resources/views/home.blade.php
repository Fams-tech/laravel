<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Votre age est {{$age}}</h1>
    @if ($age < 18)
    <h2>Mineur</h2>     
    @else
    <h2>Majeur</h2>
    @endif
</body>
</html>