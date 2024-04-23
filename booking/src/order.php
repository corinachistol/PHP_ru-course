<?
    $client_full_name= $_POST['full_name'];
    $client_email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $client_phone_number = filter_input(INPUT_POST, 'phone_number', FILTER_VALIDATE_INT); // TREBU REGEX 
    
    $order_ticket_quantity = (int)$_POST['quantity'];
    $order_tour_id = (int)$_GET['id'];
    
    $order = [
        'client' => [
            "full_name" => $client_full_name,
            "email"     => $client_email,
            "phone_number" => (int)$client_phone_number
        ],
        "quantity" =>(int)$order_ticket_quantity,
        "tour_id"  => (int)$order_tour_id
        
    ];

    $tours = load('tours');
    $tours = array_values($tours);

    for ($x = 0; $x < count($tours); $x++) {
        if ($tours[$x]['id'] === $order_tour_id) {
            global $filtered_tour;
            $filtered_tour = $tours[$x];
            // $tour_name = $tours[$x]['name'];

        }
    }
        

    
    //form validation
    if ($_SERVER['REQUEST_METHOD'] === "POST") {
        global $errors;
        $errors = [];

        if(isset($_POST['full_name']) && !empty($_POST['full_name'])){
            $client_full_name = $_POST['full_name'];
            $client_full_name = trim($client_full_name);
            $client_full_name = htmlspecialchars($client_full_name);

            if (!preg_match("/^[a-zA-Z]+(?:\s[a-zA-Z]+)+$/", $client_full_name)) {
                $errors['name'] = "Name should contain only characters and space!";
            }

        } else{
            $errors['name'] = "Full name is required!";

        }

        if (!$client_email){
            $errors['email'] = "Please enter a valid email address!";
        }
       
        if (!$client_phone_number){
            $errors['phone'] = "Please enter a valid phone number!";
        }
            

        if (empty($errors)) {
            // print ("Data is saved in file! \n");
            // print("Successfully booked your vacation!");

            save($order, "order");


        } else {
            print ("There are still errors");
            var_dump($errors);
            die();
        }


    }
?>
<!-- 
// HW2: show a success message to the client
    //  and print the total cost in this date_format

    // hot sands... : 2 ticketsx 50 EUR =  100EUR -->

   <div class="container my-5 mx-auto <?= empty($errors) ? "success-message" : "hidden-message" ?>">
        <h3>You have successfully booked your vacation to <?= $filtered_tour['name'] ?></h3>
        <p>
            <?= $filtered_tour['name'] ?>: 
            <?= $order['quantity'] ?> tickets x <?= $filtered_tour['price']['amount'] ?> <?= $filtered_tour['price']['currency'] ?> 
                
        </p>
        <p>The total cost: <?= $order['quantity'] * $filtered_tour['price']['amount'] . $filtered_tour['price']['currency'] ?></p>
    </div>








    


    