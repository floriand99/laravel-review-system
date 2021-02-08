<div class="w-1/4 fixed h-screen bg-gray-100">
    <div class="text-center">
        <img class="h-16 w-16 shadow-md object-cover rounded-full ring-4 ring-gray-50 mx-auto mt-5" src="https://upload.wikimedia.org/wikipedia/en/thumb/1/19/Bruce_Wayne_%28The_Dark_Knight_Trilogy%29.jpg/220px-Bruce_Wayne_%28The_Dark_Knight_Trilogy%29.jpg">
        <h3 class="text-purple-700 mt-1">Florian Domgjoni</h3>
        <span class="text-sm text-gray-600">Admin</span>
    </div>
    <div class="pt-3 px-6 pb-3">
        <div class="{{ request()->is('admin/businesses') ? 'bg-gray-900 text-white' : 'bg-gray-50' }} w-full px-4 py-2 rounded hover:bg-purple-500 hover:text-white transition duration-100 hover:shadow-md transform hover:scale-105">
            Businesses
        </div>
    </div>
    <div class="pb-3 px-6">
        <a href="/admin/categories" class="{{ request()->is('admin/categories') ? 'bg-gray-900 text-white' : 'bg-gray-50' }} block w-full px-4 py-2 rounded hover:bg-purple-500 hover:text-white transition duration-100 hover:shadow-md transform hover:scale-105">
            Categories
        </a>
    </div>
    <div class="pb-3 px-6">
        <div class="{{ request()->is('admin/users') ? 'bg-gray-900 text-white' : 'bg-gray-50' }} w-full px-4 py-2 rounded hover:bg-purple-500 hover:text-white transition duration-100 hover:shadow-md transform hover:scale-105">
            Users
        </div>
    </div>
    <div class="px-6 pb-3">
        <a href="/" class="block px-4 py-2 bg-gray-50 rounded hover:bg-purple-500 hover:text-white transition duration-100 hover:shadow-md transform hover:scale-105">
            Exit dashboard
        </a>
    </div>
</div>