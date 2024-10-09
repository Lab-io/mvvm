<?php

header('Content-Type: application/json; charset=utf-8'); // use header for JSON Content-Type

$url = 'https://jsonplaceholder.typicode.com';
$collection_name = 'posts/1';
$request_url = $url . '/' . $collection_name;

$curlsession = curl_init($request_url); // Initializ cURL session

curl_setopt($curlsession, CURLOPT_RETURNTRANSFER, true); // true to return the transfer as a string of the return value of curl_exec() instead of outputting it directly.
curl_setopt($curlsession, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);

$response = curl_exec($curlsession); // Execute the request and get response

curl_close($curlsession); // close the cURL session

// $data = json_decode($response, JSON_PRETTY_PRINT);
// print_r(json_encode($data, JSON_PRETTY_PRINT)) . PHP_EOL;

echo $response . PHP_EOL;

?>