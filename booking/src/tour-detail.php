<!-- LOGIC -->
<? 
    $tours = load('tours');
    $tours = array_values($tours);
    // var_dump(($tours));
    $filtered_tour = array_filter($tours, fn($tour) => $tour['id'] === $tour_id) ;

    $filtered_tour = array_values($filtered_tour);
 
?>


<section>
    <article class="c-full_article">
        <h1><?=$filtered_tour[0]["name"]?></h1>
        <div class="subtitle-wrap">
            <div class="subtitle-location">
                <p><strong>Start location:</strong></p>
                <p><?= $filtered_tour[0]["start_position"] ?></p>
            </div>
            <div class="subtitle-time">
                 <p><strong>Time locations</strong></p>
                 <p><?= $filtered_tour[0]["time_start"] ?></p>
            </div>
        </div>
        <div class="detail-wrap">
            <div class="detail-gallery"></div>
            <div class="detail-price"></div>
        </div>

        <a href="/?page=book&id=<?= $filtered_tour[0]["id"] ?>">Book</a>
    </article>

    
    
</section>