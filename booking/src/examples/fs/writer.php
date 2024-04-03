<?
    // ?name=John Doe&email=jd@example.com&age=30

        //HW1:using array functions copy only these 3 cells from the GEt array - >client array
    
        $name = $_GET['name'];
        $email = $_GET['email'];
        $age = $_GET['age'];   //HW2: convert age to integer
                                // Hw3: get active (true,false) - boolean

        $client = [  
            'name' => $name,
            'email'=> $email,
            'age' => $age,
        ];


        //save to file
        $file = fopen("./data/client.json", "w");
        //scrie in file numele clientului
        fwrite($file, json_encode($client));
        //inchide file, foarte important!
        fclose($file);
   



?>