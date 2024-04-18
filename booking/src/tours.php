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
    $tours = array_filter($tours, function ($tour) {
        return $tour['price']['amount'] >= (int)$_POST['min_price'];
        
    });
  }
  if(isset($_POST['max_price']) && $_POST['max_price'] != ""  && $_POST['min_price'] == "" ){
    $tours = array_filter($tours, function ($tour) {
        return $tour['price']['amount'] <= (int)$_POST['max_price'];

    });
  }
  if( isset($_POST['min_price']) && $_POST['min_price'] != "" && isset($_POST['max_price']) && $_POST['max_price'] != "" ){
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

<section class="container-fluid ">
    <h1 class="text-center py-3">Tour Catalog</h1>

    <div class="container-fluid c-container">
        <section class="row col-lg-2 me-2">
            <div class="col">
                <div class="card c-card">
                    <div class="card-body">
                        <form action="/?page=tours" method="POST">
                            <div class="row">
                                <div class="col-4 col-lg-12">
                                    <label class="form-label">Tour name</label>
                                        <input
                                        class="form-control mb-2" 
                                        type="text" 
                                        name="search" 
                                        placeholder="enker keywords..."
                                        value="<?= $_POST['search'] ?? "" ?>">
                                </div>
                                <div class="col-4 col-lg-12">
                                    <label class="form-label">Minimun price</label>
                                    <input class="form-control mb-2" type="text" placeholder="enter min price" name="min_price"
                                        size="6" value="<?= $_POST['min_price'] ?? "" ?>">
                                </div>
                                <div class="col-4 col-lg-12">
                                    <label class="form-label">Maximum price</label>
                                    <input class="form-control mb-2" type="text" placeholder="enter max price" name="max_price"
                                        size="6" value="<?= $_POST['max_price'] ?? "" ?>">
                                </div>
                                <div class="d-flex justify-content-center c-buttons ">
                                    <button name="sort_desc" class="btn btn-primary mx-2 c-sort"><i class="bi bi-chevron-compact-down"></i></button>
                                    <!-- <input type="radio" name="sort_desc" formaction="/?page=tours"class="c-sort">v -->
                                    <button name="sort_asc" class="btn btn-primary mx-2 c-sort"><i class="bi bi-chevron-compact-up"></i></button>
                                    <button type="submit" class="btn btn-outline-primary px-4 mx-2 ">SEARCH</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>


        <section classs="row col-md-10">
        
            <div class="col">
                <div class="row">
                    <? for ($i = 0; $i < count($tours); $i++) { ?>
                        <div class="col-md-6 col-xl-4">
                    
                            <div class="card my-2 mx-2">
                    
                                <div id="carousel<?=$i?>" class="carousel slide">
                                    <div class="carousel-indicators">
                    
                                        <?php $isActive = true; ?>
                                        <? foreach ($tours[$i]['image'] as $imgKey => $img) { ?>
                                            
                                            <button type="button" 
                                                data-bs-target="#carousel<?=$i?>" 
                                                data-bs-slide-to="<?= $imgKey ?>"
                                                class="<?= $isActive ? "active" : ""?>" 
                                                aria-current="<?= $isActive ? "true" : "false" ?>"
                                                aria-label="Slide <?= $imgKey ?>"></button>

                                            <?php $isActive = false; ?>
                                        <? } ?>
                                    </div>
                    
                                    <div class="carousel-inner">
                    
                                        <?php $isActive = true; ?>
                                        <? foreach ($tours[$i]['image'] as $imgKey => $img) { ?>
                                            <div class="c-item carousel-item <?= $isActive ? 'active' : '' ?>">
                                                <img src="<?= $img ?>" class="d-block w-100 c-img" alt="<?= $tours[$i]['name'] ?>">
                                            </div>
                                            <?php $isActive = false; ?>
                    
                                        <? } ?>
                                    </div>
                    
                                    <button class="carousel-control-prev" type="button" data-bs-target="#carousel<?=$i?>"
                                        data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#carousel<?= $i ?>"
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







