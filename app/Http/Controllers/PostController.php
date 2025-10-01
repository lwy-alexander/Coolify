<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function create()
    {
        $user = Auth::user();
        return view('posts.create', compact('user'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'dateIn' => 'required|date',
            'foodName' => 'required|string|max:255',
        ]);

        Post::create([
            'user_id' => Auth::id(),
            'dateIn' => $validatedData['dateIn'],
            'foodName' => $validatedData['foodName'],
        ]);

        return redirect()->route('home');
    }

    public function destroy(Post $post)
    {
        $post->delete();

        return redirect()->back();
    }
}
