<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>create</h1>
    @if($errors->any())
    @foreach($errors->all() as $error)
    <li>
        {{$error}}
    </li>
    @endforeach
    <ul></ul>
    @endif
    <form method="post" action="{{route('product.store')}}">
        @CSRF
        @method('post')
        <label>Name</label>
        <input type="text" name="name" placeholder="name">
        <label>qty</label>
        <input type="text" name="qty" placeholder="qty">
        <label>price</label>
        <input type="text" name="price" placeholder="price">
        <label>description</label>
        <input type="text" name="description" placeholder="description">
        <div>
            <input type="submit" value="summit">
        </div>
    </form>
</body>

</html>