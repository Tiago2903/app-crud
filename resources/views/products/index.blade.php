<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>product</h1>
    @if (session()->has('success'))
        <div>
            {{ session('success') }}
        </div>
    @endif
    <div>
        <table border="1">
            <tr>
                <th>id</th>
                <th>name</th>
                <th>qty</th>
                <th>price</th>
                <th>description</th>
                <th>edit</th>
                <th>delete</th>
            </tr>
            @foreach ($products as $product)
                <tr>
                    <th>
                        {{ $product->id }}
                    </th>
                    <th>
                        {{ $product->name }}
                    </th>
                    <th>
                        {{ $product->qty }}
                    </th>
                    <th>
                        {{ $product->price }}
                    </th>
                    <th>
                        {{ $product->description }}
                    </th>
                    <th>
                        <a href="{{ route('product.edit', ['product' => $product]) }}">Edit</a>
                    </th>
                    <th>
                        <form method="post" action="{{ route('product.delete', ['product' => $product]) }}">
                            @CSRF
                            @method('delete')
                            <input type="submit" name="Delete" value="Delete">
                        </form>
                    </th>
                </tr>
            @endforeach
        </table>
    </div>

</body>

</html>
