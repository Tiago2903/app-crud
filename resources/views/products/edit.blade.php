<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit</title>
</head>

<body>
    <h1>edit</h1>
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <li>
                {{ $error }}
            </li>
        @endforeach
        <ul></ul>
    @endif
    <form method="post" action="{{ route('product.update', ['product' => $product]) }}">
        @CSRF
        @method('put')
        <label>Name</label>
        <input type="text" name="name" value="{{ $product->name }}">
        <label>qty</label>
        <input type="text" name="qty" value="{{ $product->qty }}">
        <label>price</label>
        <input type="text" name="price" value="{{ $product->price }}">
        <label>description</label>
        <input type="text" name="description" value="{{ $product->description }}">
        <div>
            <input type="submit" value="summit">
        </div>
    </form>
</body>

</html>
