@extends('templates.admin.content')
@include('templates.admin.navbar')
@section('question_list')
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
            <td> <a class="btn btn-danger" href="">
                    <i class="glyphicon glyphicon-pencil"></i></a>
                <a class="btn btn-default" href=""><i class="glyphicon glyphicon-question-sign"></i></a>
                <a class="btn btn-default" href=""><i class="glyphicon glyphicon-lock"><i></a>
                <a class="btn btn-default" href=""><i class="glyphicon glyphicon-alert"></i></a>
                <a class="btn btn-default" href=""><i class="glyphicon glyphicon-question-sign"></i></a>
                <a class="btn btn-default" href=""><i class="glyphicon glyphicon-eye-open"></i></a>
            </td>
            <td>
                <form method="POST" action="">
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
@stop
@include('templates.category.list')
@include('templates.user.create')