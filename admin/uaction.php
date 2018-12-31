<?php
include('connect.php');
if(isset($_GET['status']))
{
$status2=$_GET['status'];
$select=mysql_query("select * from usertbl where uid='$status2'");
while($row=mysql_fetch_array($select))
{
$status_var=$row['status'];
if($status_var=='0')
{
$status_state=1;
}
else
{
$status_state=0;
}
$update=mysql_query("update usertbl set status='$status_state' where uid='$status2' ");
if($update)
{
header("Location:userlist.php");
}
else
{
echo mysql_error();
}
}
?>
<?php
}
?>