<!-- LOGIC -->
<? 
  $tours = load('tours');
  if (isset($_POST['search'])) {
    $tours = array_filter($tours, function ($tour) {
        return 
            similar_text($tour['name'], $_POST['search']) >= 3
            ||
            $_POST['search'] == '';
    });
    
  }

  $tours = array_values($tours);

  $tours = array_filter($tours, function ($tour) {
        if(isset($_POST['min_price'])) {
            // print($_POST['min_price']);
            return $tour['price']['amount'] >= $_POST['min_price'];
        }else if (isset($_POST['max_price'])) {
            return $tour['price']['amount'] <= $_POST['max_price'] ;
        }
        // else if(isset($_POST['min_price']) && isset($_POST['max_price']) ) {
        //     return  $_POST['min_price'] >= $tour['price']['amount'] <= $_POST['max_price'];
        // }
        

  });

//   if(isset($_POST['min_price'])){
//     $tours = array_filter($tours, function ($tour) {
//         return $tour['price']['amount'] >= $_POST['min_price'];
        
//     });
//   }else if(isset($_POST['max_price'])){
//     $tours = array_filter($tours, function ($tour) {
//         return $tour['price']['amount'] <= $_POST['max_price'];

//     });
//   }
    $tours = array_values($tours);


?>

<!-- TEMPLATE -->
<section>
    <h1 class="text-center py-3">Tour Catalog</h1>
    
    <!-- FILTERS -->
    <form action="/?page=tours" method="POST">
        <input 
            type="text" 
            name="search" 
            placeholder="enker keywords..."
            value="<?=$_POST['search'] ?? "" ?>">
        <button>SEARCH</button>
    </form>

    <form action="/?page=tours" method="POST">
        <input type="text" placeholder="enter min price" name="min_price" value="<?=$_POST['min_price'] ?? ""?>">
        <input type="text" placeholder="enter max price" name="max_price" value="<?=$_POST['max_price'] ?? ""?>">
        <button>Search</button>
    </form>

<!-- HW1: add another form
        input: min price
        input max price
        '' '1000'
        500 ''




-->

    <!-- FILTERS -->


   <section class="container shadow">
        <div class="row">
            <? for ($i = 0; $i < count($tours); $i++) { ?>
                <div class="col-md-6 col-xl-4">

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

                                <?php $isActive = true; ?>
                                <? foreach ($tours[$i]['image'] as $img) { ?>
                                    <div class="c-item carousel-item <?= $isActive ? 'active' : '' ?>">
                                        <img 
                                            src="<?= $img ?>" 
                                            class="d-block w-100 c-img" 
                                            alt="<?= $tours[$i]['name'] ?>"
                                        >
                                    </div>
                                    <?php $isActive = false; ?>
                                  
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


                        <div class="card-body d-block">
                            <h5 class="card-title"><?= $tours[$i]['name'] ?></h5>
                            <div>
                                <div class="badge rounded-pill text-bg-danger" style="<?=($tours[$i]['discount']['amount'] == 0 ) ? 'display:none' : 'visibility:visible' ?>">
                                    Discount: <?= $tours[$i]['discount']['amount']?><?= $tours[$i]['discount']['percentage'] ?> 
                                </div>
                                <div type="button" class="btn btn-primary">
                                    <?= $tours[$i]['price']['amount'] ?> <?= $tours[$i]['price']['currency'] ?>
                                </div>
                            </div>
                                                    
                            
                            <p class="card-text"><?= $tours[$i]['description']?></p>
                            <a href="?page=tour-detail&tour-id=<?= $tours[$i]['id']?>"
                                target="_blank" 
                                class="btn btn-outline-primary justify-content-center  ">See details</a>
                        </div>

                    </div>

                </div>
            <?}?>
        </div>
    </section>


   

</section>


