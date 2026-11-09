
<div>
    {{-- Cookie notice --}}
    @if($showBanner)
        <div class="fixed bottom-5 right-5 z-[100] w-[calc(100%-2.5rem)] max-w-md">
            <div class="overflow-hidden rounded-xl border border-slate-700 bg-slate-900 shadow-2xl shadow-black/30">
                <div class="p-6">
                    <div class="flex items-center gap-2">
                        <span class="h-2 w-2 rounded-full bg-amber-400"></span>

                        <h3 class="text-base font-semibold text-amber-400">
                            Privacy preferences
                        </h3>
                    </div>

                    <p class="mt-3 text-sm leading-6 text-slate-300">
                        This website uses essential cookies to support core functionality and maintain secure sessions. Google Fonts may also be loaded from Google's external servers to display the website's typography.
                    </p>

                    <div class="mt-5 flex flex-col gap-3">
                        <button
                            type="button"
                            wire:click="enableGoogleFonts"
                            class="inline-flex w-full cursor-pointer items-center justify-center rounded-lg bg-amber-400 px-4 py-3 text-sm font-semibold text-slate-950 transition hover:bg-amber-300"
                        >
                            Accept and load Google Fonts
                        </button>

                        <button
                            type="button"
                            wire:click="useSystemFonts"
                            class="inline-flex w-full cursor-pointer items-center justify-center rounded-lg border border-slate-700 bg-slate-800 px-4 py-3 text-sm font-medium text-slate-200 transition hover:border-amber-400/60 hover:bg-slate-700 hover:text-amber-400"
                        >
                            Use system fonts
                        </button>

                        <button
                            type="button"
                            wire:click="openPreferences"
                            class="inline-flex w-full cursor-pointer items-center justify-center py-2 text-sm font-medium text-slate-400 transition hover:text-amber-400"
                        >
                            Manage preferences
                        </button>
                    </div>

                    <p class="mt-4 text-xs leading-5 text-slate-400">
                        Read our
                        <a
                            href="/privacy-policy"
                            class="text-amber-400 underline underline-offset-2 transition hover:text-amber-300"
                        >
                            Privacy Policy
                        </a>
                        for more information.
                    </p>
                </div>
            </div>
        </div>
    @endif

    {{-- Cookie preferences modal --}}
    @if($showPreferences)
        <div
            class="fixed inset-0 z-[110] flex items-center justify-center overflow-y-auto bg-slate-950/80 p-4 backdrop-blur-sm"
        >
            <div
                class="my-auto w-full max-w-xl overflow-hidden rounded-xl border border-slate-700 bg-slate-900 shadow-2xl shadow-black/40"
                role="dialog"
                aria-modal="true"
                aria-labelledby="cookie-preferences-title"
            >
                {{-- Modal header --}}
                <div class="flex items-center justify-between border-b border-slate-700 px-6 py-5">
                    <div>
                        <h2
                            id="cookie-preferences-title"
                            class="text-base font-semibold text-amber-400"
                        >
                            Cookie preferences
                        </h2>

                        <p class="mt-1 text-xs text-slate-400">
                            Manage your website privacy preferences.
                        </p>
                    </div>

                    <button
                        type="button"
                        wire:click="closePreferences"
                        class="inline-flex h-9 w-9 cursor-pointer items-center justify-center rounded-lg text-slate-400 transition hover:bg-slate-800 hover:text-amber-400"
                        aria-label="Close cookie preferences"
                    >
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="h-5 w-5"
                            viewBox="0 0 20 20"
                            fill="currentColor"
                            aria-hidden="true"
                        >
                            <path
                                fill-rule="evenodd"
                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 011.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                clip-rule="evenodd"
                            />
                        </svg>
                    </button>
                </div>

                {{-- Modal content --}}
                <div class="px-6 py-6">
                    <p class="text-sm leading-6 text-slate-300">
                        This website uses essential cookies and allows you to choose whether externally hosted Google Fonts are loaded.
                    </p>

                    {{-- Necessary cookies --}}
                    <div class="mt-6 border-t border-slate-700 pt-6">
                        <div class="flex items-start justify-between gap-5">
                            <div class="min-w-0">
                                <h3 class="text-sm font-semibold text-amber-400">
                                    Necessary cookies
                                </h3>

                                <p class="mt-3 text-sm leading-6 text-slate-300">
                                    These support essential website functionality, including Laravel sessions, security and remembering your privacy preferences.
                                </p>
                            </div>

                            <div class="shrink-0 pt-0.5">
                                <span class="inline-flex items-center rounded-full border border-amber-400/30 bg-amber-400/10 px-3 py-1.5 text-xs font-medium text-amber-400">
                                    Always active
                                </span>
                            </div>
                        </div>
                    </div>

                    {{-- External fonts --}}
                    <div class="mt-6 border-t border-slate-700 pt-6">
                        <div class="flex items-start justify-between gap-5">
                            <div class="min-w-0">
                                <h3 class="text-sm font-semibold text-amber-400">
                                    External fonts
                                </h3>

                                <p class="mt-3 text-sm leading-6 text-slate-300">
                                    Google Fonts loads typography from Google's external servers. This may share technical information, including your IP address and browser information, with Google.
                                </p>

                                <p class="mt-2 text-xs leading-5 text-slate-400">
                                    If disabled, the website will use your browser's default system fonts instead.
                                </p>
                            </div>

                            <label class="relative inline-flex shrink-0 cursor-pointer items-center">
                                <input
                                    type="checkbox"
                                    wire:model="externalFonts"
                                    class="peer sr-only"
                                    aria-label="Allow external Google Fonts"
                                >

                                <div class="h-6 w-11 rounded-full bg-slate-700 transition peer-checked:bg-amber-400"></div>

                                <div class="pointer-events-none absolute left-[2px] top-[2px] h-5 w-5 rounded-full bg-white shadow-sm transition-transform peer-checked:translate-x-5"></div>
                            </label>
                        </div>

                        <p class="mt-3 text-xs text-slate-400">
                            Current selection:
                            <span class="font-medium text-slate-200">
                                {{ $externalFonts ? 'Google Fonts enabled' : 'System fonts enabled' }}
                            </span>
                        </p>
                    </div>

                    {{-- Privacy information --}}
                    <div class="mt-6 rounded-lg border border-slate-700 bg-slate-800/60 p-4">
                        <h3 class="text-xs font-semibold uppercase tracking-wider text-slate-300">
                            Your privacy
                        </h3>

                        <p class="mt-2 text-sm leading-6 text-slate-400">
                            No analytics or advertising cookies are currently used on this website.
                        </p>

                        <a
                            href="/privacy-policy"
                            class="mt-3 inline-flex items-center gap-1 text-sm font-medium text-amber-400 transition hover:text-amber-300"
                        >
                            Read our Privacy Policy
                            <span aria-hidden="true">→</span>
                        </a>
                    </div>
                </div>

                {{-- Modal footer --}}
                <div class="flex flex-col-reverse gap-3 border-t border-slate-700 bg-slate-950/30 px-6 py-5 sm:flex-row sm:items-center sm:justify-between">
                    <button
                        type="button"
                        wire:click="useSystemFonts"
                        class="inline-flex cursor-pointer items-center justify-center rounded-lg border border-slate-700 px-4 py-2.5 text-sm font-medium text-slate-300 transition hover:border-amber-400/60 hover:text-amber-400"
                    >
                        Use system fonts
                    </button>

                    <button
                        type="button"
                        wire:click="savePreferences"
                        class="inline-flex cursor-pointer items-center justify-center rounded-lg bg-amber-400 px-6 py-2.5 text-sm font-semibold text-slate-950 transition hover:bg-amber-300"
                    >
                        Save preferences
                    </button>
                </div>
            </div>
        </div>
    @endif
</div>
