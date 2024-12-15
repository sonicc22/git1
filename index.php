<?php

function showMenu() {
    echo "Меню:\n";
    echo "1. Ввести два числа\n";
    echo "2. Выполнить сложение\n";
    echo "3. Выполнить вычитание\n";
    echo "4. Выполнить деление\n";
    echo "5. Возвести число в степень\n";
    echo "0. Выход\n";
}

$number1 = 0;
$number2 = 0;

while (true) {
    showMenu();
    $choice = (int)readline("Выберите пункт меню: ");

    switch ($choice) {
        case 1:
            $number1 = (float)readline("Введите первое число: ");
            $number2 = (float)readline("Введите второе число: ");
            break;
        case 2:
            echo "Сумма: " . ($number1 + $number2) . "\n";
            break;
        case 3:
            echo "Разность: " . ($number1 - $number2) . "\n";
            break;
        case 4:
            if ($number2 != 0) {
                echo "Деление: " . ($number1 / $number2) . "\n";
            } else {
                echo "Ошибка: деление на ноль.\n";
            }
            break;
        case 5:
            $exponent = (int)readline("Введите степень: ");
            echo "$number1 в степени $exponent: " . pow($number1, $exponent) . "\n";
            break;
        case 0:
            exit("Выход из программы.\n");
        default:
            echo "Неверный выбор, попробуйте снова.\n";
    }
}
