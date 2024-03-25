<?
//weather
// $temp =rand(-50,100) ;
// print($temp);
// print(" ");

// if($temp >= 18) {
//     //code to do if true
//     print("Warm");
// } else{
//     //code to do if false
//     print("COLD");
// }

$ad_views = rand(0, 5);

print($ad_views);

//HW2: change the condition to get the same result
$ad_views < 4 ? print("NEW Features available for only $1.99") : print(" ");
print(" ");






//switch /case

    $day = rand(1,10);

    print($day);

    switch ($day) {
        case 1: print("Mo"); break;
        case 2: print("Tue"); break;
        case 3: print("Wed"); break;
        case 4: print("Th"); break;
        case 5: print("Fr"); break;
        case 6: print("Sa"); break;
        case 7: print("Su"); break;

        default: print("Wrong day number!"); break;
    }


//terary operator
//  expression ? code_if_true : code_if_false;

$temp = rand(-50,100);

//estimation
$estimation = $temp >=18 ? "Warm" : "Cold";

//send data
print($estimation);

?>