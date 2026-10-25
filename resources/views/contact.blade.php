<x-layouts::main :title="__('Contact')">
    <section>
        <p class="mb-3 font-mono text-sm text-portfolio-amber">
            // contact
        </p>

        <h1 class="display text-4xl leading-none sm:text-6xl">
            Contact
        </h1>

        <p class="mt-3 max-w-xl text-portfolio-muted">
            London, UK. The best way to reach me is email or LinkedIn.
        </p>
    </section>

    <section class="min-w-0 max-w-2xl border border-portfolio-line bg-portfolio-panel">
        <div
            class="flex items-center gap-1.5 border-b border-portfolio-line px-4 py-2.5"
            aria-hidden="true"
        >
            <span class="size-2.5 rounded-full bg-portfolio-dot"></span>
            <span class="size-2.5 rounded-full bg-portfolio-dot"></span>
            <span class="size-2.5 rounded-full bg-portfolio-dot"></span>
        </div>

        <div class="p-6">
            <h2 class="mb-4 font-mono text-sm font-medium text-portfolio-amber">
                contact.json
            </h2>

            <div class="flex flex-wrap items-center justify-between gap-x-4 gap-y-2 border-t border-portfolio-line py-4">
                <div class="min-w-0">
                    <p class="font-mono text-xs text-portfolio-muted">
                        email
                    </p>

                    <a
                        href="mailto:email@andrewbeechey.me.uk"
                        class="break-all text-lg font-medium text-portfolio-amber hover:text-portfolio-amber-hover"
                    >
                        email@andrewbeechey.me.uk
                    </a>
                </div>

                <button
                    type="button"
                    class="copy-btn min-w-[7rem] border border-portfolio-line px-3 py-2 font-mono text-xs hover:border-portfolio-amber"
                    data-copy="email@andrewbeechey.me.uk"
                >
                    Copy
                </button>
            </div>

            <div class="flex flex-wrap items-center justify-between gap-x-4 gap-y-2 border-t border-portfolio-line py-4">
                <div class="min-w-0">
                    <p class="font-mono text-xs text-portfolio-muted">
                        github
                    </p>

                    <a
                        href="https://github.com/Vilkrin"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="break-all text-lg font-medium text-portfolio-amber hover:text-portfolio-amber-hover"
                    >
                        github.com/Vilkrin
                    </a>
                </div>

                <a
                    href="https://github.com/Vilkrin"
                    target="_blank"
                    rel="noopener noreferrer"
                    class="min-w-[7rem] border border-portfolio-line px-3 py-2 text-center font-mono text-xs text-portfolio-ink no-underline hover:border-portfolio-amber"
                >
                    Open ↗
                </a>
            </div>

            <div class="flex flex-wrap items-center justify-between gap-x-4 gap-y-2 border-t border-portfolio-line py-4">
                <div class="min-w-0">
                    <p class="font-mono text-xs text-portfolio-muted">
                        linkedin
                    </p>

                    <a
                        href="https://uk.linkedin.com/in/abeechey"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="break-all text-lg font-medium text-portfolio-amber hover:text-portfolio-amber-hover"
                    >
                        uk.linkedin.com/in/abeechey
                    </a>
                </div>

                <a
                    href="https://uk.linkedin.com/in/abeechey"
                    target="_blank"
                    rel="noopener noreferrer"
                    class="min-w-[7rem] border border-portfolio-line px-3 py-2 text-center font-mono text-xs text-portfolio-ink no-underline hover:border-portfolio-amber"
                >
                    Open ↗
                </a>
            </div>
        </div>
    </section>
</x-layouts::main>