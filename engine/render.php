<?php
function renderMenu(array $menu): string
{
    $result = "<ul>";
    foreach ($menu as $item) {
        $result .= "<li><a href='#'>{$item}</a></li>";
    }
    $result .= "</ul>";
    return $result;
}

function returnPhotos() {
    $content = [];
    $files = scandir(IMAGES_DIR);
        foreach ($files as $file) {
            if ($file != "." && $file != ".." && $file."*.jpg") {
                $content[] = $file;
            }
        }
    return $content;
}

function renderPhotos() {
    $photos = returnPhotos();
    $http = "<div>";
    foreach ($photos as $photo) {
        $fileName = IMAGES_DIR . $photo;
        $http .= '<a href="' . $fileName . '" target="blank"> <img src="' . $fileName . '" alt="Изображение" width="200"></a>';
    }
    $http .= "</div>";
    return $http;
}
