<x-layouts::main :title="__('Home')">
    <section class="flex flex-wrap items-center gap-10">
        <div class="flex min-w-0 flex-[1_1_460px] flex-col gap-5">
            <p class="font-mono text-sm text-portfolio-amber">
                // London, UK
            </p>

            <h1 class="display text-[clamp(44px,7vw,84px)] leading-none">
                Andrew Beechey
            </h1>

            <p class="display text-[clamp(22px,3vw,32px)] !font-semibold leading-tight text-portfolio-soft">
                IT and web developer
            </p>

            <p class="max-w-lg text-portfolio-muted">
                20 years of HTML, CSS and PHP. The last five spent building with Laravel and Tailwind CSS.
            </p>

            <div class="mt-2 flex flex-wrap gap-3">
                <a
                    href="https://github.com/Vilkrin"
                    class="bg-portfolio-amber px-5 py-3 font-medium text-portfolio no-underline hover:bg-portfolio-amber-hover"
                >
                    GitHub
                </a>

                <a
                    href="https://uk.linkedin.com/in/abeechey"
                    class="border border-portfolio-amber px-5 py-3 font-medium text-portfolio-amber no-underline hover:border-portfolio-ink hover:text-portfolio-ink"
                >
                    LinkedIn
                </a>
            </div>
        </div>

        <div class="w-full max-w-[420px] flex-[1_1_300px] border border-portfolio-line bg-portfolio-panel">
            <div class="flex items-center gap-1.5 border-b border-portfolio-line px-4 py-2.5">
                <span class="size-2.5 rounded-full bg-portfolio-dot"></span>
                <span class="size-2.5 rounded-full bg-portfolio-dot"></span>
                <span class="size-2.5 rounded-full bg-portfolio-dot"></span>

                <span class="ml-2.5 font-mono text-xs text-portfolio-muted">
                    photo.jpg
                </span>
            </div>

            <div class="flex aspect-square items-center justify-center font-mono text-sm text-portfolio-muted">
                [ PHOTO ]
            </div>
        </div>
    </section>

    <section class="flex flex-wrap gap-x-12 gap-y-4 border-t border-portfolio-line pt-8">
        <h2 class="flex-[1_1_200px] font-mono text-sm font-medium text-portfolio-amber">
            // about
        </h2>

        <div class="flex min-w-0 max-w-2xl flex-[3_1_460px] flex-col gap-4 text-lg text-portfolio-soft">
            <p>
                I'm an IT and web developer based in London. I have been writing HTML, CSS and PHP for 20 years, mostly on personal projects and websites for gaming clans I've been part of. For the last five years I've been learning and building with Laravel and Tailwind CSS.
            </p>

            <p>
                On the IT side, I've set up IT suites and configured Proxmox servers running Windows Server, with Active Directory, group policies, DHCP and DNS. Before that I ran my own online business, setting up its Magento store for live trading.
            </p>
        </div>
    </section>

    <section class="flex flex-wrap gap-8">
        <div class="min-w-0 flex-[1_1_420px]">
            <section class="h-full min-w-0 border border-portfolio-line bg-portfolio-panel">
                <div class="flex items-center gap-1.5 border-b border-portfolio-line px-4 py-2.5" aria-hidden="true">
                    <span class="size-2.5 rounded-full bg-portfolio-dot"></span>
                    <span class="size-2.5 rounded-full bg-portfolio-dot"></span>
                    <span class="size-2.5 rounded-full bg-portfolio-dot"></span>
                </div>

                <div class="p-6">
                    <h2 class="mb-4 font-mono text-sm font-medium text-portfolio-amber">
                        stack.json
                    </h2>

                    <div class="flex flex-col gap-3.5 font-mono text-sm">
                        <div class="flex justify-between gap-3">
                            <span>HTML, CSS, PHP</span>
                            <span class="text-portfolio-muted">20 years</span>
                        </div>

                        <div class="h-1.5 bg-portfolio-line">
                            <div class="h-1.5 w-full bg-portfolio-amber"></div>
                        </div>

                        <div class="flex justify-between gap-3">
                            <span>Laravel, Tailwind CSS</span>
                            <span class="text-portfolio-muted">5 years</span>
                        </div>

                        <div class="h-1.5 bg-portfolio-line">
                            <div class="h-1.5 w-1/4 bg-portfolio-amber"></div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <div class="min-w-0 flex-[1_1_420px]">
            <section class="h-full min-w-0 border border-portfolio-line bg-portfolio-panel">
                <div class="flex items-center gap-1.5 border-b border-portfolio-line px-4 py-2.5" aria-hidden="true">
                    <span class="size-2.5 rounded-full bg-portfolio-dot"></span>
                    <span class="size-2.5 rounded-full bg-portfolio-dot"></span>
                    <span class="size-2.5 rounded-full bg-portfolio-dot"></span>
                </div>

                <div class="p-6">
                    <h2 class="mb-4 font-mono text-sm font-medium text-portfolio-amber">
                        it-support.log
                    </h2>

                    <p class="mb-3 text-portfolio-soft">
                        Set up four IT suites for Waltham Forest Adult Learning Service. Configured Proxmox servers running Windows Server with Active Directory, group policies, DHCP and DNS.
                    </p>

                    <a
                        href="{{ route('experience') }}"
                        class="font-mono text-sm text-portfolio-amber no-underline hover:text-portfolio-ink"
                    >
                        view experience →
                    </a>
                </div>
            </section>
        </div>
    </section>

    <section>
        <div class="mb-6 flex flex-wrap items-end justify-between gap-2">
            <h2 class="display text-3xl">
                Projects
            </h2>

            <a
                href="{{ route('projects') }}"
                class="font-mono text-sm text-portfolio-amber no-underline hover:text-portfolio-ink"
            >
                all projects →
            </a>
        </div>

        <div class="grid gap-4 md:grid-cols-3">
            <article class="flex min-w-0 flex-col gap-3 border border-portfolio-line bg-portfolio-panel p-6">
                <div class="flex flex-wrap items-center justify-between gap-2">
                    <p class="min-w-0 font-mono text-xs text-portfolio-muted">
                        Content management system
                    </p>

                    <span class="shrink-0 border border-portfolio-amber px-2.5 py-1 font-mono text-xs text-portfolio-amber">
                        In development
                    </span>
                </div>

                <h3 class="display text-2xl">
                    LaraCMS
                </h3>

                <p class="text-portfolio-soft">
                    A content management system built with Laravel.
                </p>

                <p class="mt-auto pt-2 font-mono text-xs text-portfolio-muted">
                    Laravel · PHP · Tailwind CSS
                </p>
            </article>

            <article class="flex min-w-0 flex-col gap-3 border border-portfolio-line bg-portfolio-panel p-6">
                <div class="flex flex-wrap items-center justify-between gap-2">
                    <p class="min-w-0 font-mono text-xs text-portfolio-muted">
                        Image gallery
                    </p>

                    <span class="shrink-0 border border-portfolio-amber px-2.5 py-1 font-mono text-xs text-portfolio-amber">
                        In development
                    </span>
                </div>

                <h3 class="display text-2xl">
                    LumenGallery
                </h3>

                <p class="text-portfolio-soft">
                    A gallery application built with Laravel.
                </p>

                <p class="mt-auto pt-2 font-mono text-xs text-portfolio-muted">
                    Laravel · PHP · Tailwind CSS
                </p>
            </article>

            <article class="flex min-w-0 flex-col gap-3 border border-portfolio-line bg-portfolio-panel p-6">

                <div class="flex items-center justify-between gap-2">
                    <p class="min-w-0 font-mono text-xs text-portfolio-muted">
                        Gaming handle profile site
                    </p>

                    <span class="shrink-0 whitespace-nowrap border border-portfolio-amber px-2.5 py-1 font-mono text-xs text-portfolio-amber">
                        In development
                    </span>
                </div>

                <h3 class="display text-2xl">
                    Vilkrin
                </h3>

                <p class="text-portfolio-soft">
                    My personal profile website under my gaming handle.
                </p>

                <p class="mt-auto pt-2 font-mono text-xs text-portfolio-muted">
                    Web · Gaming
                </p>
            </article>
        </div>
    </section>
</x-layouts::main>