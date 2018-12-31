<?php

  ob_start();
  include("connect.php");
  if(isset($_GET['id'])!="")
  {
  $delete=$_GET['id'];
  $delete=mysql_query("DELETE FROM usertbl WHERE uid='$delete'");
  if($delete)
  {
      header("Location:userlist.php");
  }
  else
  {
      echo mysql_error();
  }
  }
  ob_end_flush();

?>