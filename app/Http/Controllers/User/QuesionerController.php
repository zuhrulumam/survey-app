<?php

namespace App\Http\Controllers\User;

use InfyOm\Generator\Controller\AppBaseController;
use App\Models\Questions;
use App\Models\Categories;
use App\Models\UserQuestions;
use App\Http\Requests\UserSendAnswers;
use App\Models\Users;
use Mail;
use Request;

use App\Models\DataDosen;

class QuesionerController extends AppBaseController {

    public function index() {
        return view("home");
    }

    public function checkUser($email, $nip) {
        if (strpos("@guest.uns.ac.id", $email) !== false) {
            return json_encode(['result' => false]);
        }

        $dataDosen = DataDosen::where("NIP", $nip)->first();
        $user = Users::where("email", $email)->first();
        if ($user) {
            $keterangan = json_decode($user->keterangan);
            if ($keterangan->answered == 2) {
                return json_encode(['result' => false]);
            }
            return json_encode(['result' => true]);
        } elseif(($dataDosen->ID_JENIS_STAF == 1) || ($dataDosen->ID_JENIS_STAF == 3)) {            
            return json_encode(['result' => true]);
        } else {
            return json_encode(['result' => false]);
        }
    }
   
    public function getQuestions() {
        $user = \Auth::user();

        $keterangan = json_decode($user->keterangan);

        $type = $keterangan->type;
        $countAnswered = $keterangan->answered;
        $flag = 0;
        $generalQuestion = "";
        if ($type == 'dosen') {
            // jika answered == 0 tampilkan 1-3, jka anwered == 1 tampilkan 2-5 
            if ($countAnswered == 0) {
                $questions = Questions::whereIn("question_category_id", [1, 2, 3])->orderBy('question_id', 'ASC')->get();
                $categories = Categories::whereIn("category_id", [1, 2, 3])->get();
                $flag = 0;
                $generalQuestion = "Apakah Anda pernah mengakses E-learning Universitas Sebelas Maret Surakarta (elearning.uns.ac.id) ?";
            } elseif ($countAnswered == 1) {
                $questions = Questions::whereIn("question_category_id", [3, 5])->orderBy('question_id', 'ASC')->get();
                $categories = Categories::whereIn("category_id", [3, 5])->get();
                $flag = 1;
            }
        } elseif ($type == 'mahasiswa') {
            // jika answered == 0 tampilkan 2-3, jka anwered == 1 tampilkan 5
            if ($countAnswered == 0) {
                $questions = Questions::whereIn("question_category_id", [2, 3])->orderBy('question_id', 'ASC')->get();
                $categories = Categories::whereIn("category_id", [2, 3])->get();
                $flag = 0;
                $generalQuestion = "Apakah Anda pernah mengakses E-learning Universitas Sebelas Maret Surakarta (elearning.uns.ac.id) ?";
            } elseif ($countAnswered == 1) {
                $questions = Questions::whereIn("question_category_id", [5])->orderBy('question_id', 'ASC')->get();
                $categories = Categories::whereIn("category_id", [5])->get();
                $flag = 1;
            }
        }
        $totalQuestion = $questions->count();
        $perPage = 6;
        $totalPage = round($totalQuestion / $perPage);
        return view('welcome', [
            'totalPage' => $totalPage,
            'perPage' => $perPage,
            'questions' => $questions,
            'categories' => $categories,
            'flag' => $flag,
            'generalQuestion' => $generalQuestion
        ]);
    }

    public function postQuestions(UserSendAnswers $request) {
        $data = $request->all();

        $dataKey = array_keys($data);
        $flag = $data['flag'];
        $dataJawaban = [];
        $sumData = count($data);
        $user = \Auth::user();

        for ($i = 0; $i < $sumData; $i++) {

            if (($dataKey[$i] != "flag") && ($dataKey[$i] != "_token")) {
                $currId = explode("_", $dataKey[$i]);
                $currQuestionId = $currId[1];
                $currData = [
                    "rel_user_id" => $user->id,
                    "rel_question_id" => $currQuestionId,
                    "rel_answer" => $data["pertanyaan_" . $currQuestionId]
                ];
                array_push($dataJawaban, $currData);
            }
        }

        $keterangan = json_decode($user->keterangan);
        $countAnswered = $flag + 1;
        if ($keterangan->answered !== $countAnswered) {
            UserQuestions::insert($dataJawaban);
            $user->keterangan = json_encode([
                'type' => $keterangan->type,
                'answered' => $countAnswered
            ]);
            $user->save();
//            Mail::send('emails.reminder', ['user' => $user], function ($m) use ($user) {
//                $m->from('zuhrulumam@student.uns.ac.id', 'Survey E-learning');
//
//                $m->to($user->email, $user->name)->subject('Terimakasih Atas Partisipasinya');
//            });
        }



        return view("success", [
            'answered' => $countAnswered
        ]);
    }

    public function tryPost($email, $nip) {
        $dataDosen = DataDosen::where("NIP", $nip)->first();
        $user = Users::where("email", $email)->first();
        if ($user) {
            $keterangan = json_decode($user->keterangan);
            if ($keterangan->answered == 2) {
                return json_encode(['result' => false]);
            }
            return json_encode(['result' => true]);
        } elseif(($dataDosen->ID_JENIS_STAF == 1) || ($dataDosen->ID_JENIS_STAF == 3)) {            
            return json_encode(['result' => true]);
        } else {
            return json_encode(['result' => false]);
        }
        
//        $a = 1; $b = 2;
//        
//        if(($a ==1) && ($b ==3)){
//            echo 'salah';
//        } elseif($a == 1 || $b== 2 ) {
//            echo 'benar';
//        }
    }

}
