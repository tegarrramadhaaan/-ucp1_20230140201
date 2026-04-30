<!DOCTYPE html>
<html>
<head>
    <title>Add Product</title>
</head>
<body>
    <h1>Add Product</h1>

    <form action="{{ route('product.store') }}" method="POST">
        @csrf

        <label>Nama Product</label><br>
        <input type="text" name="name"><br><br>

        <label>Harga</label><br>
        <input type="number" name="price"><br><br>

        <label>Stock</label><br>
        <input type="number" name="stock"><br><br>

        <button type="submit">Simpan</button>
    </form>

    <br>
    <a href="{{ route('product.index') }}">Kembali</a>
</body>
</html>
