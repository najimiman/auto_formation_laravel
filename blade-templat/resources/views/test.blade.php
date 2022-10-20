<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- id = {{ $age= 1 }} -->


<!-- @if($age == 1)
    <h2>hello iman</h2>
    
@else
<h2>null</h2>
@endif  -->



 <!-- isset and empty -->
<!-- @isset($age)
<h2>age is {{$age}}</h2>
@endisset
 
@empty($age)
    <h2>age is empty</h2>
@endempty  -->


<!-- loop Foreach -->

@php
$user = array("iman","aya")   
@endphp
@foreach ($user  as $value)
    <p>User name : {{ strtoupper( $value) }}</p>
@endforeach
</body>
</html>