<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>
            {{ filled($title ?? null) ? $title.' - '.config('app.name', 'Laravel') : config('app.name', 'Laravel') }}
        </title>

        {{-- <title>
            @if (! empty($title))
                {{ $siteName }} - {{ $title }}
            @else
                {{ $siteName }}
            @endif
        </title>

        <meta name="title" content="@yield('seo_title', ! empty($title) ? $siteName . ' - ' . $title : $siteName)">

        <meta name="description" content="@yield('description', $seoSettings?->meta_description)">

        <meta name="robots" content="{{ $robots }}">

        <meta name="author" content="{{ $seoSettings?->meta_author ?: $siteName }}">

        <link rel="canonical" href="{{ url()->current() }}">

        <meta property="og:type" content="{{ $seoSettings?->og_type ?: 'website' }}">
        <meta property="og:url" content="{{ url()->current() }}">
        <meta property="og:title" content="@yield('seo_title', ! empty($title) ? $siteName . ' - ' . $title : ($seoSettings?->og_title ?: $siteName))">
        <meta property="og:description" content="@yield('description', $seoSettings?->og_description ?: $seoSettings?->meta_description)">
        <meta property="og:site_name" content="{{ $seoSettings?->og_site_name ?: $siteName }}">
        <meta property="og:locale" content="{{ $seoSettings?->og_locale ?: 'en_GB' }}">

        <meta name="twitter:card" content="{{ $seoSettings?->twitter_card ?: 'summary_large_image' }}">
        <meta name="twitter:url" content="{{ url()->current() }}">
        <meta name="twitter:title" content="@yield('seo_title', ! empty($title) ? $siteName . ' - ' . $title : ($seoSettings?->twitter_title ?: $siteName))">
        <meta name="twitter:description" content="@yield('description', $seoSettings?->twitter_description ?: $seoSettings?->meta_description)">

        @if ($seoSettings?->twitter_site)
            <meta name="twitter:site" content="{{ $seoSettings->twitter_site }}">
        @endif

        @if ($seoSettings?->twitter_creator)
            <meta name="twitter:creator" content="{{ $seoSettings->twitter_creator }}">
        @endif

        <meta name="theme-color" content="{{ $seoSettings?->theme_color ?: '#0f172a' }}">

        @if (trim($__env->yieldContent('social_image')))
            <meta property="og:image" content="@yield('social_image')">
            <meta name="twitter:image" content="@yield('social_image')">
        @elseif ($seoSettings?->getFirstMediaUrl('social_preview'))
            <meta property="og:image" content="{{ $seoSettings->getFirstMediaUrl('social_preview') }}">
            <meta name="twitter:image" content="{{ $seoSettings->getFirstMediaUrl('social_preview') }}">
        @endif

        @if ($seoSettings?->getFirstMediaUrl('favicon'))
            <link rel="icon" href="{{ $seoSettings->getFirstMediaUrl('favicon') }}">
        @endif

        @if ($seoSettings?->getFirstMediaUrl('apple_touch_icon'))
            <link rel="apple-touch-icon" href="{{ $seoSettings->getFirstMediaUrl('apple_touch_icon') }}">
        @endif --}}

            <meta name="description" content="LaraCMS, LumenGallery and Vilkrin, plus earlier e-commerce and community web work.">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:opsz,wght@12..96,600;12..96,800&family=JetBrains+Mono:wght@400;500&family=Public+Sans:wght@400;500;600&display=swap">
    <script src="https://cdn.tailwindcss.com/3.4.17"></script>
    <script>
        tailwind.config={
            theme:{extend:{colors:{bg:'#0E1420',panel:'#141C2C',line:'#26324A',ink:'#E4E8F0',soft:'#C6CEDB',muted:'#9AA6B8',amber:'#F2B84B'},fontFamily:{mono:['JetBrains Mono','ui-monospace','monospace'],display:['Bricolage Grotesque','system-ui','sans-serif']}}}}
            </script>
    <style>
