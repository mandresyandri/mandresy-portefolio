<?php
// Query the Notion database
function dbRequests(){
    // Read token stored in local file
    $myfile = file_get_contents("./tools/token-api.json") or die("Unable to read file!");
    //$myfile = file_get_contents("token-api.json") or die("Unable to read file!"); // debug the api
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

//print_r(array(dbRequests()));

// Nouveau test avec les pages ID
function pageRequests($pageID){
    $myfile = file_get_contents("../tools/token-api.json") or die("Unable to read file!");
    //$myfile = file_get_contents("token-api.json") or die("Unable to read file!"); // debug the api
    $data =  json_decode($myfile,true);
    $tokens = $data["token"];
    $curl = curl_init();

    curl_setopt_array($curl, [
        CURLOPT_URL => "https://api.notion.com/v1/blocks/".$pageID."/children",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_HTTPHEADER => [
            "Authorization: Bearer $tokens",
            "Notion-Version: 2022-06-28",
            "accept: application/json"
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

// print_r(pageRequests(getPageID()[0]));

?>