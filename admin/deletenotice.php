
<?php

  ob_start();
  include("connect.php");
  if(isset($_GET['id'])!="")
  {
  $delete=$_GET['id'];
  $delete=mysql_query("DELETE FROM noticetbl WHERE noteid='$delete'");
  if($delete)
  {
      header("Location:noticelist.php");
  }
  else
  {
      echo mysql_error();
  }
  }
  ob_end_flush();

?>