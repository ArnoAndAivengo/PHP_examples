<?php
 if( $rows = $news->getNews() )
   foreach($rows as $row){
     $dt = date("d-m-Y H:i:s",$row['datetime']);
     echo <<<NEWS
     <h2>{$row["title"]} ({$dt})</h2>
     <div class="row">{$row["description"]}</div>
     <div class="row"><strong>{$row["category"]}</strong></div>
     <div class="row">{$row["source"]}</div>
     <div class="row">
      <a href="?del={$row["id"]}">Удалить</a>
     </div>
NEWS;
   }      
?>