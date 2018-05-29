<?php
  define('RSS_URL', 'http://mysite.local/news/rss.xml');
  define('FILE_NAME', 'news.xml');
  
  function download($url, $filename){
      file_put_contents($filename,file_get_contents($url));
  }
  
  if(!file_exists(FILE_NAME) or (filemtime(FILE_NAME)+45 < time())){
      download(RSS_URL,FILE_NAME);
  }
?><!DOCTYPE html>
<html lang="ru">
<head>
	<title>Новостная лента</title>
	<meta charset="utf-8" />
</head>
<body>
<h1>Последние новости</h1>
<?php
 $sxml = simplexml_load_file(FILE_NAME);
 //echo "<pre>",print_r($sxml),"</pre>";
 foreach($sxml->channel->item as $news){
     echo "<h3>",$news->title,"</h3>";
     echo "<p>",$news->description;
     echo "<p>Дата:",$news->pubDate;
     echo "<p>Категория: ",$news->category;
     //echo "<p>Ссылка: ",$news->link;
     echo "<hr>";
 }
?>
</body>
</html>