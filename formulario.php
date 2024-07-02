<?php

    $username = $_POST['username'];
    $password = $_POST['password'];
    $file = $_FILES['file'];

    //print_r($file);

    echo file_get_contents($file['tmp_name']);

    /*
     * Array (
     *      [name] => 1200px-PHP-logo.svg.png
     *      [full_path] => 1200px-PHP-logo.svg.png
     *      [type] => image/png
     *      [tmp_name] => /tmp/phpSndYAT
     *      [error] => 0
     *      [size] => 74891
     * )
     *
     * */

    //echo "El username es $username y la contraseña $password";
