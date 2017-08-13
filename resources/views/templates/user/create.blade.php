@section('new_user_form')
<!-- Форма создания нового администратора-->
<nav class="panel panel-primary">
    <div class="panel-heading">
        <h5 class="panel-title">
            Создать нового администратора
        </h5>
    </div>
    <div class="panel-body">
        <form role="form">
            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" placeholder="Введите e-mail">
            </div>
            <div class="form-group">
                <label>Пароль</label>
                <input type="password" class="form-control" placeholder="Введите пароль">
            </div>
            <button type="submit" class="btn btn-primary">Создать</button>
        </form>
    </div>
</nav>
<!-- Конец формы -->
@endsection