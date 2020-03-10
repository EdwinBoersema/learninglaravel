<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class article extends Model
{
    protected $fillable = ['title', 'content'];

    public function path() {
        return route('articles.show', $this);
    }
}
