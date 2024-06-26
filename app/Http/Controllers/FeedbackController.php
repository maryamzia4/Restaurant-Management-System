<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function index()
    {
        $feedbacks = Feedback::all();
        return view('feedback.index', compact('feedbacks'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'suggestion_feedback' => 'required|string',
            'rating' => 'required|in:1,2,3,4,5',
        ]);

        $feedback = Feedback::create($request->all());
        return redirect()->back();
    }

    public function show($id)
    {
        $feedback = Feedback::findOrFail($id);
        return view('feedback.show', compact('feedback'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'sometimes|required|string|max:255',
            'email' => 'sometimes|required|string|email|max:255',
            'suggestion_feedback' => 'sometimes|required|string',
            'rating' => 'sometimes|required|in:1,2,3,4,5',
        ]);

        $feedback = Feedback::findOrFail($id);
        $feedback->update($request->all());
        return redirect()->back();
    }

    public function destroy($id)
    {
        Feedback::destroy($id);
        return redirect()->back();
    }
}
