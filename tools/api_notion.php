<?php
// Retrive database
function dbRequests(){
    $curl = curl_init();

    curl_setopt_array($curl, [
        CURLOPT_URL => "https://api.notion.com/v1/databases/8026b887661d48749704d3d91dc9c974",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_HTTPHEADER => [
            "Authorization: Bearer secret_7d6cM7KbAaWJPj67HyjFsYlC1GT1dIKiankfDZyg4Aq",
            "Notion-Version: 2022-06-28",
            "accept: application/json"
        ],
    ]);

    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);

    if ($err) {
        $answer =  "cURL Error #:" . $err;
    } else {
        $answer = $response;
    }

    return $answer;
        
}
?>