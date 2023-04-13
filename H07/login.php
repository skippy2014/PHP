<?php
   
   
   session_start();
    if(isset($_GET["loguit"])){
        $_SESSION = array();
        session_destroy();
    };
    ?>
