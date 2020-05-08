<?php

require_once __DIR__ . '/../config/config.php';
require_once ENGINE_DIR . 'render.php';

$menu = [
    'Главная',
    'Каталог',
    'Корзина',
];
echo renderMenu($menu);
echo renderPhotos();

// Проверка отправки формы
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Когда файл отправляем на сервер, он сохраняется в определенную директорию под уникальным именем
    // Когда скрипт заканчивается временный файл удаляется
    // $_FILES попадает информация о файлах загруженых при текущем запросе
    if(isset($_FILES['my_file'])) {
        $fileType = explode("/", $_FILES['my_file']['type'])[0];
        if ($fileType != "image") {
            echo'<h4>' . "Неправильный тип файла" . '</h4>';
        } elseif ($_FILES['my_file']['size'] > 1048576) {
            echo'<h4>' . "Слишком большой файл, допускается 1 Мб" . '</h4>';
        }
            move_uploaded_file(
                $_FILES['my_file']['tmp_name'],
                IMAGES_DIR . $_FILES['my_file']['name']
            );
    }
}

include VIEWS_DIR . 'upload_form.php';
