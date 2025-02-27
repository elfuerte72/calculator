<?php
// Проверяем, пришли ли данные через POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Проверяем, что все необходимые поля заполнены, но 0 не воспринимается как пустое значение
    if (!isset($_POST['x1'], $_POST['x2'], $_POST['operation']) || $_POST['x1'] === '' || $_POST['x2'] === '') {
        echo "Не все данные заполнены!";
        exit;
    }

    // Получаем значения
    $x1 = (float) $_POST['x1'];
    $x2 = (float) $_POST['x2'];
    $operation = $_POST['operation'];

    // Выполняем операцию в зависимости от выбранного знака
    switch ($operation) {
        case '+':
            echo "Результат: " . ($x1 + $x2);
            break;
        case '-':
            echo "Результат: " . ($x1 - $x2);
            break;
        case '*':
            echo "Результат: " . ($x1 * $x2);
            break;
        case '/':
            // Проверка на деление на ноль
            if ($x2 == 0) {
                echo "Ошибка: деление на ноль невозможно!";
            } else {
                echo "Результат: " . ($x1 / $x2);
            }
            break;
        default:
            echo "Неизвестная операция!";
    }
} else {
    echo "Неверный метод запроса!";
}
?>
