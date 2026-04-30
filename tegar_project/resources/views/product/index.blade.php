<!DOCTYPE html>
<html>
<head>
    <title>Product List</title>
</head>
<body>
    <h1>Product List</h1>

    <x-add-product :url="route('product.create')" :name="'Product'" />

    <br><br>

    <table border="1" cellpadding="10">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Harga</th>
            <th>Stock</th>
            <th>Aksi</th>
        </tr>

        @foreach ($products as $product)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->price }}</td>
                <td>{{ $product->stock }}</td>
                <td>
                    <x-edit-button :url="route('product.edit', $product->id)" />
                    <x-delete-button :url="route('product.destroy', $product->id)" />
                </td>
            </tr>
        @endforeach
    </table>
</body>
</html>
