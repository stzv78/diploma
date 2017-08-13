@section('admin_navbar')
<!-- Панель управления вопросами-->
<nav class="navbar">
    <ul class="nav navbar navbar-nav navbar-default">
        <li class="active"><a href="">Все вопросы</a></li>
        <li><a href="">Вопросы без ответов</a></li>
        <li><a href="">Опубликованные вопросы</a></li>
        <li><a href="">Скрытые вопросы</a></li>
        <li><a href="">Заблокированные вопросы</a></li>
        <li><a class="btn-success btn-sm pull-right" href="">Добавить вопрос</a></li>
    </ul>

    <!-- Панель выбора категории-->
    <form class="form-inline" style="background-color: #eeeeee; border-color: #ccc; border-top: 1px;" method="GET" action="">
        <div class="form-group">
            <label  style="padding: 15px;">Выберите категорию</label>
            <select name="name" class="form-control">

                <option value="">Общие вопросы</option>
                <option value="">Общие вопросы по кулинарии и культуре питанияы</option>
                <option value="">Общие вопросы</option>
                <option value="">Общие вопросы</option>

            </select>
            <input type="hidden" name="id" value="">
            <button class="btn btn-primary" type="submit">OK</button>
        </div>
    </form>
    <!-- Конец панели выбора категории-->
</nav>
@stop