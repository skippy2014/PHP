<?php
    session_start();
    try{
        $gebruiker = "root";
        $wachtwoord = "root";
        $toegang = false;
        $dbh = new PDO('mysql:host=php-db-1;dbname=phpschool', $gebruiker, $wachtwoord);

        foreach($dbh->query('SELECT * from accounts') as $row) {
            $_SESSION['gebruiker'] = $_POST['username'];
            $_SESSION['Pass'] = $_POST['password'];
            $username = $row['username'];
            $password = $row['password'];   
            $rol = $row['functie'];
            if ($_SESSION['gebruiker'] == $username && $_SESSION['wachtwoord'] == $password){
                echo "Welkom ".$_SESSION['gebruiker']." op deze website, je rol op de website is ".$rol.".<br> <br> <br>";
                if($rol !== 'Administrator'){
                    echo "Niet genoeg rechten";
               
                  } else {
                    echo "je hebt genoeg rechten om dit te zien."."<br>";
                  
                };
               
                $toegang = true;
            } 
        };
        if(!$toegang){
        $_SESSION['melding'] = "gebruikersnaam of wachtwoord is onjuist";
        header('location: login.php');
        };
    } catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        die();
    };
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website</title>
</head>

<body>
<p><a href="login.php?loguit">Uitloggen</a></p>
</body>
</html>