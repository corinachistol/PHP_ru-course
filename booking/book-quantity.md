



CLIENT                                  SERVEX 
x----------------req-------------------> index.php
                                           |
                                        process"
                                        1. logic
                                        2. print info template
                                           |
<------------res---------------------------+
|
render
|    user clicks
v   /
window
|
+--------req/?quantity=2 -----------------> index.php
                                           |
                                        process"
                                        1. logic
                                        2. print info template
                                           |
<------------res---------------------------+
|
window