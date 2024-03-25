

#   INPUT

    > no input
    > malicious code
    > wrong format


client                                      server

x------------------ data ----------------> $variable 


USER
|
/examples/validation.php (access the page)
|
v
BROWSER
|
v
x--------------------------GET Req /examples/validation.php ------->SERVER
                                                                        |
                                                                        |         
                                                                isset($_GET['rate'])
                                                                        v
                                                Warning:... <-- $rate = $_GET['rate'];
                                                |                        |
                                                +---- <form><- ---------++                        
                                                |
<-------------response--------------------------+
|
v
BROWSER
v
render
v
WINDOW <------- user clicks button
v
client side validation
|
v -required
|
x--------------------------GET Req /examples/validation.php?rate=3 ------->SERVER





ASSOCIATIVE ARRAYS 

$_GET=[
    'rate' => ...
    'variable' => ...
    ....
]

{
    'rate':...,
}




