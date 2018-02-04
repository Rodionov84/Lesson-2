<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <title>Lesson-2</title>
    <style type="text/css">
        .green { color: lightgreen; }
    </style>
  </head>
  <body>

<?php
    // fibonacci
    function func($int) {
        $a = 1;
        $b = 1;

        while (true) {
            if ($a > $int) {
                echo "Задуманное число НЕ входит в числовой ряд".'<br>';
                break;
            }
            if ($a == $int) {
                echo "<span class='green'>Задуманное число входит в числовой ряд</span>";
                break;
            }
            $c = $a;
            $a = $a + $b;
            $b = $c;
        }
    }

    echo "<table><tr><th>Число</th><th>Входит в ряд?</th></tr>";
    for ($i = 0; $i <= 100; $i++) {
        echo "<tr><td>{$i}</td><td>";
        func($i);
        echo "</td></tr>";
    }
    echo "</table>";
?>

    </body>
</html>