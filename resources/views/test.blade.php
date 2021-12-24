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
    @foreach ($sub_category as $item)    
    <ul>
        <li>{{ $item->name }}</li>
        <li>
            <img src="/{{ $item->images }}" alt="" width="30px">
        </li>
        <li>{{ $item->description }}</li>
        <li>
            <h1>Data Product</h1>
            @foreach ($item->product as $prd)
                <ul>
                    <li>{{ $prd->name }}</li>
                    <li>
                        <img src="/{{ $prd->images }}" alt="" width="30px">
                    </li>
                    <li>{{ $prd->price }}</li>
                    <li>{{ $prd->quantity }}</li>
                    <li>{{ $prd->descriptions }}</li>
                    <li>{{ $prd->status }}</li>
                    <li>
                        <a href="/detail-product/{{ $prd->id }}">Detail</a>
                    </li>
                </ul>
            @endforeach
        </li>
    </ul>
    @endforeach
    
</body>
</html>