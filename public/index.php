<?php

if(isset($_GET['p'])){
    switch ($_GET['p']){
        case 'contact':
            include '../pages/contaact.php';
            break;
        case 'livreor':
            include '../pages/livreor.php';
            break;
        case 'images':
            include '../pages/images.php';
            break;
        default:
            include '../pages/error404.php';
            break;
    }
}else{
    include '../pages/accueil.php';
}