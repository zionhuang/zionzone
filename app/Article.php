<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $primaryKey = 'aid';

    protected $fillable = [
        'title', 'content', 'uid', 'imgURL',
    ];
}
