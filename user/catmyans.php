<?php 
session_start();
$page = isset($_GET['page']) ? $_GET['page'] : 1;
?>
<!DOCTYPE html>
<html lang="en-US">

<!-- Mirrored from education-html.themerex.net/video-tutorials.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 03 Mar 2017 03:27:37 GMT -->
<head>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="../content/bootstrap.css" rel="stylesheet" />
<script src="../scripts/jquery-1.9.1.js"></script>
<script src="../scripts/bootstrap.js"></script>

<link rel="icon" type="image/x-icon" href="images/favicon.ico"/>
<title>My Answer | knowledge.com</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans%3A300italic%2C400italic%2C600italic%2C300%2C400%2C600&amp;subset=latin%2Clatin-ext&amp;ver=4.3.1" type="text/css" media="all"/>
<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:100,100italic,300,300italic,400,400italic,700,700italic&amp;subset=latin,latin-ext,cyrillic,cyrillic-ext" type="text/css" media="all"/>
<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Love+Ya+Like+A+Sister:400&amp;subset=latin" type="text/css" media="all"/>
<link rel="stylesheet" href="css/fontello/css/fontello.css" type="text/css" media="all"/>
<link rel="stylesheet" href="js/rs-plugin/settings.css" type="text/css" media="all"/>
<link rel="stylesheet" href="css/woocommerce/woocommerce-layout.css" type="text/css" media="all"/>
<link rel="stylesheet" href="css/woocommerce/woocommerce-smallscreen.css" type="text/css" media="only screen and (max-width: 768px)"/>
<link rel="stylesheet" href="css/woocommerce/woocommerce.css" type="text/css" media="all"/>
<link rel="stylesheet" href="css/style.css" type="text/css" media="all"/>
<link rel="stylesheet" href="css/shortcodes.css" type="text/css" media="all"/>
<link rel="stylesheet" href="css/core.animation.css" type="text/css" media="all"/>
<link rel="stylesheet" href="css/tribe-style.css" type="text/css" media="all"/>
<link rel="stylesheet" href="css/skins/skin.css" type="text/css" media="all"/>
<link rel="stylesheet" href="css/core.portfolio.css" type="text/css" media="all"/>
<link rel="stylesheet" href="js/mediaelement/mediaelementplayer.min.css" type="text/css" media="all"/>
<link rel="stylesheet" href="js/mediaelement/wp-mediaelement.css" type="text/css" media="all"/>
<link rel="stylesheet" href="js/prettyPhoto/css/prettyPhoto.css" type="text/css" media="all"/>
<link rel="stylesheet" href="js/core.customizer/front.customizer.css" type="text/css" media="all"/>
<link rel="stylesheet" href="js/core.messages/core.messages.css" type="text/css" media="all"/>
<link rel="stylesheet" href="js/swiper/idangerous.swiper.min.css" type="text/css" media="all"/>
<link rel="stylesheet" href="css/custom-style.css" type="text/css" media="all"/>
<link rel="stylesheet" href="css/responsive.css" type="text/css" media="all"/>
<link rel="stylesheet" href="css/skins/skin-responsive.css" type="text/css" media="all"/>

<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

<script>
$(document).ready(function(){

$('#demo1').autocomplete({
source:'x1.php'
});
});
</script>



</head>
<body class="page body_style_wide body_filled article_style_boxed template_single-standard top_panel_style_dark top_panel_opacity_solid top_panel_above menu_right sidebar_show sidebar_right">
<a id="toc_top" class="sc_anchor" title="To Top" data-description="&lt;i&gt;Back to top&lt;/i&gt; - &lt;br&gt;scroll to top of the page" data-icon="icon-angle-double-up" data-url="" data-separator="yes"></a>
 
<div class="body_wrap">
<div class="page_wrap">
<div class="top_panel_fixed_wrap"></div>
 
<?php include 'userheader.php'; ?>  

<div class="page_content_wrap">
<div class="row">
<div class="col-md-2">

<a href="addque.php"><button type="button" class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_medium  sc_buttons_st1 sc_buttons_st5" data-toggle="modal" data-target="#myModal">
  Ask Question
</button></a><br><br>
</div>






<div class="col-md-6">
<form action="searchresult.php" method="post">

  <div class="col-lg-10" style="padding-left:10px; border:blue;">
    <div class="input-group">
      <span class="input-group-btn">
 <br>       <h4 type="button" style=" color:green; "> Title:</button>
      </span>
	  
      <input class="form-control " style="backgound-color:white" type="text" name="demo1" id="demo1">
    </div><!-- /input-group -->
  </div><!-- /.col-lg-6 -->

