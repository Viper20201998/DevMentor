<?php

namespace App\Http\Controllers;

use App\Models\Favorities_posts;
use App\Models\Posts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
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
    public function getStore()
    {
        $posts = Posts::query()->join('users', 'posts.id_user', '=', 'users.id')->select('posts.*', 'users.name')->get();
        return response()->json($posts);
    }
    public function getupdate($id)
    {
        $post = Posts::all()->find($id);
        return response()->json($post);
        // return view("pages.update_posts", array("posts" => $post));
    }
    public function update(Request $request, $id)
    {
        //return response($id);
        try {
            if ($request->hasFile('img2')) {
                $image = $request->file('img2');
                $name_image = Str::slug($request->input('title2')) . "." . $image->guessExtension();
                $route = public_path("img/");
                copy($image->getRealPath(), $route . $name_image);
            } else {
                $name_image = $request->input('img_prev');
            }
            $posts = Posts::all()->find($id);
            $posts->title = $request->input('title2');
            $posts->img = $name_image;
            return response()->json($posts);
            $posts->content = $request->input('content2');
            $posts->update();
            $json = array(
                "data" => "enviado correctamente"
            );
            //  return response()->json($json);
        } catch (\Exception $e) {
            Log::error($e);

            // Puedes personalizar un mensaje de error
            $errorMessage = "Ocurrió un error inesperado.";

            // Devuelve una respuesta de error con un mensaje descriptivo
            return response()->json(["error" => $errorMessage], 500);
        }
    }
}
