<!-- LOGIC -->

<? 

    const TICKET_PRICE = 100;
    
    //daca cheia quantity exista  in array GET
    if( array_key_exists('quantity', $_GET) ){
        $quantity = $_GET["quantity"];
        
        //HW1: make sure the value is integer
       if (is_int($quantity)) {
           $cost = TICKET_PRICE * $quantity;
           $total = $cost;
       } else{
        $error= "Please specify an integer number!";
       }
    
    } else {
        $error=("You didn't specify any quantity!");
    }


    //HIBNT: php  function naming conve
    // type_action_param
    // type_param_action

?>


<!-- TEMPALTE -->
<a href="/?quantity=1">Buy 1 ticket</a><br>
<a href="/?quantity=2">Buy 2 ticket</a><br>
<a href="/?quantity=3">Buy 3 ticket</a><br>
<hr>

<form method="GET" action="/">
    <input type="text" name="quantity" placeholder="Enter desired value">
    <button>Buy</button>
</form>

<? if (isset($total)): ?>

    <div>
        <?=$quantity ?> tickets x <?= TICKET_PRICE?> = <?= $total?>
    </div>
<? endif ?>

<? if (isset($error)): ?>
    <div style="color:red">
        <?=$error?>
    </div>
<?endif?>