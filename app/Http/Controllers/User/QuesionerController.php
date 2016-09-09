<?php

namespace App\Http\Controllers\User;

use InfyOm\Generator\Controller\AppBaseController;
use App\Models\Questions;
use App\Models\Categories;
use App\Http\Requests\UserSendAnswers;

class QuesionerController extends AppBaseController {
    
    public function index() {
        return view("home");
    }

    public function getQuestions() {


        $questions = Questions::all();
        $totalQuestion = $questions->count();
        $perPage = 6;
        $totalPage = round($totalQuestion / $perPage);
        $categories = Categories::all();

//        $questions->setPath('question');
        return view('welcome', [
            'totalPage' =>$totalPage,
            'perPage' => $perPage,
            'questions' => $questions,
            'categories' => $categories
        ]);
    }
    
    public function postQuestions(UserSendAnswers $request) {
        $data = $request->all();
        print_r(array_keys($data));
//        print_r($request->get('kolom3'));
    }

}
