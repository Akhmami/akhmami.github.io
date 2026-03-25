@extends('_layouts.main')

@section('body')
    <article class="max-w-3xl mx-auto">
        <img src="{{ $page->image }}" alt="{{ $page->title }}" class="w-full rounded-xl mb-8">
        
        <h1 class="text-4xl font-bold mb-4">{{ $page->title }}</h1>
        <p class="text-gray-500 mb-6 italic">{{ $page->description }}</p>
        
        <div class="prose prose-lg max-w-none">
            @yield('content') {{-- Ini tempat isi Markdown Anda muncul --}}
        </div>
        
        <div class="mt-10 pt-10 border-t">
            <a href="/" class="text-blue-600 font-bold">&larr; Kembali ke Beranda</a>
        </div>
    </article>
@endsection
