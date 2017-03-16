<header class="top_panel_wrap bg_tint_dark">
 
<div class="menu_user_wrap">
<div class="content_wrap clearfix">
<div class="menu_user_area menu_user_right menu_user_nav_area">
<ul id="menu_user" class="menu_user_nav">

<li class="menu_user_controls">
<a href="#">
<span class="user_avatar">
<img alt="" src="../../<?php echo $pic;?>" srcset="http://1.gravatar.com/avatar/45e4d63993e55fa97a27d49164bce80f?s=32&amp;d=mm&amp;r=g 2x" class="avatar avatar-16 photo" height="16" width="16"/>
</span>
<?php 
		$email=$_SESSION["email"];
		
require '../conclass.php';
$obj=new conclass();
$res=$obj->getdata("select * from user_tbl where pk_email_id='$email'");
		
		while($row=MYSQL_fetch_array($res,MYSQL_ASSOC))
{
	$uname=$row["u_name"];
	$pic=$row["u_pic"];
}

?>

<span class="user_name"><?php echo $uname;?></span></a>
<ul>
<li><a href="#" class="icon icon-doc-inv">view profile</a></li>
<li><a href="#" class="icon icon-cog-1">edit profile</a></li>
<li><a href="#" class="icon icon-cog-1">change profile</a></li>
</ul>
</li>
<li class="menu_user_logout">
<a href="../login.php" class="icon icon-logout">Logout</a>
</li>
</ul>
</div>

</div>
</div>
 
 
<div class="menu_main_wrap logo_left">
<div class="content_wrap clearfix">
 
<div class="logo">
<a href="index-2.php">
<h3 class="logo_main" alt="">knowledge.com</h3>
<img src="images/logo_dark.png" class="logo_fixed" alt="">
</a>

</div>
 
 

 
 
<a href="#" class="menu_main_responsive_button icon-menu-1"></a>
<nav class="menu_main_nav_area">
<ul id="menu_main" class="menu_main_nav">
<li class="menu-item menu-item-has-children"><a href="index-2.php">Homepage</a>
</li>
<li class="menu-item menu-item-has-children"><a href="#">Tutorial</a>
<ul class="sub-menu">
<li class="menu-item menu-item-has-children"><a href="typography.html">Typography</a>
<ul class="sub-menu">
<?php //include 'conclass.php';
$obj=new conclass();

		$res=$obj->getdata("select * from category_tbl");
		$obj1=new conclass();

		while($row=MYSQL_fetch_array($res,MYSQL_ASSOC))
		{
			echo '<li class="menu-item"><a href="cat.php?id='.$row["pk_cat_id"].'">'.$row["cat_name"];
			echo '</a>
				<li>';

		}
?>

</ul>
</li>
<li class="menu-item"><a href="video-tutorials.html">Video Tutorials</a></li>
</ul>
</li>
<li class="menu-item menu-item-has-children"><a href="">Question-Answer</a>
<ul class="sub-menu">
<li class="menu-item"><a href="addque.php">Asks Question</a></li>
<li class="menu-item"><a href="que-ans.php">View Questions-Answers</a></li>
<li class="menu-item"><a href="myque.php">View MyQuestions</a></li>
<li class="menu-item"><a href="myans.php">View MyAnswers</a></li>
</ul>

</li>
<li class="menu-item menu-item-has-children"><a href="disforum.php">Discussion forum</a>

</li>
<li class="menu-item menu-item-has-children"><a href="">Test</a>
<ul class="sub-menu">
<?php //include 'conclass.php';
$obj=new conclass();

		$res=$obj->getdata("select * from category_tbl");
		$obj1=new conclass();

		while($row=MYSQL_fetch_array($res,MYSQL_ASSOC))
		{
			echo '<li class="menu-item"><a href="test.php?id='.$row["pk_cat_id"].'">'.$row["cat_name"];
			echo '</a>
				<li>';

		}
?>

</ul>

</li>

</ul>
</nav>
 
</div>
</div>
 
</header>
