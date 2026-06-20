<x-layouts.app>
    <div class="flex h-full w-full flex-1 flex-col gap-6 rounded-xl p-6">
        <div>
            <h1 class="text-2xl font-bold text-zinc-900 dark:text-white">Patient Details</h1>
        </div>

        <div class="max-w-lg rounded-xl border border-zinc-200 dark:border-zinc-700 bg-white dark:bg-zinc-800 p-6">
            <div class="flex items-center gap-4 pb-4 border-b border-zinc-200 dark:border-zinc-700">
                <div class="flex h-14 w-14 items-center justify-center rounded-full bg-purple-100 dark:bg-purple-900/30 text-lg font-bold text-purple-600">
                    {{ substr($patient->name, 0, 1) }}
                </div>
                <div>
                    <p class="text-lg font-semibold text-zinc-900 dark:text-white">{{ $patient->name }}</p>
                    <p class="text-sm text-zinc-500 dark:text-zinc-400">Patient</p>
                </div>
            </div>
            <div class="mt-4 space-y-3">
                <div class="flex items-center justify-between rounded-lg bg-zinc-50 dark:bg-zinc-700/30 px-4 py-3">
                    <span class="text-sm text-zinc-500 dark:text-zinc-400">Phone</span>
                    <span class="text-sm font-medium text-zinc-900 dark:text-white">{{ $patient->phone }}</span>
                </div>
            </div>
            <div class="mt-4 flex gap-3">
                <a href="{{ route('patients.edit', $patient->id) }}" class="rounded-lg bg-blue-600 px-4 py-2 text-sm font-medium text-white hover:bg-blue-700 transition">Edit Patient</a>
                <a href="{{ route('patients.index') }}" class="rounded-lg border border-zinc-300 dark:border-zinc-600 px-4 py-2 text-sm font-medium text-zinc-700 dark:text-zinc-300 hover:bg-zinc-100 dark:hover:bg-zinc-700 transition">Back</a>
            </div>
        </div>
    </div>
</x-layouts.app>
