<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question as Question;

class QuestionsController extends Controller
{
    public function __construct()
    {
        //Make users login to use methods in this controller
        $this->middleware('auth');
    }

    /**
     * Display a listing of questions.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $questions = Question::all();

        return view('questions.index', compact('questions') );
    }

    /**
     * Show the form for creating a new question.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('questions/create');
    }

    /**
     * Store a newly created question in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd(request()->all());
        //Create new question using request data
        $question = new Question();

        //Save question to database
        $question->setTitle(request('title'));
        $question->save();

        //Redirect to create answers form
        return redirect('/answers/create/' . $question->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  Question  $question
     * @return \Illuminate\Http\Response
     */
    public function show(Question $question)
    {
        return view('questions/show', ['question' => $question] );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
