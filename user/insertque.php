<?php	
	session_start();
	$email=$_SESSION["email"];
	$title=$_POST["title"];
	$desc=$_POST["desc"];
	$cat=$_POST["sub"];
	$date=date("d-M-y");
//	$cnt=1;
//	$like=1;
	$flag=0;
	$str="../img/".$_FILES["photo"]["name"];
	 
	$ext=pathinfo($str,PATHINFO_EXTENSION);
	if($ext=="jpg" || $ext=="png" || $ext=="jpeg")
	{
		move_uploaded_file($_FILES["photo"]["tmp_name"],$str);
	echo $email;
	echo $title,$desc,$date,$flag,$str;
	
	echo $cat; 
	include '../conclass.php';
	$obj= new conclass;
$id="NULL";
$res1=$obj->getdata("insert into que_tbl values('$id','$title','$desc','$str','$date','$email','$cat','$flag')");
	
if($res1==1)
{
	header('location:index-2.php');
	//echo "successfull";
}
else
{
	echo "nathii thayuu";
}
	}	
?>