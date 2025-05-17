
<li>
    <a href="{{ route($route) }}"
       class="block p-2 rounded
              {{ request()->routeIs($route) ? 'bg-gray-700 text-white font-bold' : 'hover:bg-gray-700 text-gray-300' }}">
        {{ $slot }}
    </a>
</li>
