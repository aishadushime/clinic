<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Clinic Appointment System</title>
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600,700" rel="stylesheet" />
        @vite(['resources/css/app.css'])
    </head>
    <body class="bg-zinc-50 dark:bg-zinc-900 text-zinc-800 dark:text-zinc-200 font-sans antialiased">
        <header class="fixed top-0 left-0 right-0 z-50 border-b border-zinc-200 dark:border-zinc-700 bg-white/80 dark:bg-zinc-900/80 backdrop-blur-sm">
            <div class="mx-auto flex max-w-7xl items-center justify-between px-6 py-4">
                <div class="flex items-center gap-2">
                    <div class="flex h-8 w-8 items-center justify-center rounded-lg bg-blue-600 text-white text-sm font-bold">C</div>
                    <span class="text-lg font-semibold">Clinic<span class="text-blue-600">App</span></span>
                </div>
                <nav class="flex items-center gap-4">
                    @if (Route::has('login'))
                        @auth
                            <a href="{{ url('/dashboard') }}" class="rounded-lg bg-blue-600 px-4 py-2 text-sm font-medium text-white hover:bg-blue-700 transition">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}" class="text-sm font-medium text-zinc-600 dark:text-zinc-400 hover:text-zinc-900 dark:hover:text-white transition">Log in</a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="rounded-lg bg-blue-600 px-4 py-2 text-sm font-medium text-white hover:bg-blue-700 transition">Register</a>
                            @endif
                        @endauth
                    @endif
                </nav>
            </div>
        </header>

        <main>
            <section class="relative overflow-hidden pt-32 pb-20">
                <div class="mx-auto max-w-7xl px-6 text-center">
                    <h1 class="text-5xl font-bold tracking-tight text-zinc-900 dark:text-white sm:text-6xl">
                         Clinic<br>
                        <span class="text-blue-600"> Appointments System</span>
                    </h1>
                    <p class="mx-auto mt-6 max-w-2xl text-lg text-zinc-600 dark:text-zinc-400">
                        A simple and powerful system to manage doctors, patients, and appointments
                        all in one place. Streamline your clinic workflow today.
                    </p>
                    <div class="mt-10 flex items-center justify-center gap-4">
                        @auth
                            <a href="{{ url('/dashboard') }}" class="rounded-lg bg-blue-600 px-6 py-3 text-sm font-semibold text-white hover:bg-blue-700 transition">Go to Dashboard</a>
                        @else
                            <a href="{{ route('register') }}" class="rounded-lg bg-blue-600 px-6 py-3 text-sm font-semibold text-white hover:bg-blue-700 transition">Get Started</a>
                            <a href="{{ route('login') }}" class="rounded-lg border border-zinc-300 dark:border-zinc-600 px-6 py-3 text-sm font-semibold text-zinc-700 dark:text-zinc-300 hover:bg-zinc-100 dark:hover:bg-zinc-800 transition">Sign In</a>
                        @endauth
                    </div>
                </div>
            </section>

            <section class="border-t border-zinc-200 dark:border-zinc-700 bg-white dark:bg-zinc-800/50 py-20">
                <div class="mx-auto max-w-7xl px-6">
                    <h2 class="text-center text-3xl font-bold text-zinc-900 dark:text-white">Key Features</h2>
                    <div class="mt-12 grid gap-8 sm:grid-cols-2 lg:grid-cols-4">
                        <div class="rounded-xl border border-zinc-200 dark:border-zinc-700 bg-white dark:bg-zinc-800 p-6 text-center">
                            <div class="mx-auto flex h-12 w-12 items-center justify-center rounded-lg bg-blue-100 dark:bg-blue-900/30 text-blue-600">
                                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 0 0 2.625.372 9.337 9.337 0 0 0 4.121-.952 4.125 4.125 0 0 0-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 0 1 8.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0 1 11.964-3.07M12 6.375a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0Zm8.25 2.25a2.625 2.625 0 1 1-5.25 0 2.625 2.625 0 0 1 5.25 0Z" /></svg>
                            </div>
                            <h3 class="mt-4 text-lg font-semibold text-zinc-900 dark:text-white">User Management</h3>
                            <p class="mt-2 text-sm text-zinc-600 dark:text-zinc-400">Manage system users with ease</p>
                        </div>
                        <div class="rounded-xl border border-zinc-200 dark:border-zinc-700 bg-white dark:bg-zinc-800 p-6 text-center">
                            <div class="mx-auto flex h-12 w-12 items-center justify-center rounded-lg bg-green-100 dark:bg-green-900/30 text-green-600">
                                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" /></svg>
                            </div>
                            <h3 class="mt-4 text-lg font-semibold text-zinc-900 dark:text-white">Doctor Directory</h3>
                            <p class="mt-2 text-sm text-zinc-600 dark:text-zinc-400">Keep track of doctors & specializations</p>
                        </div>
                        <div class="rounded-xl border border-zinc-200 dark:border-zinc-700 bg-white dark:bg-zinc-800 p-6 text-center">
                            <div class="mx-auto flex h-12 w-12 items-center justify-center rounded-lg bg-purple-100 dark:bg-purple-900/30 text-purple-600">
                                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 0 0 3.741-.479 3 3 0 0 0-4.682-2.72m.94 3.198.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0 1 12 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 0 1 6 18.719m12 0a5.971 5.971 0 0 0-.941-3.197m0 0A5.995 5.995 0 0 0 12 12.75a5.995 5.995 0 0 0-5.058 2.772m0 0a3 3 0 0 0-4.681 2.72 8.986 8.986 0 0 0 3.74.477m.94-3.197a5.971 5.971 0 0 0-.94 3.197M15 6.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm6 3a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Zm-13.5 0a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Z" /></svg>
                            </div>
                            <h3 class="mt-4 text-lg font-semibold text-zinc-900 dark:text-white">Patient Records</h3>
                            <p class="mt-2 text-sm text-zinc-600 dark:text-zinc-400">Store and access patient information</p>
                        </div>
                        <div class="rounded-xl border border-zinc-200 dark:border-zinc-700 bg-white dark:bg-zinc-800 p-6 text-center">
                            <div class="mx-auto flex h-12 w-12 items-center justify-center rounded-lg bg-amber-100 dark:bg-amber-900/30 text-amber-600">
                                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5" /></svg>
                            </div>
                            <h3 class="mt-4 text-lg font-semibold text-zinc-900 dark:text-white">Appointment Scheduling</h3>
                            <p class="mt-2 text-sm text-zinc-600 dark:text-zinc-400">Book and manage appointments easily</p>
                        </div>
                    </div>
                </div>
            </section>

            <footer class="border-t border-zinc-200 dark:border-zinc-700 py-8">
                <div class="mx-auto max-w-7xl px-6 text-center text-sm text-zinc-500">
                    &copy; {{ date('Y') }} Clinic Appointment System. All rights reserved.
                </div>
            </footer>
        </main>
    </body>
</html>
