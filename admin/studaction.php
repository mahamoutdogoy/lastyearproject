<?php
include('connect.php');
if(isset($_GET['status']))
{
$status2=$_GET['status'];
$select=mysql_query("select * from studenttbl where studid='$status2'");
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
$update=mysql_query("update studenttbl set status='$status_state' where studid='$status2' ");
if($update)
{
header("Location:studentlist.php");
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