/* Layout: code-editor identity. Deep navy ground, amber as the single accent, panels styled as editor windows, mono labels over a grotesque display face. Single dark look by choice. */
:root{color-scheme:dark}
body{background:#0E1420;color:#E4E8F0;font-family:'Public Sans',system-ui,sans-serif;font-size:16px;line-height:1.6;margin:0}
.gutter{padding-left:max(16px,env(safe-area-inset-left,0px));padding-right:max(16px,env(safe-area-inset-right,0px))}
.display{font-family:'Bricolage Grotesque',system-ui,sans-serif;font-weight:800;letter-spacing:-0.02em;text-wrap:balance}
a:focus-visible,button:focus-visible{outline:2px solid #F2B84B;outline-offset:3px}
.copy-btn.done{color:#F2B84B;border-color:#F2B84B}
@media (prefers-reduced-motion:reduce){html{scroll-behavior:auto}}
</style><style>:root{padding-top:env(safe-area-inset-top,0px);padding-bottom:env(safe-area-inset-bottom,0px)}</style>


        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=inter:400,500,600&display=swap" rel="stylesheet" />
 
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->        
        @livewireStyles
        @fluxAppearance

</head>
  <div class="gutter">
    <div class="mx-auto max-w-[1120px]">
      <header class="border-b border-line">
        <div class="flex flex-wrap items-center justify-between gap-x-8 gap-y-3 py-5">
                    <a href="{{ route('home') }}" class="font-mono text-sm text-muted no-underline hover:text-ink">andrewbeechey.me.uk</a>
                    <nav class="flex flex-wrap gap-x-6 gap-y-1 font-mono text-sm" aria-label="Main">
                        <a href="{{ route('home') }}" class="no-underline text-amber" aria-current="page">home</a>
                        <a href="{{ route('projects') }}" class="no-underline text-muted hover:text-ink" >projects</a>
                        <a href="{{ route('experience') }}" class="no-underline text-muted hover:text-ink" >experience</a>
                        <a href="{{ route('skills') }}" class="no-underline text-muted hover:text-ink" >skills</a>
                        <a href="{{ route('education') }}" class="no-underline text-muted hover:text-ink" >education</a>
                        <a href="{{ route('contact') }}" class="no-underline text-muted hover:text-ink" >contact</a>
                    </nav>
        </div>
      </header>
        <main class="flex flex-col gap-14 py-12">

        {{ $slot }}
        
        </main>
    
        <!-- Footer -->
        <footer class="border-t border-line mt-4">

            <div class="py-8 flex flex-wrap items-center justify-between gap-4 font-mono text-sm text-muted">
                <span>© Andrew Beechey · London, UK</span>
                <span class="flex gap-6"><a class="text-amber no-underline hover:text-ink" href="https://github.com/Vilkrin">github</a>
                <a class="text-amber no-underline hover:text-ink" href="https://uk.linkedin.com/in/abeechey">linkedin</a>
                </span>
            </div>

        </footer>
        </div>
        </div>

    <script>
    document.querySelectorAll('[data-copy]').forEach(function(b){var l=b.textContent;b.addEventListener('click',function(){var t=b.getAttribute('data-copy');function ok(){b.textContent='Copied \u2713';b.classList.add('done');setTimeout(function(){b.textContent=l;b.classList.remove('done')},2000)}function fb(){try{var a=document.createElement('textarea');a.value=t;a.setAttribute('readonly','');a.style.position='fixed';a.style.opacity='0';document.body.appendChild(a);a.select();var r=document.execCommand('copy');document.body.removeChild(a);if(r)ok()}catch(e){}}try{navigator.clipboard.writeText(t).then(ok,fb)}catch(e){fb()}})});
    
    
    </script>

     @livewireScripts
     @fluxScripts

     {{-- <livewire:cookie-consent /> --}}
  
  </body>


  </html>