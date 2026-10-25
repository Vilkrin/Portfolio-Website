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

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:opsz,wght@12..96,600;12..96,800&family=JetBrains+Mono:wght@400;500&family=Public+Sans:wght@400;500;600&display=swap" rel="stylesheet">

        <!-- Styles and Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        @livewireStyles
        @fluxAppearance

    </head>

    <body class="min-h-full">
        <div class="gutter">
            <div class="mx-auto max-w-[1120px]">
                <header class="border-b border-portfolio-line">
                    <div class="flex flex-wrap items-center justify-between gap-x-8 gap-y-3 py-5">
                        <a
                            href="{{ route('home') }}"
                            class="font-mono text-sm text-portfolio-muted no-underline hover:text-portfolio-ink"
                        >
                            andrewbeechey.me.uk
                        </a>

                        <nav
                            class="flex flex-wrap gap-x-6 gap-y-1 font-mono text-sm"
                            aria-label="Main navigation"
                        >
                            <a
                                href="{{ route('home') }}"
                                class="{{ request()->routeIs('home') ? 'text-portfolio-amber' : 'text-portfolio-muted hover:text-portfolio-amber-hover' }} no-underline"
                                @if (request()->routeIs('home')) aria-current="page" @endif
                            >
                                home
                            </a>

                            <a
                                href="{{ route('projects') }}"
                                class="{{ request()->routeIs('projects') ? 'text-portfolio-amber' : 'text-portfolio-muted hover:text-portfolio-amber-hover' }} no-underline"
                                @if (request()->routeIs('projects')) aria-current="page" @endif
                            >
                                projects
                            </a>

                            <a
                                href="{{ route('experience') }}"
                                class="{{ request()->routeIs('experience') ? 'text-portfolio-amber' : 'text-portfolio-muted hover:text-portfolio-amber-hover' }} no-underline"
                                @if (request()->routeIs('experience')) aria-current="page" @endif
                            >
                                experience
                            </a>

                            <a
                                href="{{ route('skills') }}"
                                class="{{ request()->routeIs('skills') ? 'text-portfolio-amber' : 'text-portfolio-muted hover:text-portfolio-amber-hover' }} no-underline"
                                @if (request()->routeIs('skills')) aria-current="page" @endif
                            >
                                skills
                            </a>

                            <a
                                href="{{ route('education') }}"
                                class="{{ request()->routeIs('education') ? 'text-portfolio-amber' : 'text-portfolio-muted hover:text-portfolio-amber-hover' }} no-underline"
                                @if (request()->routeIs('education')) aria-current="page" @endif
                            >
                                education
                            </a>

                            <a
                                href="{{ route('contact') }}"
                                class="{{ request()->routeIs('contact') ? 'text-portfolio-amber' : 'text-portfolio-muted hover:text-portfolio-amber-hover' }} no-underline"
                                @if (request()->routeIs('contact')) aria-current="page" @endif
                            >
                                contact
                            </a>
                        </nav>
                    </div>
                </header>

                <main class="flex flex-col gap-14 py-12">
                    {{ $slot }}
                </main>

                <footer class="mt-4 border-t border-portfolio-line">
                    <div class="flex flex-wrap items-center justify-between gap-4 py-8 font-mono text-sm text-portfolio-muted">
                        <span>
                            © {{ date('Y') }} Andrew Beechey · London, UK
                        </span>

                        <span class="flex gap-6">
                            <a
                                class="text-portfolio-amber no-underline hover:text-portfolio-ink"
                                href="https://github.com/Vilkrin"
                                target="_blank"
                                rel="noopener noreferrer"
                            >
                                github
                            </a>

                            <a
                                class="text-portfolio-amber no-underline hover:text-portfolio-ink"
                                href="https://uk.linkedin.com/in/abeechey"
                                target="_blank"
                                rel="noopener noreferrer"
                            >
                                linkedin
                            </a>
                        </span>
                    </div>
                </footer>
            </div>
        </div>

        <script>
            document.querySelectorAll('[data-copy]').forEach(function (button) {
                var originalText = button.textContent;

                button.addEventListener('click', function () {
                    var text = button.getAttribute('data-copy');

                    function success() {
                        button.textContent = 'Copied \u2713';
                        button.classList.add('done');

                        setTimeout(function () {
                            button.textContent = originalText;
                            button.classList.remove('done');
                        }, 2000);
                    }

                    function fallback() {
                        try {
                            var textarea = document.createElement('textarea');

                            textarea.value = text;
                            textarea.setAttribute('readonly', '');
                            textarea.style.position = 'fixed';
                            textarea.style.opacity = '0';

                            document.body.appendChild(textarea);
                            textarea.select();

                            var copied = document.execCommand('copy');

                            document.body.removeChild(textarea);

                            if (copied) {
                                success();
                            }
                        } catch (error) {
                            // Clipboard access is unavailable.
                        }
                    }

                    try {
                        navigator.clipboard.writeText(text).then(success, fallback);
                    } catch (error) {
                        fallback();
                    }
                });
            });
        </script>

        @livewireScripts
        @fluxScripts
    </body>
</html>