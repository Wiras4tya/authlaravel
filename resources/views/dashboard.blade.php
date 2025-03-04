<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center bg-gradient-to-r from-indigo-500 to-purple-600 text-white p-6 rounded-lg shadow-lg">
            <h2 class="font-extrabold text-4xl tracking-wide">
                {{ __('Dashboard') }}
            </h2>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Main Card with Shadow and Rounded Corners -->
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg border border-gray-300 dark:border-gray-700 p-8 space-y-6">
                <h3 class="text-2xl font-semibold text-gray-900 dark:text-gray-100">Welcome Back!</h3>
                <p class="text-gray-600 dark:text-gray-300 text-lg">
                    You’re successfully logged in. From here, you can manage your profile, view updates, and explore the system.
                </p>

            </div>
        </div>
    </div>
</x-app-layout>