<?php
// Collecte des données dans l'article
include("../tools/api_notion.php");
$pageID = "9e113071-31e2-4a15-a3a4-b8e562f99874";

$getPageData = array(pageRequests($pageID));

//print_r($getPageData[0]["results"]);

//Query the image data
//print_r($getPageData[0]["results"][0]["image"]["file"]["url"]);

// afficher une image
print_r($getPageData[0]["results"]);

?>