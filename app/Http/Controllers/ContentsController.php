<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Post;
use App\Category;

class ContentsController extends Controller
{
    //
    public function index()
    {

        $post = [];
        $categories = Category::all();
        // $postInstance = new Post;
        // foreach ($categories as $category) {
        //     $post[$category->name] = Post::eachCategory($category->id)->orderBy('updated_at', 'desc')->take(10)->get();
        // }
        // $generalPosts = Post::category()->get();
        // dd($post);
        $justThree = Post::orderBy('updated_at', 'desc')->inRandomOrder()->take(3)->get();
        $general = Post::orderBy('updated_at', 'desc')->inRandomOrder()->take(5)->get();
        $business = Post::eachCategory(2)->orderBy('updated_at', 'desc')->inRandomOrder()->take(5)->get();
        $politics = Post::eachCategory(3)->orderBy('updated_at', 'desc')->inRandomOrder()->take(5)->get();
        $health = Post::eachCategory(4)->orderBy('updated_at', 'desc')->inRandomOrder()->take(5)->get();
        $sports = Post::eachCategory(10)->orderBy('updated_at', 'desc')->inRandomOrder()->take(5)->get();
        
        $opinion = Post::eachCategory(8)->orderBy('updated_at', 'desc')->inRandomOrder()->take(7)->get();
        $environment = Post::eachCategory(9)->orderBy('updated_at', 'desc')->inRandomOrder()->take(7)->get();
        $arts = Post::eachCategory(5)->orderBy('updated_at', 'desc')->inRandomOrder()->take(7)->get();
        $religion = Post::eachCategory(6)->orderBy('updated_at', 'desc')->inRandomOrder()->take(7)->get();
        $editorial = Post::eachCategory(7)->orderBy('updated_at', 'desc')->inRandomOrder()->take(7)->get();

        $choice = Post::orderBy('updated_at', 'desc')->inRandomOrder()->take(3)->get();
        $mostViewed = Post::orderBy('updated_at', 'desc')->inRandomOrder()->take(3)->get();
        return view('home', compact('justThree', 'general', 'business', 'politics', 'health', 'sports', 'opinion', 'environment', 'arts', 'religion', 'editorial', 'choice', 'mostViewed'));
    }

    public function showPost($id)
    {

        $post = Post::find($id);
        $choice = Post::orderBy('updated_at', 'desc')->inRandomOrder()->take(3)->get();
        $mostViewed = Post::orderBy('updated_at', 'desc')->inRandomOrder()->take(3)->get();
        return view('post', compact('post', 'choice', 'mostViewed'));

    }

    public function business()
    {
        return view('business');
    }

    public function politics()
    {
        return view('politics');
    }

    public function health()
    {
        return view('health');
    }

    public function arts()
    {
        return view('arts');
    }

    public function religion()
    {
        return view('religion');
    }

    public function editorial()
    {
        return view('editorial');
    }

    public function opinions()
    {
        return view('opinions');
    }

    public function environment()
    {
        return view('environment');
    }

    public function sports()
    {
        return view('sports');
    }

    public function about()
    {
        return view('about');
    }

    public function terms()
    {
        return view('terms');
    }

    public function policy()
    {
        return view('policy');
    }

    public function advert()
    {
        return view('advert');
    }

    public function directory()
    {
        return view('directory');
    }

    public function ireport()
    {
        return view('ireport');
    }

    public function writeforus()
    {
        return view('writeforus');
    }
    public function marketplace()
    {
        return view('marketplace');
    }
}
