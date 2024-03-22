
Docker container = Este un mediu virtual in care poti rula applicatia, fara a  tine cont de OS instalata pe calculator (host machine).Ne ofera un strat de abstractizare, izoleaza mediul in care rulam aplicatia de host machine.

HOST machine , datorita dockerului  poate accepta/primi guests. Containerul ne ofera posibilitatea de a rula medii virtuale cu OS personal care se numest guests. Se poate rula mai multe containere.
In interiorul containerul putem pune orice setare vrem,


    HOST MACHINE(desktop/laptop) v1
    |
+-----------------------------------------------------------+
|                                                           |
|    +------------------------------------------------+ <------------docker container    (guest)
|    |                                                |     |    
|    |    +--------------PHP interpreter----------+   |     |       
|    |    |                                       |   |     |    
|    |    |       8.3                             |   |     |    
|    |    |                                       |   |     |                   PHP source file   < ----------------IDE vscode
|    |    |                                       |   < --------------------+---------------+
|    |    |                                       |   |     |               |               |
|    |    |                                       |   |     |               |               |
|    |    |                                       |   |     |               |               |
|    |    |                                       |   |     |               |               |
|    |    |                                       |   |     |    
|    |    |                                       |   |     |    
|    |    |                                       |   |     |    
|    |    |                                       |   |     |    
|    |    |                                       |   |     |    
|    |    +---------------------------------------+   |     |      
|    |+------------------------------------------------+    |
|                                                           |                                         
+-----------------------------------------------------------+
|                                                           |
|               OS linux                                    |
|                                                           |
+-----------------------------------------------------------+










   HOST MACHINE(desktop/laptop) v2
    |
+------------------------------------------------------------+
|                                                            |
|    +------------------------------------------------+ <------------docker container    (guest)
|    |                                                 |     |    
|    |                          +------apache------+   |     |       
|    |       root dir.          | (webserver)      |   |     |    
|    |  +------------------+    |                  |   |     |    
|    |  |                   |   |  1.serve static  |   |     |                   
|    |  |  --index.html     |   |                  <-----------------------req------------  /index.html              
|    |  |                   |   | -----------------------------------------res------------->                   
|    |  |                   |   |                  |   |     |                   
|    |  |    page.php       |   |  2. mod php      |   |     |                   
|    |  |        |          |   |                  <-----------------------req------------  /page.php                  
|    |  |        |          |   |      +-----------------------------------res-------------->                
|    |  |        |          |   |      |           |   |     |                   
|    |  +--------|----------+   |      |           |   |     |    
|    |           v              |      |           |   |     |    
|    |  +--------------------+  |      |           |   |     |    
|    |  |  php interp.       |  |      |           |   |     |    
|    |  +--------------------+  |      |           |   |     |    
|    |           |              |      |           |   |     |    
|    |           |               + ----|-----------+   |     |      
|    |           ----------------------+               |     |      
|    +-------------------------------------------------+     |    
|    |                                                 |     |
|    |   --------->  OS (linux: alpine / bullseye)-    |     |
|    |   |                                             |     |
|    |+--|---------------------------------------------+     |
|        |                                                   |                                         
+--------|---------------------------------------------------+
|        |                                                   |
|        |      OS linux                                     |
|        |         ^                                         |
+--------|---------|-----------------------------------------+
         |         |
         |   sistema de operare a calculatorului
         |
         |
         sistema de operare pe care o punem in docker container









WEB HOSTING
    HOST MACHINE(desktop/laptop) v3
    |
+------------------------------------------------------------------------------------------------+
|                                                                                                |
|  booking/ (root)   --------------+     +------------------------------------------------+ <------------docker pull ----------> HUB
|     |                            |     |                                                 |     |    
|     +-----index.php              |     |                          +------apache------+   |     |       
|                                  +-----------> root dir.          | (webserver)      |   |     |    
|                                        |  +------------------+    |                  |   |     |    
|                                        |  |                   |   |  1.serve static  |   |     |                   
|                                        |  |  --index.html     |   |                  |   |     |          
|                                        |  |                   |   |                  |   |     |
|                                        |  |                   |   |                  |   |     |                   
|                                        |  |    page.php       |   |  2. mod php      |   |     |                   
|                                        |  |        |          |   |                  <-----------------------req------------  /index.php                  
|                                        |  |        |          |   |      +-----------------------------------res-------------->                
|                                        |  |        |          |   |      |           |   |     |                   
|                                        |  +--------|----------+   |      |           |   |     |    
|                                        |           v              |      |           |   |     |    
|                                        |  +--------------------+  |      |           |   |     |    
|                                        |  |  php interp.       |  |      |           |   |     |    
|                                        |  +--------------------+  |      |           |   |     |    
|                                        |           |              |      |           |   |     |    
|                                        |           |               + ----|-----------+   |     |      
|                                        |           ----------------------+               |     |      
|                                        +-------------------------------------------------+     |    
|                                        |                                                 |     |
|                                        |   --------->  OS (linux: alpine / bullseye)-    |     |
|                                        |   |                                             |     |
|                                        |+--|---------------------------------------------+     |
|                                            |                                                   |                                         
+--------------------------------------------|---------------------------------------------------+
|                                            |                                                   |
|                                            |      OS linux                                     |
|                                            |         ^                                         |
+--------------------------------------------|---------|-----------------------------------------+
                                             |         |
                                             |   sistema de operare a calculatorului
                                             |
                                             |
                                             sistema de operare pe care o punem in docker container


1. Serve static = serve the client with static files that it finds in the root directory.(css,hmtl,js,images). Server is looking for files and returns just them, is not processing them. 

2. Module PHP, is that interpreter. When the client is requesting page.php, this interpreter look for that file and not just returns it but it also executes it , runs it and prints in browser its content.