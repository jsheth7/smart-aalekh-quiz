<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Attempt
 * One attempt has many selections
 * An attempt belongs to a user.
 *
 * @package App
 */
class Attempt extends Model
{

    public function setUserAttribute(User $user){
        $this->attributes['user_id'] = $user->id;
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function selections(){
        return $this->hasMany(Selection::class);
    }

}
