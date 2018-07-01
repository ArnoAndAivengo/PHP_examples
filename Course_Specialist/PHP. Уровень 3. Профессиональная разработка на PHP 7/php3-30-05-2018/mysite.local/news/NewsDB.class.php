<?php

class NewsDB implements INewsDB{
    const DB_NAME = 'C:/OSPanel/domains/mysite.local/news/news.sq3';
    const RSS_NAME = 'rss.xml';
    const RSS_TITLE = 'Новости';
    const RSS_LINK = '/news/news.php';
    
    protected $_db;
    /**
     *	Конструктор - создаёт базу для работы с новостями
     *	
     */    
    public function __construct() {
              
        $this->_db = new SQLite3(self::DB_NAME);
        
        if(filesize(self::DB_NAME) == 0){
        $queries[] = "
        CREATE TABLE msgs(
	id INTEGER PRIMARY KEY AUTOINCREMENT,
	title TEXT,
	category INTEGER,
	description TEXT,
	source TEXT,
	datetime INTEGER
        )";
        $queries[] = "
        CREATE TABLE category(
                id INTEGER,
                name TEXT
        )";
        $queries[] = "
        INSERT INTO category(id, name)
        SELECT 1 as id, 'Политика' as name
        UNION SELECT 2 as id, 'Культура' as name
        UNION SELECT 3 as id, 'Спорт' as name";
        
        foreach($queries as $query)
            $this->_db->exec ($query);
        }        
                
    }
    /**
     *	Деструктор - отключается от базы для работы с новостями
     *	
     */    
    public function __destruct() {
        $this->_db->close();
    }
    
       /**
	*	Создание RSS-ленты своими руками
	*	@return boolean - результат успех/ошибка
	*/    
    function createRSS() {
        $dom = new DOMDocument('1.0','UTF-8');
        $dom->formatOutput = true;
        $dom->preserveWhiteSpace = false;
        
        $rss = new DOMElement("rss");
        $dom->appendChild($rss);
        $version = $dom->createAttribute("version");
        $version->value = '2.0';
        $rss->appendChild($version);
        
        $channel = $dom->createElement('channel');
        $rss->appendChild($channel);
        
        $title = $dom->createElement('title',self::RSS_TITLE);
        $link = $dom->createElement('link',self::RSS_LINK);
        $channel->appendChild($title);
        $channel->appendChild($link);
        
        $rows = $this->getNews();
        for($i = 0; $i < count($rows); $i++){
            $item= $dom->createElement('item');
            
            $link= $dom->createElement('link', $rows[$i]['link']);
            $title = $dom->createElement('title', $rows[$i]['title']);
            $description = $dom->createElement('description', $rows[$i]['description']);
            $pubDate = $dom->createElement('pubDate', date('d-m-Y H:i:s',$rows[$i]['datetime']));
            $category = $dom->createElement('category', $rows[$i]['category']);
            
            $item->appendChild($title);
            $item->appendChild($link);
            $item->appendChild($description);
            $item->appendChild($pubDate);
            $item->appendChild($category);
            
            $channel->appendChild($item);
        }
        $dom->save(self::RSS_NAME);
    }
    
    
    /**
	*	Добавление новой записи в новостную ленту
	*	
	*	@param string $title - заголовок новости
	*	@param string $category - категория новости
	*	@param string $description - текст новости
	*	@param string $source - источник новости
	*	
	*	@return boolean - результат успех/ошибка
	*/
	function saveNews($title, $category, $description, $source){
            $dt = time();
            $query = "INSERT INTO msgs (title,category,description, source, datetime)"
                    . "VALUES (:title,:category,:description,:source,$dt)";
            $stmt = $this->_db->prepare($query);
            $stmt->bindParam(":title", $title, SQLITE3_TEXT);
            $stmt->bindParam(":category", $category, SQLITE3_INTEGER);
            $stmt->bindParam(":description", $description, SQLITE3_TEXT);
            $stmt->bindParam(":source", $source, SQLITE3_TEXT);
            
            $this->createRSS();            
            
            return $stmt->execute();
        }
        
      /*  title TEXT,
	category INTEGER,
	description TEXT,
	source TEXT,
	datetime INTEGER*/
	/**
	*	Выборка всех записей из новостной ленты
	*	
	*	@return array - результат выборки в виде массива
	*/
	function getNews(){
            $query = "SELECT msgs.id as id, title, category.name as category, description, source, datetime
            FROM msgs, category
            WHERE category.id = msgs.category
            ORDER BY msgs.id DESC";
            $result = $this->_db->query($query);
            while($rows[] = $result->fetchArray(SQLITE3_ASSOC)){  }
            return count($rows) ? $rows : false;
        }
	/**
	*	Удаление записи из новостной ленты
	*	
	*	@param integer $id - идентификатор удаляемой записи
	*	
	*	@return boolean - результат успех/ошибка
	*/
	function deleteNews($id){
             $query = "DELETE FROM msgs WHERE msgs.id = $id";
            return $this->_db->query($query);             
        }
}
?>