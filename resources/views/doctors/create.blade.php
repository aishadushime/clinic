<x-layouts.app>
    <div class="flex h-full w-full flex-1 flex-col gap-6 rounded-xl p-6">
        <div>
            <h1 class="text-2xl font-bold text-zinc-900 dark:text-white">Create Doctor</h1>
            <p class="mt-1 text-sm text-zinc-500 dark:text-zinc-400">Add a new doctor profile</p>
        </div>

        <div class="max-w-lg rounded-xl border border-zinc-200 dark:border-zinc-700 bg-white dark:bg-zinc-800 p-6">
            <form action="{{ route('doctors.store') }}" method="POST" class="flex flex-col gap-5">
                @csrf

                <div class="flex flex-col gap-1.5">
                    <label for="name" class="text-sm font-medium text-zinc-700 dark:text-zinc-300">Name</label>
                    <input type="text" name="name" id="name" class="rounded-lg border border-zinc-300 dark:border-zinc-600 bg-white dark:bg-zinc-700 px-3 py-2 text-sm text-zinc-900 dark:text-white placeholder-zinc-400 focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none transition" placeholder="Doctor name" required>
                </div>

                <div class="flex flex-col gap-1.5">
                    <label for="specialization" class="text-sm font-medium text-zinc-700 dark:text-zinc-300">Specialization</label>
                    <input type="text" name="specialization" id="specialization" class="rounded-lg border border-zinc-300 dark:border-zinc-600 bg-white dark:bg-zinc-700 px-3 py-2 text-sm text-zinc-900 dark:text-white placeholder-zinc-400 focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none transition" placeholder="e.g. Cardiology" required>
                </div>

                <div class="flex items-center gap-3 pt-2">
                    <button type="submit" class="rounded-lg bg-blue-600 px-5 py-2 text-sm font-medium text-white hover:bg-blue-700 transition">Create Doctor</button>
                    <a href="{{ route('doctors.index') }}" class="rounded-lg border border-zinc-300 dark:border-zinc-600 px-5 py-2 text-sm font-medium text-zinc-700 dark:text-zinc-300 hover:bg-zinc-100 dark:hover:bg-zinc-700 transition">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</x-layouts.app>
