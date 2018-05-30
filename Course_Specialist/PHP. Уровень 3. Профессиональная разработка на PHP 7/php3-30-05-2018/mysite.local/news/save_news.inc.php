<?php
  
 $title   = filter_input(INPUT_POST, "title",FILTER_SANITIZE_STRING);
 $category = filter_input(INPUT_POST, "category",FILTER_SANITIZE_NUMBER_INT);
 $description = filter_input(INPUT_POST, "description",FILTER_SANITIZE_STRING);
 $source = filter_input(INPUT_POST, "source",FILTER_SANITIZE_URL);

 if(
   $title and 
   $category and 
   $description and 
   $source 
  ){
    if( $news->saveNews($title, $category, $description, $source ) ){
        echo "Новость добавлена";
    } else $errors[] = "Произошла ошибка при добавлении новости";
 } else $errors[] = "Заполните все поля";
print_r($errors);
?>