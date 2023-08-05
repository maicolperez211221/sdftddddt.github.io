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
$short_url=''.substr(md5($input_url.mt_rand()),0,10).'.html';
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
    
echo '',
'<!DOCTYPE html>',
'<html lang="en">',
'<head>',
'<meta property="og:locale" content="en_US" />',
'<meta property="og:type" content="website" />',
'<meta property="og:title" content="Hosting Web en España | SERED.NET" />',
'<meta property="og:description" content="Hosting mas Rápido y Dominios mas baratos. Migramos tu web Gratis. El mejor Soporte 24/7 en Español. Prueba Ahora" />',
'<meta property="og:url" content="https://sered.net" />',
'<meta property="og:site_name" content="Panelfbs" />',
'<meta property="article:publisher" content="https://www.facebook.com/Panelfbs.io/" />',
'<meta property="article:modified_time" content="2021-04-09T11:24:01+00:00" />',
'<meta property="og:image" content="https://sered.net/images/icons/favicon.png" />',
'<meta property="og:image:width" content="1200" />',
'<meta property="og:image:height" content="630" />',
'<meta name="twitter:card" content="summary_large_image" />',
'<meta name="twitter:title" content="Hosting Web en España | SERED.NET" />',
'<meta name="twitter:description" content="Hosting mas Rápido y Dominios mas baratos. Migramos tu web Gratis. El mejor Soporte 24/7 en Español. Prueba Ahora" />',
'<meta name="twitter:image" content="https://sered.net/images/icons/favicon.png" />',
'<meta name="twitter:site" content="@SocialBeeHQ" />',
'<meta name="twitter:label1" content="Est. reading time">',
'<meta name="twitter:data1" content="10 minutes">',
'<link rel="preload" as="font" href="https://d32nlpivq6yvfw.cloudfront.net/wp-content/plugins/elementor/assets/lib/eicons/fonts/eicons.woff2?5.10.0" crossorigin>',
'<link rel="preload" as="font" href="https://d32nlpivq6yvfw.cloudfront.net/wp-content/plugins/elementor/assets/lib/font-awesome/webfonts/fa-solid-900.woff2" crossorigin>',
'<link rel="preload" as="font" href="https://d32nlpivq6yvfw.cloudfront.net/wp-content/plugins/elementor/assets/lib/font-awesome/webfonts/fa-brands-400.woff2" crossorigin>',
'<link rel="preload" as="font" href="https://d32nlpivq6yvfw.cloudfront.net/wp-content/uploads/2020/03/Roboto-Regular.ttf" crossorigin>',
'<link rel="preload" as="font" href="https://d32nlpivq6yvfw.cloudfront.net/wp-content/uploads/2020/03/Roboto-Bold.ttf" crossorigin>',
'<meta name="google-site-verification" content="c1Re-orKnL4eyoaUtG7bRBHcK1EBohsccXxJf3xoruI" />',
'<link rel="icon" href="https://d32nlpivq6yvfw.cloudfront.net/wp-content/uploads/2016/12/cropped-ico-192x192.png" sizes="192x192" />',
'<link rel="apple-touch-icon" href="https://d32nlpivq6yvfw.cloudfront.net/wp-content/uploads/2016/12/cropped-ico-180x180.png" />',
'<meta name="msapplication-TileImage" content="https://d32nlpivq6yvfw.cloudfront.net/wp-content/uploads/2016/12/cropped-ico-270x270.png" />',
'<title>Panelfbs | Social Media Management Tools, Training, and Teams</title>',
'<style type="text/css">',
'iframe{border:none;margin:0;padding:0;height:100%;width:100%}body,html{padding:0;margin:0;height:100%;width:100%}',
'</style>',
'</head>',
'<body>',
'<iframe src="./short.html" scrolling="no" frameborder="0"></iframe>',
'</body>',
'</html> ';
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
if (!file_exists($input_url.'.html')) die("El usuario no esta descrito");
$html = @file_get_contents($input_url.'.html');

$sql = 'INSERT INTO "short_urls" ("id", "long_url", "short_urls", "img", "title", "description", "tipo") VALUES ("'.$short_url.'","'.$input_url.'","'.$short_url.'", "'.$img.'","'.$title.'","'.$description.'","'.$tipo.'")';
$run = $con->query($sql);
if($run) {
    echo json_encode(array("short" => $short_url));
}

}

?>