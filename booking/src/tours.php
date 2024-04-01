<!-- LOGIC -->
<? require 'data.php'; ?>

<!-- TEMPLATE -->
<section>
    <h1>Tour Catalog</h1>
    <ol>
        <?  for ($i = 0; $i < count($tours); $i++) { ?>
            <li>
               <h2><?= $tours[$i]['name']?></h2>
               <p><?= $tours[$i]['description']?></p>

               <div>
                    <? foreach( $tours[$i]['image'] as $values ) { ?>
                        <img 
                            src="<?=$values?>" 
                            alt="<?= $tours[$i]['name'] ?>"
                            width="300">
                    <?}?>
               </div>

               <div>
                    <?= $tours[$i]['price']['amount'] ?>
                    <?= $tours[$i]['price']['currency'] ?>
                    <span>
                        <?= $tours[$i]['discount']['amount'] ?><?= $tours[$i]['discount']['percentage'] ?>
                    </span>
               </div>
            </li>
        <? } ?>
    </ol>
</section>
