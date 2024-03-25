<?
    // associative array <------- HW3: read about indexed and associative arrays
    //      v
    // print($_GET['sky']);
    // print($_GET['temp']);

//DYNAMIC PAGES  (EXAMPLES:limba interfetei, sortezi ceva, bifa sa pui undeva,filtrezi ceva)
    $temp = $_GET['temp'];

//estimation
$estimation = $temp >=18 ? "Warm" : "Cold";

//send data
print($estimation);

?>
