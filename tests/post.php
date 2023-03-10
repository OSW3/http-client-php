<?php
/// ======================================================================== ///
/// Test : Client Http                                                       ///
/// ------------------------------------------------------------------------ ///
/// Open terminal                                                            ///
/// > php post.php                                                           ///
/// ======================================================================== ///

print_r("--- ========================================================== ---\n");
print_r("--- TEST : CLIENT HTTP                                         ---\n");
print_r("--- Method : POST                                              ---\n");
print_r("--- ========================================================== ---\n");
print_r("\n\n");



/// 1. Requirements
/// ======================================================================== ///

require "../vendor/autoload.php";
use OSW3\HttpClient\Client;



/// 2. HTTP Client Instance
/// ======================================================================== ///

$client = new Client;
$parameters = array();
$header = array();
$stream = array();
$url = "https://jsonplaceholder.typicode.com/posts";
// $url    = require "./url.php";



/// 3. Change the Request Header
/// ======================================================================== ///

// $header['content-type'] = "application/json";
// $header['content-length'] = strlen($content);
// $header['content-charset'] = "utf-8";



/// 4. Override the Stream settings
/// ======================================================================== ///

// $stream['request-timeout'] = 30;
// $stream['connection-timeout'] = 30;



/// 5. Set the Request parameters
/// ======================================================================== ///

$parameters['title'] = "Title - nesciunt quas odio";
$parameters['body'] = "Body - repudiandae veniam quaerat sunt sed\nalias aut fugiat sit autem sed est\nvoluptatem omnis possimus esse voluptatibus quis\nest aut tenetur dolor neque";
$parameters['userId'] = 42;


/// 6. Execute the query
/// ======================================================================== ///

$response = $client->post($url, $parameters, $header, $stream);

print_r("-- RESPONSE : HEADER --");
print_r("\n\n");
print_r($response->headerRaw());
print_r($response->header());
print_r("\n\n");

print_r("-- RESPONSE : CONTENT --");
print_r("\n\n");
print_r($response->content());
print_r("\n\n");