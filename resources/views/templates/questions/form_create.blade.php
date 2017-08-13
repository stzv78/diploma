@section('new_question_form')
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
                <input type="text" class="form-control" placeholder="Имя">
            </div>

            <div class="form-group">
                <label>Email:</label>
                <input type="email" class="form-control" placeholder="E-mail">
            </div>

            <div class="form-group">
                <label>Выберите категорию вопроса:</label>
                <select name="name" class="form-control">

                    <option value="">Общие вопросы</option>
                    <option value="">Общие вопросы по кулинарии и культуре питания</option>
                    <option value="">Общие вопросы</option>
                    <option value="">Общие вопросы</option>

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
@stop