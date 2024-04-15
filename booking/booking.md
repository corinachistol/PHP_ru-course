




# booking / REST API, restfull routes, ...
    > resource (URL,URI)

    GET
    /images/1.webp
    /css/style.css
    /js/script.js
    ...



    method           endpoint               action
    +-----------+------------------------+------------------+
    | GET       |   /?page=tours         | ALL              |
    +-----------+------------------------+------------------+
    | POST      |   /?page=tours         | FILTER           |
    +-----------+------------------------+------------------+
    | GET       |   /?page=book&id=###    |show ORDER FORM   |
    +-----------+------------------------+------------------+
    | POST      |   /?page=order&id=###    |process  ORDER    |
    +-----------+------------------------+------------------+
                                                ^
                                                |
                                                Which tour
  

    
     