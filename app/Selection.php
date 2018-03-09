<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/*
 * One selection has one question
 * One selection has one answer
 *
 * One selection belongs to an attempt
 */
class Selection extends Model
{

    public function setQuestionAttribute(Question $question){
        $this->attributes['question_id'] = $question->id;
    }

    public function setAnswerAttribute(Answer $answer){
        $this->attributes['answer_id'] = $answer->id;
    }

    public function setAttemptAttribute(Attempt $attempt){
        $this->attributes['attempt_id'] = $attempt->id;
    }

    public function answer(){
        return $this->belongsTo(Answer::class);
    }

    public function question(){
        return $this->belongsTo(Question::class);
    }

    public function attempt(){
        return $this->belongsTo(Attempt::class);
    }
}
