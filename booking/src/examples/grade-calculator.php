<!-- 
В примерах создайте страницу "grade-calculator.php", она должна отображать форму с 3-я полями и кнопку. Пользователь вводит по одной оценке в каждое поле и при нажатие на кнопку получить среднюю оценку.

Проверить ввод на пустоту
Проверить ввод на числа (любые - что целые, что дробные)
Проверить ввод на диапазон 0..10
Использовать if/else + print чтобы выводить сообщения об ошибках
Вывести все 3 оценки плюс среднюю - в ряд HTML таблицы
 -->
<?php


    if(isset($_GET['grade_1']) && isset($_GET['grade_2']) && isset($_GET['grade_1']) ){
        $rate_1 = $_GET['grade_1'];
        $rate_2 = $_GET['grade_2'];
        $rate_3 = $_GET['grade_3'];
        print($rate_1);
    } else{
        print("All three grades are mandatory!!!");
    
    }
?>


 <form action="/examples/grade-calculator.php" method="GET">
    <label for="">Grade 1</label>
    <input type="text" name="grade_1" >
    <label for="">Grade 2</label>
    <input type="text" name="grade_2" >
    <label for="">Grade 3</label>
    <input type="text" name="grade_3" >
    <button>Calculate grade</button>
 </form>