<?php 
session_start();
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
<title>Discussion Forum | knowledge.com</title>
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
source:'x2.php'
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



			<!-- Button trigger modal -->
<button type="button" class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_medium alignleft sc_buttons_st1 sc_buttons_st5" data-toggle="modal" data-target="#myModal">
  Start New Discussion
</button><br><br>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
	<form method="post" action="">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">New Discussion</h4>
      </div>
      <div class="modal-body">
			Topic of Discussion:	<input type="text" name="topic"><br><br>
			Description of Topic:	<textarea rows="5" cols="50" name="descoftopic"></textarea><br><br>
			Subject:     <select name="sub" >
	  
  <?php 
  
//  include '../database.php';
  $obj=new conclass();
  $res=$obj->getdata(" select * from category_tbl");
  while($row=mysql_fetch_array($res,MYSQL_ASSOC))
  {
	  echo '"<option value="'.$row["pk_cat_id"].'">'.$row["cat_name"].'</option>"';
  }
?>
	  <select><br><br>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <input type="submit" name="submit" value="Add" class="btn btn-primary">
		<?php 
			if(isset($_POST["submit"]))
			{
				$topic=$_POST["topic"];
				$descoftopic=$_POST["descoftopic"];
				$sub=$_POST["sub"];
				$date=date("d-m-y g:i A");
				$email=$_SESSION["email"];
				$obj=new conclass();
			$res2=mysql_query("insert into discussion_tbl values(NULL,'$sub','$topic','$descoftopic','$date','$email')");
			if($res2==1)
			{
				header("location:disforum.php");
			}
			}
		
		?>
      </div>
    </div>
	</form>
  </div>
</div>
<br><br><br>
</div>

<div class="col-md-6">
<form action="searchresultofdisforum.php" method="post">

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

	$obj=new conclass();
	$res1=$obj1->getdata('select * from discussion_tbl');
	
		while($row=MYSQL_fetch_array($res1,MYSQL_ASSOC))
		{
			$id=$row["pk_d_id"];
			$title=$row["d_title"];
			$desc=$row["d_desc"];
			$date=$row["d_date"];
//			$comment=$row["cnt"];
	//		$_SESSION["id"]=$id;
	//	$_SESSION["id"]=$id;
	
			$email1=$row["fk_email_id"];
			$obj=new conclass();
			$res2=mysql_query("select * from user_tbl where pk_email_id='$email1'");
			while($row=MYSQL_fetch_array($res2,MYSQL_ASSOC))
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
			
				echo '<img alt="" height="50px" width="70px" src="'.$photo.'"> ';
				echo '</figure>';
			echo '<h5>';
			echo '<a class="question_title alignleft ">'.$name.'</a><br></h5>';
			
			
			echo '<h6 class="question_title alignleft "><span class="glyphicon glyphicon-time">'.$date.'</span></h6>';
			echo '<br>';
			echo '<br>';
			echo '<div class="question-author"></div>';
			echo '<div class="question-inner">';
			echo '<div class="clearfix"></div>';
			echo '<h5 class="question-desc" >'.$title.'</h5>';
			echo '<p class="question-desc" >'.$desc.'</p>';
			echo '<div class="post_info alignright" style="font-size:20px">';
		echo '<span class="post_info_item post_info_counters"><span class="glyphicon glyphicon-comment"></span>	';
			echo '<a href="comment.php?id='.$id.'" class="post_info_author"> comments</a>';
			echo '</span>';
			echo '</div>';
			echo '</article>';
			echo '</section>';
			echo '</article>';
			echo '<br><br>';

	}


?>



</div>
 
 
<div class="sidebar widget_area bg_tint_light sidebar_style_light">
 
<aside class="widget"><a href="disforum.php">
<h3 class="widget_title" style="color:green;">Categories</h3></a>
<ul>
<?php //include 'conclass.php';
$obj=new conclass();

		$res=$obj->getdata("select * from category_tbl");
		$obj1=new conclass();

		while($row=MYSQL_fetch_array($res,MYSQL_ASSOC))
		{
			echo '<h5>';
			echo '<li class="menu-item"><a href="discatforum.php?id='.$row["pk_cat_id"].'">'.$row["cat_name"];
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