<br>
<button type="submit" name="submit" class="search_submit icon-zoom-1" title="Start search"></button>

</form>
</div>
</div>

<div class="content_wrap">
 
<div class="content">



<?php
//	include '../conclass.php';
  //$obj=new conclass();
 //$res=mysql_query("select * from que_tbl where flag=1");
		
$cid=$_REQUEST["id"];
		if(!isset($_POST["btn"]))
			{

$noi=5;

 if($page=="" || $page=="1")
{
	$page1=0;
}
else
{
	$page1=($page*$noi)-$noi;
}

$next_page=$page+1;
$prev_page=$page-1;
$first_page=1;
$flag=1;	
	$obj=new conclass();
	$res1=$obj1->getdata("select * from que_tbl as q , ans_tbl as a where q.fk_cat_id='$cid' and a.fk_q_id=q.pk_q_id and a.fk_email_id='$email'  LIMIT {$page1}, {$noi}");

	
while($row=MYSQL_fetch_array($res1,MYSQL_ASSOC))
		{
			$id=$row["pk_q_id"];
			$title=$row["q_title"];
//			$desc=$row["q_desc"];
			$date=$row["q_date"];
	//		$_SESSION["id"]=$id;
	//	$_SESSION["id"]=$id;
			$email1=$row["fk_email_id"];
			$obj=new conclass();
			$res2=mysql_query("select * from que_view_tbl where fk_que_id='$id'");
			$cnt=mysql_num_rows($res2);
			if($cnt>0)
			{
			//$row=MYSQL_fetch_array($res2,MYSQL_ASSOC);
			while($row=MYSQL_fetch_array($res2,MYSQL_ASSOC))
			{
				$view=$row["view"];
			}
			}
			else
			{
				$view=0;
			}
			$obj=new conclass();
			$res=mysql_query("select *,count(pk_ans_id)'cnt' from ans_tbl where fk_q_id='$id'");
			
			while($row=MYSQL_fetch_array($res,MYSQL_ASSOC))
			{
				$ans=$row["cnt"];
				$ans_desc=$row["ans_desc"];
				$half_ans=substr($ans_desc,0,220);
			}
			
			$obj=new conclass();
			$res3=mysql_query("select * from user_tbl where pk_email_id='$email1'");
			while($row=MYSQL_fetch_array($res3,MYSQL_ASSOC))
			{
				
				$photo=$row["u_pic"];
				$name=$row["u_name"];
			}

			echo '<article class="post_item post_item_single page">';
			echo '<section class="post_content">';
			echo '<div class="tab-inner-warp" style="display: block;">';
			echo '<div class="tab-inner">';
			echo '<div class="sc_section" data-animation="animated fadeInUp normal">';

			echo '<article class="question question-type-normal">';
			echo '<a original-title="ahmed" class="question-author-img tooltip-n"><span></span>';
			
			echo '<figure class="sc_image alignleft sc_image_shape_round ">';
			
				echo '<img alt="" height="100px" width="130px" src="'.$photo.'"> ';
			//	echo $email;
	
			echo '</figure>';
			echo '<strong><h4>';
			echo '<a>'.$title.'</a><br></h4>';
			echo '<h6>';
			echo $half_ans;
			if($ans>0)
			{
				echo '.....<a class="post_info_date" href="ans.php?id='.$id.'" style="font-size:20px">More</a>';
			}
			echo '</h6></strong><br>';
			echo '<div class="question-author"></div>';
			echo '<div class="question-inner">';
			echo '<div class="clearfix"></div>';
	//x		echo '<p class="question-desc" >'.$desc.'</p>';
			echo '<div class="post_info" style="font-size:20px">';
			echo '<span class="post_info_item post_info_counters"><span class="glyphicon glyphicon-time"></span>';
			echo '<a class="post_info_date">'.$date.'</a>';
			echo '</span>';
			echo '<span class="post_info_item post_info_counters"><span class="glyphicon glyphicon-comment"></span>	';
			echo '<a href="ans.php?id='.$id.'" class="post_info_author">'.$ans.' answer</a>';
			echo '</span>';
			echo '<span class="post_info_item post_info_counters "><span class="glyphicon glyphicon-user"></span>';
			echo '<a  >'.$view.' views</a>';
			echo '</span>';
			echo '</div>';
			echo '</article>';
			echo '</section>';
			echo '</article>';
			echo '<br><br>';

		}
		$res1=$obj->getdata("select * from que_tbl as q , ans_tbl as a where q.fk_cat_id='$cid' and a.fk_q_id=q.pk_q_id and a.fk_email_id='$email'");
		$cnt=mysql_num_rows($res1);	
		//echo $cnt.'<br>';
		
		$a=$cnt/$noi;
		
		$a=ceil($a);
		$last_page=$a;
			}
