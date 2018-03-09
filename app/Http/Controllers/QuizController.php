<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;
use App\Answer;
use App\Selection;
use App\Attempt;
use App\User;

class QuizController extends Controller
{
    public function __construct()
    {
        //Make users login to use methods in this controller
        $this->middleware('auth');
    }

    /**
     * Display a listing of all questions in the quiz.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $questions = Question::all();
        return view('quiz/index',['questions' => $questions]);
    }

    /**
     * Take the quiz
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function take(Request $request){
        $user = User::find(1);//TODO - pull logged-in user

        $attempt = new Attempt();
        $attempt->user = $user;
        $attempt->save();

        foreach($request->get('questions') as $questionId => $answerId){
            $selection = new Selection();
            $selection->question = Question::find($questionId);
            $selection->answer = Answer::find($answerId);
            $selection->attempt = $attempt;
            $selection->save();
        }

        return redirect('/quiz/results/' . $attempt->id);
    }

    /**
     * Show results from the quiz attempt that the user just took
     * @param Attempt $attempt
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function results(Attempt $attempt){
        // $attempts = Attempt::all();
        // return view('quiz/results', ['attempts' => $attempts]);

        return view('quiz/results', ['attempt' => $attempt]);
    }

}
