<!-- LOGIC -->
<? 
    $tours = load('tours');
    $tours = array_values($tours);
    // var_dump(($tours));
    $filtered_tour = array_filter($tours, fn($tour) => $tour['id'] === $tour_id) ;

    // var_dump($filtered_tour);


    $filtered_tour = array_values($filtered_tour);
    var_dump($filtered_tour)


?>


<section>
    <h3>Tour Details</h3>
    <h4><?=$filtered_tour["name"]?></h4>
    
    
</section>