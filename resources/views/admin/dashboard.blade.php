<x-app-layout>
<x-slot name="header">
        <h2 class="font-bold text-3xl text-gray-900 dark:text-gray-100 leading-tight shadow-md p-2 rounded-md">
            {{ __('Admin Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg border border-gray-300 dark:border-gray-700 p-8 space-y-6">
                <h3 class="text-2xl font-semibold text-gray-900 dark:text-gray-100">Welcome Back, Admin!</h3>
                <p class="text-gray-600 dark:text-gray-300 text-lg">
                    You have full control over the platform and access to all functionalities. From here, you can manage users, view analytics, and make changes to the system.
                </p>

    
            </div>
        </div>
    </div>
</x-app-layout>