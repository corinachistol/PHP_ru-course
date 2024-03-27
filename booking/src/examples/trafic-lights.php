<!-- Управление потоком + ввод / switch/case

Создать страницу "traffic-light.php" на которой пользователь сможет переключать цвета светофора нажатием на кнопки

Создать три ссылки и переделать их стиль так чтобы они выглядели как 3 кружка (красного, желтого, зеленого)
Ссылки содержат адрес "prefix/traffic-light.php?color=xxxxx" - где префикс адреса вы сами вставите исходя из папки где
находится ващ скрипт, а xxxxx - будет название цвета на который нажимает пользователь
Скрипт должен получить название цвета $_GET -ом и при помощи siwtch/case переделать вывод так чтобы соответствующий
кружок стал светлее
ВНИМАНИЕ: изначально - когда только загрузилась страница - все 3 крудка содержат бледные цвета 
a-href-switch-traffic-lights.ru.md

-->

<!-- LOGIC -->
<?
    
    $color = $_GET['color'] ?? "gray";

    switch($color){
        case "red":
            $active_color = "red"; break;
        case "orange":
            $active_color = "orange"; break;
        case "green":
            $active_color = "green"; break;
        default:
            $active_color = "gray"; break;
    }

    
?>

<!-- Template -->
<style>
    body{
        background-color: #222;
        color:white;
    }
    section{
       margin-top: 50px;

    }
    h3{
        text-align: center;

    }
    .traffic_lights{
        transform: rotate(90deg) translateX(70px) ;

    }
    .traffic_lights a {
        display: inline-block;
        background-color:gray; 
        width:50px;
        height:50px;
        border-radius: 50%;
        opacity: 30%;
        margin-left: 5px;
    }
    .traffic_lights a:active{
        opacity: 100%;
    }

    #red{
        background-color: red;
    }

    #orange{
        background-color: orange;
    }

    #green{
        background-color: green;
    }
</style>
<section>
    <h3>Traffic Lights</title>

    <div class="traffic_lights">
        <a 
            id="red" 
            href="/examples/trafic-lights.php?color=red" 
            class=<?$active_color?>>
        </a>
        <a 
            id="orange" 
            href="/examples/trafic-lights.php?color=orange" 
            class=<?$active_color?>>
        </a>
        <a 
            id="green" 
            href="/examples/trafic-lights.php?color=green"
            class=<?$active_color?>>
        </a>
    </div>
</section>
