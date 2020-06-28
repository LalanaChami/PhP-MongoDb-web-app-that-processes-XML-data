
<?php

//read.php

$feed_url = "http://www.sec.gov/rss/news/press.xml";

//https://www.feedforall.com/sample.xml
$object = new DOMDocument();

$object->load($feed_url);

$content = $object->getElementsByTagName("item");


?>

<!DOCTYPE html>
<html>
 <head>
  <title>Write RSS Feed in PHP</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.0/css/bulma.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
 </head>
 <body>
  <div class="container">
   <br />
   <h2 align="center">Write RSS Feed in PHP</h2>
   <br />

   <?php
    
   foreach($content as $row)
   {

        require 'vendor/autoload.php'; // include Composer's autoloader

        $client = new MongoDB\Client("mongodb://localhost:27017");
        $collection = $client->webproject->datas;

        $result = $collection->insertOne( [ 'title' => $row->getElementsByTagName("title")->item(0)->nodeValue , 'description' => $row->getElementsByTagName("description")->item(0)->nodeValue, 'link' => $row->getElementsByTagName("link")->item(0)->nodeValue, 'category' => $row->getElementsByTagName("category")->item(0)->nodeValue, 'pubDate' => $row->getElementsByTagName("pubDate")->item(0)->nodeValue  ] );
     
         echo "Inserted with Object ID '{$result->getInsertedId()}'";
    
   }

   echo "Successfully Added to MongoDB You can seen the result accessing with localhost/27017 !!!";

   ?>
  </div>
 </body>
</html>
