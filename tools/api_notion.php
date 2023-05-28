<?php
// Query the Notion database
function dbRequests(){
    // Read token stored in local file
    $myfile = file_get_contents("./tools/token-api.json") or die("Unable to read file!");
    $data =  json_decode($myfile,true);
    $tokens = $data["token"];

    $curl = curl_init();

    curl_setopt_array($curl, [
        CURLOPT_URL => "https://api.notion.com/v1/databases/8026b887661d48749704d3d91dc9c974/query",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => "{\"page_size\":100}",
        CURLOPT_HTTPHEADER => [
            "Authorization: Bearer $tokens",
            "Notion-Version: 2022-06-28",
            "accept: application/json",
            "content-type: application/json"
        ],
    ]);

    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);

    if ($err) {
        return "cURL Error #:" . $err;
    } else {
        $jsonResponse = json_decode($response, true);
        return $jsonResponse;
    }
}
// echo dbRequests(); // Debug the functions

// Trying to get the most important data
//$arr = array(dbRequests());
// request design
// print_r($arr[0]["results"][0]["properties"]["Description"]["rich_text"][0]["text"]["content"]); // Description rapide
// print_r($arr[0]["results"][0]["properties"]["Titre"]["title"][0]["text"]["content"]); // titre de la page
//print_r($arr[0]["results"][2]["cover"]["file"]["url"]);


?>