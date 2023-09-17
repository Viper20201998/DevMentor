<?php

namespace App\Http\Controllers;

use App\Models\Favorities_posts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FavoritieController extends Controller
{
    public function index()
    {
        $favorite = Favorities_posts::query()->join('users', 'favorities_posts.id_user', '=', 'users.id')->join('posts', 'favorities_posts.id_post', '=', 'posts.id')->select('posts.*', 'favorities_posts.id')->where('favorities_posts.id_user', '=', Auth::user()->id)->get();
        return response()->json($favorite);
    }
    public function favorite(Request $request)
    {
        if (auth()->check()) {
            $favori = Favorities_posts::query()->where('id_user', '=', Auth::user()->id)->where('id_post', '=', $request->input('id_post'))->exists();
            if (!$favori) {
                $favorities = new Favorities_posts();
                $favorities->id_user = Auth::user()->id;
                $favorities->id_post = $request->input('id_post');
                $favorities->save();
                $json = array(
                    "stat" => 200,
                    "detail" => "Added to favorites successfully"
                );
                return response()->json($json);
            } else {
                $json = array(
                    "stat" => 400,
                    "detail" => "It's already added to favorites"
                );
                return response()->json($json);
            }
        } else {
            return redirect()->route('login');
        }
    }
    public function destroy($id)
    {
        $favorities = Favorities_posts::all()->find($id)->delete();
    }
}
