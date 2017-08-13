@include('header')
@include('templates.admin.admin_nav')
<!-- FAQ основная часть администратора -->
<div class = "container-fluid">

    <!-- Левое меню с категориями + Контент справа-->
    <div class = "row">

        <!--Контент правой части-->
        <div class = "col-md-9 col-md-push-3">

            <!-- Действия администратора с вопросами (первый ряд)-->
            <div class="row">
                <div class = "col-md-12">

                    <div class="panel">

                        @yield('admin_navbar')

                        <div class="tab-content panel-body panel-primary">
                            <div class="tab-pane active">
                                <!--Здесь первая секция-->
                                @yield('question_list')

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Конец текущей таблицы-->
        </div>

        <!-- Левое меню -->
        <div class = "col-md-3 col-md-pull-9">

            @yield('category_list')

            @yield('new_user_form')

        <!-- Конец левого меню -->
        </div>

        <!-- Конец контента с левым меню и правой частью -->
    </div>
</div>

@include('footer')