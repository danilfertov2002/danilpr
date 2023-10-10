<!DOCTYPE html>
<html>
<head>
    <title>Калькулятор</title>
</head>
<body>
    <h1>Калькулятор</h1>
    <form method="post" action="">
        <input type="text" name="num1" placeholder="Введите число 1" required>
        <select name="operator">
            <option value="add">+</option>
            <option value="subtract">-</option>
            <option value="multiply">*</option>
            <option value="divide">/</option>
        </select>
        <input type="text" name="num2" placeholder="Введите число 2" required>
        <input type="submit" name="calculate" value="Рассчитать">
    </form>

    <?php
    if (isset($_POST['calculate'])) {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operator = $_POST['operator'];

        switch ($operator) {
            case 'add':
                $result = $num1 + $num2;
                break;
            case 'subtract':
                $result = $num1 - $num2;
                break;
            case 'multiply':
                $result = $num1 * $num2;
                break;
            case 'divide':
                if ($num2 != 0) {
                    $result = $num1 / $num2;
                } else {
                    echo "На ноль делить нельзя!";
                }
                break;
            default:
                echo "Выберите оператор";
                break;
        }

        if (isset($result)) {
            echo "Результат: $num1 $operator $num2 = $result";
        }
    }
    ?>
</body>
</html>
