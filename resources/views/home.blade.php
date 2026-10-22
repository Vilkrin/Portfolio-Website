<!doctype html>
<html lang="en-GB">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1,viewport-fit=cover">
        <title>Andrew Beechey</title>
        <meta name="claude:viewport-fit-sides" content="cover">
        <meta name="description" content="IT and web developer in London. 20 years of HTML, CSS and PHP, five with Laravel and Tailwind CSS.">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:opsz,wght@12..96,600;12..96,800&family=JetBrains+Mono:wght@400;500&family=Public+Sans:wght@400;500;600&display=swap">
        <script src="https://cdn.tailwindcss.com/3.4.17"></script>
        <script>
            tailwind.config = {
                theme: {
                    extend: {
                        colors: {
                            bg: '#0E1420',
                            panel: '#141C2C',
                            line: '#26324A',
                            ink: '#E4E8F0',
                            soft: '#C6CEDB',
                            muted: '#9AA6B8',
                            amber: '#F2B84B'
                        },
                        fontFamily: {
                            mono: ['JetBrains Mono', 'ui-monospace', 'monospace'],
                            display: ['Bricolage Grotesque', 'system-ui', 'sans-serif']
                        }
                    }
                }
            }
        </script>
        <style>
            /* Layout: code-editor identity. Deep navy ground, amber as the single accent, panels styled as editor windows, mono labels over a grotesque display face. Single dark look by choice. */
            :root { color-scheme: dark }
            body { background: #0E1420; color: #E4E8F0; font-family: 'Public Sans', system-ui, sans-serif; font-size: 16px; line-height: 1.6; margin: 0 }
            .gutter { padding-left: max(16px, env(safe-area-inset-left, 0px)); padding-right: max(16px, env(safe-area-inset-right, 0px)) }
            .display { font-family: 'Bricolage Grotesque', system-ui, sans-serif; font-weight: 800; letter-spacing: -0.02em; text-wrap: balance }
            a:focus-visible,button:focus-visible{outline:2px solid #F2B84B;outline-offset:3px}
.copy-btn.done{color:#F2B84B;border-color:#F2B84B}
@media (prefers-reduced-motion:reduce){html{scroll-behavior:auto}}
</style><style>:root{padding-top:env(safe-area-inset-top,0px);padding-bottom:env(safe-area-inset-bottom,0px)}</style>
</head>
<body>
    
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
                <section class="flex flex-wrap gap-10 items-center">
                    <div class="flex-[1_1_460px] min-w-0 flex flex-col gap-5">
                        <p class="font-mono text-sm text-amber">// London, UK</p>
                        <h1 class="display text-[clamp(44px,7vw,84px)] leading-none">Andrew Beechey</h1>
                        <p class="display !font-semibold text-[clamp(22px,3vw,32px)] leading-tight text-soft">IT and web developer</p>
                        <p class="max-w-lg text-muted">20 years of HTML, CSS and PHP. The last five spent building with Laravel and Tailwind CSS.</p>
<div class="flex flex-wrap gap-3 mt-2"><a href="https://github.com/Vilkrin" class="bg-amber text-bg font-medium px-5 py-3 no-underline hover:bg-[#FFD98A]">GitHub</a><a href="https://uk.linkedin.com/in/abeechey" class="border border-amber text-amber font-medium px-5 py-3 no-underline hover:text-ink hover:border-ink">LinkedIn</a></div></div>
<div class="flex-[1_1_300px] min-w-0 max-w-[420px] border border-line bg-panel"><div class="flex items-center gap-1.5 px-4 py-2.5 border-b border-line"><span class="w-2.5 h-2.5 rounded-full bg-[#3A4766]"></span><span class="w-2.5 h-2.5 rounded-full bg-[#3A4766]"></span><span class="w-2.5 h-2.5 rounded-full bg-[#3A4766]"></span><span class="ml-2.5 font-mono text-xs text-muted">photo.jpg</span></div>
<div class="aspect-square flex items-center justify-center font-mono text-sm text-muted">[ PHOTO ]</div>
</div>
</section>

<section class="border-t border-line pt-8 flex flex-wrap gap-x-12 gap-y-4"><h2 class="flex-[1_1_200px] font-mono font-medium text-sm text-amber">// about</h2><div class="flex-[3_1_460px] min-w-0 max-w-2xl flex flex-col gap-4 text-lg text-soft"><p>I'm an IT and web developer based in London. I have been writing HTML, CSS and PHP for 20 years, mostly on personal projects and websites for gaming clans I've been part of. For the last five years I've been learning and building with Laravel and Tailwind CSS.</p><p>On the IT side, I've set up IT suites and configured Proxmox servers running Windows Server, with Active Directory, group policies, DHCP and DNS. Before that I ran my own online business, setting up its Magento store for live trading.</p></div></section>

<section class="flex flex-wrap gap-8">
<div class="flex-[1_1_420px] min-w-0"><section class="border border-line bg-panel min-w-0 h-full"><div class="flex items-center gap-1.5 px-4 py-2.5 border-b border-line" aria-hidden="true"><span class="w-2.5 h-2.5 rounded-full bg-[#3A4766]"></span><span class="w-2.5 h-2.5 rounded-full bg-[#3A4766]"></span><span class="w-2.5 h-2.5 rounded-full bg-[#3A4766]"></span></div><div class="p-6"><h2 class="font-mono font-medium text-sm text-amber mb-4">stack.json</h2><div class="flex flex-col gap-3.5 font-mono text-sm"><div class="flex justify-between gap-3"><span>HTML, CSS, PHP</span><span class="text-muted">20 years</span></div><div class="h-1.5 bg-line"><div class="h-1.5 bg-amber w-full"></div></div><div class="flex justify-between gap-3"><span>Laravel, Tailwind CSS</span><span class="text-muted">5 years</span></div><div class="h-1.5 bg-line"><div class="h-1.5 bg-amber w-1/4"></div></div></div></div></section></div>
<div class="flex-[1_1_420px] min-w-0"><section class="border border-line bg-panel min-w-0 h-full"><div class="flex items-center gap-1.5 px-4 py-2.5 border-b border-line" aria-hidden="true"><span class="w-2.5 h-2.5 rounded-full bg-[#3A4766]"></span><span class="w-2.5 h-2.5 rounded-full bg-[#3A4766]"></span><span class="w-2.5 h-2.5 rounded-full bg-[#3A4766]"></span></div><div class="p-6"><h2 class="font-mono font-medium text-sm text-amber mb-4">it-support.log</h2><p class="text-soft mb-3">Set up four IT suites for Waltham Forest Adult Learning Service. Configured Proxmox servers running Windows Server with Active Directory, group policies, DHCP and DNS.</p><a href="experience.html" class="font-mono text-sm text-amber no-underline hover:text-ink">view experience →</a></div></section></div></section>

<section><div class="flex flex-wrap items-end justify-between gap-2 mb-6"><h2 class="display text-3xl">Projects</h2><a href="projects.html" class="font-mono text-sm text-amber no-underline hover:text-ink">all projects →</a></div>
<div class="grid md:grid-cols-3 gap-4"><article class="border border-line bg-panel p-6 flex flex-col gap-3 min-w-0"><div class="flex flex-wrap items-center justify-between gap-2"><p class="font-mono text-xs text-muted min-w-0">Content management system</p><span class="shrink-0"><span class="inline-block font-mono text-xs px-2.5 py-1 border border-amber text-amber">In development</span></span></div><h3 class="display text-2xl">LaraCMS</h3><p class="text-soft">A content management system built with Laravel.</p><p class="font-mono text-xs text-muted mt-auto pt-2">Laravel · PHP · Tailwind CSS</p></article><article class="border border-line bg-panel p-6 flex flex-col gap-3 min-w-0"><div class="flex flex-wrap items-center justify-between gap-2"><p class="font-mono text-xs text-muted min-w-0">Image gallery</p><span class="shrink-0"><span class="inline-block font-mono text-xs px-2.5 py-1 border border-amber text-amber">In development</span></span></div><h3 class="display text-2xl">LumenGallery</h3><p class="text-soft">A gallery application built with Laravel.</p><p class="font-mono text-xs text-muted mt-auto pt-2">Laravel · PHP · Tailwind CSS</p></article><article class="border border-line bg-panel p-6 flex flex-col gap-3 min-w-0"><div class="flex flex-nowrap items-start justify-between gap-2"><p class="font-mono text-xs text-muted min-w-0">Gaming handle profile site</p><span class="shrink-0"><span class="inline-block font-mono text-xs px-2.5 py-1 border border-amber text-amber">In development</span></span></div><h3 class="display text-2xl">Vilkrin</h3><p class="text-soft">My personal profile website under my gaming handle.</p><p class="font-mono text-xs text-muted mt-auto pt-2">Web · Gaming</p></article></div></section>

</main>
<footer class="border-t border-line mt-4">
    <div class="py-8 flex flex-wrap items-center justify-between gap-4 font-mono text-sm text-muted">
        <span>© Andrew Beechey · London, UK</span><span class="flex gap-6"><a class="text-amber no-underline hover:text-ink" href="https://github.com/Vilkrin">github</a><a class="text-amber no-underline hover:text-ink" href="https://uk.linkedin.com/in/abeechey">linkedin</a></span>
    </div>
</footer>
</div>
</div>
<script>document.querySelectorAll('[data-copy]').forEach(function(b){var l=b.textContent;b.addEventListener('click',function(){var t=b.getAttribute('data-copy');function ok(){b.textContent='Copied \u2713';b.classList.add('done');setTimeout(function(){b.textContent=l;b.classList.remove('done')},2000)}function fb(){try{var a=document.createElement('textarea');a.value=t;a.setAttribute('readonly','');a.style.position='fixed';a.style.opacity='0';document.body.appendChild(a);a.select();var r=document.execCommand('copy');document.body.removeChild(a);if(r)ok()}catch(e){}}try{navigator.clipboard.writeText(t).then(ok,fb)}catch(e){fb()}})});
    </script>
    </body>
    </html>