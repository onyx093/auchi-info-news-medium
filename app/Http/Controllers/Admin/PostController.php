<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;

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
        $posts = Post::with('admin')->paginate(15);
        $my_posts = Post::myPosts(Auth::user()->id)->paginate(15);
        return view('admin.posts.index', compact('my_posts', 'posts'));
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
        //$this->authorize( 'create', Post::class );
        $this->validate($request, array(
            'post_title' => 'required|min:10|max:150',
            'category' => 'required',
            'post_body' => 'required',
            'image' => 'required|file|image|max:10000',
        ));

        $post = new Post;
        $post->title = $request->post_title;
        $post->category_id = $request->category;
        $post->content = $request->post_body;

        //dd($request->image);

        $uploadedImage = $request->image->store('uploads', 'public');
        $post->image = $uploadedImage;

        Image::make(public_path('storage/' . $post->image))->fit(620, 620)->save();

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
        //$this->authorize( 'update', $post );
        session()->flash( 'message', 'Error!' );
        $this->validate($request, array(
            'post_title' => 'required|min:10|max:150',
            'category' => 'required',
            'post_body' => 'required',
            'image' => 'sometimes|file|image|max:10000',
        ));

        $post = Post::find($post);
        $post->title = $request->input('post_title');
        $post->category_id = $request->input('category');
        $post->content = $request->input('post_body');

        if($request->hasFile('image'))
        {
            //$oldImage = $post->image;
            $oldImageFullPath = 'public/' . $post->image;
            $uploadedImage = $request->image->store('uploads', 'public');
            $post->image = $uploadedImage;

            Image::make(public_path('storage/' . $post->image))->fit(620, 620)->save();
            Storage::delete($oldImageFullPath);

        }

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
