<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

use App\Post;
use App\Category;

class PostController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $my_posts = Post::myPosts(Auth::user()->id)->get();
        return view('admin.posts.index', compact('my_posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categories = Category::all();
        return view('admin.posts.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request, array(
            'post_title' => 'required|min:10|max:150',
            'category' => 'required',
            'post_body' => 'required',
        ));

        $post = new Post;
        $post->title = $request->post_title;
        $post->category_id = $request->category;
        $post->content = $request->post_body;
        $post->admin_id = Auth::user()->id;
        $post->save();
        session()->flash('message', 'A new post has been created successfully');
        return redirect()->route('posts.show', ['post_id' => $post->id ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
        return view('admin.posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
        $categories = Category::all();
        return view('admin.posts.edit', compact('post', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $post)
    {
        //
        session()->flash('message', 'Error!');
        $this->validate($request, array(
            'post_title' => 'required|min:10|max:150',
            'category' => 'required',
            'post_body' => 'required',
        ));

        $post = Post::find($post);
        $post->title = $request->input('post_title');
        $post->category_id = $request->input('category');
        $post->content = $request->input('post_body');
        $post->admin_id = Auth::user()->id;
        $post->save();

        session()->flash('message', 'The post was successfully updated!');
        return redirect()->route('posts.show', ['post_id' => $post->id ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
