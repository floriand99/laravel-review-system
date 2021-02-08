<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;
use Illuminate\Support\Facades\Gate;
class ReviewController extends Controller
{
	public function store(Request $request){
        $request->validate(['title' => 'required|min:6']);
        $review = new Review;
        $review->title = $request->title;
        $review->content = $request->content;
        $review->rating = $request->rating;
        $review->user_id = auth()->user()->id;
        return $review->save();
    }

    public function destroy(Review $review){
        Gate::authorize('is-author', $review);
        return $review->delete(); 
    }
}
