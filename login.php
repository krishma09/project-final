<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<link href="Content/bootstrap.min.css" rel="stylesheet">
    <link href="css/jquery.dataTables_themeroller.css" rel="stylesheet">
    <link href="css/endless.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <script src="js/jquery-1.10.2.min.js"></script>
  <script src="Scripts/bootstrap.min.js"></script>
  <script src='js/jquery.dataTables.min.js'></script>
<script type="text/javascript">
function passid_validation(passid,mx,my)
{
	var pl=passid.value.length;
	if(pl==0 || pl>=my || pl<mx)
	{
		alert("password should not be empty/length must be between "+mx+" to "+my);
		passid.focus();
		return false;
	}
	return true;
}

</script>


</head>
<body >
<?php 
if (isset($_POST["btnlogin"]))
{
	$email=$_POST["email"];
	$password=$_POST["password"];
	$_SESSION["email"]=$email;
	$con=MYSQL_connect('localhost','root','');
MYSQL_select_db('knowlegde',$con);
$res=MYSQL_query("select * from user_tbl where pk_email_id='$email' and u_pwd='$password'",$con);
while($row=mysql_fetch_array($res)){
	$type=$row["type"];
}
$cnt=mysql_num_rows($res);
	
	echo $cnt;
	if($cnt==1)
	{
		
		if($type=="admin")
		{
			Header('location:admin/admain.php');	
		}
		else
		{
			
			Header('location:user/index-2.php');
		}
		
	}
	else
	{
		echo "something went wrong";
	}
}


?>
<form action="login.php" method="post" name="form1">
<br><br>
<div class="container">
<div class="col-md-3">
</div>
<div class="col-md-6">
	<div class="panel panel-default">
  <div class="panel-body">
<span class="glyphicon glyphicon-home" aria-hidden="true"><h3>Login</h3></span>
<br>
<label>Email</label>  
<div class="input-group">

  <span class="input-group-addon" id="basic-addon1">@</span>
  <input name="email" type="text" class="form-control" placeholder="Email" aria-describedby="basic-addon1" required />
</div>
<br>
<label for="password">Password</label>
  <div class="input-group">
    
	<span class="input-group-addon" id="basic-addon1">*</span>
    <input type="password" class="form-control" name="password" placeholder="Password" onblur="return passid_validation(document.form1.password,5,12);" required />
  </div>
  <br>
   
 <center>
  <button type="submit" name="btnlogin" class="btn btn-success">Login</button>
  
  </center>
  </div>
  </div>
  </div>
  <div class="col-md-3">
</div>

  </div>
</form>
</body>
</html>