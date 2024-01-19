<?php

$api_key = "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";



$url = "https://api.openai.com/v1/completions";

// "What is the capital of France?"
$prompt = filter_var($_POST["prompt"], FILTER_SANITIZE_STRING);;

$data = array(
    "model" => "text-davinci-003",  
    "prompt" => $prompt,
    "max_tokens" => 3000,
    "temperature" => 0.5,
);

$data_string = json_encode($data);

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    "Content-Type: application/json",
    "Authorization: Bearer $api_key",
    "Content-Length: " . strlen($data_string))
);

$output = curl_exec($ch);
curl_close($ch);
// print_r($output);

$output_json = json_decode($output, true);
$response = $output_json["choices"][0]["text"];

echo $response;
?>