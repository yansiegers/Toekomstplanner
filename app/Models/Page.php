<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasFactory;

    /**
     * Get the comments for the blog post.
     */
    public function texts()
    {
        return $this->hasMany('App\Models\PageText');
    }
}
