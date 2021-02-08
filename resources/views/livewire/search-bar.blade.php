<div>
    <input type="text" wire:model.debounce.300ms="query" class="w-72 bg-gray-50 transition focus:ring-2 focus:ring-purple-500 px-4 py-2 rounded" placeholder="Search anything" />
    @if($searchResults)
    <div class="absolute bg-gray-50 rounded shadow mt-4 w-72 px-4">
        @foreach($searchResults as $item)
        <div class="border-b py-2 text-sm">
            {{ $item->name }}
        </div>
        @endforeach
    </div>
    @else
        @if(strlen($query) > 1)
        <div class="absolute bg-gray-50 rounded shadow mt-4 w-72 px-4">
            <div class="border-b py-2 text-sm">
                sadasds
            </div>
        </div>
        @endif
    @endif
</div>