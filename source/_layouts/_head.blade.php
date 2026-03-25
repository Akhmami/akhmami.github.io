<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="{{ $page->description }}">
<link rel="canonical" href="{{ $page->getUrl() }}">

<title>{{ $page->title }}</title>

@include('_layouts._ogimage')

@viteRefresh()
<link rel="stylesheet" href="{{ vite('source/_assets/css/main.css') }}">
<script defer type="module" src="{{ vite('source/_assets/js/main.js') }}"></script>

{{-- Add any extra code to include before the closing <head> tag --}}
@stack('head')