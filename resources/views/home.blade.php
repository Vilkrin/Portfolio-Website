<x-layouts::main :title="__('Home')">


	<main class="flex flex-col gap-14 py-12">
            <section class="flex flex-wrap gap-10 items-center">
                <div class="flex-[1_1_460px] min-w-0 flex flex-col gap-5">
                    <p class="font-mono text-sm text-amber">// London, UK</p>
                    <h1 class="display text-[clamp(44px,7vw,84px)] leading-none">Andrew Beechey</h1>
                    <p class="display !font-semibold text-[clamp(22px,3vw,32px)] leading-tight text-soft">IT and web developer</p>
                    <p class="max-w-lg text-muted">20 years of HTML, CSS and PHP. The last five spent building with Laravel and Tailwind CSS.</p>
                    
                    <div class="flex flex-wrap gap-3 mt-2">
                        <a href="https://github.com/Vilkrin" class="bg-amber text-bg font-medium px-5 py-3 no-underline hover:bg-[#FFD98A]">GitHub</a>
                        <a href="https://uk.linkedin.com/in/abeechey" class="border border-amber text-amber font-medium px-5 py-3 no-underline hover:text-ink hover:border-ink">LinkedIn</a>
                    </div>
                </div>
                <div class="flex-[1_1_300px] min-w-0 max-w-[420px] border border-line bg-panel">
                    <div class="flex items-center gap-1.5 px-4 py-2.5 border-b border-line">
                        <span class="w-2.5 h-2.5 rounded-full bg-[#3A4766]"></span>
                        <span class="w-2.5 h-2.5 rounded-full bg-[#3A4766]"></span>
                        <span class="w-2.5 h-2.5 rounded-full bg-[#3A4766]"></span>
                        <span class="ml-2.5 font-mono text-xs text-muted">photo.jpg</span>
                    </div>
                     <div class="aspect-square flex items-center justify-center font-mono text-sm text-muted">
                        
                        [ PHOTO ]

                     </div>
                </div>
            </section>

            <section class="border-t border-line pt-8 flex flex-wrap gap-x-12 gap-y-4">
                <h2 class="flex-[1_1_200px] font-mono font-medium text-sm text-amber">// about</h2>
                <div class="flex-[3_1_460px] min-w-0 max-w-2xl flex flex-col gap-4 text-lg text-soft">
                    <p>I'm an IT and web developer based in London. I have been writing HTML, CSS and PHP for 20 years, mostly on personal projects and websites for gaming clans I've been part of. For the last five years I've been learning and building with Laravel and Tailwind CSS.</p>
                    <p>On the IT side, I've set up IT suites and configured Proxmox servers running Windows Server, with Active Directory, group policies, DHCP and DNS. Before that I ran my own online business, setting up its Magento store for live trading.</p>
                </div>
            </section>

             <section class="flex flex-wrap gap-8">
               <div class="flex-[1_1_420px] min-w-0">
                 <section class="border border-line bg-panel min-w-0 h-full">
                
                    <div class="flex items-center gap-1.5 px-4 py-2.5 border-b border-line" aria-hidden="true">
                        <span class="w-2.5 h-2.5 rounded-full bg-[#3A4766]"></span>
                        <span class="w-2.5 h-2.5 rounded-full bg-[#3A4766]"></span>
                        <span class="w-2.5 h-2.5 rounded-full bg-[#3A4766]"></span>
                    </div>

                    <div class="p-6">
                        <h2 class="font-mono font-medium text-sm text-amber mb-4">stack.json</h2>
                        <div class="flex flex-col gap-3.5 font-mono text-sm"><div class="flex justify-between gap-3">
                            <span>HTML, CSS, PHP</span>
                            <span class="text-muted">20 years</span>
                        </div>
                        <div class="h-1.5 bg-line">
                            <div class="h-1.5 bg-amber w-full">
                            </div>
                        </div>
                        <div class="flex justify-between gap-3">
                            <span>Laravel, Tailwind CSS</span>
                            <span class="text-muted">5 years</span>
                        </div>
                        <div class="h-1.5 bg-line">
                            <div class="h-1.5 bg-amber w-1/4">
                            </div>
                        </div>
                    </div>
                </div>
            </section>
         </div>
        <div class="flex-[1_1_420px] min-w-0">
            <section class="border border-line bg-panel min-w-0 h-full">
                <div class="flex items-center gap-1.5 px-4 py-2.5 border-b border-line" aria-hidden="true">
                    <span class="w-2.5 h-2.5 rounded-full bg-[#3A4766]"></span>
                    <span class="w-2.5 h-2.5 rounded-full bg-[#3A4766]"></span>
                    <span class="w-2.5 h-2.5 rounded-full bg-[#3A4766]"></span>
                </div><div class="p-6">
                    <h2 class="font-mono font-medium text-sm text-amber mb-4">it-support.log</h2>
                    <p class="text-soft mb-3">Set up four IT suites for Waltham Forest Adult Learning Service. Configured Proxmox servers running Windows Server with Active Directory, group policies, DHCP and DNS.</p>
                    <a href="experience.html" class="font-mono text-sm text-amber no-underline hover:text-ink">view experience →</a>
                </div>
            </section>
        </div>
    </section>

        <section>
            <div class="flex flex-wrap items-end justify-between gap-2 mb-6">
                <h2 class="display text-3xl">Projects</h2>
                <a href="{{ route('projects') }}" class="font-mono text-sm text-amber no-underline hover:text-ink">all projects →</a>
            </div>
        <div class="grid md:grid-cols-3 gap-4">
            <article class="border border-line bg-panel p-6 flex flex-col gap-3 min-w-0">
                <div class="flex flex-wrap items-center justify-between gap-2">
                    <p class="font-mono text-xs text-muted min-w-0">Content management system</p>
                    <span class="shrink-0">
                        <span class="inline-block font-mono text-xs px-2.5 py-1 border border-amber text-amber">In development</span>
                    </span>
                </div>
                <h3 class="display text-2xl">LaraCMS</h3>
                <p class="text-soft">A content management system built with Laravel.</p>
                <p class="font-mono text-xs text-muted mt-auto pt-2">Laravel · PHP · Tailwind CSS</p>
            </article>
            <article class="border border-line bg-panel p-6 flex flex-col gap-3 min-w-0">
                <div class="flex flex-wrap items-center justify-between gap-2">
                    <p class="font-mono text-xs text-muted min-w-0">Image gallery</p>
                    <span class="shrink-0">
                        <span class="inline-block font-mono text-xs px-2.5 py-1 border border-amber text-amber">In development</span>
                    </span>
                </div>
                <h3 class="display text-2xl">LumenGallery</h3>
                <p class="text-soft">A gallery application built with Laravel.</p>
                <p class="font-mono text-xs text-muted mt-auto pt-2">Laravel · PHP · Tailwind CSS</p>
            </article>
            <article class="border border-line bg-panel p-6 flex flex-col gap-3 min-w-0">
                <div class="flex flex-nowrap items-start justify-between gap-2">
                    <p class="font-mono text-xs text-muted min-w-0">Gaming handle profile site</p>
                    <span class="shrink-0">
                        <span class="inline-block font-mono text-xs px-2.5 py-1 border border-amber text-amber">In development</span>
                    </span>
                </div>
                <h3 class="display text-2xl">Vilkrin</h3>
                <p class="text-soft">My personal profile website under my gaming handle.</p>
                <p class="font-mono text-xs text-muted mt-auto pt-2">Web · Gaming</p>
            </article>
        </div>
    </section>

	</main>
</x-layouts::main>