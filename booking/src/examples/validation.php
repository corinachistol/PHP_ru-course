<!-- this script allows client to RATE A HOTEL -->
<style>
    body{
        background:#333;
        color:white;
    }
</style>

<?php

    $agg_rate_value = 4.5;
    $agg_rate_count = 10;
    

    if(isset($_GET['rate'])){
        print("You've entered {$_GET['rate']}<br>"); 

        //$_GET['rate'] --> string
        if (is_numeric(($_GET['rate']))){

            if(preg_match('/^([0-4](\.\d)?|5(\.0)?)$/', $_GET['rate'])){

                $rate = (float) $_GET['rate']; // make sure this is float
                var_dump($rate);
        
                $total_rate = $agg_rate_count * $agg_rate_value;
                $total_rate += $rate;
        
                $current_rate = $total_rate / ($agg_rate_count + 1);
                $formatted_current_rate =  number_format($current_rate, 1);

                print("You've rated this app with  $formatted_current_rate");

            }else{
                print ("Only numbers between 0.0 and 5.0 are allowed!");
            }

        }else{
            print("Only numbers between 0.0 and 5.0 are allowed!");
        }

        //HW2* print the formatted x.x
    } else {
        //HW2* print the formatted x.x
        print("This app was rated at $agg_rate_value by $agg_rate_count users");
    }


?>

<form action="/examples/validation.php" method="GET">
    <!-- connect a JS script to validate no input field "Rating is mandatory!" 
        rate transform into stars or something like this
-->

    <input
        type="text"
        name="rate" >
    <button>Rate</button>

</form>