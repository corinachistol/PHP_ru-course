booking_p4  07/04/2024

    |
    GET
    |
    v
/?page=tours
    |
    v
    form
    |
    +----method="GET"                    +--------------URL
    |                                    |              v
    +--- action ="/?page=tours" ---GET req ----> /?search="sahara"
    |                                    |
    +-- name ="search"                   +----------BODY ""
    |
    +---SEARCH




    |
    GET
    |
    v
/?page=tours
    |
    v
    form
    |
    +----method="POST"                    +--------------URL
    |                                    |              v
    +--- action ="/?page=tours" ---POST req ----> /?page=tours"
    |                                    |
    +-- name ="search"                   +----------BODY "search=sahara" -----> tours.php
    |                                                                                |
    +---SEARCH                                                                       v  
                                                                                   SEARCH


                                                                                   
                                                                                            