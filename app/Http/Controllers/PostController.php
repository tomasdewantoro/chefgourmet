<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Jenssegers\Agent\Agent;
use App\Post, App\User;

class PostController extends Controller
{
    public function index() {
        $countpost = Post::count();
        $skip = 3;
        $limit = $countpost - $skip;
        $posts = Post::orderBy('created_at', 'desc')->skip($skip)->take($limit)->paginate(5);
        $slider = Post::orderBy('created_at', 'desc')->take($skip)->get();
        $featured = Post::where('featured', 1)->orderBy('created_at', 'desc')->get()->take(5);
        $users = User::all();

        $agent = new Agent();

        if($agent->isMobile()) {
            return view('public.blog.indexmobile', compact('posts', 'featured', 'users', 'slider'));
        }
        else {
            return view('public.blog.index', compact('posts', 'featured', 'users', 'slider'));
        }
    }

    public function singlepost($post_slug){
        $post = Post::where('slug', $post_slug)->first();
        $latest = Post::all()->take(5);
        return view('public.blog.single', compact('post', 'latest'));
    }
}
