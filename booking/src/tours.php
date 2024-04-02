<!-- LOGIC -->
<? require 'data.php'; ?>

<!-- TEMPLATE -->
<section>
    <h1>Tour Catalog</h1>
    <!-- <ol>
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
   -->

    <div class="container-fluid">
        <? for($i = 0; $i < count($tours); $i++) { ?>

            <div class="card" style="width: 18rem;">
                <!-- carousel -->
                <div id="carouselIndicators" class="carousel slide">
                    <div class="carousel-indicators">
                         <? foreach( $tours[$i]['image'] as $values ) {?>
                            <?php $isActive = true; ?>
                            <button type="button" data-bs-target="#carouselIndicators" data-bs-slide-to="0" 
                            class="<?= $isActive ? 'active' : '' ?>" aria-current="true" aria-label="Slide <?=$values[$i]?>"></button>
                        <?}?>
                    </div>
                
                    <div class="carousel-inner">

                        <?php $isActive = true; ?>
                        <? foreach( $tours[$i]['image'] as $values ) { ?>
                            <div class="carousel-item <?= $isActive ? 'active' : '' ?>">
                                <img 
                                    src="<?= $values ?>" 
                                    class="d-block w-100" 
                                    alt="<?= $tours[$i]['name'] ?>"
                                >
                            </div>
                            <?php $isActive = false; ?>
                        <? } ?>

                    </div>

                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselIndicators" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>

                    <button class="carousel-control-next" type="button" data-bs-target="#carouselIndicators" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>

                <!-- card body -->
                <div class="card-body">
                    <h5 class="card-title"><?= $tours[$i]['name'] ?></h5>
                    <p class="card-text"><?= $tours[$i]['description'] ?></p>
                    <a href="#" class="btn btn-primary ">See details</a>
                </div>
            </div>
            
        <?}?>
    </div>

</section>
