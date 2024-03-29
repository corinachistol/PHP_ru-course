<?
    //by default, pagina se deschide in home /
    $page = 'home';

    //daca in url este o adresa page = ..., atunci fisierul respectiv se deschide
    if (isset($_GET['page'])) {
        $page = $_GET['page'];
    }

    // daca adresa introdusa page=abc, atunci pagina 404 incarca
    if (!file_exists("{$page}.php}")) {
       $page='404';
        http_response_code(404);
    }
?>