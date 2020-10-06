<?php
    header('Content-Type: application/json');

    $petName = "";

    $pet['bella']['maxPics'] = 25;
    $pet['whiskey']['maxPics'] = 28;
    $pet['norma']['maxPics'] = 9;
    $pet['lucy']['maxPics'] = 25;
    $pet['penny']['maxPics'] = 10;
    $pet['valkyrie']['maxPics'] = 11;
    $pet['pancake']['maxPics'] = 8;
    $pet['mice']['maxPics'] = 5;
    $pet['salem']['maxPics'] = 5;
    $pet['cookie']['maxPics'] = 8;
    $pet['gem']['maxPics'] = 8;
    $pet['patches']['maxPics'] = 34;
    $pet['coco']['maxPics'] = 23;
    $pet['charlie']['maxPics'] = 18;
    $pet['lucky']['maxPics'] = 10;
    $pet['elmo']['maxPics'] = 7;
    $pet['ginger']['maxPics'] = 6;

    if($pet[$_GET['name']] == null) {
        $data['status'] = "error";
        $data['message'] = "no pet found";
        echo json_encode( $data );
        die();
    }

    for($x = 1; $x <= $pet[$_GET['name']]['maxPics']; $x++) {
        $data['pictures'][$x - 1] = "https://tw2.pw/img/" . $_GET['name'] . "/" . $x . ".jpg";
        //$data['pictures'][$x - 1] = "https://i.imgur.com/sX0Xbs4.png";
    }

    echo json_encode( $data );
    die();


    

    