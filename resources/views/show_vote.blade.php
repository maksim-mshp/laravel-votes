<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <!-- Стили -->
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/font-awesome/css/font-awesome.min.css">
    <!-- Заголовок вкладки -->
    <title>Голосование - Уточек программистам</title>
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

    <!-- НАЧАЛО: Хлебные крошки -->
    <nav class="breadcrumb">
        <div class="container">
            <ol class="breadcrumb my-0 py-0">
                <li class="breadcrumb-item">
                    <a href="/"><i class="fa fa-home" aria-hidden="true"></i> Главная</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                    Уточек программистам
                </li>
            </ol>
        </div>
    </nav>
    <!-- КОНЕЦ: Хлебные крошки -->

    <!-- НАЧАЛО: Основное содержимое страницы -->
    <main class="mt-5">
        <div class="container">

            <h1>{{ $vote->title }}</h1>
            <hr>

            <!-- НАЧАЛО: Панель кнопочек -->
            <div class="mb-4">
                <a href="/vote/positive_inc/{{ $vote->id }}" class="btn btn-outline-success mr-3">
                    <i class="fa fa-thumbs-o-up" aria-hidden="true"></i> Я за!
                    <span class="badge badge-pill badge-success">
                        {{ $vote->positive }}
                    </span>
                </a>
                <a href="/vote/negative_inc/{{ $vote->id }}" class="btn btn-outline-danger mr-3">
                    <i class="fa fa-thumbs-o-down" aria-hidden="true"></i> Я против!
                    <span class="badge badge-pill badge-danger">
                        {{ $vote->negative }}
                    </span>
                </a>
            </div>
            <!-- КОНЕЦ: Панель кнопочек -->

            <div>
                <p>
                    {{ $vote->text }}
                </p>
            </div>

            <a href="/vote/remove/{{ $vote->id }}" class="btn btn-outline-danger mr-3">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-trash-fill" viewBox="0 0 16 16">
                    <path
                        d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z">
                    </path>
                </svg>
                Удалить
            </a>

        </div>
    </main>
    <!-- КОНЕЦ: Основное содержимое страницы -->

</body>

</html>
