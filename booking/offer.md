

# e-shop / offer
> renders catalog
> sorts price / attribute
> fitler attributes
> search by name

> paginator :HW1




for loop


        |
        v
        $i = 0
        |
        v
 +---> $i < 2 > -------false ---+
 |       |                      |
 |       |                      v
 |       true
 |       |
 |       v
 |       print($i)
 |       |
 |       v
 |       $i++
 |       |
 -------+



6 products total

 HW1: add paginator
 3 products/ page
 --------------
  [1] 2 > 








  function ($p1,$p2)
             |    |
             v    v
              >        1
              =        0
              <       -1 
// HW2: read and answer specifically what does each method?
    //include
    //include_once
    //require
    //require_once

//HW3: add 2 links on top of catalog  v ^ sort acscending, sort descending.


varianta lunga V1

     function compareByPrice ($p1, $p2) {
         // if($p1['price']['amount'] > $p2['price']['amount'] ){
         //     return -1;
         // }
         // if($p1['price']['amount'] < $p2['price']['amount'] ){
         //     return 1;
         // }
        // if($p1['price']['amount'] == $p2['price']['amount'] ){
         //     return 0;
         // }

         return $p1['price']['amount'] - $p2['price']['amount'];
     }

     //                  aici poti declara functia cu corpul ei, fara a face referinta la ea
    // usort($products, 'compareByPrice');

    //varianta mai scurta V2
    // usort($products, function ($p1,$p2) {
    //     return $p1['price']['amount'] - $p2['price']['amount'];
    // })



      // HW2: read and answer specifically what does each method?
    //include
    //include_once
    //require
    //require_once