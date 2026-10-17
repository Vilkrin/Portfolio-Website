<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Andrew Beechey — Portfolio & CV</title>

    <meta
        name="description"
        content="Andrew Beechey's portfolio and CV website. Coming soon."
    >

    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        body {
            background:
                radial-gradient(
                    circle at 15% 20%,
                    rgba(99, 102, 241, 0.12),
                    transparent 30%
                ),
                radial-gradient(
                    circle at 85% 80%,
                    rgba(168, 85, 247, 0.10),
                    transparent 30%
                ),
                #09090b;
        }

        .grid-background {
            background-image:
                linear-gradient(
                    rgba(255, 255, 255, 0.035) 1px,
                    transparent 1px
                ),
                linear-gradient(
                    90deg,
                    rgba(255, 255, 255, 0.035) 1px,
                    transparent 1px
                );
            background-size: 50px 50px;
        }

        .glow {
            box-shadow:
                0 0 80px rgba(99, 102, 241, 0.12),
                0 0 160px rgba(168, 85, 247, 0.06);
        }

        .pulse {
            animation: pulse 2s infinite;
        }

        @keyframes pulse {
            0%, 100% {
                opacity: 1;
            }

            50% {
                opacity: 0.4;
            }
        }
    </style>
</head>

<body class="min-h-screen bg-zinc-950 text-white antialiased">

    <!-- Background grid -->
    <div class="grid-background fixed inset-0 pointer-events-none"></div>

    <!-- Background glow -->
    <div class="pointer-events-none fixed -left-32 top-20 h-72 w-72 rounded-full bg-indigo-500/10 blur-3xl"></div>
    <div class="pointer-events-none fixed -right-32 bottom-20 h-72 w-72 rounded-full bg-purple-500/10 blur-3xl"></div>


    <main class="relative flex min-h-screen flex-col">


        <!-- ========================================================= -->
        <!-- Header -->
        <!-- ========================================================= -->

        <header class="mx-auto flex w-full max-w-6xl items-center justify-between px-6 py-6 lg:px-8">

            <a
                href="#"
                class="text-lg font-semibold tracking-tight text-white"
            >
                Andrew
                <span class="text-indigo-400">Beechey</span>
            </a>

            <div class="flex items-center gap-2 text-sm text-zinc-400">

                <span class="h-2 w-2 rounded-full bg-emerald-400 pulse"></span>

                <span>
                    Currently building
                </span>

            </div>

        </header>


        <!-- ========================================================= -->
        <!-- Main -->
        <!-- ========================================================= -->

        <section class="flex flex-1 items-center justify-center px-6 py-10 lg:px-8">

            <div class="w-full max-w-4xl text-center">


                <!-- Status badge -->

                <div class="mb-6 inline-flex items-center gap-2 rounded-full border border-white/10 bg-white/[0.04] px-4 py-2 text-sm text-zinc-300 backdrop-blur">

                    <span class="h-2 w-2 rounded-full bg-indigo-400"></span>

                    Portfolio coming soon

                </div>


                <!-- Heading -->

                <h1 class="mx-auto max-w-4xl text-5xl font-bold tracking-tight text-white sm:text-6xl lg:text-7xl">

                    <span class="text-white">
                        Building things.
                    </span>

                    <br>

                    <span class="bg-gradient-to-r from-indigo-400 via-purple-400 to-pink-400 bg-clip-text text-transparent">
                        Solving problems.
                    </span>

                </h1>


                <!-- Introduction -->

                <p class="mx-auto mt-6 max-w-2xl text-base leading-7 text-zinc-400 sm:text-lg">

                    I'm currently putting together my portfolio and CV website,
                    showcasing my work, projects, experience and the things I'm
                    building along the way.

                </p>


                <!-- ================================================= -->
                <!-- Development Progress -->
                <!-- ================================================= -->

                <div class="glow mx-auto mt-10 max-w-xl rounded-2xl border border-white/10 bg-zinc-900/70 p-5 text-left backdrop-blur">

                    <div class="flex items-center justify-between">

                        <div>

                            <p class="text-sm font-medium text-white">
                                Website development
                            </p>

                            <p class="mt-1 text-xs text-zinc-500">
                                Currently under construction
                            </p>

                        </div>

                        <span class="text-sm font-semibold text-indigo-400">
                            75%
                        </span>

                    </div>


                    <div class="mt-4 h-2 overflow-hidden rounded-full bg-white/5">

                        <div
                            class="h-full w-3/4 rounded-full bg-gradient-to-r from-indigo-500 to-purple-500"
                        ></div>

                    </div>

                </div>


                <!-- ================================================= -->
                <!-- Feature Cards -->
                <!-- ================================================= -->

                <div class="mx-auto mt-8 grid max-w-2xl gap-4 text-left sm:grid-cols-3">


                    <!-- Projects -->

                    <div class="rounded-xl border border-white/10 bg-zinc-900/60 p-5 backdrop-blur">

                        <div class="mb-3 text-indigo-400">

                            <svg
                                class="h-6 w-6"
                                fill="none"
                                stroke="currentColor"
                                viewBox="0 0 24 24"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="1.5"
                                    d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"
                                />
                            </svg>

                        </div>

                        <h3 class="font-medium text-white">
                            Projects
                        </h3>

                        <p class="mt-2 text-sm leading-6 text-zinc-500">
                            A selection of things I've built and worked on.
                        </p>

                    </div>


                    <!-- Experience -->

                    <div class="rounded-xl border border-white/10 bg-zinc-900/60 p-5 backdrop-blur">

                        <div class="mb-3 text-purple-400">

                            <svg
                                class="h-6 w-6"
                                fill="none"
                                stroke="currentColor"
                                viewBox="0 0 24 24"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="1.5"
                                    d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"
                                />
                            </svg>

                        </div>

                        <h3 class="font-medium text-white">
                            Experience
                        </h3>

                        <p class="mt-2 text-sm leading-6 text-zinc-500">
                            My professional background and experience.
                        </p>

                    </div>


                    <!-- CV -->

                    <div class="rounded-xl border border-white/10 bg-zinc-900/60 p-5 backdrop-blur">

                        <div class="mb-3 text-pink-400">

                            <svg
                                class="h-6 w-6"
                                fill="none"
                                stroke="currentColor"
                                viewBox="0 0 24 24"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="1.5"
                                    d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h7l5 5v11a2 2 0 01-2 2z"
                                />
                            </svg>

                        </div>

                        <h3 class="font-medium text-white">
                            CV
                        </h3>

                        <p class="mt-2 text-sm leading-6 text-zinc-500">
                            Skills, education and professional history.
                        </p>

                    </div>

                </div>


                <!-- ================================================= -->
                <!-- Contact -->
                <!-- ================================================= -->

                <div class="mt-8 flex flex-wrap items-center justify-center gap-3">


