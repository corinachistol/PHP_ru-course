<!-- LOGIC -->
<? 
  $tours = load('tours');

  if (isset($_POST['search'])) {
    $tours = array_filter($tours, function ($tour) {
        return 
            !(stripos($tour['name'], $_POST['search']) === false)  ||
            $_POST['search'] == '';
    });
  }

  $tours = array_values($tours);


  if(isset($_POST['min_price']) && $_POST['min_price'] != "" && $_POST['max_price'] == "" ){
    var_dump($_POST['max_price']);
    // echo("first");
    $tours = array_filter($tours, function ($tour) {
        return $tour['price']['amount'] >= (int)$_POST['min_price'];
        
    });
  }
  if(isset($_POST['max_price']) && $_POST['max_price'] != ""  && $_POST['min_price'] == "" ){
    // var_dump($_POST['min_price']);
    // echo ("second");
    // print($_POST['max_price']);
    $tours = array_filter($tours, function ($tour) {
        return $tour['price']['amount'] <= (int)$_POST['max_price'];

    });
  }
  if( isset($_POST['min_price']) && $_POST['min_price'] != "" && isset($_POST['max_price']) && $_POST['max_price'] != "" ){
    // echo ("third");
    // print ($_POST['min_price']);
    // print($_POST['max_price']);
    $tours = array_filter($tours, function ($tour) {
        return $tour['price']['amount'] >= (int)$_POST['min_price'] &&
             $tour['price']['amount'] <= (int)$_POST['max_price'];
    });
  }

    $tours = array_values($tours);

    if(isset($_POST['sort_desc'])) {
        usort($tours, function ($tour_a, $tour_b) {
            return $tour_b['price']['amount'] - $tour_a['price']['amount'];
        });
    }
    if(isset($_POST['sort_asc'])) {
        usort($tours, function ($tour_a, $tour_b) {
            return $tour_a['price']['amount'] - $tour_b['price']['amount'];
        });
    }

?>

<!-- TEMPLATE -->

<section class="container-fluid shadow ">
    <h1 class="text-center py-3">Tour Catalog</h1>

    <div class="c-container">
        <section class="row">
            <div class="col">
                <div class="card c-card">
                    <div class="card-body">
                        <form action="/?page=tours" method="POST">
                            <div class="row">
                                <div class="col-4 col-lg-12">
                                    <label>Tour name</label>
                                        <input
                                        class="form-control mb-2" 
                                        type="text" 
                                        name="search" 
                                        placeholder="enker keywords..."
                                        value="<?= $_POST['search'] ?? "" ?>">
                                </div>
                                <div class="col-4 col-lg-12">
                                    <label>Minimun price</label>
                                    <input class="form-control mb-2" type="text" placeholder="enter min price" name="min_price"
                                        size="6" value="<?= $_POST['min_price'] ?? "" ?>">
                                </div>
                                <div class="col-4 col-lg-12">
                                    <label>Maximum price</label>
                                    <input class="form-control mb-2" type="text" placeholder="enter max price" name="max_price"
                                        size="6" value="<?= $_POST['max_price'] ?? "" ?>">
                                </div>
                                <div class="d-flex justify-content-center c-buttons ">
                                    <button name="sort_desc" class="btn btn-primary mx-2 c-sort">v</button>
                                    <button name="sort_asc" class="btn btn-primary mx-2 c-sort">^</button>
                                    <button type="submit" class="btn btn-primary px-4 mx-2 ">SEARCH</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>


        <section classs="row col-md-9">
        
            <div class="col">
                <div class="row">
                    <? for ($i = 0; $i < count($tours); $i++) { ?>
                        <div class="col-md-6 col-xl-4">
                    
                            <div class="card my-2 mx-2">
                    
                                <div id="carouselExampleIndicators" class="carousel slide">
                                    <div class="carousel-indicators">
                    
                                        <? foreach ($tours[$i]['image'] as $img) { ?>
                    
                                            <?php $isActive = true; ?>
                                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="<?= $img[$i] ?>"
                                                class="<?= $isActive ? 'active' : '' ?>" aria-current="<?= $isActive ? 'true' : '' ?>"
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
                                                <img src="<?= $img ?>" class="d-block w-100 c-img" alt="<?= $tours[$i]['name'] ?>">
                                            </div>
                                            <?php $isActive = false; ?>
                    
                                        <? } ?>
                                    </div>
                    
                                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                                        data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                                        data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>
                    
                    
                                <div class="card-body d-block">
                                    <h5 class="card-title"><?= $tours[$i]['name'] ?></h5>
                                    <div>
                                        <div class="badge rounded-pill text-bg-danger"
                                            style="<?= ($tours[$i]['discount']['amount'] == 0) ? 'display:none' : 'visibility:visible' ?>">
                                            Discount: <?= $tours[$i]['discount']['amount'] ?><?= $tours[$i]['discount']['percentage'] ?>
                                        </div>
                                        <div type="button" class="btn btn-primary">
                                            <?= $tours[$i]['price']['amount'] ?>     <?= $tours[$i]['price']['currency'] ?>
                                        </div>
                                    </div>
                    
                    
                                    <p class="card-text"><?= $tours[$i]['description'] ?></p>
                                    <a href="?page=tour-detail&tour-id=<?= $tours[$i]['id'] ?>" target="_blank"
                                        class="btn btn-outline-primary d-block">See details</a>
                                </div>
                    
                            </div>
                    
                        </div>
                    <? } ?>
                </div>
                
            </div>
            
        </section>
    </div>

  
</section>







