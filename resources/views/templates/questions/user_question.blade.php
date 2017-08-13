@extends('templates.user.content')
@section('question_list')
<!--Секция с вопросами-ответами для пользователя (четвертый ряд)-->
<div class = "row">
    <div class = "col-md-12">

        <div class="panel panel-default">

            <!--Список пользователю-->
            <div class="panel-heading">
                <h3 class="panel-title">
                    Общие вопросы
                </h3>
            </div>
            <div class="panel-body">
                <div>
                    <div class="accordion">
                        <!--Здесь вопрос -->
                        <div class="accordion-toggle">

                            <span class="label label-success">Алексей, gsdfsd@mail.ru</span>
                            <a data-toggle="collapse" data-parent="#collapse-group" href="#el2">
                                Я спешил к вам, друзья,
                                С жутким нетерпеньем.
                                Я моторчик не зря
                                Смазывал вареньем.
                                У меня за спиной
                                Вертится пропеллер </a>
                        </div>
                        <!--Здесь ответ-->
                        <div id="el2" class="panel-collapse collapse">
                            <div class="panel-body table-responsive">
                                <p> <span class="glyphicon glyphicon-chevron-right btn-danger"></span>
                                    Текст ответа 1</p>
                            </div>
                        </div>
                    </div>


                    <div class="accordion">
                        <!--Здесь вопрос-->
                        <div class="accordion-toggle">
                            <span class="label label-success">Алексей, gsdfsd@mail.ru</span>
                            <a data-toggle="collapse" data-parent="#collapse-group" href="#el3">
                                Я спешил к вам, друзья,
                                С жутким нетерпеньем.
                                Я моторчик не зря
                                Смазывал вареньем.
                                У меня за спиной
                                Вертится пропеллер </a>
                        </div>
                        <!--Здесь ответ-->
                        <div id="el3" class="panel-collapse collapse panel-success">
                            <div class="panel-body table-responsive">
                                <p> <span class="glyphicon glyphicon-chevron-right btn-danger"></span>
                                    Текст ответа 1</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Конец ряда -->


    </div>
</div>
<!--Конец секции вопросов для пользователя-->
@stop
@include('templates.questions.form_create')