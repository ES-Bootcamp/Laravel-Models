<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Category: {{$category->name}} </h1>

    <ul>
        @foreach($category->products as $product)
        <li><a href="/product/{{$product->id}}">{{$product->name}}</a></li>
        @endforeach
    </ul>
    
</body>
</html>