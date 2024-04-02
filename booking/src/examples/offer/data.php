<?

//Indexed arrays =  each value has an index. And if the values are changed between them, it changes their indexes also
// Arrays associative -> each key has its own value, even if the values are cahnged with places . This is = to object literal from JS

// DATA

const NEW_STICKER = "https://www.kindpng.com/picc/m/765-7657671_brand-new-sticker-png-transparent-png.png";
const DEFAULT_IMAGE = "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRCMXNqV7Z3sOPARBobwYqS6aS10Q7yuHqqHQ&usqp=CAU";
//associative array 
$products = [
    [
        'name' => 'Test Product 1',
        'image' => DEFAULT_IMAGE,
        'category' => 'Category A',
        'new' => false,
        'price' => [
            'amount' => 100,
            'currency' => 'USD',
        ]
    ],
    [
        'name' => 'Test Product 2',
        'image' => DEFAULT_IMAGE,
        'category' => 'Category B',
        'new' => true,
        'price' => [
            'amount' => 50,
            'currency' => 'USD',
        ]
    ],
    [
        'name' => 'Test Product 3',
        'image' => DEFAULT_IMAGE,
        'category' => 'Category C',
        'new' => false,
        'price' => [
            'amount' => 150,
            'currency' => 'USD',
        ]
    ],
    [
        'name' => 'Test Product 4',
        'image' => DEFAULT_IMAGE,
        'category' => 'Category C',
        'new' => false,
        'price' => [
            'amount' => 400,
            'currency' => 'USD',
        ]
    ],
    [
        'name' => 'Test Product 5',
        'image' => DEFAULT_IMAGE,
        'category' => 'Category C',
        'new' => false,
        'price' => [
            'amount' => 300,
            'currency' => 'USD',
        ]
    ],
    [
        'name' => 'Test Product 6',
        'image' => DEFAULT_IMAGE,
        'category' => 'Category C',
        'new' => false,
        'price' => [
            'amount' => 600,
            'currency' => 'USD',
        ]
    ],
];

?>