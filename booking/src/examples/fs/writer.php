<?
    // ?name=John Doe&email=jd@example.com&age=30

        //HW1:using array functions copy only these 3 cells from the GEt array - >client array
        $client= [];

        if(array_key_exists('name',$_GET) &&
           array_key_exists('email', $_GET) &&
           array_key_exists('age', $_GET) ){

            $name = $_GET['name'];
            $email = $_GET['email'];
            $age = (int)$_GET['age'];

            // array_push($client, $name, $email, $age); // asa se introduct doar valorile,
            array_push($client, [
                'name' => $name,
                'email'=> $email,
                'age' => $age,
            ]);
          
        }

        if(array_key_exists('active', $_GET)){
            $active = (bool)$_GET['active'];
            $client[0]['active'] = $active ;
             
        }
          var_dump($client);

        //HW2: convert age to integer
        // Hw3: get active (true,false) - boolean


        


        //save to file
        $file = fopen("./data/client.json", "w");
        //scrie in file numele clientului
        fwrite($file, json_encode($client));
        //inchide file, foarte important!
        fclose($file);
   



?>