<?php
 
if ($news->deleteNews((int)$_GET["del"]))
    echo "Новость удалена";
else 
    $errors[] = "Ошибка при удалении новости";
