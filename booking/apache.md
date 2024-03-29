
                                    apache (web server)
-------------req------------>   +------------------------+
                                |                        |   - static serving
                                |                        |   - dynamic serving
                                |                        |   
                                |                        |   
                                |                        |   
                                |                        |   
                                |                        |   
                                |                        |   
                                |                        |   
                                |                        | 
                                +------------------------+  
                                        ^
                                        |
                                        |
                                     .htaccess (config file)





<------- res ---------------404.php
          |
          +----------HEADER +status code
          +---------- BODY :404 NOT FOUND


<--------res ------------
        HHHH|  BBBBBBBBBBBB
          ^
          |
          CODE

req
|
v
?page=contacts
|
v
index.php
+-------php < process $_GET['page']
|
|
...isset($_GET['page'])

...isset($_GET['page'])
|
+-----< include 'header.php'
        ...isset($_GET['page'])




HW:1 
        data.php -> multi level array: tour data   (data file)
HW2: 
        tours.php -> loop + conditionals + data + html 
HW3: 
        include tours.php ---> home.php

