<x-layouts::main :title="__('Skills')">
    <section>
        <p class="mb-3 font-mono text-sm text-portfolio-amber">
            // skills
        </p>

        <h1 class="display text-4xl leading-none sm:text-6xl">
            Skills
        </h1>

        <p class="mt-3 max-w-xl text-portfolio-muted">
            What I build with, what I support, and what I have run.
        </p>
    </section>

    <section class="grid gap-4 md:grid-cols-3">
        <article class="min-w-0 border border-portfolio-line bg-portfolio-panel">
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
                    web.dev
                </h2>

                <ul class="flex flex-col gap-2 text-portfolio-soft">
                    <li class="border-t border-portfolio-line pt-2">
                        HTML, CSS and PHP (20 years)
                    </li>

                    <li class="border-t border-portfolio-line pt-2">
                        Laravel and Tailwind CSS (5 years)
                    </li>

                    <li class="border-t border-portfolio-line pt-2">
                        Magento store set-up
                    </li>

                    <li class="border-t border-portfolio-line pt-2">
                        Responsive, hand-built front ends
                    </li>
                </ul>
            </div>
        </article>

        <article class="min-w-0 border border-portfolio-line bg-portfolio-panel">
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
                    it-support.sys
                </h2>

                <ul class="flex flex-col gap-2 text-portfolio-soft">
                    <li class="border-t border-portfolio-line pt-2">
                        Proxmox virtualisation
                    </li>

                    <li class="border-t border-portfolio-line pt-2">
                        Windows Server
                    </li>

                    <li class="border-t border-portfolio-line pt-2">
                        Active Directory and Group Policy
                    </li>

                    <li class="border-t border-portfolio-line pt-2">
                        DHCP and DNS
                    </li>

                    <li class="border-t border-portfolio-line pt-2">
                        iMac and Windows PC set-up
                    </li>

                    <li class="border-t border-portfolio-line pt-2">
                        Remedy ticketing
                    </li>
                </ul>
            </div>
        </article>

        <article class="min-w-0 border border-portfolio-line bg-portfolio-panel">
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
                    business.ops
                </h2>

                <ul class="flex flex-col gap-2 text-portfolio-soft">
                    <li class="border-t border-portfolio-line pt-2">
                        Sage One accounts and payroll
                    </li>

                    <li class="border-t border-portfolio-line pt-2">
                        eBay and Amazon selling
                    </li>

                    <li class="border-t border-portfolio-line pt-2">
                        Microsoft Excel, Access and Office
                    </li>

                    <li class="border-t border-portfolio-line pt-2">
                        Customer service and escalations
                    </li>

                    <li class="border-t border-portfolio-line pt-2">
                        Stock handling and order fulfilment
                    </li>

                    <li class="border-t border-portfolio-line pt-2">
                        Budget estimation
                    </li>
                </ul>
            </div>
        </article>
    </section>
</x-layouts::main>