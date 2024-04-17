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
            "phone_number" => (int)$client_phone_number
        ],
        "quantity" =>(int)$order_ticket_quantity,
        "tour_id"  => (int)$order_tour_id

    ];

    save($order, "order");


    