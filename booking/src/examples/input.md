


# PHP / how to read data ?

 > why can't php directly read data from a user?


                        web browser                                                   web server
                    +----------------------+      HTTP                       +----------------------+
                    |                      |                                 |                      |
                    |                      |                                 |      $temp=10        |
                    |                      |                                 |         v            |
                    |                      |                                 |       process        |
                    |                      |                                 |         v            |
                    |                      |                                 |       variable       |
                    |                      |                                 |          v           |
                    |                      |      GET                        |                      |
                    |                      |     req /input.php?temp=10      |       input/php      |
    user----->      |                      |---------------->  [BBBB:HH] --->|      +---------+     |
                    |                      |                                 |      |         |     |
                    |                      |       res                       |      |         |     |
                    |                      | <---------------  [HH:BBBB]---->|      +---------+     |
                    |                      |                                 |                      |
                    +----------------------+                                 +----------------------+


Query String Parameters
script_url?temp=10&sky=cloud&....


