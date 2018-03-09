<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Question
 * One questions has many answers.
 *
 * @package App
 */
class Question extends Model
{
    protected $casts = ['title' => 'string'];

    public function setTitle($value){
        $this->attributes['title'] = $value;
    }

    /**
     * Return answers for this questions
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function answers(){
        return $this->hasMany(Answer::class);
    }

    public function selections(){
        return $this->hasMany(Selection::class);
    }
}
