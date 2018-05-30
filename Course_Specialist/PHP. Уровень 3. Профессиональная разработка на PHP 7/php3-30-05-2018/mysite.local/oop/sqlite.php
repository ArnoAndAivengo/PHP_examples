<?php

$sq3 = new SQLite3("sqlite.sq3");

/*$sq3->exec('CREATE TABLE book '
        . '(title STRING)');
$sq3->exec('INSERT INTO book'
        . ' VALUES ("PHP7")');*/

$result = $sq3->query("SELECT title FROM book");
print_r($result->fetchArray(SQLITE3_ASSOC));
$sq3->close();