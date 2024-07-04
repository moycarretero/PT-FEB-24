<?php
    require_once "Google/User.php";
    require_once "Facebook/User.php";

    $type = 'Google';

    use Google\User as GoogleUser;
    use Facebook\Login\User as FacebookUser;

    if ($type == 'Google'){
        $googleUser = new GoogleUser();
        if ($googleUser->login("patata", 1234)){
            echo "usuario logado correctamente con google";
        } else {
            echo "Error en login";
        }
    } else {
        $facebookUser = new FacebookUser();
        if ($facebookUser->login("patata", 1234)){
            echo "usuario logado correctamente con facebook";
        } else {
            echo "Error en login";
        }
    }


