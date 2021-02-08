<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Business;

class SearchBar extends Component
{
    public $query = '';
    public $searchResults = [];

    public function render()
    {
        $searchTerm = '%' . $this->query . '%';
        $this->searchResults = strlen($this->query) > 2 ? Business::where('name', 'LIKE', $searchTerm)->limit(5)->get() : [];
        return view('livewire.search-bar');
    }
}
