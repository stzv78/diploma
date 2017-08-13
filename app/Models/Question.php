<?php

namespace  App\Models;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = ['description', 'status', 'user_id', 'category_id'];

    public function answer()
    {
        return $this->hasOne('App\Models\Answer');
    }
}
