@section('category_list')
<!-- Список категорий -->
<div class="panel panel-success">
    <div class="panel-heading lead">
        Категории вопросов
        <a class="btn btn-sm btn-success pull-right" href="">Добавить </a>
    </div>
    <table class="table table-condensed" style="font-size: 14px;">
        <tbody>
        @if (isset($data))
            @foreach($data as $category)
            <tr>
                <td class="col-md-8"> {{ $category->name }} <span class="badge pull-right">{{ $category->getQuestions() }}</span></td>
                <td class="col-md-offset-8" style="text-align: center">
                    <form method="POST" action="{{ route('category.edit', ['category' => $category]) }}">
                        <a class="btn btn-info btn-sm" href="{{ route('category.destroy', ['category' => $category]) }}"><i class="glyphicon glyphicon-pencil"></i></a>
                        <input type="hidden" name="_method" value="delete"/>
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <button type="submit" class="btn btn-sm btn-danger " value=""><i class="glyphicon glyphicon-trash"></i></button>
                    </form>
                </td>
            </tr>
            @endforeach
        @else
            <h2> Нет доступных категорий</h2>
        @endif
        </tbody>
    </table>
    <div class="panel-success panel-footer ">
        <h1>Всего категорий: {{ count($data) }}</h1>
    </div>
</div>
<!-- Конец списка категорий -->
@stop
