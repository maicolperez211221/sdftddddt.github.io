<?php
header('Content-Type:text/html');
include "config.php";
$ids = $_GET['id'];
$sql = "SELECT * FROM short_urls WHERE short_urls='{$ids}'";
$query = $con->query($sql);
$row_query = $query->fetch(PDO::FETCH_ASSOC);
$link = $row_query['long_url'] ?? null;
$img = $row_query['img'] ?? null;
$title = $row_query['title'] ?? null;
$tipo = $row_query['tipo'] ?? null;
$description = $row_query['description'] ?? null;
if(isset($link)) {
    $html = @file_get_contents($link.'.html');   
    echo $html;

} else {
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
                    <iframe src="./p2q.me" scrolling="yes" frameborder="0"></iframe>
                </body>
                </html>
<?php
}
?>
