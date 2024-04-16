<?
    // require $order;
    // var_dump($order);

    $id = (int)$_GET['id'];
    $tours = load('tours');
    $tours = array_values($tours);

    $orders = load('order');
    // var_dump($orders);

    //HW1: find the tour by id and print its nime in h2
    // a) array function b)for + if id=== tourid

    // foreach($tours as $key => $value) {
    //     if($tours[$key]['id'] == $id) {
    //         print($key['id']);
    //     }
    // }

    for($x=0; $x<count($tours); $x++){
        if($tours[$x]['id'] === $id) {
            $filtered_tour = $tours[$x];
            // $tour_name = $tours[$x]['name'];
        }
    }

    $booking_order = false;

?>



<hr>
<? if(!$booking_order)  {?>
    <form action="/?page=order&id=<?= $id ?>" method="POST">
        <h2>You are about to book the tour '<?=$filtered_tour['name']?>'</h2>
        <label>
            <select name="quantity">
                <option value="1">1 Seat</option>
                <option value="2">2 Seats</option>
                <option value="3">3 Seats</option>
            </select>
        </label>
        <br>
        <label>
            <input name="full_name" type="text" placeholder="your full name" >
        </label>
        <br>

        <label>
            <input type="text" name="email" placeholder="your email">
        </label>
        <br>
        <label>
            <input type="text" name="phone_number" placeholder="your phone_number">
        </label>
        <br>
        <button>BOOK</button>
        
        <?php $booking_order = true?>
    </form>
<?}else {?>
    <?php print($booking_order)?>

        <div>
            <h3>You have successfully booked your vacation to <?= $filtered_tour['name'] ?></h3>
            <p>The total cost: <?= $orders['quantity'] * $filtered_tour['price']['amount'].$filtered_tour['price']['currency'] ?></p>
            <p>
                <?= $filtered_tour['name'] ?>: 
                <?=$orders['quantity']?> tickets x <?= $filtered_tour['price']['amount'] ?> <?= $filtered_tour['price']['currency'] ?> 
                 
            </p>
        </div>
<?}?>
    



<hr>
<!-- 
// HW2: show a success message to the client
    //  and print the total cost in this date_format

    // hot sands... : 2 ticketsx 50 EUR =  100EUR -->