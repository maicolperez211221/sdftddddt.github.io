<?php 
include("config.php");
$create = 'CREATE TABLE IF NOT EXISTS "short_urls" (id VARCHAR(200), "long_url" VARCHAR(9999), "short_urls" VARCHAR(200), "img" VARCHAR(200), "title" VARCHAR(200), "description" VARCHAR(200), "tipo" VARCHAR(50))';
$db = $con->query($create);
if($db){}
$domain = $_SERVER['REQUEST_URI'].'url.php';
$input_url=$_POST["url"]  ?? null;
$img=$_POST["img"] ?? null;
$tipo=$_POST["red"] ?? 'false';
$title=  $_POST["title"] ?? null;
$description= $_POST["description"] ?? null;
$short_url=''.substr(md5($input_url.mt_rand()),0,10);
$json = $_POST['json'] ?? null;
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
header("Allow: GET, POST, OPTIONS, PUT, DELETE");
$method = $_SERVER['REQUEST_METHOD'];
if($method == "OPTIONS") {
    die();
}
if($method == "GET") {
    
    
?>

<!DOCTYPE html><html xmlns:og="http://opengraphprotocol.org/schema/" xmlns:fb="http://www.facebook.com/2008/fbml" lang="es" class="region-www-styles">
  <head>
                <html lang="en">
                <head>
                    <meta charset="UTF-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">                    
                    <link rel="icon" type="image/x-icon" href="https://static1.es.squarespace.com/static/5134cbefe4b0c6fb04df8065/t/5be0b4d96d2a73f0ce4f95ff/favicon.ico">
                    <link rel="apple-touch-icon" href="https://static1.es.squarespace.com/static/5134cbefe4b0c6fb04df8065/t/5be0b4d96d2a73f0ce4f95ff/favicon.ico">
                    <title>URL Shortener</title>
                    <style type="text/css">
                        iframe {
                            border: none;
                            margin: 0;
                            padding: 0;
                            height: 100%;
                            width: 100%;
                        }

                        body, html {
                            padding: 0;
                            margin: 0;
                            height: 100%;
                            width: 100%;
                        }
                    </style>
                </head>
                  <body>

                    <iframe src="./short.html" scrolling="yes" frameborder="0"></iframe>


                </body>
                </html>

<?php

die();
}
if($method == "PATCH") {
    die();
}

if($method == "POST") {


if(!isset($input_url)) {
    echo json_encode(array("short" => "envie url para empezar"));
    die();
}

$sql = 'INSERT INTO "short_urls" ("id", "long_url", "short_urls", "img", "title", "description", "tipo") VALUES ("'.$short_url.'","'.$input_url.'","'.$short_url.'", "'.$img.'","'.$title.'","'.$description.'","'.$tipo.'")';
$run = $con->query($sql);
if($run) {
    echo json_encode(array("short" => $short_url));
}

}

?>