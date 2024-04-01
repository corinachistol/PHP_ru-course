 ROUTING/ route dispatching
 
   req
    |
    v
 index.php?page=contacts
    -------------------
    HEADER (header.php)
    -------------------
    CONTENT (home.php)  <-------> DYNAMIC
    -------------------
    FOOTER (footer.php)
   


|
|
v
LOGIC
|
|
v
TEMPLATE


 
   req
    |
    v
 index.php?page=contacts
    -------------------
    HEADER (header.php)
    -------------------
    CONTENT (home.php)  <-------> 
                                 |
                                 +--- home.php
                                 +--- tours.php
                                          |
                                          +-------data.php
                                                   |
                                                   +------tours
                                 +--- support.php
                                 +--- contacts.php
    -------------------
    FOOTER (footer.php)
   