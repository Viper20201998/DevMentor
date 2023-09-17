<?php

namespace App\Http\Controllers;

use App\Models\Favorities_posts;
use App\Models\Posts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class PostsController extends Controller
{
    public function index()
    {

        $posts = Posts::query()->join('users', 'posts.id_user', '=', 'users.id')->select('posts.*', 'users.name')->get();
        return view('pages.posts', array("posts" => $posts));
    }

    public function getForm()
    {
        return view('pages.register_posts');
    }

    public function store(Request $request)
    {
        if ($request->hasFile('img')) {
            $image = $request->file('img');
            $name_image = Str::slug($request->input('title')) . "." . $image->guessExtension();
            $route = public_path("img/");
            copy($image->getRealPath(), $route . $name_image);
        } else {
            $name_image = null;
        }
        $data = array(
            "title" => $request->input('title'),
            "img" => $name_image,
            "content" => $request->input('content')
        );
        if (!empty($data)) {
            $posts = new Posts();
            $posts->title = $data['title'];
            $posts->img = $data['img'];
            $posts->content = $data['content'];
            $posts->id_user = Auth::user()->id;
            $posts->save();

            $json = array(
                "title" => $data['title'],
                "img" => $data['img'],
                "content" => $data['content'],
            );
            return response()->json($json);
        } else {
            $json = array(
                "data" => "error",
            );
            return response()->json($json);
        }
    }
}
