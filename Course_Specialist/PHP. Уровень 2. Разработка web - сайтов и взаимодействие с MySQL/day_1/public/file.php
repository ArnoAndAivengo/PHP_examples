<?php
/*$fn = "foo.txt";
if(file_exists($fn)){
	echo "Есть<br>\n";
	echo "Размер:",filesize($fn),"<br>\n";
	echo "Время:",date("H:i:s",filemtime($fn)),"<br>\n";
}*/
//Hello, world! - 13
//Привет, мир! - 21

/*$fh = fopen($fn,"r+");//resource
//echo fread($fh,20);
//while( !feof($fh) )
  //echo fgetc($fh);
  echo fgetss($fh,100,"<mark>");
  echo fgets($fh);
fclose($fh);*/

/*$fh = fopen($fn,"a+");
fwrite($fh, "Привет, PHP!\r\n");
fclose($fh);*/

//$array = file($fn);
//echo "<pre>",print_r($array);

//header("Content-Type: image/jpg");
//readfile("penguins.jpg");
//<img alt="" src="file.php">

//echo file_get_contents("foo.txt");
//echo file_get_contents("https://www.specialist.ru");

/*file_put_contents("foo.txt",rand()."\r\n",FILE_APPEND);
echo file_get_contents("foo.txt");*/

copy("foo.txt","foo2.txt");
rename("foo2.txt","foo3.txt");
unlink("foo3.txt");






