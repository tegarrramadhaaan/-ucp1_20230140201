@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-slate-900 text-white p-8">
    <div class="max-w-5xl mx-auto bg-slate-800 rounded-2xl shadow-lg p-6">
        <div class="flex items-center justify-between mb-6">
            <div>
                <h1 class="text-2xl font-bold">Category List</h1>
                <p class="text-slate-400 text-sm">Manage your category</p>
            </div>

            <a href="{{ route('category.create') }}"
               class="bg-indigo-600 hover:bg-indigo-700 px-4 py-2 rounded-lg text-sm font-semibold">
                + Add Category
            </a>
        </div>

        <table class="w-full border-collapse">
            <thead>
                <tr class="bg-slate-700 text-slate-300 text-sm">
                    <th class="p-3 text-left">No</th>
                    <th class="p-3 text-left">Name</th>
                    <th class="p-3 text-left">Total Product</th>
                    <th class="p-3 text-left">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                <tr class="border-b border-slate-700 hover:bg-slate-700/50">
                    <td class="p-3">{{ $loop->iteration }}</td>
                    <td class="p-3">{{ $category->name }}</td>
                    <td class="p-3">{{ $category->products_count }}</td>
                    <td class="p-3 flex gap-2">
                        <a href="{{ route('category.edit', $category->id) }}"
                           class="text-yellow-400 hover:text-yellow-300">
                            Edit
                        </a>

                        <form action="{{ route('category.destroy', $category->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button onclick="return confirm('Yakin hapus category ini?')"
                                    class="text-red-400 hover:text-red-300">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
