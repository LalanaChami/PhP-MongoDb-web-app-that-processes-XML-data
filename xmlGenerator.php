<?php
header("Content-Type: application/rss+xml; charset=ISO-8859-1");
$rssfeed = '<?xml version="1.0" encoding="ISO-8859-1"?>';
$rssfeed .= '<rss version="2.0">';
$rssfeed .= '<channel>';
$rssfeed .= '<title>Sample RSS feed</title>';
$rssfeed .= '<link>http://www.test.com</link>';
$rssfeed .= '<description>Sample RSS Feed</description>';
$rssfeed .= '<language>en-us</language>';

require 'vendor/autoload.php'; // include Composer's autoloader

    $client = new MongoDB\Client("mongodb://localhost:27017");
    $collection = $client->webproject->datas;

    $result = $collection->find();

foreach ($result as $item) {

$rssfeed .= '<item><br>';
$rssfeed .= '<title>' . $item["title"] . '</title>';
$rssfeed .= '<description>' . $item["description"] . '</description>';
$rssfeed .= '<link>' . $item["link"] . '</link>';
$rssfeed .= '<category>' . $item["category"] . '</category>';
$rssfeed .= '<pubDate>' . $item["pubDate"] . '</pubDate>';
$rssfeed .= '</item>';

};

$rssfeed .= '</channel>';
$rssfeed .= '</rss>';

echo $rssfeed;

?>