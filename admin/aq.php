	<?php
	   include('connect.php');
	   if(isset($_POST['submit']))
       {  
   
            $examid=$_POST['examnm'];
           /*$subnm=$_POST['subnm'];
		   $deptnm=$_POST['deptnm'];
		   $catnm=$_POST['catnm'];*/
		   $question=$_POST['question'];
		   //echo $question;exit;
		   if($_POST['menu']=='match'){
			  $op1=$_POST['lop1'].'-'.$_POST['rop1']; 
			  $op2=$_POST['lop2'].'-'.$_POST['rop2']; 
			  $op3=$_POST['lop3'].'-'.$_POST['rop3']; 
			  $op4=$_POST['lop4'].'-'.$_POST['rop4']; 
              $correct_op=$_POST['correct_op_match'];
			   
		   }else if($_POST['menu']=='find'){
			    $op1=$_POST['opt_f1'];
			   $op2=$_POST['opt_f2'];
			   $op3=$_POST['opt_f3'];
			   $op4=$_POST['opt_f4'];
			   $correct_op=$_POST['correct_op_find'];
		   }	   
		   else{
		   $op1=$_POST['opt_1'];
		   $op2=$_POST['opt_2'];
		   $op3=$_POST['opt_3'];
		   $op4=$_POST['opt_4'];
		   $correct_op=$_POST['correct_op'];
		   }
		   if($_POST['menu']=='wtword'){
			   $correct_op=$_POST['correct_op_word'];
		   }
		  else if($_POST['menu']=='fill'){
			  
			  $correct_op=$_POST['correct_op_fill'];
		  }
	      // $query="insert into questiontbl(qid,examid,questionname,op1,op2,op3,op4,correctop)values('','$examid','$question','$op1','$op2','$op3','$op4','$correct_op')";
	      $query="insert into questiontbl(examid,questionname,op1,op2,op3,op4,correctop)values('$examid','$question','$op1','$op2','$op3','$op4','$correct_op')";
           $result= mysql_query($query);
	       
	       if($result)
		      echo "record inserted successfully";
	       else
		   echo mysql_error();
	   
	   
	       mysql_close($con);
}

	
	?>