<?php

header("Content-Type: text/html; charset=UTF-8");
$output = [];
function makeRequest($request,&$output){
   $params = [
     'http' => [
         'method' => "POST",
         'header' => 'User-Agent: PHPRPC/1.0\r\n'.
                     'Content-Type: text/xml\r\n'.
                     'Content-Length: '.strlen($request).'\r\n',
                     'content' => $request         
     ]  
   ];
   $context = stream_context_create($params);
   $url = 'http://mysite.local/xml-rpc-lab/xml-rpc-server.php';
   $result = file_get_contents($url,false,$context);
   
   $data = xmlrpc_decode($result);
   $output = (is_array($data) ) ?
           $data :
           unserialize(base64_decode($data))  ;   
}

$id = 4;
$request = xmlrpc_encode_request('getNewsById', [$id]);
makeRequest($request, $output);
var_dump($output);

?>