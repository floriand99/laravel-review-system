<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Business;

class Businesses extends Component
{
    use WithFileUploads;

    public $name = '';
    public $description = '';
    public $image;
    public $updateMode = false;
    public $category = 1;

    public function render()
    {
        return view('livewire.admin.businesses', [
            'businesses' => Business::all(),
            'categories' => \App\Models\Category::all()
        ]);
    }

    public function saveImage(){
        $this->validate([
            'image' => 'image|max:1024'
        ]);
        return $this->image->store('images', 'public');
    }

    public function storeBusiness(){
        $this->validate([
            'name' => 'required|min:10|max:200',
            'description' => 'required|min:10|max:400',
        ]);
        $business = new Business;
        $business->name = $this->name;
        $business->description = $this->description;
        $business->image = $this->saveImage();
        $business->category_id = $this->category;
        $business->save();
        $this->toggleUpdateMode();
    }

    public function toggleUpdateMode(){
        $this->updateMode = !$this->updateMode;
    }
}
