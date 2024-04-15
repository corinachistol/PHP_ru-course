<?
    // include $tour_id;
    $id = (int)$_GET['id'];
    $tours = load('tours');
    $tours = array_values($tours);

    //HW1: find the tour by id and print its nime in h2
    // a) array function b)for + if id=== tourid

    // foreach($tours as $key => $value) {
    //     if($tours[$key]['id'] == $id) {
    //         print($key['id']);
    //     }
    // }

    for($x=0; $x<count($tours); $x++){
        if($tours[$x]['id'] === $id) {
            $tour_name = $tours[$x]['name'];
        }
    }

?>



<hr>
<form action="/?page=order&id=<?= $id ?>" method="POST">
    <h2>you are about to book the tour '<?=$tour_name?>'</h2>
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

</form>
<hr>