<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Review;

class AddReview extends Component
{
    public $rating;
    public $business;
    public $reviewContent = '';

    public function mount($businessId){
        $this->business = \App\Models\Business::find($businessId);
    }

    public function render()
    {
        return view('livewire.add-review', [
            'business' => $this->business
        ])
            ->extends('layouts.app');
    }

    public function storeReview(){
        $this->validate([
            'reviewContent' => 'required|min:10',
            'rating' => 'required'
        ]);
        $review = new Review;
        $review->content = $this->reviewContent;
        $review->rating = $this->rating;
        $review->user_id = auth()->user()->id;
        $review->business_id = $this->business->id;
        $review->save();
        session()->flash('success', 'Your review was published!');
    }

    public function rate($stars){
        $this->rating = $stars; 
    }

}
