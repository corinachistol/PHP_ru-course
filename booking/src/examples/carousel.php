<?
    $image =  [
        'https://photos.pandatur.md/27bf0496382d164c0a12d4ad9e5d99f4.jpg',
        'https://photos.pandatur.md/thumb_7d3182904b25025af11d098e4e5c19f6.jpg',
        'https://photos.pandatur.md/thumb_25a605f3b7dd8cf119ad6d8928b4272d.jpg',
        'https://photos.pandatur.md/thumb_6dcab957f93da114d9fe97b965523bb4.jpg',
        'https://photos.pandatur.md/c3b5beddb0c2ccc7e52f7cf895519a40.jpg',
        'https://photos.pandatur.md/thumb_11912ac0d45b539c9622f0eaa7beec30.jpeg',
        'https://photos.pandatur.md/thumb_fe5187728f23f6835ac51d703517964e.jpeg',
        'https://photos.pandatur.md/thumb_ed19380fd87e5948d1544bd5cce68e89.jpeg'
    ];
    // print($image[0])

    if(isset($_GET['page'])) {
        $page = $_GET['page'];
        print($page);
        if ($page >= 8 ) {
            $page = 1;
        }
        if ($page <1) {
            $page = 8;
          
        }

    }else{
        $page = 1;
    }

    $previous_page = $page - 1;
    $next_page = $page + 1;

    $active_image = $image[0]

?>

<style>
    #gallery{
        width: 500px;
        /* border:1px solid red; */
        margin: auto;
        text-align: center;
        /* display: flex; 
        overflow: hidden; */
    }

    #gallery a {
        text-decoration: none;
     
    }
     #gallery a:nth-child(1){
        font-size:30px;
        display: inline-block;
        transform: translateY(-85px);
        border-color: transparent;
        color: black;
    }
    #gallery a:nth-child(3){
        font-size:30px;
        display: inline-block;
        transform: translateY(-85px);
        border-color: transparent;
        color: black;
    }   

    #gallery a img.active{
        border: 1px solid black;
    }
   
</style>

<h3>Carousel</h3>

<div id="gallery">
    <a href="?page=<?=$previous_page?>">
        ◀
    </a>

    <a href="?page=1">
        <img src="<?=$image[0]?>"  width="300">
    </a>

    <a href="?page=<?=$next_page ?>">
        ▶
    </a>
    <hr>


    <? for($i=0; $i<count($image); $i++) { ?>
        <a href="?page=<?=$i+1?>">
            <img 
                src="<?=$image[$i]?>" 
                width="100"
                class="<?=($page == ($i+1) ? "active" : "")?>"
            >
        </a>
    <?}?>


    
</div>

