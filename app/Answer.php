<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Answer
 * One answer belongs to a questions
 *
 * @package App
 */
class Answer extends Model
{
    protected $casts = ['title' => 'string'];

    public function setTitle($value){
        $this->attributes['title'] = $value;
    }

    public function question(){
        return $this->belongsTo(Question::class);
    }

    public function selections(){
        return $this->hasMany(Selection::class);
    }
}
