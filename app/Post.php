<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';

    public function author()
    {
        return $this->hasOne('App\UserManajemen', 'id', 'author_id');
    }
}
