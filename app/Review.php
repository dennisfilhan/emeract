<?php

namespace emeract;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{

    protected $fillable = [
        'user_id', 'review_type', 'service_identifier', 'review_content', 'ratting', 'img_review'
    ];

    function user()
    {
      return $this->belongsTo(User::class);
    }

}
