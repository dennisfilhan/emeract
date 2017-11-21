<?php

namespace emeract;

use Illuminate\Database\Eloquent\Model;

class SocialProvider extends Model
{
    //
    protected  $fillable = ['provider_id','provider', 'nickname', 'avatar'];

    function user()
    {
    	return $this->belongsTo(User::class);

    }
}
