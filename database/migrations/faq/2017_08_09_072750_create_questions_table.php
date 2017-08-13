<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionsTable extends Migration
{
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->increments('id');
            $table->text('description');
            //индексные поля -- участвуют в запросах
            $table->tinyInteger('status')->index();
            $table->integer('user_id')->unsigned();
            //связь один-ко многим с таблицей категорий (тем) вопросов
            $table->integer('category_id')->unsigned()->index();
            $table->foreign('category_id')
                ->references('id')->on('categories')
                ->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('questions');
    }
}
