<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class CategoryController extends Controller
{
    //перенести в класс вопросов
    public function seedCategory()
    {
        return view('')
    }
    //перенести в класс вопросов
    public function addQuestions()
    {
        //заполняем тестовыми данными таблицу Question
        $data = [
            "0" => [
                'description' => 'Первый вопрос ' ,
                'status' => '0',
                'user_id' => '2',
                'category_id' => '2'
            ],

            "1" => [
                'description' => 'Второй вопрос' ,
                'status' => '2',
                'user_id' => '3',
                'category_id' => '2'
            ],
            "2" => [
                'description' => 'Новый вопрос' ,
                'status' => '0',
                'user_id' => '2',
                'category_id' => '1'
                ]
        ];

        Question::create($data['0']);
        Question::create($data['1']);
        Question::create($data['2']);
        $m = Question::all()->toArray();
        return dd($m);

        //попробовать связанную вставку данных:
        //$question = new Question(array('description' => 'Новый вопрос', 'status' => '0',  user_id ...., ));
        //$category = Category::find($id);
        //$user = User::find($user_id);
        //$result = $category->question()->save($question);
    }
    //перенести в класс вопросов
    public function getCategoriesQuestion($id)
    {
        //получаем список вопросов категории с id
        $category = Category::find($id);
        $result = $category->question()->orderBy('created_at', 'DESC')->get()->toArray();
        //потом добавить пагинацию
        //->paginate(10),
        dd($result);
    }
    //перенести в класс вопросов
    public function getCategoriesStatusQuestion($id, $status)
    {
        //список вопросов по категории и статусу
        $result = Category::find($id)->question()->where('status', '=', $status)->get()->toArray();
        dd($result);
    }

    public function deleteCategories($id)
    {
        //удалем категорию целиком, включая все ее вопросы
        $category = Category::find($id);
        $category->delete();
    }

    //перенести в класс вопросов или в шаблон
    public function listCategory($id)
    {
        //количество вопросов в категории, метод вызывается в шаблоне как
        $count = Category::find($id)->question->count();
        dd($count, $id);
    }


    public function addCategory()
    {
        //добавить новую категорию, если не существует
        //$data = Input::all();

        //$category = Category::create($data);
       // if ($category) {
       //     $log['action'] = 'Добавлена категория (' . $category->id . ') ' . $category->name;
      //  } else {
        //    $log['action'] = "Категория не добавлена";
       //}
        $data = [
        'category' => Category::latest()->paginate(4),
        'count' => Category::count()
        ];

        //$category = Category::firstOrCreate(['name' => $reqest->name);
        return view('templates.categorieslist', $data);
    }

    public function deleteCategory()
    {
        //удалить категорию, если существует
    }

    public function editCategory()
    {
        //удалить категорию, если существует
    }




}