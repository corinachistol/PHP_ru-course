<!-- intro p3 -->
<!-- DATA BASE -->

<?
    //HW2: make page_title and seat_price - constants
    //      confine to the naming conventions
    
    //HW3: format the total cost seat_price ,book_cost 
    //Total cost : 2 x 100.50 = 201.00
    $PAGE_TITLE = "Booking confirmation";   // string

    $SEAT_PRICE = 100.50;                   // flaot

    $book_client_vip = false;                // boolean
    $book_adults = 2;                       //int
    $book_cost = $book_adults * $SEAT_PRICE; // float.3333330

 
?>




<!--  TEMPLATE / VIEW -->

<h1><?= $PAGE_TITLE?></h1>
<p>Adults: <?= $book_adults ?></p>
<p>Total cost: <?= $book_adults?> x <?= $SEAT_PRICE?> = <?= $book_cost ?></p>

<? if($book_client_vip == true): ?>
    <p>VIP</p>
<? endif ?>

<a href="./contacts.php">Contact Us</a>