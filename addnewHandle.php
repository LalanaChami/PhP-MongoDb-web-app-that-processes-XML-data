<?php
$title = $_POST["title"];
$description = $_POST["description"];
$link = $_POST["link"];
$category = $_POST["category"];
$date = date("Y-m-d h:i:sa");

// echo $title;
// echo "<br>";
// echo $description;
// echo "<br>";
// echo $link;
// echo "<br>";
// echo $category;
// echo "<br>";
// echo $date;

require 'vendor/autoload.php'; // include Composer's autoloader

$client = new MongoDB\Client("mongodb://localhost:27017");
$collection = $client->webproject->datas;

$result = $collection->insertOne( [ 
    'title' => $title  , 
    'description' => $description, 
    'link' => $link, 
    'category' => $category, 
    'pubDate' => $date 
     ] );
     echo "Added to mongoDB !!!";



?>