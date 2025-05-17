<li>
    <a href="{{ route($route) }}"
       class="block p-2 rounded
              {{ request()->routeIs($route) ? 'bg-orange-500 text-white font-bold' : 'hover:bg-orange-600 text-gray-300' }}">
        {{ $slot }}
    </a>
</li>
