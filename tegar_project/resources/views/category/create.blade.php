@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-slate-900 text-white flex items-center justify-center">
    <div class="bg-slate-800 p-8 rounded-2xl shadow-lg w-full max-w-md">
        <h1 class="text-2xl font-bold mb-6">Add Category</h1>

        <form action="{{ route('category.store') }}" method="POST">
            @csrf

            <label class="block text-sm text-slate-300 mb-2">Category Name</label>
            <input type="text" name="name" required
                   class="w-full bg-slate-900 border border-slate-700 rounded-lg p-3 mb-6 focus:outline-none focus:ring-2 focus:ring-indigo-500">

            <div class="flex justify-end gap-3">
                <a href="{{ route('category.index') }}"
                   class="px-4 py-2 rounded-lg border border-slate-600 text-slate-300">
                    Cancel
                </a>

                <button type="submit"
                        class="px-4 py-2 rounded-lg bg-indigo-600 hover:bg-indigo-700 font-semibold">
                    Save Category
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
