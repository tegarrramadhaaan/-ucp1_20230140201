<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }}</title>
    @vite('resources/css/app.css')
</head>
<body>
    <nav style="background:#f8f9fa;padding:16px;">
        <a href="{{ url('/') }}" style="margin-right:16px;">Home</a>
        <a href="{{ route('product.index') }}" style="margin-right:16px;">Product</a>
        <a href="{{ route('category.index') }}">Category</a>
    </nav>

    <div style="padding:24px;">
        @yield('content')
    </div>

    @vite('resources/js/app.js')
</body>
</html>
