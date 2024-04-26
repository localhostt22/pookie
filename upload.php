<?php
require_once('vendor\autoload.php');

$client = new \GuzzleHttp\Client();

$file_path = 'C:\xampp\htdocs\validation\uploads\doc1.pdf'; // Replace this with the path to your file

$response = $client->request('POST', 'https://www.virustotal.com/api/v3/files', [
  'headers' => [
    'x-apikey' => '7e30a5888043142ef84203be99eb1f4e0fc1b2767d76051557144d581889ce72', // Replace 'Your_VirusTotal_API_Key' with your actual API key
  ],
  'multipart' => [
    [
      'name'     => 'file',
      'contents' => fopen($file_path, 'r'),
      'filename' => basename($file_path),
    ],
  ],
]);

echo $response->getBody();
?>
