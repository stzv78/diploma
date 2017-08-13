@extends('content')
@section('new_user_form')
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
@stop