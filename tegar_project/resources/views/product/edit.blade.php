<!DOCTYPE html>
<html>
<head>
    <title>Edit Product</title>
</head>
<body>
    <h1>Edit Product</h1>

    <form action="{{ route('product.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Nama Product</label><br>
        <input type="text" name="name" value="{{ $product->name }}"><br><br>

        <label>Harga</label><br>
        <input type="number" name="price" value="{{ $product->price }}"><br><br>

        <label>Stock</label><br>
        <input type="number" name="stock" value="{{ $product->stock }}"><br><br>

        <button type="submit">Update</button>
    </form>

    <br>
    <a href="{{ route('product.index') }}">Kembali</a>
</body>
</html>
