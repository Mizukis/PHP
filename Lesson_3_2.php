<?php

// 6. В имеющемся шаблоне сайта заменить статичное меню (ul – li) на генерируемое через PHP.
// Необходимо представить пункты меню как элементы массива и вывести их циклом.
// Подумать, как можно реализовать меню с вложенными подменю? Попробовать его реализовать.


$menu = [
    "Home",
    "Man" => [
        "T-Shirt",
        "Denim",
        "Coats",
        "Jackets",
    ],
    "Woman",
    "Kids",
    "Featured",
    "Hot deal"
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shop</title>
</head>

<body>
        <ul class="menu">
            <?php foreach ($menu as $key => $item):?>
                <?php if(is_array($item)):?>
                    <li><?=$key?>
                        <ul>
                            <?php foreach ($item as $products):?>
                                <li><?=$products?></li>
                            <?php endforeach;?>
                        </ul>
                    </li>
            <?php else:?>
                <li><?=$item?></li>
                <?php endif;?>
            <?php endforeach;?>

        </ul>
</body>
</html>