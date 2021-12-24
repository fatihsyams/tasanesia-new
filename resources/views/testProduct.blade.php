<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test Page</title>
</head>
<body>

    <h1>Data Category</h1>
    <ul>
        <li>{{ $category->name }}</li>
        <li>
            <img src="/{{ $category->images }}" alt="" width="30px">
        </li>
        <li>{{ $category->description }}</li>
    </ul>
    <h1>Data Sub Category</h1>    
    <ul>
        <li>{{ $subCategory->name }}</li>
        <li>
            <img src="/{{ $subCategory->images }}" alt="" width="30px">
        </li>
        <li>{{ $subCategory->description }}</li>
    </ul>
    h1>Data Product</h1>
    <ul>
        <li>{{ $product->name }}</li>
        <li>
            <img src="/{{ $product->images }}" alt="" width="30px">
        </li>
        <li>{{ $product->price }}</li>
        <li>{{ $product->quantity }}</li>
        <li>{{ $product->descriptions }}</li>
        <li>{{ $product->status }}</li>
    </ul>
    
</body>
</html>