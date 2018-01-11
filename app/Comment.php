<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //
    protected $fillable =[
        'body',
        'url',
        'commentable_id',
        'commentable_type',
        'user_id',
    ];
    public function commentable()
    {
        return $this->morphTo();
    }
    public function user(){
        return $this->hasone('\app\User','id','user_id');
    }
}
