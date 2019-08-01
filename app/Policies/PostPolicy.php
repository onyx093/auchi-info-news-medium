<?php

namespace App\Policies;

use App\Admin;
use App\Post;
use Illuminate\Auth\Access\HandlesAuthorization;

class PostPolicy
{
    use HandlesAuthorization;
    
    /**
     * Determine whether the admin can view any posts.
     *
     * @param  \App\Admin  $admin
     * @return mixed
     */
    public function viewAny(Admin $admin)
    {
        //
        $emails = DB::table('admins')->pluck('email');
        return in_array($admin->email, $emails->toArray());
    }

    /**
     * Determine whether the admin can view the post.
     *
     * @param  \App\Admin  $admin
     * @param  \App\Post  $post
     * @return mixed
     */
    public function view(Admin $admin, Post $post)
    {
        //
        $emails = DB::table('admins')->pluck('email');
        return in_array($admin->email, $emails->toArray());
    }

    /**
     * Determine whether the admin can create posts.
     *
     * @param  \App\Admin  $admin
     * @return mixed
     */
    public function create(Admin $admin)
    {
        //
        $emails = DB::table('admins')->pluck('email');
        return in_array($admin->email, $emails->toArray());
    }

    /**
     * Determine whether the admin can update the post.
     *
     * @param  \App\Admin  $admin
     * @param  \App\Post  $post
     * @return mixed
     */
    public function update(Admin $admin, Post $post)
    {
        //
        return $admin->id === $post->admin_id;
    }

    /**
     * Determine whether the admin can delete the post.
     *
     * @param  \App\Admin  $admin
     * @param  \App\Post  $post
     * @return mixed
     */
    public function delete(Admin $admin, Post $post)
    {
        //
        return $admin->email === $post->admin->email;
    }

    /**
     * Determine whether the admin can restore the post.
     *
     * @param  \App\Admin  $admin
     * @param  \App\Post  $post
     * @return mixed
     */
    public function restore(Admin $admin, Post $post)
    {
        //
        return $admin->email === $post->admin->email;
    }

    /**
     * Determine whether the admin can permanently delete the post.
     *
     * @param  \App\Admin  $admin
     * @param  \App\Post  $post
     * @return mixed
     */
    public function forceDelete(Admin $admin, Post $post)
    {
        //
        return $admin->email === $post->admin->email;
    }
}
