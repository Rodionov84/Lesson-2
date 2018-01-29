<html lang="ru">
  <head>
    <meta charset="utf-8">
    <title>Lesson-2</title>
  </head> 
</html>  

<?php
    $int = rand(0, 100);
    echo "$int".'<br>';

    $a = 1;
    $b = 1;

    while ($a < $int) {
    	echo "Задуманное число НЕ входит в числовой ряд".'<br>';
    	break;
    }

    while ($a == $int) {
    	echo "Задуманное число входит в числовой ряд".'<br>';
    	break;
    }	

    while ($a != $int) {
    	$c = $a;
    	#echo $c.'<br>';
    	$a = $a + $b;
    	#echo $a.'<br>';
    	$b = "$c";
    	#echo "$b".'<br>';
        if ($a > 100)
        break;
    }   
       
?>