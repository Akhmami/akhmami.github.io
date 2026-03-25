@props([
    'variant' => 'primary',
    'size' => 'md',
    'href' => null
])

@php
    $variants = [
        'primary'   => 'bg-blue-600 text-white hover:bg-blue-700 shadow-blue-500/50',
        'secondary' => 'bg-gray-200 text-gray-800 hover:bg-gray-300 dark:bg-slate-700 dark:text-gray-200',
        'danger'    => 'bg-red-500 text-white hover:bg-red-600 shadow-red-500/50',
        'outline'   => 'border-2 border-blue-600 text-blue-600 hover:bg-blue-50',
    ];

    $sizes = [
        'sm' => 'px-3 py-1.5 text-sm',
        'md' => 'px-5 py-2.5 text-base',
        'lg' => 'px-8 py-3 text-lg font-bold',
    ];

    // Gabungkan class dasar dengan pilihan props
    $classes = "inline-flex items-center justify-center rounded-lg transition-all duration-200 focus:ring-4 focus:outline-none " 
               . ($variants[$variant] ?? $variants['primary']) . " " 
               . ($sizes[$size] ?? $sizes['md']);
@endphp

@if($href)
    <a href="{{ $href }}" {{ $attributes->merge(['class' => $classes]) }}>
        {{ $slot }}
    </a>
@else
    <button {{ $attributes->merge(['class' => $classes, 'type' => 'button']) }}>
        {{ $slot }}
    </button>
@endif
