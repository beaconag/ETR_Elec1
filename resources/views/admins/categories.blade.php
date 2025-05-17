<x-app-layout>
    <div class="flex flex-row w-full">
        <div class="w-300">
            <x-sidebar></x-sidebar>
        </div>
        <div class="w-full bg-amber-50">
            <div class="px-8 py-10">
                <div class="flex justify-between items-center mb-4">
                    <h1 class="text-2xl font-bold">Categories</h1>
                    <a href="#" class="bg-blue-800 text-white px-4 py-2 rounded">Add Category</a>  
                </div>
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        <table class="min-w-full text-center ">
                            <thead>
                                <tr>
                                    <th class="py-2 px-4 border-b">ID</th>
                                    <th class="py-2 px-4 border-b">Image</th>
                                    <th class="py-2 px-4 border-b">Name</th>
                                    <th class="py-2 px-4 border-b">Description</th>
                                    <th class="py-2 px-4 border-b">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                              
                                <tr>
                                    <td class="py-2 px-4 border-b">1</td>
                                    <td class="py-2 px-4 border-b"><img src="https://via.placeholder.com/50" alt="Category Image"></td>
                                    <td class="py-2 px-4 border-b">Electronics</td>
                                    <td class="py-2 px-4 border-b">Devices and gadgets</td>
                                    <td class="py-2 px-4 border-b">
                                        <a href="#" class="text-blue-600 hover:underline">Edit</a> | 
                                        <a href="#" class="text-red-600 hover:underline">Delete</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
            </div>  
        </div>
    </div>
</x-app-layout>
