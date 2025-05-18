<x-app-layout>
    <div class="flex flex-row w-full">
        <div class="w-300">
            <x-sidebar></x-sidebar>
        </div>
        <div class="w-full p-10 bg-amber-50">
            @yield('content')
        </div>
    </div>
</x-app-layout>
