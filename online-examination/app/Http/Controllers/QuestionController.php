<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function show(Question $question)
    {
        return view('question', ['question' => $question]);
    }

    public function nextQuestion(Question $question) {
        $nextQuestion = Question::where('id', '>', $question->id)->first();

        if($nextQuestion){
            return redirect()->route('showQuestion', ['id'=>$nextQuestion->id]);
        }else {
            return redirect()->route('examFinished');
        }
    }
}
