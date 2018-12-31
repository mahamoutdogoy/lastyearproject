<?php
include('connect.php');
if(isset($_GET['status']))
{
$status1=$_GET['status'];
$select=mysql_query("select * from subjecttbl where sid='$status1'");
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
$update=mysql_query("update subjecttbl set status='$status_state' where sid='$status1' ");
if($update)
{
header("Location:subjectlist.php");
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