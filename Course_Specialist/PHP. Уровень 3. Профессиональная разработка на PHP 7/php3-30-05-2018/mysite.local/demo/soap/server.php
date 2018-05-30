<?php
    // Описание функции Web-сервиса
    function getStock($id){
       $stock = ["2" => 5, "5" => 12, "11" => 3]; 
       if(isset($stock[$id])){
           return $stock[$id];
       } else {
           throw new SoapFault("Server","Данный товар $id не найден");
       }
    }
    // Отключение кэширования WSDL-документа
    ini_set("soap.wsdl_cache_enabled", 1);
    
    // Создание SOAP-сервер
    $server = new SoapServer("http://mysite.local/soap/stock.wsdl");
            
    // Добавить класс к серверу
    $server->addFunction("getStock");
    
    // Запуск сервера
    $server->handle();
?>