<?php
include("connect.php");
include('checkstud.php');
$students_in_my_class = 0;
$active_examinations = 0;
$my_subjects = 0;
$passed_exam = 0;
$failed_exam = 0;
$attended_exams = 0;
$locked_exams = 0;
$notice = 0;

$sql = "SELECT * FROM studenttbl WHERE catname = '$my_category' and deptname='$my_department'";
$result = mysql_query($sql);

if (mysql_num_rows($result) > 0) {
   
    while($row = mysql_fetch_assoc($result)) {
     $students_in_my_class++;
    }
} else {

}

$sql = "SELECT * FROM examtbl WHERE catname = '$my_category' AND status = '1'";
$result =  mysql_query($sql);

if (mysql_num_rows($result) > 0) {
   
    while($row = mysql_fetch_assoc($result)) {
     $active_examinations++;
    }
} else {

}


$sql = "SELECT * FROM subjecttbl WHERE catname = '$my_category'";
$result =  mysql_query($sql);

if (mysql_num_rows($result) > 0) {
   
    while($row = mysql_fetch_assoc($result)) {
     $my_subjects++;
    }
} else {

}

$sql = "SELECT * FROM assesmenttbl WHERE studid = '$my_id' AND status = 'PASS'";
$result = mysql_query($sql);

if (mysql_num_rows($result) > 0) {
   
    while($row = mysql_fetch_assoc($result)) {
     $passed_exam++;
    }
} else {

}

$sql = "SELECT * FROM assesmenttbl WHERE studid = '$my_id' AND status = 'FAIL'";
$result = mysql_query($sql);

if (mysql_num_rows($result) > 0) {
   
    while($row = mysql_fetch_assoc($result)) {
     $failed_exam++;
    }
} else {

}


$sql = "SELECT * FROM assesmenttbl WHERE studid = '$my_id'";
$result = mysql_query($sql);

if (mysql_num_rows($result) > 0) {
   
    while($row = mysql_fetch_assoc($result)) {
     $attended_exams++;
    }
} else {

}


$sql = "SELECT * FROM examtbl WHERE catname = '$my_category' AND status = '0'";
$result = mysql_query($sql);

if (mysql_num_rows($result) > 0) {
   
    while($row = mysql_fetch_assoc($result)) {
     $locked_exams++;
    }
} else {

}

$sql = "SELECT * FROM noticetbl";
$result = mysql_query($sql);

if (mysql_num_rows($result) > 0) {
   
    while($row = mysql_fetch_assoc($result)) {
     $notice++;
    }
} else {

}
mysql_close($con);