<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Livewire\WithPagination;

class Categories extends Component
{
    use WithPagination;
    
    public $name = '';
    public $showInput = true;
    protected $rules = [
        'name' => 'required|min:6',
    ];

    public function render()
    {
        return view('livewire.admin.categories', [
            'categories' => \App\Models\Category::orderBy('id', 'desc')->simplePaginate(10)
        ]);
    }

    public function delete($id){
        $category = \App\Models\Category::find($id);
        return $category->delete();
    }

    public function toggleInput(){
        $this->showInput = !$this->showInput;
    }

    public function addCategory(){
        $this->validate();
        $category = new \App\Models\Category;
        $category->name = $this->name;
        $category->save();
        $this->name = '';
        session()->flash('message', 'Category added successfully!');
    }
}

