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


    
    //form validation
    if ($_SERVER['REQUEST_METHOD'] === "POST") {
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
            print ("Data is saved in file! \n");
            print("Successfully booked your vacation!");

            save($order, "order");

        } else {
            print ("There are still errors");
            var_dump($errors);
            die();
        }


    }
?>


   <div class="container <?= empty($errors) ? "success-message" : "hidden-message" ?>">
        <h3>You have successfully booked your vacation to <?= $filtered_tour['name'] ?></h3>
        <p>The total cost: <?= $orders['quantity'] * $filtered_tour['price']['amount'] . $filtered_tour['price']['currency'] ?></p>
        <p>
            <?= $filtered_tour['name'] ?>: 
            <?= $orders['quantity'] ?> tickets x <?= $filtered_tour['price']['amount'] ?> <?= $filtered_tour['price']['currency'] ?> 
                
        </p>
    </div>








    


    