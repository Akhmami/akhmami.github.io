<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="{{ $page->description }}">
<link rel="canonical" href="{{ $page->getUrl() }}">

<title>{{ $page->title }}</title>

@include('_layouts._ogimage')

@viteRefresh()
<link rel="stylesheet" href="{{ vite('source/_assets/css/main.css') }}">
<script defer type="module" src="{{ vite('source/_assets/js/main.js') }}"></script>

<script>
    // Load dark mode before page renders to prevent flicker
        const loadDarkMode = () => {
            const theme = localStorage.getItem('theme') ?? 'system'
            
            if (
                theme === 'dark' ||
                (theme === 'system' &&
                    window.matchMedia('(prefers-color-scheme: dark)')
                    .matches)
            ) {
                document.documentElement.classList.add('dark')
            }
        }
                
        // Initialize on page load
        loadDarkMode();
        
        // Reinitialize after Livewire navigation (for spa mode)
        document.addEventListener('livewire:navigated', function() {
            loadDarkMode();
        });
</script>

<script defer>
    loadDarkMode()
</script>

{{-- Add any extra code to include before the closing <head> tag --}}
@stack('head')