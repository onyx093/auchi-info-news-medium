<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    protected $guarded = [];

    public function admin()
    {
        return $this->belongsTo(Admin::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function scopeMyPosts($query, $user_id)
    {
        return $query->where('admin_id', $user_id);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);

    }

}
