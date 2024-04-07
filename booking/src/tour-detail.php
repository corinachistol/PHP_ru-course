<!-- LOGIC -->
<? 
    require 'data.php';
    $filtered_tour = array_values( array_filter($tours, fn($tour) => $tour['id'] === $tour_id) ) ;

    // var_dump($filtered_tour);


?>


<section>
    <h3>Tour Details</h3>
    <h4><?=$filtered_tour[0]["name"]?></h4>
    
    
</section>