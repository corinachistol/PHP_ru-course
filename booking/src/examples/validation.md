

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
                                                                isset($_GET['rate']) ?
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
v - required
? - pattern  HW1*: try to allow only x.x format
x--------------------------GET Req /examples/validation.php?rate=3 ------->SERVER
                                                                        |
                                                                        |         
                                                                isset($_GET['rate']) ?
                                                                        |
                                                                is_numeric(($_GET['rate'])) ?
                                                                        |
                                                    if(preg_match('/^([0-4](\.\d)?|5(\.0)?)$/', $_GET['rate'])) ?
                                                                        |
                                                            $rate = (float) $_GET['rate']?
                                                                        |
                                                                        |
                                                Warning:... <-- $rate = $_GET['rate'];
                                                |                        |
                                                +---- <form><- ---------++                        
                                                |
<-------------response--------------------------+












ASSOCIATIVE ARRAYS 

$_GET=[
    'rate' => ...
    'variable' => ...
    ....
]

{
    'rate':...,
}


casting
<------------ (type)value


