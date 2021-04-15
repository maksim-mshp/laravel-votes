<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <!-- Стили -->
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/font-awesome/css/font-awesome.min.css">
    <!-- Заголовок вкладки -->
    <title>Голосования - Главная</title>
</head>

<body>
    <!-- НАЧАЛО: Навигация -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <!-- Логотип-ссылка на главную -->
            <a class="navbar-brand" href="/">
                <i class="fa fa-hand-paper-o" aria-hidden="true"></i> Голосования
            </a>

            <!-- Навигация из 1 элемента "Открыть голосование"  -->
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/vote/create">Открыть голосование</a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- КОНЕЦ: Навигация -->

    <!-- НАЧАЛО: Основное содержимое страницы -->
    <main class="mt-5">
        <div class="container">
            <h1>Текущие голосования</h1>
            <hr class="mb-5">


            @foreach ($votes as $item)

                <!-- НАЧАЛО: Карточка голосования ------------------------------------->
                <div class="card border-info mb-4">
                    <!-- НАЧАЛО: Шапка карточки -->
                    <div class="card-header border-info">
                        <h5 class="card-title mb-0">
                            <a href="/vote/show/{{ $item->id }}">
                                {{ $item->title }}
                            </a>
                        </h5>
                    </div>
                    <!-- КОНЕЦ: Шапка карточки -->
                    <!-- НАЧАЛО: Тело карточки -->
                    <div class="card-body">
                        <!-- Текст описания -->
                        <p class="card-text mb-4">
                            {{ $item->text }}
                        </p>
                        <!-- Кнопки голосования -->
                        <a href="/vote/positive_inc/{{ $item->id }}" class="btn btn-outline-success mr-3">
                            <i class="fa fa-thumbs-o-up" aria-hidden="true"></i> Я за!
                            <span class="badge badge-pill badge-success">
                                {{ $item->positive }}
                            </span>
                        </a>
                        <a href="/vote/negative_inc/{{ $item->id }}" class="btn btn-outline-danger mr-3">
                            <i class="fa fa-thumbs-o-down" aria-hidden="true"></i> Я против!
                            <span class="badge badge-pill badge-danger">
                                {{ $item->negative }}
                            </span>
                        </a>
                        <a href="/vote/remove/{{ $item->id }}" class="btn btn-outline-danger mr-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-trash-fill" viewBox="0 0 16 16">
                                <path
                                    d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z">
                                </path>
                            </svg>
                            Удалить
                        </a>
                    </div>
                    <!-- КОНЕЦ: Тело карточки -->
                </div>
                <!-- КОНЕЦ: Карточка голосования -------------------------------------->
            @endforeach

        </div>
    </main>
    <!-- КОНЕЦ: Основное содержимое страницы -->
</body>

</html>
