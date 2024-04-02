




## PHP basics/ flow control

    * branching: 
        - if/else
        - switch/case
        - ? :

    * looping
        - for,foreach
        - while
        - do while


     VM                  +---------*--->
     v                  /
    start              ?                   ?       end
x------*=======*=======*=====*==...========*=========*--------> time
    ins1    inst2     inst3             insN
                        ^+---------------+/






## PHP / FLOW

       req                           res
       |                              ^
       v                              |  
x------*======*====*===*=================*------------------>
    start     |    |    |              end
              |    |    |
            $n=1   |   print($n)
                  $n++




          execution          execution
            |                   |
        s          e        s         e
x-------*==========*--------*=========*------>
                        ^
                        |
                     sleep mode
    PHP script se activeaza atunci cind facem refresh, se executa, elibereaza memoria. Cind este deja afisat pe exran - scriptul trece in sleep mode, sta pe un oarecare server lazy



                            req
user1(US) / chrome v100 ---------->

                                                            user1      user2
                                        index.php    x------*====*----*=====*---->

                            req
user2(US) / chrome v100 ---------->

doi user concomitent au cerut o pagina de pe server.
Timpul de executare a req se face sequential. User1 se incarca si se afiseaza, pe urma user2 incarca si afiseaza. In script se paote pastra date personale

Dar scriptul paote fi afisat si paralel , depinde de setarile serverului.
In aces caz , variabila n va exista de mai multe ori, 2 ori in cazul nostru- pentru fiecare client



x start
|
|
+----- const TICKET_PRICE = 100.50; 
|
+----- const DISCOUNT_L   = 300.00;
|
+----- const DISCOUNT_P   = 20; 
|
+----  $quantity = 3; 
|
+---- $quantity * TICKET_PRICE  ---> R
|
+---- $total = R
|
+-- $total > DISCOUNT_L  ? -----true  --->   
|                                         |
false                                    100-DISCOUNT_P ->R
|                                         |
|                                         $total * R -> R
|                                         | 
|                                         R/100
|                                         |
|                                        %total = R
+-----------------------------------------+
|
+--- print ($total)
|
x end



hm1: update the diagram
x start
|
v
|
v
rand(-50,100)
|
v
$temp = rand()
|
v
print($temp)
|
v
print(" )

|
v
$temp >=18 ? ----false
|                   |  
true                v
|                   print("Cold")
v                   |
print("Warm)        |
|                   |
+<------------------+
|
v
x end



x start 
|
v
$ad_views = rand(0, 5)
|
v
print($ad_views);
|
v
$ad_views < 4 ? ----------------------------false------->
|                                                       |               |                                                       |
|                                                       |               |                                                       |
v                                                       |        
 print("NEW Features available for only $1.99")         |
|                                                       |
+<------------------------------------------------------+
|
v
x end







x start
|
...
|
switch ($day) - 4
|
+- 1 -->Print("Mo") --> break --->
|                                |
+- 2 -->Print("Tu") --> break --->
|                                |
+- 3 -->Print("Wd") --> break --->
|                                |
+- 4 -->Print("Th") --> break --->
|                                |
+- 5 -->Print("Fr") --> break --->
|                                |
+- 6 -->Print("Su") --> break --->
|                                |
+- 7 -->Print("Sa") --> break --->
|                                |
+- default -->Print("Wrong...") ->
|                                |
+--------------------------------+
|
v
x end

switch case e mai rapid un pic decit if/else