<button
    type="button"
    onclick="copyEmail()"
    class="rounded-lg border border-white/10 bg-white/[0.05] px-5 py-2.5 text-sm font-medium text-white transition hover:bg-white/10"
>
    <span id="copyEmailText">Get in Touch</span>
</button>


                    <a
                        href="https://github.com/Vilkrin/"
                        class="rounded-lg border border-white/10 px-5 py-2.5 text-sm font-medium text-zinc-400 transition hover:border-white/20 hover:text-white"
                    >
                        GitHub
                    </a>


                    <a
                        href="https://www.linkedin.com/in/abeechey/"
                        class="rounded-lg border border-white/10 px-5 py-2.5 text-sm font-medium text-zinc-400 transition hover:border-white/20 hover:text-white"
                    >
                        LinkedIn
                    </a>

                </div>

            </div>

        </section>


        <!-- ========================================================= -->
        <!-- Footer -->
        <!-- ========================================================= -->

        <footer class="mx-auto w-full max-w-6xl px-6 py-6 lg:px-8">

            <div class="flex flex-col items-center justify-between gap-3 border-t border-white/10 pt-5 text-xs text-zinc-600 sm:flex-row">

                <p>
                    &copy; 2026 Andrew Beechey. All rights reserved.
                </p>

                <p>
                    Portfolio &amp; CV
                </p>

            </div>

        </footer>

    </main>

<script>
    function copyEmail() {
        const email = 'email@andrewbeechey.me.uk';

        navigator.clipboard.writeText(email).then(() => {
            const buttonText = document.getElementById('copyEmailText');

            buttonText.textContent = 'Copied!';

            setTimeout(() => {
                buttonText.textContent = 'Copy Email';
            }, 2000);
        });
    }
</script>

</body>
</html>
