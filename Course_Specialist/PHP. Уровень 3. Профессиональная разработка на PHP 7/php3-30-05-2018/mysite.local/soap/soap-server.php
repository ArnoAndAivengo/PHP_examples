<?php
require "../news/INewsDB.class.php";
require "../news/NewsDB.class.php";

class NewsService extends NewsDB{
	/* Метод возвращает новость по её идентификатору */
	function getNewsById($id){
		try{
			$sql = "SELECT id, title, 
					(SELECT name FROM category WHERE category.id=msgs.category) as category, description, source, datetime 
					FROM msgs
					WHERE id = $id";
			$result = $this->_db->query($sql);
			if (!is_object($result)) 
				throw new Exception($this->_db->lastErrorMsg());
			return base64_encode(serialize($this->db2Arr($result)));
		}catch(Exception $e){
			throw new SoapFault('getNewsById', $e->getMessage());
		}
	}
        
        function db2Arr($result){
            $arr = [];
            while($row = $result->fetchArray(SQLITE3_ASSOC)){ 
              $arr[] = $row;            
            }
            return $arr;
        }
        
	/* Метод считает количество всех новостей */
	function getNewsCount(){
		try{
			$sql = "SELECT count(*) FROM msgs";
			$result = $this->_db->querySingle($sql);
			if (!$result) 
				throw new Exception($this->_db->lastErrorMsg());
			return $result;
		}catch(Exception $e){
			throw new SoapFault('getNewsCount', $e->getMessage());
		}
	}
	/* Метод считает количество новостей в указанной категории */
	function getNewsCountByCat($cat_id){
		try{
			$sql = "SELECT count(*) FROM msgs WHERE category=$cat_id";
			$result = $this->_db->querySingle($sql);
			if (!$result) 
				throw new Exception($this->_db->lastErrorMsg());
			return $result;
		}catch(Exception $e){
			throw new SoapFault('getNewsCountByCat', $e->getMessage());
		}
	}
}

// Отключение кеширования wsdl-документа
ini_set("soap.wsdl_cache_enabled", "0");
// Создание SOAP-сервера
$server = new SoapServer("http://mysite.local/soap/news.wsdl");
// Регистрация класса
$server->setClass("NewsService");
// Запуск сервера
$server->handle();

/*$ns = new NewsService();
echo base64_decode($ns->getNewsById(4));*/
?>