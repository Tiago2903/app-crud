<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>product</h1>
    <div>
        <table>
            <tr>
                <th>id</th>
                <th>name</th>
                <th>qty</th>
                <th>price</th>
                <th>description</th>
            </tr>
            @foreach($products as $product)
            <tr>
                <th>
                    {{$product->id}}
                </th>
                <th>
                    {{$product->name}}
                </th>
                <th>
                    {{$product->qty}}
                </th>
                <th>
                    {{$product->price}}
                </th>
                <th>
                    {{$product->description}}
                </th>
            </tr>
            @endforeach
        </table>
    </div>

</body>

</html>