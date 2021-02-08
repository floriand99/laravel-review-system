<div class="text-gray-800">
    <div class="flex mb-5">
        <h1 class="text-xl font-bold mr-2">Categories</h1>
        <button class="bg-gray-500 text-sm px-3 py-1 text-white rounded shadow hover:bg-gray-700 transition" onClick="showModal()">Add category</button>
    </div>
        <x-modal>
            <div class="my-6">
                    <div class="pr-8">
                        Title
                    </div>
                    <x-text-input wire:model.lazy="name" rows="1"/>
            </div>
            <div class="md:flex my-6">
                <div class="">
                    <button wire:click="addCategory()" class="bg-green-500 px-4 py-2 text-white rounded shadow hover:bg-green-700 transition">Submit the data</button>
                </div> 
            </div>
        </x-modal>

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
                    @foreach($categories as $category)
                        <tr>
                            <td class="px-6 py-2 whitespace-no-wrap border-b border-gray-200">
                                <div class="flex items-center">
                                    <div>
                                        <div class="text-sm leading-5 text-gray-800">{{ $category->id }}</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-2 whitespace-no-wrap border-b border-gray-200">
                                <div class="text-sm leading-5">{{ $category->name }}</div>
                            </td>
                            <td class="px-6 py-2 whitespace-no-wrap border-b border-gray-200">
                                <div class="text-sm leading-5">{{ $category->created_at->diffForHumans() }}</div>
                            </td>
                            <td class="px-6 py-2 whitespace-no-wrap text-right border-b border-gray-200 text-sm leading-5">
                                <button class="px-3 py-1 border-blue-500 border text-blue-500 rounded transition duration-300 hover:bg-blue-700 hover:text-white focus:outline-none">Edit</button>
                                <button class="px-3 py-1 border-red-500 border text-red-500 rounded transition duration-300 hover:bg-red-700 hover:text-white focus:outline-none" wire:click="delete({{ $category->id }})">Delete</button>
                            </td>
                      </tr>
                    @endforeach
            </tbody>
        </table>
        <div class="mt-3"> 
        {{ $categories->links() }}
        </div>
    </div>
</div>


<script type="text/javascript">
    // document.getElementById('modal').classList.remove('hidden')
    function showModal(){
        document.getElementById('modal').classList.remove('hidden')
    }
    function hideModal(){
        document.getElementById('modal').classList.add('hidden')
    }
</script>