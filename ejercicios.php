<?php

    //1.4
    $character = [
        'name' => 'Jack Sparrow',
        'age' => 10
    ];

    $character['age'] = 25;

    //1.5
    $firstName = 'Jon';
    $lastName = 'Snow';
    $age = 24;

    echo "Soy $firstName $lastName. Tengo $age años y me gustan los lobos";

    echo "<br>";
    //2.1
    echo 10 * 5;

    echo "<br>";

    //3.1
    $cars = ["Saab", "Volvo", "BMW"];
    echo $cars[1];
    echo "<br>";

    //3.2
    $cars[0] = 'Ford';
    print_r($cars);

    echo "<br>";
    //3.3
    echo count($cars);

    echo "<br>";

    //3.4
    $rickAndMorty = ["Rick", "Beth", "Jerry"];
    $rickAndMorty[] = "Morty";
    $rickAndMorty[] = 'Summer';
    print_r($rickAndMorty);

    echo "<br>";

    //5.2
    for ($i=0; $i<=9; $i++){
        if ($i % 2 == 0){
            echo "$i<br>";
        }
    }
