<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class QuestionController extends Controller
{
    //Видеть список всех вопросов без ответа во всех темах в порядке их добавления.
    public function listQuestion() {
        $status = '0';
        $questions = Question::latest('created_at')->where('status', '=', $status)->get()->toArray();
        print "<pre>";
        print_r($questions);
        print "</pre>";
    }

    //И иметь возможность их редактировать и удалять.
    public function editQuestion($id) {
        //удаляем вопрос целиком, включая его ответы
        $question = Question::find($id);
        return ($question);
    }

    public function updateQuestion($id) {
        //удаляем вопрос целиком, включая его ответы
        //$data = Input::all();
        $data = [
            'description' => 'Обновленный вопрос',
            'status' => '0',
            'category_id' => '2'
        ];
        Question::find($id)->update($data);

        print "<pre>";
        print_r(Question::find($id)->toArray());
        print "</pre>";
    }

    public function deleteQuestion($id) {
        //удаляем вопрос целиком, включая его ответы
        $question = Question::find($id);
        print "<pre>";
        $question->delete();
    }

    public function setStatusQuestion($id, $status) {
        //публикуем, скрываем, блокируем вопрос
        $question = Question::find($id);
        $question->status = (string)$status;
        $question->save();

        print "<pre>";
        print_r(Question::find($id)->toArray());
        print "</pre>";
    }
    public function getQuestion(Category $category)
    {
        $result = $category->question()->orderBy('created_at', 'DESC')->get();
    }

}