?>


<?php
			if(!isset($_POST["btn"]))
			{
			echo '<br><center>';
			if($page==1)
			{
				
			}
			else 
			{	
			echo '<a href="catmyans.php?page='.$first_page.'&id='.$cid.'" style="text-decoration:none;"><button class="button"><<</button></a>';	
			}
			if($prev_page==0)
			{
				
			}
			else
			{
		echo '<a href="catmyans.php?page='.$prev_page.'&id='.$cid.'" style="text-decoration:none;"><button class="button">Previous</button></a>';	
			}
			
			for($b=1;$b<=$a;$b++)
		{
			echo '<a href="catmyans.php?page='.$b.'&id='.$cid.'" style="text-decoration:none;"><button class="button">'.$b.'</button></a>'; 
		}
		
		if($next_page==$a)
		{
			echo '<a href="catmyans.php?page='.$next_page.'&id='.$cid.'" style="text-decoration:none;"><button class="button">Next</button></a>';	
		}
		else
		{	
		
		}
		if($page==$last_page)
		{
			
		}
		else if($a==0)
		{
			
		}
		else 
		{	
		echo '<a href="catmyans.php?page='.$last_page.'&id='.$cid.'" style="text-decoration:none;"><button class="button">>></button></a>';
		}
		echo '</center>';
			}
		?>

 
 

 
 

</div>
 
 
<div class="sidebar widget_area bg_tint_light sidebar_style_light">
 
<aside class="widget"><a href="myans.php">
<h3 class="widget_title" style="color:green;">Categories</h3></a>
<ul>
<?php //include 'conclass.php';
$obj=new conclass();

		$res=$obj->getdata("select * from category_tbl");
		$obj1=new conclass();

		while($row=MYSQL_fetch_array($res,MYSQL_ASSOC))
		{
			echo '<h5>';
			echo '<li class="menu-item"><a href="catmyans.php?id='.$row["pk_cat_id"].'">'.$row["cat_name"];
			echo '</a>
				</li></h5>';
		}
		?>

</ul>
</aside>
 
  
</div>
 
</div>
</div>
 
 

<?php include 'userfooter.php'; ?>  
 
 
</div>
</div>
 
<a href="#" class="scroll_to_top icon-up-2" title="Scroll to top"></a>
<div class="custom_html_section"></div>
<script type="text/javascript" src="js/jquery/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery/jquery-migrate.min.js"></script>
<script type="text/javascript" src="js/jquery/ui/core.min.js"></script>
<script type="text/javascript" src="js/jquery/ui/widget.min.js"></script>
<script type="text/javascript" src="js/jquery/ui/tabs.min.js"></script>
<script type="text/javascript" src="js/jquery/ui/accordion.min.js"></script>
<script type="text/javascript" src="js/jquery/ui/effect.min.js"></script>
<script type="text/javascript" src="js/jquery/ui/effect-fade.min.js"></script>
<script type="text/javascript" src="js/jquery/jquery.blockUI.min.js"></script>
<script type="text/javascript" src="js/jquery/jquery.cookie.min.js"></script>
<script type="text/javascript" src="js/global.min.js"></script>
<script type="text/javascript" src="js/core.utils.min.js"></script>
<script type="text/javascript" src="js/core.init.min.js"></script>
<script type="text/javascript" src="js/shortcodes/shortcodes.min.js"></script>
<script type="text/javascript" src="js/superfish.min.js"></script>
<script type="text/javascript" src="js/jquery.slidemenu.min.js"></script>
<script type="text/javascript" src="js/mediaelement/mediaelement-and-player.min.js"></script>
<script type="text/javascript" src="js/mediaelement/wp-mediaelement.min.js"></script>
<script type="text/javascript" src="js/core.messages/core.messages.min.js"></script>
<script type="text/javascript" src="js/swiper/idangerous.swiper-2.7.min.js"></script>
<script type="text/javascript" src="js/swiper/idangerous.swiper.scrollbar-2.4.min.js"></script>
<script type="text/javascript" src="js/prettyPhoto/jquery.prettyPhoto.min.js"></script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script type="text/javascript" src="js/core.googlemap.min.js"></script>
<script type="text/javascript" src="js/diagram/chart.min.js"></script>
<script type="text/javascript" src="js/core.customizer/front.customizer.min.js"></script>
<script type="text/javascript" src="js/skin.customizer.min.js"></script>
</body>

<!-- Mirrored from education-html.themerex.net/shortcodes.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 03 Mar 2017 03:27:37 GMT -->
</html>