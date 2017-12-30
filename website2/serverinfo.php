<?php
    #$_SERVER SUPERGLOBAL
    // Create Server Array
$server = [
    'Host Server Name' => $_SERVER['SERVER_NAME'],
    'Server Software' => $_SERVER['SERVER_SOFTWARE'],
    'Document Root' => $_SERVER['DOCUMENT_ROOT'],
    'Current Page' => $_SERVER['PHP_SELF']
];

// echo print_r($server);
    // Create Client Array

$client = [
    'Client Info' => $_SERVER['HTTP_USER_AGENT'],
    'Client IP' => $_SERVER['REMOTE_ADDR'],
    'Remote Port' => $_SERVER['REMOTE_PORT']
];

?>