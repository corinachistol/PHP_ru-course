<!-- this script allows client to RATE A HOTEL -->
<style>
    body{
        background:#333;
        color:white;
    }
</style>

<?php

    if(isset($_GET['rate'])){
        $rate = $_GET['rate'];
        print("You've rated this app with {$rate}");
    }


?>

<form action="/examples/validation.php" method="GET">
    <!-- connect a JS script to validate no input field "Rating is mandatory!" 
        rate transform into stars or something like this
-->

    <input
        required
        type="text"
        name="rate" >
    <button>Rate</button>

</form>