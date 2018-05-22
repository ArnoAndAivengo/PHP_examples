<?php

$folder = ".";

function mydir($folder){
	$h  = opendir($folder);
	while($fn = readdir($h)){
	  if( in_array($fn,[".",".."] ))
		  continue;
	  if( is_dir($folder."/".$fn) ){
		echo "<blockquote><b>$fn</b><br>\n";
		mydir($folder."/".$fn);
		echo "</blockquote>";
	  } else
		echo "<a href='$folder/$fn'>$fn</a><br>\n";
	}
}
mydir($folder);