<?php
    // Получаем текущий путь без параметров запроса
    $host = explode('?', $_SERVER['REQUEST_URI'])[0];  // Убираем параметры запроса

    // Разбиваем строку по символу "/"
    $parts = explode('/', $host);

    // Берем второй компонент пути, если он существует, иначе используем пустую строку
    $way = isset($parts[1]) ? $parts[1] : '';

    // Создаем объект класса Controller
    $controller = new Controller();

    // Определяем, какой метод контроллера вызвать в зависимости от маршрута
    if ($way == '' || $way == 'index.php') {
        $response = $controller->StartSite();  // Вызываем метод через объект
    }
    elseif ($way == 'books') {
        $response = $controller->BookList();  // Вызываем метод через объект
    }
    elseif ($way == 'book') {  // Сравниваем правильно, используя ==
        if (isset($_GET['title'])) {
            $title = $_GET['title'];
        }
        $response = $controller->bookOne($title);  // Вызываем метод через объект
    }
    else {
        $response = $controller->error404();  // Вызываем метод через объект
    }
?>
