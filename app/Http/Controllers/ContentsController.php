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
        $choice = Post::orderBy('updated_at', 'desc')->inRandomOrder()->take(3)->get();
        $mostViewed = Post::orderBy('updated_at', 'desc')->inRandomOrder()->take(3)->get();
        return view('business', compact('choice', 'mostViewed'));
    }

    public function politics()
    {
        $choice = Post::orderBy('updated_at', 'desc')->inRandomOrder()->take(3)->get();
        $mostViewed = Post::orderBy('updated_at', 'desc')->inRandomOrder()->take(3)->get();
        return view('politics', compact('choice', 'mostViewed'));
    }

    public function health()
    {
        $choice = Post::orderBy('updated_at', 'desc')->inRandomOrder()->take(3)->get();
        $mostViewed = Post::orderBy('updated_at', 'desc')->inRandomOrder()->take(3)->get();
        return view('health', compact('choice', 'mostViewed'));
    }

    public function arts()
    {
        $choice = Post::orderBy('updated_at', 'desc')->inRandomOrder()->take(3)->get();
        $mostViewed = Post::orderBy('updated_at', 'desc')->inRandomOrder()->take(3)->get();
        return view('arts', compact('choice', 'mostViewed'));
    }

    public function religion()
    {
        $choice = Post::orderBy('updated_at', 'desc')->inRandomOrder()->take(3)->get();
        $mostViewed = Post::orderBy('updated_at', 'desc')->inRandomOrder()->take(3)->get();
        return view('religion', compact('choice', 'mostViewed'));
    }

    public function editorial()
    {
        $choice = Post::orderBy('updated_at', 'desc')->inRandomOrder()->take(3)->get();
        $mostViewed = Post::orderBy('updated_at', 'desc')->inRandomOrder()->take(3)->get();
        return view('editorial', compact('choice', 'mostViewed'));
    }

    public function opinions()
    {
        $choice = Post::orderBy('updated_at', 'desc')->inRandomOrder()->take(3)->get();
        $mostViewed = Post::orderBy('updated_at', 'desc')->inRandomOrder()->take(3)->get();
        return view('opinions', compact('choice', 'mostViewed'));
    }

    public function environment()
    {
        $choice = Post::orderBy('updated_at', 'desc')->inRandomOrder()->take(3)->get();
        $mostViewed = Post::orderBy('updated_at', 'desc')->inRandomOrder()->take(3)->get();
        return view('environment', compact('choice', 'mostViewed'));
    }

    public function sports()
    {
        $choice = Post::orderBy('updated_at', 'desc')->inRandomOrder()->take(3)->get();
        $mostViewed = Post::orderBy('updated_at', 'desc')->inRandomOrder()->take(3)->get();
        return view('sports', compact('choice', 'mostViewed'));
    }

    public function about()
    {
        $choice = Post::orderBy('updated_at', 'desc')->inRandomOrder()->take(3)->get();
        $mostViewed = Post::orderBy('updated_at', 'desc')->inRandomOrder()->take(3)->get();
        return view('about', compact('choice', 'mostViewed'));
    }

    public function terms()
    {
        $choice = Post::orderBy('updated_at', 'desc')->inRandomOrder()->take(3)->get();
        $mostViewed = Post::orderBy('updated_at', 'desc')->inRandomOrder()->take(3)->get();
        return view('terms', compact('choice', 'mostViewed'));
    }

    public function policy()
    {
        $choice = Post::orderBy('updated_at', 'desc')->inRandomOrder()->take(3)->get();
        $mostViewed = Post::orderBy('updated_at', 'desc')->inRandomOrder()->take(3)->get();
        return view('policy', compact('choice', 'mostViewed'));
    }

    public function advert()
    {
        $choice = Post::orderBy('updated_at', 'desc')->inRandomOrder()->take(3)->get();
        $mostViewed = Post::orderBy('updated_at', 'desc')->inRandomOrder()->take(3)->get();
        return view('advert', compact('choice', 'mostViewed'));
    }

    public function directory()
    {
        $choice = Post::orderBy('updated_at', 'desc')->inRandomOrder()->take(3)->get();
        $mostViewed = Post::orderBy('updated_at', 'desc')->inRandomOrder()->take(3)->get();
        return view('directory', compact('choice', 'mostViewed'));
    }

    public function ireport()
    {
        $choice = Post::orderBy('updated_at', 'desc')->inRandomOrder()->take(3)->get();
        $mostViewed = Post::orderBy('updated_at', 'desc')->inRandomOrder()->take(3)->get();
        return view('ireport', compact('choice', 'mostViewed'));
    }

    public function writeforus()
    {
        $choice = Post::orderBy('updated_at', 'desc')->inRandomOrder()->take(3)->get();
        $mostViewed = Post::orderBy('updated_at', 'desc')->inRandomOrder()->take(3)->get();
        return view('writeforus', compact('choice', 'mostViewed'));
    }
    public function marketplace()
    {
        $choice = Post::orderBy('updated_at', 'desc')->inRandomOrder()->take(3)->get();
        $mostViewed = Post::orderBy('updated_at', 'desc')->inRandomOrder()->take(3)->get();
        return view('marketplace', compact('choice', 'mostViewed'));
    }
}
