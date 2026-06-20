<x-layouts.app>
    <div class="flex h-full w-full flex-1 flex-col gap-6 rounded-xl p-6">
        <div>
            <h1 class="text-2xl font-bold text-zinc-900 dark:text-white">Dashboard</h1>
            <p class="mt-1 text-sm text-zinc-500 dark:text-zinc-400">Overview of your clinic appointment system</p>
        </div>

        <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-4">
            <a href="{{ route('users.index') }}" class="group relative overflow-hidden rounded-xl bg-gradient-to-br from-blue-500 to-blue-600 p-5 shadow-lg shadow-blue-500/20 transition-all hover:shadow-xl hover:shadow-blue-500/30 hover:-translate-y-0.5">
                <div class="absolute -top-6 -right-6 h-24 w-24 rounded-full bg-white/5"></div>
                <div class="absolute -bottom-4 -left-4 h-16 w-16 rounded-full bg-white/5"></div>
                <div class="relative flex items-center justify-between">
                    <div>
                        <p class="text-sm font-medium text-blue-100">Users</p>
                        <p class="mt-1 text-3xl font-bold text-white">{{ $totalUsers }}</p>
                    </div>
                    <div class="flex h-12 w-12 items-center justify-center rounded-lg bg-white/20 text-white backdrop-blur-sm transition group-hover:scale-110 group-hover:bg-white/30">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 0 0 2.625.372 9.337 9.337 0 0 0 4.121-.952 4.125 4.125 0 0 0-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 0 1 8.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0 1 11.964-3.07M12 6.375a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0Zm8.25 2.25a2.625 2.625 0 1 1-5.25 0 2.625 2.625 0 0 1 5.25 0Z" /></svg>
                    </div>
                </div>
            </a>

            <a href="{{ route('doctors.index') }}" class="group relative overflow-hidden rounded-xl bg-gradient-to-br from-emerald-500 to-emerald-600 p-5 shadow-lg shadow-emerald-500/20 transition-all hover:shadow-xl hover:shadow-emerald-500/30 hover:-translate-y-0.5">
                <div class="absolute -top-6 -right-6 h-24 w-24 rounded-full bg-white/5"></div>
                <div class="absolute -bottom-4 -left-4 h-16 w-16 rounded-full bg-white/5"></div>
                <div class="relative flex items-center justify-between">
                    <div>
                        <p class="text-sm font-medium text-emerald-100">Doctors</p>
                        <p class="mt-1 text-3xl font-bold text-white">{{ $totalDoctors }}</p>
                    </div>
                    <div class="flex h-12 w-12 items-center justify-center rounded-lg bg-white/20 text-white backdrop-blur-sm transition group-hover:scale-110 group-hover:bg-white/30">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" /></svg>
                    </div>
                </div>
            </a>

            <a href="{{ route('patients.index') }}" class="group relative overflow-hidden rounded-xl bg-gradient-to-br from-violet-500 to-violet-600 p-5 shadow-lg shadow-violet-500/20 transition-all hover:shadow-xl hover:shadow-violet-500/30 hover:-translate-y-0.5">
                <div class="absolute -top-6 -right-6 h-24 w-24 rounded-full bg-white/5"></div>
                <div class="absolute -bottom-4 -left-4 h-16 w-16 rounded-full bg-white/5"></div>
                <div class="relative flex items-center justify-between">
                    <div>
                        <p class="text-sm font-medium text-violet-100">Patients</p>
                        <p class="mt-1 text-3xl font-bold text-white">{{ $totalPatients }}</p>
                    </div>
                    <div class="flex h-12 w-12 items-center justify-center rounded-lg bg-white/20 text-white backdrop-blur-sm transition group-hover:scale-110 group-hover:bg-white/30">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 0 0 3.741-.479 3 3 0 0 0-4.682-2.72m.94 3.198.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0 1 12 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 0 1 6 18.719m12 0a5.971 5.971 0 0 0-.941-3.197m0 0A5.995 5.995 0 0 0 12 12.75a5.995 5.995 0 0 0-5.058 2.772m0 0a3 3 0 0 0-4.681 2.72 8.986 8.986 0 0 0 3.74.477m.94-3.197a5.971 5.971 0 0 0-.94 3.197M15 6.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm6 3a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Zm-13.5 0a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Z" /></svg>
                    </div>
                </div>
            </a>

            <a href="{{ route('appointments.index') }}" class="group relative overflow-hidden rounded-xl bg-gradient-to-br from-rose-500 to-rose-600 p-5 shadow-lg shadow-rose-500/20 transition-all hover:shadow-xl hover:shadow-rose-500/30 hover:-translate-y-0.5">
                <div class="absolute -top-6 -right-6 h-24 w-24 rounded-full bg-white/5"></div>
                <div class="absolute -bottom-4 -left-4 h-16 w-16 rounded-full bg-white/5"></div>
                <div class="relative flex items-center justify-between">
                    <div>
                        <p class="text-sm font-medium text-rose-100">Appointments</p>
                        <p class="mt-1 text-3xl font-bold text-white">{{ $totalAppointments }}</p>
                    </div>
                    <div class="flex h-12 w-12 items-center justify-center rounded-lg bg-white/20 text-white backdrop-blur-sm transition group-hover:scale-110 group-hover:bg-white/30">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5" /></svg>
                    </div>
                </div>
            </a>
        </div>

        <div class="rounded-xl border border-zinc-200 dark:border-zinc-700 bg-white dark:bg-zinc-800 shadow-sm">
            <div class="flex items-center justify-between border-b border-zinc-200 dark:border-zinc-700 px-6 py-4">
                <div class="flex items-center gap-3">
                    <div class="flex h-8 w-8 items-center justify-center rounded-lg bg-rose-100 dark:bg-rose-900/30 text-rose-600">
                        <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5" /></svg>
                    </div>
                    <h2 class="text-lg font-semibold text-zinc-900 dark:text-white">Recent Appointments</h2>
                </div>
                <a href="{{ route('appointments.index') }}" class="rounded-lg bg-gradient-to-r from-rose-500 to-rose-600 px-4 py-1.5 text-xs font-medium text-white shadow-sm hover:shadow-md transition-all">View All</a>
            </div>
            <div class="overflow-x-auto">
                <table class="w-full">
                    <thead>
                        <tr class="border-b border-zinc-200 dark:border-zinc-700 bg-zinc-50/50 dark:bg-zinc-800/50 text-left text-xs font-semibold uppercase tracking-wider text-zinc-500 dark:text-zinc-400">
                            <th class="px-6 py-3">Patient</th>
                            <th class="px-6 py-3">Doctor</th>
                            <th class="px-6 py-3">Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($recentAppointments as $appointment)
                            <tr class="border-b border-zinc-100 dark:border-zinc-700/50 text-sm text-zinc-700 dark:text-zinc-300 transition hover:bg-zinc-50 dark:hover:bg-zinc-700/20">
                                <td class="px-6 py-4">
                                    <div class="flex items-center gap-3">
                                        <div class="flex h-8 w-8 items-center justify-center rounded-full bg-gradient-to-br from-violet-400 to-violet-600 text-xs font-bold text-white shadow-sm">{{ substr($appointment->patient->name, 0, 1) }}</div>
                                        <span class="font-medium">{{ $appointment->patient->name }}</span>
                                    </div>
                                </td>
                                <td class="px-6 py-4">
                                    <div class="flex items-center gap-2">
                                        <div class="h-1.5 w-1.5 rounded-full bg-emerald-500"></div>
                                        {{ $appointment->doctor->name }}
                                    </div>
                                </td>
                                <td class="px-6 py-4">
                                    <span class="rounded-md bg-zinc-100 dark:bg-zinc-700/50 px-2.5 py-1 text-xs font-medium text-zinc-600 dark:text-zinc-400">{{ $appointment->date }}</span>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="3" class="px-6 py-10 text-center">
                                    <div class="flex flex-col items-center gap-2">
                                        <svg class="h-8 w-8 text-zinc-300 dark:text-zinc-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5" /></svg>
                                        <p class="text-sm text-zinc-400 dark:text-zinc-500">No appointments yet.</p>
                                    </div>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-layouts.app>
