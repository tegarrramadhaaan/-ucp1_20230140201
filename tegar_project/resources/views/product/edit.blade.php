@extends('layouts.app')

@section('content')
    <h1>Edit Product</h1>

    <form action="{{ route('product.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Nama Product</label><br>
        <input type="text" name="name" value="{{ old('name', $product->name) }}"><br><br>

        <label>Harga</label><br>
        <input type="number" name="price" value="{{ old('price', $product->price) }}"><br><br>

        <label>Stock</label><br>
        <input type="number" name="stock" value="{{ old('stock', $product->stock) }}"><br><br>

        <label>Category</label><br>
        <select name="category_id">
            <option value="">-- Pilih Kategori --</option>
            @foreach ($categories as $category)
                <option value="{{ $category->id }}" {{ old('category_id', $product->category_id) == $category->id ? 'selected' : '' }}>
                    {{ $category->name }}
                </option>
            @endforeach
        </select>
        <br><br>

        <button type="submit">Update</button>
    </form>

    <br>
    <a href="{{ route('product.index') }}">Kembali</a>
@endsection
