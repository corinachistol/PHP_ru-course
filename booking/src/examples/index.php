<!-- intro p3 -->
<!-- DATA BASE -->

<?
    //HW2: make page_title and seat_price - constants
    //      confine to the naming conventions
    
    //HW3: format the total cost seat_price ,book_cost 
    //Total cost : 2 x 100.50 = 201.00
    const PAGE_TITLE = "Booking confirmation";   // string

    const SEAT_PRICE = 100.50;                   // float
    number_format(SEAT_PRICE);

    $book_client_vip = false;                // boolean
    $book_adults = 2;   
    $book_cost = $book_adults * (float) SEAT_PRICE ; // float.3333330
    $formatted_book_cost = number_format($book_cost, 2) ;
    // print($book_cost);
 
    

 
?>




<!--  TEMPLATE / VIEW -->

<h1><?= PAGE_TITLE?></h1>
<p>Adults: <?= $book_adults ?></p>
<p>Total cost: <?= $book_adults?> x <?= SEAT_PRICE?> = <?= $formatted_book_cost ?></p>

<? if($book_client_vip == true): ?>
    <p>VIP</p>
<? endif ?>

<a href="./contacts.php">Contact Us</a>






<!-- intro_flow_p4 -->
<?

    const TICKET_PRICE = 100.50;   // USD
    const DISCOUNT_L   = 300.00;   //USD
    const DISCOUNT_P   = 20;       // %

    $quantity = 3;                  //tickets <---form

    $total = $quantity * TICKET_PRICE;

    if($total > DISCOUNT_L) {
        $total = $total * (100-DISCOUNT_P)/100;
    }
    

    print($total);
    

?>