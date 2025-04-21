<?php

namespace Modules\Demo\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    /**
     * Display the admin dashboard.
     */
    public function index()
    {
        return view('demo::admin.dashboard');
    }

    public function review_index()
    {
        $reviews = Review::with('user')->orderBy('created_at', 'desc')->paginate(10);
        return view('demo::admin.review', compact('reviews'));
    }

    public function review_update(Request $request, Review $review)
    {
        $review->update([
            'is_approved' => $request->is_approved
        ]);

        return redirect()->back()->with('success', 'Review status updated successfully');
    }

    public function review_destroy(Review $review)
    {
        $review->delete();
        return redirect()->back()->with('success', 'Review deleted successfully');
    }
}