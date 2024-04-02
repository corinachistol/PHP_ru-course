<?
    include "data.php";

    if ( isset($_GET['page']) ) {
        $page = $_GET['page'];
        if ($page < 1) {
            $page = 1;
        }
        if ($page > 2) {
            $page = 2;
        }
    } else{
        $page = 1;
    }

    $previous_page = $page - 1;
    $next_page = $page + 1;

    if (isset($_GET['sort'])){
        $sort = $_GET['sort'];
        // print($sort);

        if($sort === "ascending"){
            usort($products, fn($p1, $p2) => $p1['price']['amount'] - $p2['price']['amount']);
        }else if( $sort === "descending"){
            usort($products, fn($p1, $p2) => $p2['price']['amount'] - $p1['price']['amount']);
        }
    }

//HW3: add 2 links on top of catalog  v ^ sort acscending, sort descending.
    // cea mai scurta varianta V3
    // usort($products, fn ($p1,$p2) => $p1['price']['amount'] - $p2['price']['amount']);

?>

<!-- TEmplate -->
<style>
    .paginator{
        margin: auto;
        text-align: center;
    }
    .paginator a{
        color:#333;
        text-decoration: none;
    }

    .paginator a:nth-child(<?= $page ?>){
        text-decoration:underline;
    }

    .paginator a:hover{
        color:black;
        font-weight: bold;
    }
   

</style>

<div>
    <a href="?sort=ascending">^</a>
    <a href="?sort=descending">v</a>
</div>

<ol>
    <!--  HW    aici  --         aici + if min15_b -->

    <?if($page == 1): ?>

        <?for($i = 0; $i < 3; $i++) { ?>
    
            <li>
                <h2>
                    <?= $products[$i]['name']?>
                    <? if($products[$i]['new']) {?> <img src="<?=NEW_STICKER?>" width="50" /> <? } ?>
                </h2>
                <h3><?= $products[$i]['category']?></h3>
                <img src="<?= $products[$i]['image']?>" width="100" alt="<?= $products[$i]['name']?>">
                <div><?=$products[$i]['price']['amount']?> <?=$products[$i]['price']['currency']?></div>
                <hr>
        
            </li>
        
        <?}?>

    <?elseif ($page ==2 ): ?>

        <? for ($i = 3; $i < 6; $i++) { ?>
        
            <li>
                <h2>
                    <?= $products[$i]['name'] ?>
                    <? if ($products[$i]['new']) { ?> <img src="<?= NEW_STICKER ?>" width="50" />
                    <? } ?>
                </h2>
                <h3>
                    <?= $products[$i]['category'] ?>
                </h3>
                <img src="<?= $products[$i]['image'] ?>" width="100" alt="<?= $products[$i]['name'] ?>">
                <div>
                    <?= $products[$i]['price']['amount'] ?>
                    <?= $products[$i]['price']['currency'] ?>
                </div>
                <hr>
        
            </li>
        <? } ?>

    <?endif?>

    
</ol>

<div class="paginator">
     <a href="?page=<?= $previous_page ?>" >
        <? if ($page > 1){ ?>
            &lt;
        <? } ?>
    </a>

    <? for($i=1; $i < 3 ; $i++) { ?>
        <a href="?page=<?=$i?>"><?=$i?> </a>
    <?}?>

     <a href="?page=<?= $next_page ?>">
        <? if ($page < 2){ ?>
                &gt; 
        <? } ?>
    </a>
</div>











