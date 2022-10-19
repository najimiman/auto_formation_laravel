@section('title','layout')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>layout</title>
    <link rel="stylesheet" href="{{url('css/layout.css')}}">
</head>
<body>
    <nav>
        <a href="{{route('home.index')}}">home</a>
        <a href="{{route('home.about')}}">about</a>
        <a href="{{route('home.contact')}}">contact</a>
</nav>
<div id="pag">@yield('content')</div>
</body>
</html>