<div class="bg-white h-20 fixed w-full shadow-sm flex items-center">
    <div class="container px-16 mx-auto">
        <div class="items-center hidden lg:flex">
            <div class="flex items-center w-2/3">
                <a href="/">
                <img src="https://graphicdesignbylisa.com/wp-content/uploads/generic-logo.jpg" class="h-14 mr-3">
                </a>
                <div class="flex items-center">
                    <a href="/" class="{{ request()->is('/') ? 'bg-purple-100 text-purple-600' : 'text-gray-600'}} mr-1 hover:text-purple-600 px-3 py-2 rounded">Home</a>
                    <a href="" class="{{ request()->is('/sdssa') ? 'bg-purple-100 text-purple-600' : 'text-gray-600'}} mr-1 hover:text-purple-600 px-3 py-2 rounded">Explore</a>
                    @auth
                    <a href="/my-reviews" class="{{ request()->is('/my-reviews') ? 'bg-purple-100 text-purple-600' : 'text-gray-600'}} mr-1 hover:text-purple-600 px-3 py-2 rounded">My reviews</a>
                    <a class="text-gray-400 mr-1 hover:text-purple-600 px-3 py-2 rounded" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                    @endauth
                    @guest
                    <a href="/login" class="{{ request()->is('/login') ? 'bg-purple-100 text-purple-600' : 'text-gray-600'}} mr-1 hover:text-purple-600 px-3 py-2 rounded">Login</a>
                     <!-- <a href="#" class="text-gray-600 transition duration-200 mr-1 hover:text-purple-600 px-3 py-2 rounded hover:bg-purple-100">Dashboard</a> -->
                    @endguest
                </div>
            </div>
            <div class="w-1/3 flex justify-end">
                <livewire:search-bar />
            </div>
        </div>
    </div>
</div>