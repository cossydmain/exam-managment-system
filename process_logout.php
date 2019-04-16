<?php
  include('process_login.php');
  SESSION_destroy();
  echo"logout..........";
  header('refresh:2;url=index.php');
?>