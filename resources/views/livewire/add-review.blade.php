<div class="px-16 mt-5 text-gray-800">
    <div class="flex">
        <div class="w-2/3 px-3">
            <div class="border p-6 rounded">
                <div class="border-b pb-4 flex items-center">
                    <div class="w-20 mr-2">
                        <img class="object-cover w-full h-16 rounded" src="{{ '/storage/' . $business->image }}" />
                    </div>
                    <div>
                        <h4>You're reviewing:</h4>
                        <h1 class="text-xl text-blue-600 font-bold">
                            {{ $business->name }}
                        </h1>
                    </div>
                </div>
                <div class="flex my-3">
                    <div class="w-1/4">
                        <div class="">
                            Rating
                        </div>
                    </div>
                    <div class="w-3/4">
                        <div class="flex">
                            <button wire:click="rate(1)" class="focus:outline-none">
                                <img src="{{ $rating < 1 ? asset('assets/empty_star.png') : asset('assets/star.png')}}" class="w-8 mr-1 rounded" />
                            </button>
                            <button wire:click="rate(2)" class="focus:outline-none">
                                <img src="{{ $rating < 2 ? asset('assets/empty_star.png') : asset('assets/star.png')}}" class="w-8 mr-1 rounded" />
                            </button>
                            <button wire:click="rate(3)" class="focus:outline-none">
                                <img src="{{ $rating < 3 ? asset('assets/empty_star.png') : asset('assets/star.png')}}" class="w-8 mr-1 rounded" />
                            </button>
                            <button wire:click="rate(4)" class="focus:outline-none">
                                <img src="{{ $rating < 4 ? asset('assets/empty_star.png') : asset('assets/star.png')}}" class="w-8 mr-1 rounded" />
                            </button>
                            <button wire:click="rate(5)" class="focus:outline-none">
                                <img src="{{ $rating < 5 ? asset('assets/empty_star.png') : asset('assets/star.png')}}" class="w-8 mr-1 rounded" />
                            </button>
                        </div>
                        @error('rating')
                            <small class="text-red-500">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <div class="flex my-3">
                    <div class="w-1/4">
                        <div class="">
                            Review
                        </div>
                    </div>
                    <div class="w-3/4">
                        <x-text-input rows="4" wire:model.lazy="reviewContent" />
                        @error('reviewContent')
                            <small class="text-red-500">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <div class="flex my-3">
                    <div class="w-1/4">
                    </div>
                    <div class="w-3/4">
                        <button wire:click="toggleUpdateMode()" class="px-4 py-2 rounded transition hover:text-gray-900">Cancel</button>
                        <button wire:click="storeReview()" class="bg-green-500 px-4 py-2 text-white rounded shadow hover:bg-green-700 transition">Submit</button>
                    </div>
                </div>
                @if(session()->has('success'))
                    <div class="w-full p-3 bg-green-200 text-green-800">
                        {{ session('success') }}
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>