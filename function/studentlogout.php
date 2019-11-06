<!--====================================
  Author : Kartikeya P Malimath
  ==================================-->

  <?php
if(isset($_GET["login"]))  
{  
session_start();
unset($_SESSION);
session_destroy();
session_write_close();
header('Location: ../student.html');
die;
}
?>