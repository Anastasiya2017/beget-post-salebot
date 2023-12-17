<?php

    $request = $_POST;

    const URL = 'https://api.whereby.dev/v1/meetings'; // url запроса

    // параметры запроса
    $params = [
        'endDate' => '',
        'isLocked' => '',
        // ...
    ];

    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, URL);
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
    curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($params));
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, true);
    curl_setopt($curl, CURLOPT_HEADER, false);
    curl_setopt($curl, CURLOPT_PROTOCOLS, CURLPROTO_HTTP | CURLPROTO_HTTPS);
    $response = curl_exec($curl);
    curl_close($curl);

    header('Content-Type: application/json');
    echo $response;
    exit();
