<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    <!-- Подключаем внешний файл стилей -->
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="calculator">
    <h1>Калькулятор</h1>

    <form action="calc.php" method="POST">
        <input type="text" name="x1" placeholder="Введите первое число" required>
        <select name="operation" required>
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>
        <input type="text" name="x2" placeholder="Введите второе число" required>
        <input type="submit" value="Посчитать">
    </form>

    <div class="result" id="result">
        <?php
        if (isset($_GET['result'])) {
            echo "Результат: " . htmlspecialchars($_GET['result']);
        }
        ?>
    </div>

    <div class="error">
        <?php
        if (isset($_GET['error'])) {
            echo "Ошибка: " . htmlspecialchars($_GET['error']);
        }
        ?>
    </div>
</div>

<script>
    // Показываем результат только после его вычисления
    window.onload = function() {
        var resultDiv = document.getElementById('result');
        if (resultDiv.innerHTML) {
            resultDiv.style.display = 'block';
        }
    };
</script>

</body>
</html>
