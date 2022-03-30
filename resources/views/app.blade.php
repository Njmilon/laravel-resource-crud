@extends('welcome')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Resource Crud</title>
</head>
<body>
    <h2 style="text-align: center">Welcome to the CRUD world!</h2>
    <h3 style="text-align: center">Click below to Enter </h3>
    <a style="text-align: center" href="{{ route('products.index') }}"><button class="btn btn-primary">Product</button></a> 
</body>
</html>
@endsection