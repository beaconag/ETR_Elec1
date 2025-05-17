<!-- resources/views/components/sidebar.blade.php -->
<aside class="w-64 h-screen bg-blue-800 text-white p-4">
    <h2 class="text-xl font-semibold mb-4">Menu</h2>
    <ul class="space-y-2">
        <x-sidebar-item route="admin.dashboard"><i class="fa-solid fa-house w-8"></i>Dashboard</x-sidebar-item>
        <x-sidebar-item route="admin.products"><i class="fa-solid fa-briefcase w-8"></i>Products</x-sidebar-item>
        <x-sidebar-item route="admin.categories"><i class="fa-solid fa-list w-8"></i>Categories</x-sidebar-item>
        <x-sidebar-item route="admin.orders"><i class="fa-solid fa-receipt w-8"></i>Orders</x-sidebar-item>
        <x-sidebar-item route="admin.reports"><i class="fa-solid fa-chart-simple w-8"></i>Reports</x-sidebar-item>
        <x-sidebar-item route="admin.discounts"><i class="fa-solid fa-ticket w-8"></i>Discounts</x-sidebar-item>
    </ul>
</aside>
