<?
    // require $order;
    // var_dump($order);

    $id = (int)$_GET['id'];
    $tours = load('tours');
    $tours = array_values($tours);

    $orders = load('order');
    // var_dump($orders);

    //HW1: find the tour by id and print its nime in h2
    // a) array function b)for + if id=== tourid

    for($x=0; $x<count($tours); $x++){
        if($tours[$x]['id'] === $id) {
            $filtered_tour = $tours[$x];
            // $tour_name = $tours[$x]['name'];
        }
    }
  

    // $nameError = "";
    // $emailError = "";
    // $phoneError = "";


    // if(array_key_exists('full_name', $_POST) && $_POST['full_name'] != "" ){
    //     $full_name = $_POST['full_name'];

    //     $full_name = trim($full_name);
    //     $full_name = htmlspecialchars($full_name);

    //     if(!preg_match("/^[a-zA-Z]+(?:\s[a-zA-Z]+)+$/", $full_name)){
    //         $nameError = "Name should contain only characters and space!";
    //     }

    // }else{
    //     $nameError = "Full name is required!";

    // }

    // if(array_key_exists('phone_number', $_POST) && $_POST['phone_number'] != "" ){
    //     $phone_number = $_POST['phone_number'];

    // }else{
    //     $phoneError = "Phone number is required!";

    // }

    // if(array_key_exists('email', $_POST) && $_POST['email'] != "" ){
    //     $email = $_POST['email'];

    // }else{
    //     $emailError = "Email is required!";

    // }
    $formSubmitted = false;

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Process the form data here (validation, database operations, etc.)

        // Assuming the form is successfully processed, set a flag indicating success
        $formSubmitted = true;
    } else {
        // Set the flag to false initially (form not yet submitted)
        $formSubmitted = false;
    }
    
 

  

?>

<section class="container">
    <div class="row">
        <div class="col-lg-12 text-center">
            <h2 class="my-5">You are about to book the tour '<?=$filtered_tour['name']?>'</h2>
        </div>
    </div>
    <div class="row">
        <form action="/?page=order&id=<?= $id ?>" method="POST" id="form" >
            <div class="row mb-3 mx-5 align-items-center">
                <div class="col-md-6">
                    <label for="quantity" class="form-label">Number of persons </label>
                </div>
                <div class="col-md-6">
                    <select name="quantity" id="quantity" class="form-select col-md-6"> 
                        <option value="1">1 Seat</option>
                        <option value="2">2 Seats</option>
                        <option value="3">3 Seats</option>
                    </select>
                </div>
            </div>

            <div class="row mb-3 mx-5 align-items-center">
                <div class="col-md-6">
                    <label for="full_name" class="form-label">Full Name</label>
                </div>
                <div class="col-md-6">
                    <input name="full_name" class="form-control " type="text" id="full_name" placeholder="Jane Doe"  >
                </div>
                <span style="color:red;"><?=$nameError?></span>
            </div>
           
            <div class="row mb-3 mx-5 align-items-center">
                <div class="col-md-6">
                    <label for="email" class="form-label">Email</label>
                </div>
                <div class="col-md-6">
                    <input id="email" class="form-control" type="text" name="email" placeholder="email@example.com">
                </div>
                <span style="color:red;"><?= $emailError ?></span>
            </div>

            <div class="row mb-3 mx-5 align-items-center">
                <div class="col-md-6">
                    <label for="phone_number" class="form-label">Phone number</label>
                </div>
                <div class="col-md-6">
                    <input id="phone_number" class="form-control" type="text" name="phone_number" placeholder="1234587">
                </div>
                <span style="color:red;"><?= $phoneError ?></span>
            </div>
            
            <div class="row mb-3 mx-5 align-items-center"> 
                <input type="submit" name="submit" class="btn btn-danger fw-bold form-control" >
            </div>

        </form>

    </div>


    <div class="<?= $formSubmitted ? "success-message" : "hidden-message" ?>container">
        <h3>You have successfully booked your vacation to <?= $filtered_tour['name'] ?></h3>
        <p>The total cost: <?= $orders['quantity'] * $filtered_tour['price']['amount'].$filtered_tour['price']['currency'] ?></p>
        <p>
            <?= $filtered_tour['name'] ?>: 
            <?=$orders['quantity']?> tickets x <?= $filtered_tour['price']['amount'] ?> <?= $filtered_tour['price']['currency'] ?> 
                
        </p>
    </div>
</section>
<!-- 
<script>
    $("form").submit(function(a){
        a.preventDefault();
    });
</script> -->



    

   

        

    



<!-- 
// HW2: show a success message to the client
    //  and print the total cost in this date_format

    // hot sands... : 2 ticketsx 50 EUR =  100EUR -->