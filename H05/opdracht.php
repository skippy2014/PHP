<?php
function logInFunctie(){
  $email = array('piet@worldonline.nl', 'klaas@carpets.nl', 'truushendriks@wegweg.nl');
  $wachtwoord = array('doetje123', 'snoepje777', 'arkiearkie201');
$toegang;
for($i = 0; $i <=2; $i++){
if($_POST['email'] == $email[$i] && $_POST['wachtwoord'] == $wachtwoord[$i]){
  $Toegang = true;
  break;
} else {
  $Toegang = false;};
};
return $Toegang;
}
  if(logInFunctie() == true){
  echo "Welkom!";
} else {echo "Sorry, geen toegang!";};

  ?>