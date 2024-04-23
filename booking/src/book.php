<?
   
    $id = (int)$_GET['id'];
    $tours = load('tours');
    $tours = array_values($tours);

    $orders = load('order');
    // var_dump($orders);

    //HW1: find the tour by id and print its nime in h2
    // a) array function b)for + if id=== tourid

    for($x=0; $x<count($tours); $x++){
        if($tours[$x]['id'] === $id) {
             global $filtered_tour;
             $filtered_tour = $tours[$x];
            // $tour_name = $tours[$x]['name'];
            
        }
    }
  
    //define variables and set to emplty values;
    // var_dump($errors);
    

    $full_name = "";
    $email = "";
    $phone_number = "";
    
  

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
                    <label for="full_name" class="form-label" >Full Name</label>
                </div>
                <div class="col-md-6">
                    <input name="full_name" class="form-control" type="text" id="full_name" placeholder="Jane Doe" value="<?= $full_name ?>" >
                </div>
                <span class="form-helper" style="color:red;"><?=$errors['name'] ?? ""?></span>
            </div>
           
            <div class="row mb-3 mx-5 align-items-center">
                <div class="col-md-6">
                    <label for="email" class="form-label">Email</label>
                </div>
                <div class="col-md-6">
                    <input id="email" class="form-control" type="email" name="email" placeholder="email@example.com" value="<?= $email ?>">
                </div>
                <span style="color:red;"><?= $errors['email'] ?? "" ?></span>
            </div>

            <div class="row mb-3 mx-5 align-items-center">
                <div class="col-md-6">
                    <label for="phone_number" class="form-label">Phone number</label>
                </div>
                <div class="col-md-6">
                    <input id="phone_number" class="form-control" type="tel" name="phone_number" placeholder="1234587" value="<?= $phone_number ?>">
                </div>
                <span style="color:red;"><?= $errors['phone'] ?? "" ?></span>
            </div>
            
            <div class="row mb-3 mx-5 align-items-center"> 
                <input type="submit" name="submit" class="btn btn-danger fw-bold form-control"  value="Submit">
            </div>

        </form>

    </div>


     <!-- <div class="container <?= empty($errors) ? "success-message" : "hidden-message"?>">
        <h3>You have successfully booked your vacation to <?= $filtered_tour['name'] ?></h3>
        <p>The total cost: <?= $orders['quantity'] * $filtered_tour['price']['amount'].$filtered_tour['price']['currency'] ?></p>
        <p>
            <?= $filtered_tour['name'] ?>: 
            <?=$orders['quantity']?> tickets x <?= $filtered_tour['price']['amount'] ?> <?= $filtered_tour['price']['currency'] ?> 
                
        </p>
    </div> -->


   
</section>

<!-- <script>
    let form =document.getElementById('form')

    form.addEventListener('onclick', (e)=>{
        e.preventDefault()
    })
  
</script> -->



    

   

        

    



<!-- 
// HW2: show a success message to the client
    //  and print the total cost in this date_format

    // hot sands... : 2 ticketsx 50 EUR =  100EUR -->