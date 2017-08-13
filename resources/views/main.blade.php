<!-- header -->
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"/>
    <title>FAQ</title>
    <style>
        .accordion{margin: 0 auto;}
        .accordion-toggle {border-bottom: 1px solid #3366bb;cursor: pointer;margin: 0;padding: 10px 0;position: relative;}
        .accordion-toggle.active:after{content:"";position:absolute;right:0;top:17px;width:0;height:0;border-bottom:none;border-left:5px solid rgba(0,0,0,0);border-right:5px solid rgba(0,0,0,0);}
        .accordion-toggle.active:a:hover{content:"";position:absolute;right:0;top:17px;width:0;height:0;border-bottom:5px solid rgba(0,0,0,0);border-left:5px solid rgba(0,3,6,b);border-right:5px solid rgba(0,0,0,0);}
        .accordion-toggle:before{content:"";position:absolute;right:0;top:17px;width:0;height:0;border-top:5px solid #999;border-left:5px solid rgba(0,0,0,0);border-right:5px solid rgba(0,0,0,0);}
        .accordion-toggle.active:before{display:none;}
        .navbar-default .navbar-nav>.active>a,
        .navbar-default .navbar-nav>.active>a:hover,
        .navbar-default .navbar-nav>.active>a:focus {color: #ff0000;}
    </style>
</head>
<body>

<!--Панель гостя-->
<nav class="navbar navbar-default navbar-inverse divider-vertical">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">Сервис FAQ</a>
        </div>

        <ul class="nav navbar-nav pull-right">
            <li><a class="divider-vertical" href="#"><span class="glyphicon glyphicon-user"></span>  Гость</a></li>
            <li><a class="divider-vertical" href="#"><span class="glyphicon glyphicon-log-in"></span>  Login</a></li>
        </ul>
        <ul></ul>
    </div>
</nav>
<!--Конец панели гостя-->

<!--Панель администратора-->
<nav class="navbar navbar-default navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">Сервис FAQ</a>
        </div>
        <ul class="nav navbar-nav">
            <li class="active divider-vertical"><a href="#">Управление вопросами</a></li>
            <li><a  class="divider-vertical" href="#">Управление пользователями </a></li>
            <li><a class="divider-vertical" href="#">Последние действия</a></li>
        </ul>
        <ul class="nav navbar-nav pull-right">
            <li><a class="divider-vertical" href="#"><span class="glyphicon glyphicon-user"></span> Администратор</a></li>
            <li><button class="btn btn-danger navbar-btn">Выйти</button></li>
        </ul>
        <ul></ul>
    </div>
</nav>
<!--Конец панели администратора-->

<!-- FAQ основная часть -->
<div class = "container-fluid">

    <!-- Левое меню с категориями + Контент справа-->
    <div class = "row vdivide">

        <!-- !!Контент справа-->
        <div class = "col-md-9 col-md-push-3">

            <!-- Действия администратора с вопросами (первый ряд)-->
            <div class="row">
                <div class = "col-md-12">

                    <div class="panel">
                        <nav class="navbar">
                            <ul class="nav navbar navbar-nav navbar-default">
                                <li class="active"><a href="#">Все вопросы</a></li>
                                <li><a href="#">Вопросы без ответов</a></li>
                                <li><a href="My_tmpl.php">Опубликованные вопросы</a></li>
                                <li><a href="#">Скрытые вопросы</a></li>
                                <li><a href="#">Заблокированные вопросы</a></li>
                                <li><a class="btn-success btn-sm pull-right" href="{{ url('/contact/create') }}">Добавить вопрос</a></li>
                            </ul>


                            <!-- Панель выбора категории-->
                            <form class="form-inline" style="background-color: #eeeeee; border-color: #ccc; border-top: 1px;" method="GET" action="">
                                <div class="form-group">
                                    <label  style="padding: 15px;">Выберите категорию</label>
                                    <select name="name" class="form-control">

                                        <option value="<?= $val->name ?>">Общие вопросы</option>
                                        <option value="<?= $val->name ?>">Общие вопросы по кулинарии и культуре питанияы</option>
                                        <option value="<?= $val->name ?>">Общие вопросы</option>
                                        <option value="<?= $val->name ?>">Общие вопросы</option>

                                    </select>
                                    <input type="hidden" name="id" value="<?= $val->id ?>">
                                    <button class="btn btn-primary" type="submit">OK</button>
                                </div>
                            </form>
                            <!-- Конец панели выбора категории-->
                        </nav>

                        <div class="tab-content panel-body panel-primary">
                            <div class="tab-pane active">
                                <p>Здесь первая секция.</p>

                                <!-- Текущий список вопросов(второй ряд)-->
                                <section>
                                    <div class="text-right"><b>Всего вопросов:</b><span class="badge badge-info">11</span>
                                    </div>
                                    <table class="table table-responsive table-stripe table-condensed table-bordered" style="font-size: 13px;
  line-height: 1.1;">
                                        <thead>
                                        <tr>
                                            <th>Фамилия</th>
                                            <th>Имя</th>
                                            <th>Адрес</th>
                                            <th>Телефон</th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td> Иванов </td>
                                            <td> Иван </td>
                                            <td> Сергеевич </td>
                                            <td> 834544395343 </td>
                                            <td> <a class="btn btn-danger" href="{{ route('contact.edit', ['id' => $contact->id]) }}"><i class="glyphicon glyphicon-pencil"></i></a>
                                                <a class="btn btn-default" href=""><i class="glyphicon glyphicon-unlock"></i></a>
                                                <a class="btn btn-default" href=""><i class="glyphicon glyphicon-lock"><i></a>
                                                <a class="btn btn-default" href=""><i class="glyphicon glyphicon-alert"></i></a>
                                                <a class="btn btn-default" href=""><i class="glyphicon glyphicon-eye-plus"></i></a>
                                                <a class="btn btn-default" href=""><i class="glyphicons glyphicons-eye-minus"></i></a>
                                            </td>
                                            <td>
                                                <form method="POST" action="{{ route('contact.destroy',['id'=>$contact->id]) }}">
                                                    <input type="hidden" name="_method" value="delete"/>
                                                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                                                    <button type="submit" class="btn btn-sm btn-danger pull-left" value="">
                                                        <i class="glyphicon glyphicon-trash"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                    <hr class="panel-primary" />
                                </section>
                           </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- Конец текущей таблицы-->

            <!--Секция с вопросами-ответами для пользователя (четвертый ряд)-->
            <div class = "row">
                <div class = "col-md-12">

                    <div class="panel panel-default">

                        <!--Список пользователю-->
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                Здесь категория
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
        <!-- Конец контента пpавой части-->
        </div>

        <!-- Левое меню -->
        <div class = "col-md-3 col-md-pull-9">

            <!-- Список категорий -->
            <div class="panel panel-success">
                <div class="panel-heading lead">
                    Категории
                    <a class="btn btn-sm btn-success pull-right" href="">Добавить </a>
                </div>
                <table class="table table-condensed" style="font-size: 14px;">
                    <tbody>
                    <tr>
                        <td class="col-md-8">Смартфоны<span class="badge pull-right">22</span></td>
                        <td class="col-md-offset-8" style="text-align: center">
                            <form method="POST" action="{{ route('contact.destroy',['id'=>$contact->id]) }}">
                                <a class="btn btn-info btn-sm" href="{{ route('contact.edit', ['id' => $contact->id]) }}">
                                    <i class="glyphicon glyphicon-pencil"></i></a>
                                <input type="hidden" name="_method" value="delete"/>
                                <input type="hidden" name="_token" value="{{csrf_token()}}">
                                <button type="submit" class="btn btn-sm btn-danger " value="">
                                    <i class="glyphicon glyphicon-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                    <tr>
                        <td class="col-md-8">Смартфоны<span class="badge pull-right">22</span></td>
                        <td class="col-md-offset-8" style="text-align: center">
                            <form method="POST" action="{{ route('contact.destroy',['id'=>$contact->id]) }}">
                                <a class="btn btn-info btn-sm" href="{{ route('contact.edit', ['id' => $contact->id]) }}">
                                    <i class="glyphicon glyphicon-pencil"></i></a>
                                <input type="hidden" name="_method" value="delete"/>
                                <input type="hidden" name="_token" value="{{csrf_token()}}">
                                <button type="submit" class="btn btn-sm btn-danger " value="">
                                    <i class="glyphicon glyphicon-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                    </tbody>
                </table>
                <div class="panel-success panel-footer ">
                    Всего категорий:
                </div>
            </div>
            <!-- Конец списка категорий -->

            <!-- Форма создания нового пользователя-->
            <nav class="panel panel-primary">
                <div class="panel-heading">
                    <h5 class="panel-title">
                        <i class="icon icon-rocket"></i>Создать нового пользователя
                    </h5>
                </div>
                <div class="panel-body">
                    <form role="form">
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <label>Пароль</label>
                            <input type="password" class="form-control" placeholder="Password">
                        </div>
                        <button type="submit" class="btn btn-primary">Создать</button>
                    </form>
                </div>
            </nav>
            <!-- Конец формы -->

            <!-- Форма задания нового вопроса-->
            <nav class="panel panel-primary">
                <div class="panel-heading">
                    <h5 class="panel-title">
                        <i class="icon icon-rocket"> </i>Задать вопрос
                    </h5>
                </div>
                <div class="panel-body">

                    <form role="form">

                        <div class="form-group">
                            <label>Ваше имя:</label>
                            <input type="password" class="form-control" placeholder="Password">
                        </div>

                        <div class="form-group">
                            <label>Email:</label>
                            <input type="email" class="form-control" placeholder="Enter email">
                        </div>

                        <div class="form-group">
                            <label>Выберите категорию вопроса:</label>
                            <select name="name" class="form-control">

                                <option value="<?= $val->name ?>">Общие вопросы</option>
                                <option value="<?= $val->name ?>">Общие вопросы по кулинарии и культуре питания</option>
                                <option value="<?= $val->name ?>">Общие вопросы</option>
                                <option value="<?= $val->name ?>">Общие вопросы</option>

                            </select>
                        </div>
                        <div class="form-group">
                            <textarea type="text" class="form-control" placeholder="Ваш вопрос"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Отправить</button>
                    </form>
                </div>
            </nav>
            <!-- Конец формы -->

         <!-- Конец левого меню -->
         </div>
        <!-- Конец контента с левым меню и правой частью -->
    </div>

</div>

<!-- Футер -->
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
        </div>
        <ul class="nav navbar-nav">
            <li class="active"><a href="#">GitHub</a></li>
        </ul>
    </div>
</nav>
<!-- Конец футера -->


<!-- Конец документа -->
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>