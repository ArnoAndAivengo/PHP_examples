<?php

try{
   $client = new SoapClient("http://mysite.local/soap/stock.wsdl");
 
   $result = $client->getStock("5");
 
   echo "Товаров: ", $result;
}catch(SoapFault $e){
   echo $e->getMessage();   
}
?>