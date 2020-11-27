<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PageText extends Model
{
    use HasFactory;

    /**
     * Get the post that owns the comment.
     */
    public function page()
    {
        return $this->belongsTo('App\Models\Page');
    }
}
