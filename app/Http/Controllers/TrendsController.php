<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;
use Illuminate\Support\Facades\DB;

class TrendsController extends Controller
{
    public function __construct()
    {
        // Make users login to use methods in this controller
        // $this->middleware('auth');
    }

    public function index(Request $request){
        $latestQ = Question::orderBy('created_at', 'desc')->first();

        return redirect('/trends/' . $latestQ->id);
    }

    /**
     * Calculate trend data for answers to a particular question
     * @param Question $question
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show(Question $question){

        $query = "SELECT  answers.title AS answer, count(answer_id) AS num
                    FROM selections
                    JOIN answers
                    ON selections.answer_id = answers.id
                    JOIN questions
                    ON selections.question_id = questions.id
                    
                    WHERE selections.question_id = ?
                    GROUP BY selections.question_id, answer_id
                    ORDER BY count(answer_id) ASC";

        $answers = DB::select($query, [$question->id]);

        $questions = Question::all();

        return view('trends/show', ['answers' => $answers, 'selectedq' => $question, 'questions' => $questions]);
    }

}
