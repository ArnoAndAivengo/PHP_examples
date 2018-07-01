<?php
function saveNews($title, $category, $description, $source){
	$dt = time();
	$query = "INSERT INTO msgs (title,category,description, source, datetime)"
			. "VALUES (:title,:category,:description,:source,$dt)";
	$stmt = $this->_db->prepare($query);
	$stmt->bindParam(":title", $title, SQLITE3_TEXT);
	$stmt->bindParam(":category", $category, SQLITE3_INTEGER);
	$stmt->bindParam(":description", $description, SQLITE3_TEXT);
	$stmt->bindParam(":source", $source, SQLITE3_TEXT);
	return $stmt->execute();
}