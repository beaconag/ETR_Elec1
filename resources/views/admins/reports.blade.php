<x-app-layout>
    <div class="flex flex-row w-full">
        <div class="w-300">
            <x-sidebar></x-sidebar>
        </div>
        <div class="w-full bg-amber-50">
            <div class="px-8 py-10">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        {{ __("You're logged in!") }}
                        <h1>ADMIN</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
