<?php

$curlsession = curl_init(); // Initializ cURL session

curl_setopt($curlsession, CURLOPT_URL, "https://jsonplaceholder.typicode.com/posts"); // set the URL for the GET request. Error: No URL set
curl_setopt($curlsession, CURLOPT_RETURNTRANSFER, true); // true to return the transfer as a string of the return value of curl_exec() instead of outputting it directly.

$response = curl_exec($curlsession); // Execute the request and get response

if (curl_errno($curlsession)) {
    echo 'Error: ' . curl_error($curlsession);
} else {
    // $data = json_decode($response, true);
    // $data = json_encode($response, JSON_PRETTY_PRINT);
    // print_r($data);
    // echo $data;
    // print($response);
    print_r($response);
}

curl_close($curlsession); // close the cURL session 
