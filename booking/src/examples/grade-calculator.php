<!-- 
В примерах создайте страницу "grade-calculator.php", она должна отображать форму с 3-я полями и кнопку. Пользователь вводит по одной оценке в каждое поле и при нажатие на кнопку получить среднюю оценку.

Проверить ввод на пустоту
Проверить ввод на числа (любые - что целые, что дробные)
Проверить ввод на диапазон 0..10
Использовать if/else + print чтобы выводить сообщения об ошибках
Вывести все 3 оценки плюс среднюю - в ряд HTML таблицы
 -->

 <style>
    form{
        margin: 50px auto 25px 100px;
    }
    label,input,button{
        display: block;
        margin: 0.25rem;
    }
    table{
        margin-left: 50px;
        margin-top: 50px;
    }
    table,tr,th,td{
        border:1px solid black;
        border-collapse: collapse;
        text-align: center;
    }
    th,td{
        padding: .5rem;
    }
 </style>
<?php

    if(isset($_GET['grade_1']) && isset($_GET['grade_2']) && isset($_GET['grade_1']) ){

        if(is_numeric( $_GET['grade_1'] ) && is_numeric($_GET['grade_2']) && is_numeric($_GET['grade_3']) ){

            if(preg_match('/^([0-9](\.\d)?|10(\.0)?)$/', $_GET['grade_1']) &&
               preg_match('/^([0-9](\.\d)?|10(\.0)?)$/', $_GET['grade_2']) &&
               preg_match('/^([0-9](\.\d)?|10(\.0)?)$/', $_GET['grade_3'])){

                $rate_1 = (float) $_GET['grade_1'];
                $rate_2 = (float) $_GET['grade_2'];
                $rate_3 = (float) $_GET['grade_3'];

                // print($rate_1);
                // print($rate_2);
                // print($rate_3);

                $avg_rate = ($rate_1 + $rate_2 + $rate_3) / 3 ;

                // print($avg_rate);

            } else{
                print("All three grade must respect the same pattern: [0.9-10.0]");
            }
        } else{
            print("Only x.x format is allowed");
        }
    } else{
        print("All three grades are mandatory!!!");
    
    }
?>


 <form action="/examples/grade-calculator.php" method="GET">
    <label for="">Grade 1</label>
    <input type="text" name="grade_1" required>
    <label for="">Grade 2</label>
    <input type="text" name="grade_2" required>
    <label for="">Grade 3</label>
    <input type="text" name="grade_3" required>
    <button>Calculate grade</button>
 </form>


 <table style="width:50%">
 <th colspan="4">Grade Input results</th>
    <tr>
        <th>Grade 1</th>
        <th>Grade 2</th>
        <th>Grade 3</th>
        <th>Average Grade</th>
    </tr>
    <tr>
        <td>
            <? if(isset($_GET['grade_1'])): ?>
                <?=$rate_1 ?>
            <? endif?>
        </td>
        <td>
            <? if(isset($_GET['grade_2'])): ?>
                <?=$rate_2 ?>
            <? endif?>
        </td>
        <td>
            <? if(isset($_GET['grade_3'])): ?>
                <?=$rate_3 ?>
            <? endif?>
        </td>
        <td>
            <? if(isset($_GET['grade_3']) && isset($_GET['grade_2']) && isset($_GET['grade_3'])): ?>
                <?= number_format($avg_rate, 2) ?>
            <? endif?>
        </td>

    </tr>
    
   
 </table>