<!-- LOGIC -->
<? 
   

    $tours = load('tours');
    $tours = array_values($tours);
    $filtered_tour = array_filter($tours, fn($tour) => $tour['id'] === $tour_id) ;
    
    $filtered_tour = array_values($filtered_tour);
    var_dump($filtered_tour[0]['image']);

    if (array_key_exists('image', $_GET)) {
        $image = $_GET['image'];
        print ($image);
        if ($image >= 7) {
            $image = 1;
        }
        if ($image < 1) {
            $image = 7;

        }

    } else {
        $image = 1;
    }

    $previous_image = $image - 1;
    $next_image = $image + 1;

    $active_image = $filtered_tour[0]['image'][0];
?>


<section>
    <article class="container py-2">
        <h2 class="my-3"><?=$filtered_tour[0]["name"]?></h2>
        <div class="subtitle-wrap">
            <div class="subtitle-location">
                <p><strong>Place of Start & Return:</strong></p>
                <p><?= $filtered_tour[0]["start_position"] ?></p>
            </div>
            <div class="subtitle-time">
                 <p><strong>Start time</strong></p>
                 <p><?= $filtered_tour[0]["time_start"] ?></p>
            </div>
        </div>

        <div class="container  ">
            <div class="row">
                <div class="col col-md-8">
                    <div id="gallery">
                        <a 
                            href="?page=tour-detail&tour-id=<?= $filtered_tour[0]['id']?>&image=<?=$previous_image?>" 
                            class="btn">
                                ◀
                        </a>
                        <a href="?page=tour-details&tour-id=<?= $filtered_tour[0]['id'] ?>&image=1">
                           <img src="<?= $active_image?>" id="mainImage">
                        </a>
                        <a href="?page=tour-detail&tour-id=<?= $filtered_tour[0]['id'] ?>&image=<?= $next_image ?>" clas="next">
                            ▶
                        </a>
                        <hr/>
                        <?for($x=0; $x<=count($filtered_tour[0]['image']); $x++) {?>
                            <a href="?page=tour-details&tour-id=<?= $filtered_tour[0]['id'] ?>&image=<?=$x+1?>">
                                <img 
                                    id="thumb<?=$x+1?>" 
                                    src="<?= $filtered_tour[0]['image'][$x]?>" 
                                    class="thumb <?= $image == ($x+1) ? "active" : "" ?>">

                            </a>
                        <?}?> 
                        <!-- <img id="thumb1" onclick="selectImage(1)" src="images/1.jpg" class="thumb active">
                        <img id="thumb2" onclick="selectImage(2)" src="images/2.jpg" class="thumb">
                        <img id="thumb3" onclick="selectImage(3)" src="images/3.jpg" class="thumb">
                        <img id="thumb4" onclick="selectImage(4)" src="images/4.jpg" class="thumb">
                        <img id="thumb5" onclick="selectImage(5)" src="images/5.jpg" class="thumb"> -->
        
                    </div>
                </div>

                <div class="col col-md-4 d-flex align-items-center">
                    <div class="container bg-light rounded shadow px-2 py-3">
                        <div class="row">
                            <p class="col"><strong>Price</strong></p>
                            <p class="col text-muted">starting with <?=$filtered_tour[0]['price']['amount']?> <?= $filtered_tour[0]['price']['currency'] ?></p>
                        </div>
                        <div class="row">
                            <p class="col text-muted">Country</p>
                            <p class="col"><strong><?=$filtered_tour[0]['country']?></strong></p>
                        </div>
                        <div class="row">
                            <p class="col text-muted">Resort</p>
                            <p class="col"><strong><?=$filtered_tour[0]['resort']?></strong></p>
                        </div>
                        <div class="row">
                            <p class="col text-muted">Food type</p>
                            <p class="col"><strong><?=$filtered_tour[0]['food_type']?></strong></p>
                        </div>
        
                        <a class="btn btn-danger d-block fw-bold " href="/?page=book&id=<?= $filtered_tour[0]["id"] ?>">Book an excursion</a>
                    </div>
                </div>
            </div>
        </div>

    </article>

    
    
</section>



