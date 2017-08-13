<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name'];

    public function question()
    {
        return $this->hasMany('App\Models\Question');
    }
    //public function getCategoriesQuestions()
    //{
    //    return $this->all()->question();
    //}

}
