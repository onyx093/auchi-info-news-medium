<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

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

    public function scopeEachCategory($query, $category_id)
    {
        return $query->where('category_id', $category_id);
    }

    public function scopeMyPosts($query, $user_id)
    {
        return $query->where('admin_id', $user_id);
    }

    public function slugifiedURL()
    {
        return url("/posts/{$this->id}-" . Str::slug($this->title));
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);

    }

}
