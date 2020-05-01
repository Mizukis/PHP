<?php
// 3. Реализовать основные 4 арифметические операции в виде функций с двумя параметрами. Обязательно использовать оператор return.

function add($a, $b) {
    return $a + $b;
}
function sub($a, $b) {
    return $a - $b;
}
function mult($a, $b) {
    return $a * $b;
}
function div($a, $b) {
    if ($b == 0) {
        echo "<h4> Делить на 0 нельзя </h4>" ;
    }
    return $a / $b;
}
echo "<h4> Сложение: " . add(-4, 5) . "</h4>";
echo "<h4> Вычитание: " . sub(12, 7) . "</h4>";
echo "<h4> Умножение: " . mult(-6, -5) . "</h4>";
echo "<h4> Деление: " . div(6, 3) . "</h4>";

// 4. Реализовать функцию с тремя параметрами: function mathOperation($arg1, $arg2, $operation), где $arg1, $arg2 – значения аргументов, $operation – строка с названием операции. В зависимости от переданного значения операции выполнить одну из арифметических операций (использовать функции из пункта 3) и вернуть полученное значение (использовать switch).

function mathOperation ($arg1, $arg2, $operation) {
    switch ($operation) {
        case '+':
            return add($arg1, $arg2);
            break;
        case '-':
            return sub($arg1, $arg2);
            break;
        case '*':
            return mult($arg1, $arg2);
            break;
        case '/':
            return div($arg1, $arg2);
            break;
        default:
            echo "<h4> Перепроверьте введённые данные </h4>";
            break;
    }
}

 echo "<h4> Результат: " . mathOperation(10, 2, '/') . "</h4>";

?>
