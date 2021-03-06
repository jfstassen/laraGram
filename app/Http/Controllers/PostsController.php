<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class PostsController extends Controller
{
    public function __construct()
    {
        $this->middleware("auth");
    }

    public function index()
    {
        $users = auth()->user()->following()->pluck("profiles.user_id");
        // dd($users);
        // N+1 problem:
        // $posts = Post::whereIn("user_id", $users)->latest()->paginate(5);
        // N+1 fixed: (with user() from post model)
        $posts = Post::whereIn("user_id", $users)->with("user")->latest()->paginate(5);
        // dd($posts);
        return view("posts.index", compact("posts"));

    }

    public function create()
    {
        return view("posts.create");
    }
    public function store()
    {

        $data = request()->validate([
            "caption" => "required",
            "image" => "required|image"
        ]);
        //store image
        $imagePath = request("image")->store("uploads", "public");
        auth()->user()->posts()->create([
            "caption" => $data["caption"],
            "image" => $imagePath
        ]);

        // resize image
        $image = Image::make(public_path("storage/{$imagePath}"))->fit(1200,1200);
        $image->save();

        return redirect('/profile/' . auth()->user()->id);
    }

    public function show(\App\Post $post)
    {
        return view("posts.show", compact("post"));
    }
}
