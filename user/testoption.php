<?php 
session_start();
$cid=$_REQUEST["id"];
$cnt=$_SESSION["num"];
$cnt=$cnt-1;
$marks=$_SESSION["mark"];
$option=$_POST["option"];

include '../conclass.php';
$obj2=new conclass();
$res1=$obj2->getdata("select * from test_tbl where fk_cat_id='$cid'");
$abc=mysql_num_rows($res1);
			
			if($abc>=$cnt)
			{
		$res1=$obj2->getdata("select * from test_tbl where fk_cat_id='$cid' and pk_t_id='$cnt'");
			while($row=mysql_fetch_assoc($res1))
			{
				$ans=$row["t_answer"];
			}
			}
	if($option==$ans)
{
	$_SESSION["mark"]=$_SESSION["mark"]+1;
}
	header("location:test.php?id=$cid");	
	
?>