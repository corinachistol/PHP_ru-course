
|
v
index.php
...
include <------- tours.php
...                 |
                    v
                 $file = fopen("./data/tours.json", "r");  
                    |
                    v
                $tours = json_decode(fread($file, 1000000), true);
                    |
                    v
                  fclose($file);
                    |
                TEMPLATE
                <?     ?>
