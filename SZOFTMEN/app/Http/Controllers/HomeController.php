<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Share;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Exception;
use Illuminate\Database\QueryException;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index() {
        $posts = Post::all()
                    ->sortByDesc('id');      

        return view('home', compact('posts'));
    }

    public function create() {
        return view('newPost');
    }

    public function store(Request $request) {
        $newPost = new Post($request->all());

        $validatedData = $request->validate([
            'title' => 'required',
            'text' => 'required',
            'category' => 'required'
        ]);

        //shitt
        try {
            $newPost->save();

        } catch(Exception $e) {
            return redirect('home')->with('error', 'Something went wrong!');
        }

        return redirect('home')->with('status', 'Post published!');
    }

    public function show($id) {
        $post = Post::where('id', $id)->first();

    }

    public function showProfile() {
        
    }
}
