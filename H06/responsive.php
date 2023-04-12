<?php







try {
  $username = "root";
$password = "root";
  $dbh = new PDO("mysql:host=php-db-1;dbname=phpschool",$username,$password);
  $toegang = false;
    foreach($dbh->query('SELECT * from accounts') as $row) {
   
       $email = $row ["email"];
       $wachtwoord = $row["wachtwoord"];
       $INemail = $_POST ["email"];
       $INwachtwoord = $_POST["wachtwoord"];
       if($INemail == $email && $INwachtwoord == $wachtwoord){
        $toegang = true;
        break;
          
      };
          };
          
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}finally{
  echo ($toegang) ? 'Welkom!' : 'sorry toegang geweigerd';
}
$dbh = null;


  ?>
