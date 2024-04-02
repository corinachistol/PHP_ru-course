<?

    $file = fopen("./client.txt", "r");
    $name = fread($file, 100);
    print($name);


?>