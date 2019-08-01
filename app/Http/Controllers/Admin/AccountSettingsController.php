<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;

use App\Admin;
use App\State;
use App\LocalGovernmentArea;

class AccountSettingsController extends Controller
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
        $admin = Admin::where('id', Auth::user()->id)->firstOrFail();
        return view('admin.settings.index', compact('admin'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $admin = Admin::where('id', $id)->firstOrFail();
        $states = State::all();
        return view('admin.settings.edit', compact('admin', 'states'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        session()->flash('message', 'Error!');
        $this->validate($request, array(
            'name' => 'required|max:255',
            'image' => 'sometimes|file|image|max:10000',
            'website' => 'nullable|url|max:255',
            'phone' => 'nullable|digits:11',
            'facebook' => 'nullable|url|max:255',
            'instagram' => 'nullable|url|max:255',
            'twitter' => 'nullable|url|max:255',
            'youtube' => 'nullable|url|max:255',
            'state' => 'nullable|integer',
            'lga' => 'nullable|integer',
            'description' => 'nullable|string',
        ));

        $admin = Admin::find($id);
        $admin->name = $request->input('name');

        if($request->hasFile('image'))
        {
            //$oldImage = $post->image;
            $oldImageFullPath = 'public/' . $admin->image;
            $uploadedImage = $request->image->store('uploads/admin_profiles', 'public');
            $admin->image = $uploadedImage;

            Image::make(public_path('storage/' . $admin->image))->fit(320, 320)->save();
            Storage::delete($oldImageFullPath);

        }
        $admin->web_link = $request->input('website');
        $admin->phone = $request->input('phone');
        $admin->facebook_link = $request->input('facebook');
        $admin->twitter_link = $request->input('twitter');
        $admin->instagram_link = $request->input('instagram');
        $admin->youtube_link = $request->input('youtube');
        $admin->state_id = $request->input('state');
        $admin->lga_id = $request->input('lga');
        $admin->description = $request->input('description');
        $admin->save();

        session()->flash('message', 'Your account profile was successfully updated!');
        return redirect()->route('settings.index');
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

    public function loadLGA($id)
    {
        $lgas = LocalGovernmentArea::where('state_id', $id)->get();
        dd($lga->name);
    }
}
