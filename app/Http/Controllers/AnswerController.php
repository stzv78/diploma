<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use Illuminate\Http\Request;
use App\Models\Question;

class AnswerController extends Controller
{
    //получаем ответ на текущий вопрос с $id
    public function getAnswer($id) {
        //добавить проверку что таблица ответов не пустая иначе перехватывать сообщением "нет ответов"
        return Question::find($id)->answer()->first();
    }
    //добавляем ответ к текущему вопросу
    public function addAnswer($id) {
        //добавить текст ответа
        //$answer = Input::get('answer_text');
        $answer = new Answer(['answer_text' => 'Текст ответа к 4-му вопросу', 'user_id' => '3']);
        $question = Question::find($id);
        $question->answer()->save($answer);//сохраняем ответ
        //меняем статус на опубликовано (1):
        $answer->question->status = '1';


        $result = $this->getAnswer($id)->toArray();
        print "<pre>";
        print_r($answer->question->status);
        print "</pre>";
    }

}
