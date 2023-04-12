<?php


$username = "root";
$password = "root";


try {
  $dbh = new PDO("mysql:host=php-db-1;dbname=phpschool",$username,$password);
    foreach($dbh->query('SELECT * from cursist') as $row) {
        print_r($row);
    }
    $dbh = null;
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
?>