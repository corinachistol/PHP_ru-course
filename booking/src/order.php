<?

    $client_full_name = $_POST['full_name'];
    $client_email = $_POST['email'];
    $client_phone_number = $_POST['phone_number'];

    $order_ticket_quantity = (int)$_POST['quantity'];
    $order_tour_id = $_GET['id'];

    $order = [
        'client' => [
            "full_name" => $client_full_name,
            "email"     => $client_email,
            "phone_number" => $client_phone_number
        ],
        "quantity" =>$order_ticket_quantity,
        "tour_id"  => (int)$order_tour_id

    ];

    save($order, "order");


    // HW2: show a success message to the client
    //  and print the total cost in this date_format

    // hot sands... : 2 ticketsx 50 EUR =  100EUR