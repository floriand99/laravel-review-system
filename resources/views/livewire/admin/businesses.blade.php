<div class="text-gray-800">
    <div class="flex mb-5">
        <h1 class="text-xl font-bold mr-2">Businesses</h1>
        <button class="bg-gray-500 text-sm px-3 py-1 text-white rounded shadow hover:bg-gray-700 transition" wire:click="toggleUpdateMode()">Add business</button>
    </div>
        @if($updateMode)
        <x-modal>
            <h1 class="font-bold text-gray-800 text-lg mb-2">Add business</h1>
            @error('description')
                {{ $message }}
            @enderror
            <div class="">
                    <span class="">
                        Name
                    </span>
                    <x-text-input wire:model.lazy="name" rows="1"/>
            </div>
            <div class="">
                    <span class="">
                        Description
                    </span>
                    <x-text-input wire:model.lazy="description" rows="2"/>
            </div>
            <span>Select category</span>
            <select wire:model="category" class="my-2 px-3 py-2 w-full">
                <option value="" disabled selected>Select category</option>
                @foreach($categories as $category)
                    <option value={{ $category->id }}>{{ $category->name }}</option>
                @endforeach
            </select>
            <span>Add image</span><br />
            <input type="file" wire:model="image" class="my-2" />
            @if($image)
            <img src="{{ $image->temporaryUrl() }}" class="w-48 h-48 object-cover rounded shadow" />
            @endif
            <div class="md:flex mt-6">
                <div class="">
                    <button wire:click="storeBusiness()" class="bg-green-500 px-4 py-2 text-white rounded shadow hover:bg-green-700 transition">Submit</button>
                    <button wire:click="toggleUpdateMode()" class="px-4 py-2 rounded transition hover:text-gray-900">Cancel</button>
                </div> 
            </div>
        </x-modal>
        @endif

    <div class="inline-block min-w-full overflow-hidden bg-white rounded-bl-lg rounded-br-lg">
        <table class="min-w-full text-gray-800">
            <thead>
                <tr>
                    <th class="px-6 py-3 border-b-2 border-gray-300 text-left leading-4 text-blue-500 tracking-wider">ID</th>
                    <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-blue-500 tracking-wider">Category</th>
                    <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-blue-500 tracking-wider">Created</th>
                    <th class="px-6 py-3 border-b-2 border-gray-300"></th>
                </tr>
            </thead>
            <tbody class="bg-white">
                    @foreach($businesses as $bussiness)
                        <tr>
                            <td class="px-6 py-2 whitespace-no-wrap border-b border-gray-200">
                                <div class="flex items-center">
                                    <div>
                                        <div class="text-sm leading-5 text-gray-800">{{ $bussiness->id }}</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-2 whitespace-no-wrap border-b border-gray-200">
                                <div class="text-sm leading-5">{{ $bussiness->name }}</div>
                            </td>
                            <td class="px-6 py-2 whitespace-no-wrap border-b border-gray-200">
                                <div class="text-sm leading-5">{{ $bussiness->created_at->diffForHumans() }}</div>
                            </td>
                            <td class="px-6 py-2 whitespace-no-wrap text-right border-b border-gray-200 text-sm leading-5">
                                <!-- <button class="px-3 py-1 border-blue-500 border text-blue-500 rounded transition duration-300 hover:bg-blue-700 hover:text-white focus:outline-none">Edit</button> -->
                                <!-- <button class="px-3 py-1 border-red-500 border text-red-500 rounded transition duration-300 hover:bg-red-700 hover:text-white focus:outline-none">Delete</button> -->
                            </td>
                      </tr>
                    @endforeach
            </tbody>
        </table>
        @if(count($businesses) == 0)
            <h1>no results</h1>
        @endif
    </div>
</div>