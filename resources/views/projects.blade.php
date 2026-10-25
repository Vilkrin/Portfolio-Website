<x-layouts::main :title="__('Projects')">
    <section>
        <p class="mb-3 font-mono text-sm text-portfolio-amber">
            // projects
        </p>

        <h1 class="display text-4xl leading-none sm:text-6xl">
            Projects
        </h1>

        <p class="mt-3 max-w-xl text-portfolio-muted">
            Personal builds and community sites. The current projects are in active development.
        </p>
    </section>

    <section class="grid gap-4 md:grid-cols-3">
        <article class="flex min-w-0 flex-col gap-3 border border-portfolio-line bg-portfolio-panel p-6">
            <div class="flex flex-wrap items-center justify-between gap-2">
                <p class="min-w-0 font-mono text-xs text-portfolio-muted">
                    Content management system
                </p>

                <span class="shrink-0 border border-portfolio-amber px-2.5 py-1 font-mono text-xs text-portfolio-amber">
                    In development
                </span>
            </div>

            <h2 class="display text-2xl">
                LaraCMS
            </h2>

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

            <h2 class="display text-2xl">
                LumenGallery
            </h2>

            <p class="text-portfolio-soft">
                A gallery application built with Laravel.
            </p>

            <p class="mt-auto pt-2 font-mono text-xs text-portfolio-muted">
                Laravel · PHP · Tailwind CSS
            </p>
        </article>

        <article class="flex min-w-0 flex-col gap-3 border border-portfolio-line bg-portfolio-panel p-6">
            <div class="flex flex-wrap items-start justify-between gap-2">
                <p class="min-w-0 font-mono text-xs text-portfolio-muted">
                    Gaming handle profile site
                </p>

                <span class="shrink-0 border border-portfolio-amber px-2.5 py-1 font-mono text-xs text-portfolio-amber">
                    In development
                </span>
            </div>

            <h2 class="display text-2xl">
                Vilkrin
            </h2>

            <p class="text-portfolio-soft">
                My personal profile website under my gaming handle.
            </p>

            <p class="mt-auto pt-2 font-mono text-xs text-portfolio-muted">
                Web · Gaming
            </p>
        </article>
    </section>

    <section class="flex flex-wrap gap-6 border-t border-portfolio-line pt-8">
        <div class="flex-[1_1_260px]">
            <h2 class="display text-2xl">
                Earlier work
            </h2>
        </div>

        <div class="flex min-w-0 flex-[2_1_420px] flex-col gap-6">
            <article>
                <p class="mb-1 font-mono text-xs text-portfolio-muted">
                    2015 – 2016 · Live e-commerce store
                </p>

                <h3 class="text-lg font-semibold">
                    Waltham Games
                </h3>

                <p class="max-w-xl text-portfolio-soft">
                    Set up and ran the Magento store for the business, from launch through to live trading.
                </p>
            </article>

            <article>
                <p class="mb-1 font-mono text-xs text-portfolio-muted">
                    Ongoing · Community
                </p>

                <h3 class="text-lg font-semibold">
                    Gaming clan websites
                </h3>

                <p class="max-w-xl text-portfolio-soft">
                    Websites built for gaming clans I have been part of.
                </p>
            </article>
        </div>
    </section>

    <section class="border-t border-portfolio-line pt-6">
        <a
            href="https://github.com/Vilkrin"
            target="_blank"
            rel="noopener noreferrer"
            class="inline-block border border-portfolio-amber px-5 py-3 font-medium text-portfolio-amber no-underline hover:border-portfolio-ink hover:text-portfolio-ink"
        >
            See more on GitHub
        </a>
    </section>
</x-layouts::main>