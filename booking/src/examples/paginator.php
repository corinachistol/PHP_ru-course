<!-- LOGIC -->
<?

    if (isset($_GET['p'])) {
        $page = $_GET['p'];
        if ($page < 1) {
            $page = 1;
        }
        if ($page > 5) {
            $page = 5;
        }
    } else{
        $page =1;
    }

    $previous_page = $page - 1; 
    $next_page = $page + 1; 

?>

<!-- TEMPALTE -->

<!-- style, am schimbat cu locul sa avem acces la variabila page -->
<style>
   body {background-color: #222; color:white; text-align: center;}
   a{color:#ccc; text-decoration: none;}
   span a:nth-child(<?= $page ?>){
    text-decoration:underline;
   }
</style>

<div>
    You are on page <?= $page ?>
</div>
<hr>
<div>
    <a href="?p=<?=$previous_page?>">
        <?if ($page>1): ?>
            &lt;
        <?endif?>
    </a>

    <span>
        <a href="?p=1">1</a>
        <a href="?p=2">2</a>
        <a href="?p=3">3</a>  <!--  user clicks -->
        <a href="?p=4">4</a>
        <a href="?p=5">5</a>
    </span>
    
    <a href="?p=<?= $next_page ?>">
        <? if ($page < 5): ?>
            &gt; 
        <? endif ?>
    </a>
</div>




