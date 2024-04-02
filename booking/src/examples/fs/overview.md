booking_p2_b 31/03

$order = [
    [
        'client_name' => 'Joe_John...',
        'tour_id'   => 1,
    ]
]
                    x----------------persistance / storage: files, databses,sessions, ... ------------->
                                                            ^
                                                            |
                                                        txt, csv, json, yml, (*xml)
                         
                        Name + 1 ticket                     + 1 ticket
                          |                                  |
                    s     v     e                      s     v      e     
                     +--order---+                       +--order---+     
                     |          |                       |          |    
          s     req  |          v end        s     req  |          v end     
          +----------x----------+            +----------x----------+     
          |                     |            |                     |      
x---------x---------------------v------------x---------------------v------------------>
                                |                                  |        
                                v                                  v     
                                HTML                               HTML     
                                |                                  |       
                                v                                  v     
                            window                             window      

                        
Utilizinf doar variabile e mai greu sa faci o modificare la ea, decit sa pastrezi informatia in alt mod.
Variabila traieste atit cit a fost incarcata resursa, pe urma dispare.
Faci refresh, pagina se incarca iar, variabilele la fel, pe urma dispar





# PHP / fs

$file = fopen("./client.txt", "w");
^        |
|        | find + open
|        +--------> client.txt
|                        |
------------------------+







Linux (ubuntu)
 |
 |   + git (corinachistol)
 |   |
 |   |      +---vscode ( user corina)
 |   |      |
 v   v      v
examples/ fs / 
 ^
 |
Linux ( container )  <------ chmod -R 777 .  

> sudo docker exec -it booking_booking-app-container_1 /bin/sh ->
sudo docker executa interactiv in interiorul containerului nsotru bin/sh (sa deschidem terminalul chiar in containerul nostru, din terminalul nostru intram direct in terminalul containerului)

> chmod -R 777 . ->
schimba modul recursiv pentru toate folderele 777 (drept de a citi, scrie si executa)


FS pot fi mai multe foldere create din numele diferitor utilizatori( linux,  git, user)


folder/
file
^
|
+--owner

drwx                            rwx                                 rwx 4 1000 1000 4096 Apr  2 10:00 examples
directory read write execute    r,w,e                               rwe
owner                           other users from this container     other users



cheatsheat fs linux
+ owner and others
+ write , read, execute (binary)
+ change mode

read about 
owner
change mode 
group of users