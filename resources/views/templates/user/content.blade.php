@include('header')
@include('templates.user.user_nav')

<!-- FAQ основная часть пользователя -->
<div class = "container-fluid">

    <!-- Левое меню с категориями + Контент справа-->
    <div class = "row">

        <!--Контент правой части-->
        <div class = "col-md-9 col-md-push-3">
            <!-- Секция только для пользователя-->
                @yield('question_list')
            <!-- Конец контента пpавой части-->
        </div>

        <!-- Левое меню -->
        <div class = "col-md-3 col-md-pull-9">
        @yield('new_question_form')
        <!-- Конец левого меню -->
        </div>

        <!-- Конец контента с левым меню и правой частью -->
    </div>
</div>

@include('footer')