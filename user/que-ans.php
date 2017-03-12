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
<title>Add Question | knowledge.com</title>
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
</head>
<body class="page body_style_wide body_filled article_style_boxed template_single-standard top_panel_style_dark top_panel_opacity_solid top_panel_above menu_right sidebar_hide">
<a id="toc_top" class="sc_anchor" title="To Top" data-description="&lt;i&gt;Back to top&lt;/i&gt; - &lt;br&gt;scroll to top of the page" data-icon="icon-angle-double-up" data-url="" data-separator="yes"></a>
 
<div class="body_wrap">
<div class="page_wrap">
<div class="top_panel_fixed_wrap"></div>
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
<h2 class="logo_main" alt="">knowledge.com</h2>
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
<li class="menu-item current-menu-ancestor current-menu-parent menu-item-has-children"><a href="courses-streampage.html">Question-Answer</a>
<ul class="sub-menu">
<li class="menu-item"><a href="addque.php">Asks Question</a></li>
<li class="menu-item"><a href="que-ans.php">View Questions-Answers</a></li>
<li class="menu-item"><a href="myque.php">View MyQuestions</a></li>
<li class="menu-item"><a href="myans.php">View MyAnswers</a></li>
</ul>

</li>
<li class="menu-item menu-item-has-children"><a href="team-members.html">Discussion forum</a>

</li>
<li class="menu-item menu-item-has-children"><a href="blog-streampage.html">Test</a>

</li>

</ul>
</nav>
 
</div>
</div>
 
</header>
 
 

<div class="page_content_wrap">
<div class="content_wrap" >
<div class="content">

<article class="post_item post_item_single page">
<section class="post_content">
<div class="columns_wrap sc_columns columns_nofluid sc_columns_count_2">


<?php
//	include '../conclass.php';
  $obj=new conclass();
 $res=mysql_query("select * from que_tbl as q,ans_tbl as a where q.flag=1 and q.pk_q_id=a.fk_q_id");

while($row=MYSQL_fetch_array($res,MYSQL_ASSOC))
		{
		

			
			$title=$row["q_title"];
			$desc=$row["q_desc"];
			$ans=$row["ans_desc"];
			$date=$row["q_date"];
			$half_ans=substr($ans,0,220);
	
		}

?>


<h2>
<img alt="" src="http://2code.info/demo/html/ask-me/images/demo/avatar.png"></a>

<a href="single_question.html"><?php echo $title;?></a>
</h2>
<p class="question-desc" style="text-align:justify;"><?php echo $desc;?>Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis. Curabitur vitae velit in neque dictum blandit. Proin in iaculis neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur vitae velit in neque dictum blandit.</p>


<div class="question-details">
</div>
<h5><span class="glyphicon glyphicon-time"><?php echo $date;?>
<span class="glyphicon glyphicon-comment"><a href="#">5 Answer</a>
<span class="glyphicon glyphicon-user">70 views</span></span></span></h5>
<div class="clearfix"></div>
</div>
</article>
<article class="question question-type-poll">
<h2>
<a href="single_question_poll.html">This Is My Second Poll Question</a>
</h2>
<a class="question-report" href="#">Report</a>
<div class="question-type-main"><i class="icon-signal"></i>Poll</div>
<div class="question-author">
<a href="#" original-title="ahmed" class="question-author-img tooltip-n"><span></span><img alt="" src="http://2code.info/demo/html/ask-me/images/demo/admin.jpeg"></a>
</div>
<div class="question-inner">
<div class="clearfix"></div>
<p class="question-desc">Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis. Curabitur vitae velit in neque dictum blandit. Proin in iaculis neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur vitae velit in neque dictum blandit.</p>
<div class="question-details">
<span class="question-favorite"><i class="icon-star"></i>5</span>
</div>
<span class="question-category"><a href="#"><i class="icon-folder-close"></i>wordpress</a></span>
<span class="question-date"><i class="icon-time"></i>4 mins ago</span>
<span class="question-comment"><a href="#"><i class="icon-comment"></i>5 Answer</a></span>
<span class="question-view"><i class="icon-user"></i>70 views</span>
<div class="clearfix"></div>
</div>
</article>

</div>
</div>


</div>

</section>
</article>
</div>
</div>
</div> 

<footer class="contacts_wrap bg_tint_dark contacts_style_dark">
<div class="content_wrap">
<div class="logo">
<a href="index-2.html">
<img src="images/logo_footer.png" alt="">
</a>
</div>
<div class="contacts_address">
<address class="address_right">
Phone: 1.800.123.4567<br>
Fax: 1.800.123.4566
</address>
<address class="address_left">
San Francisco, CA 94102, US<br>
1234 Some St
</address>
</div>
<div class="sc_socials sc_socials_size_big">
<div class="sc_socials_item">
<a target="_blank" class="social_icons social_facebook">
<span class="sc_socials_hover social_facebook"></span>
</a>
</div>
<div class="sc_socials_item">
<a target="_blank" class="social_icons social_pinterest">
<span class="sc_socials_hover social_pinterest"></span>
</a>
</div>
<div class="sc_socials_item">
<a target="_blank" class="social_icons social_twitter">
<span class="sc_socials_hover social_twitter"></span>
</a>
</div>
<div class="sc_socials_item">
<a target="_blank" class="social_icons social_gplus">
<span class="sc_socials_hover social_gplus"></span>
</a>
</div>
<div class="sc_socials_item">
<a target="_blank" class="social_icons social_rss">
<span class="sc_socials_hover social_rss"></span>
</a>
</div>
<div class="sc_socials_item">
<a target="_blank" class="social_icons social_dribbble">
<span class="sc_socials_hover social_dribbble"></span>
</a>
</div>
</div>
</div>
</footer>
 
 
 
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
<script type="text/javascript" src="js/diagram/chart.min.js"></script>
<script type="text/javascript" src="js/core.customizer/front.customizer.min.js"></script>
<script type="text/javascript" src="js/skin.customizer.min.js"></script>
</body>

<!-- Mirrored from education-html.themerex.net/video-tutorials.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 03 Mar 2017 03:27:44 GMT -->
</html>