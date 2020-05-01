<?php

// 5. Посмотреть на встроенные функции PHP. Используя имеющийся HTML-шаблон, вывести текущий год в подвале при помощи встроенных функций PHP.
// Вопрос как это интегрировать, получается в простой HTML файл его не засунешь.

$date = date ( 'Y');
?>

<! Вот кусок кода и как бы я вставила: >

<footer class="footer_grey">
    <p class="wrapper footer_rights">© <?= $date ?> Brand All Rights Reserved.</p>
    <div class="social"> </div>
</footer>
