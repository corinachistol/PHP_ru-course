<!-- LOGIC -->
<? require 'data.php'; ?>

<!-- TEMPLATE -->
<section>
    <h1 class="text-center py-3">Tour Catalog</h1>
        
   <section class="container shadow">
        <div class="row">
            <? for ($i = 0; $i < count($tours); $i++) { ?>
                <div class="col-md-6">

                    <div class="card my-2 mx-2" >

                        <div id="carouselExampleIndicators" class="carousel slide">
                            <div class="carousel-indicators">
                                
                                 <? foreach ($tours[$i]['image'] as $img) { ?>
                                        
                                        <?php $isActive = true; ?>
                                        <button 
                                            type="button" 
                                            data-bs-target="#carouselExampleIndicators" 
                                            data-bs-slide-to="<?= $img[$i] ?>"  
                                            class="<?= $isActive ? 'active' : '' ?>" 
                                            aria-current="<?= $isActive ? 'true' : '' ?>" 
                                            aria-label="Slide <?= $img[$i] ?>"></button>
                                <? } ?>

                                <!-- <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button> -->
                            </div>

                            <div class="carousel-inner">

                                <!-- <?php $isActive = true; ?> -->
                                <? foreach ($tours[$i]['image'] as $img) { ?>
                                    <div class="carousel-item <?= $isActive ? 'active' : '' ?>">
                                        <img 
                                            src="<?= $img ?>" 
                                            class="d-block w-100" 
                                            alt="<?= $tours[$i]['name'] ?>"
                                        >
                                    </div>
                                    <!-- <?php $isActive = false; ?> -->
                                  
                                <? } ?>
                            </div>

                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>


                        <div class="card-body">
                            <h5 class="card-title"><?= $tours[$i]['name'] ?></h5>
                            <p class="card-text"><?= $tours[$i]['description']?></p>
                            <a href="#" class="btn btn-primary">See details</a>
                        </div>

                    </div>

                </div>
            <?}?>
        </div>
    </section>


   

</section>


