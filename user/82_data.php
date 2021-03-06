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
<title>Javascript Tutorials | knowledge.com</title>
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
<body class="page body_style_wide body_filled article_style_boxed template_single-standard top_panel_style_dark top_panel_opacity_solid top_panel_above menu_right sidebar_show sidebar_right">
<a id="toc_top" class="sc_anchor" title="To Top" data-description="&lt;i&gt;Back to top&lt;/i&gt; - &lt;br&gt;scroll to top of the page" data-icon="icon-angle-double-up" data-url="" data-separator="yes"></a>
 
<div class="body_wrap">
<div class="page_wrap">
<div class="top_panel_fixed_wrap"></div>
 
<?php include 'userheader.php'; ?>  
 
<div class="page_content_wrap">
<div class="content_wrap">
 
<div class="content">


<article class="post_item post_item_single page">
<section class="post_content">
<?php 
	$sid=82;
	$obj=new conclass();
	$res=$obj->getdata("select * from subcat_tbl where pk_s_id='$sid'");
		
		while($row=MYSQL_fetch_array($res,MYSQL_ASSOC))
		{
			$sname=$row["s_name"];
			$desc1=$row["s_desc1"];
			$desc2=$row["s_desc2"];
			$desc3=$row["s_desc3"];
		}
?>



<h3 class="widget_title" style="text-align:center"><?php echo $sname;?></h3>
 
<div class="sc_line sc_line_style_solid margin_top_3em"></div>
<strong style="font-size:20px;">




<p>Form validation normally used to occur at the server, after the client had entered all the necessary data and then pressed the Submit button. If the data entered by a client was incorrect or was simply missing, the server would have to send all the data back to the client and request that the form be resubmitted with correct information. This was really a lengthy process which used to put a lot of burden on the server.</p>
<p>JavaScript provides a way to validate form's data on the client's computer before sending it to the web server. Form validation generally performs two functions.</p>
<ul class="list">
<li><p><b>Basic Validation</b> − First of all, the form must be checked to make sure all the mandatory fields are filled in. It would require just a loop through each field in the form and check for data.</p></li>
<li><p><b>Data Format Validation</b> − Secondly, the data that is entered must be checked for correct form and value. Your code must include appropriate logic to test correctness of data.</p></li>
</ul>
<h5>Example</h5>
<p>We will take an example to understand the process of validation. Here is a simple form in html format.</p>
<pre class="prettyprint notranslate tryit prettyprinted" style="cursor: default;"><span class="tag">&lt;html&gt;</span><span class="pln">
   
   </span><span class="tag">&lt;head&gt;</span><span class="pln">
      </span><span class="tag">&lt;title&gt;</span><span class="pln">Form Validation</span><span class="tag">&lt;/title&gt;</span><span class="pln">
      
      </span><span class="tag">&lt;script</span><span class="pln"> </span><span class="atn">type</span><span class="pun">=</span><span class="atv">"text/javascript"</span><span class="tag">&gt;</span><span class="pln">
         </span><span class="pun">&lt;!--</span><span class="pln">
            </span><span class="com">// Form validation code will come here.</span><span class="pln">
         </span><span class="com">//--&gt;</span><span class="pln">
      </span><span class="tag">&lt;/script&gt;</span><span class="pln">
      
   </span><span class="tag">&lt;/head&gt;</span><span class="pln">
   
   </span><span class="tag">&lt;body&gt;</span><span class="pln">
      </span><span class="tag">&lt;form</span><span class="pln"> </span><span class="atn">action</span><span class="pun">=</span><span class="atv">"/cgi-bin/test.cgi"</span><span class="pln"> </span><span class="atn">name</span><span class="pun">=</span><span class="atv">"myForm"</span><span class="pln"> </span><span class="atn">onsubmit</span><span class="pun">=</span><span class="atv">"</span><span class="kwd">return</span><span class="pun">(</span><span class="pln">validate</span><span class="pun">());</span><span class="atv">"</span><span class="tag">&gt;</span><span class="pln">
         </span><span class="tag">&lt;table</span><span class="pln"> </span><span class="atn">cellspacing</span><span class="pun">=</span><span class="atv">"2"</span><span class="pln"> </span><span class="atn">cellpadding</span><span class="pun">=</span><span class="atv">"2"</span><span class="pln"> </span><span class="atn">border</span><span class="pun">=</span><span class="atv">"1"</span><span class="tag">&gt;</span><span class="pln">
            
            </span><span class="tag">&lt;tr&gt;</span><span class="pln">
               </span><span class="tag">&lt;td</span><span class="pln"> </span><span class="atn">align</span><span class="pun">=</span><span class="atv">"right"</span><span class="tag">&gt;</span><span class="pln">Name</span><span class="tag">&lt;/td&gt;</span><span class="pln">
               </span><span class="tag">&lt;td&gt;&lt;input</span><span class="pln"> </span><span class="atn">type</span><span class="pun">=</span><span class="atv">"text"</span><span class="pln"> </span><span class="atn">name</span><span class="pun">=</span><span class="atv">"Name"</span><span class="pln"> </span><span class="tag">/&gt;&lt;/td&gt;</span><span class="pln">
            </span><span class="tag">&lt;/tr&gt;</span><span class="pln">
            
            </span><span class="tag">&lt;tr&gt;</span><span class="pln">
               </span><span class="tag">&lt;td</span><span class="pln"> </span><span class="atn">align</span><span class="pun">=</span><span class="atv">"right"</span><span class="tag">&gt;</span><span class="pln">EMail</span><span class="tag">&lt;/td&gt;</span><span class="pln">
               </span><span class="tag">&lt;td&gt;&lt;input</span><span class="pln"> </span><span class="atn">type</span><span class="pun">=</span><span class="atv">"text"</span><span class="pln"> </span><span class="atn">name</span><span class="pun">=</span><span class="atv">"EMail"</span><span class="pln"> </span><span class="tag">/&gt;&lt;/td&gt;</span><span class="pln">
            </span><span class="tag">&lt;/tr&gt;</span><span class="pln">
            
            </span><span class="tag">&lt;tr&gt;</span><span class="pln">
               </span><span class="tag">&lt;td</span><span class="pln"> </span><span class="atn">align</span><span class="pun">=</span><span class="atv">"right"</span><span class="tag">&gt;</span><span class="pln">Zip Code</span><span class="tag">&lt;/td&gt;</span><span class="pln">
               </span><span class="tag">&lt;td&gt;&lt;input</span><span class="pln"> </span><span class="atn">type</span><span class="pun">=</span><span class="atv">"text"</span><span class="pln"> </span><span class="atn">name</span><span class="pun">=</span><span class="atv">"Zip"</span><span class="pln"> </span><span class="tag">/&gt;&lt;/td&gt;</span><span class="pln">
            </span><span class="tag">&lt;/tr&gt;</span><span class="pln">
            
            </span><span class="tag">&lt;tr&gt;</span><span class="pln">
               </span><span class="tag">&lt;td</span><span class="pln"> </span><span class="atn">align</span><span class="pun">=</span><span class="atv">"right"</span><span class="tag">&gt;</span><span class="pln">Country</span><span class="tag">&lt;/td&gt;</span><span class="pln">
               </span><span class="tag">&lt;td&gt;</span><span class="pln">
                  </span><span class="tag">&lt;select</span><span class="pln"> </span><span class="atn">name</span><span class="pun">=</span><span class="atv">"Country"</span><span class="tag">&gt;</span><span class="pln">
                     </span><span class="tag">&lt;option</span><span class="pln"> </span><span class="atn">value</span><span class="pun">=</span><span class="atv">"-1"</span><span class="pln"> </span><span class="atn">selected</span><span class="tag">&gt;</span><span class="pln">[choose yours]</span><span class="tag">&lt;/option&gt;</span><span class="pln">
                     </span><span class="tag">&lt;option</span><span class="pln"> </span><span class="atn">value</span><span class="pun">=</span><span class="atv">"1"</span><span class="tag">&gt;</span><span class="pln">USA</span><span class="tag">&lt;/option&gt;</span><span class="pln">
                     </span><span class="tag">&lt;option</span><span class="pln"> </span><span class="atn">value</span><span class="pun">=</span><span class="atv">"2"</span><span class="tag">&gt;</span><span class="pln">UK</span><span class="tag">&lt;/option&gt;</span><span class="pln">
                     </span><span class="tag">&lt;option</span><span class="pln"> </span><span class="atn">value</span><span class="pun">=</span><span class="atv">"3"</span><span class="tag">&gt;</span><span class="pln">INDIA</span><span class="tag">&lt;/option&gt;</span><span class="pln">
                  </span><span class="tag">&lt;/select&gt;</span><span class="pln">
               </span><span class="tag">&lt;/td&gt;</span><span class="pln">
            </span><span class="tag">&lt;/tr&gt;</span><span class="pln">
            
            </span><span class="tag">&lt;tr&gt;</span><span class="pln">
               </span><span class="tag">&lt;td</span><span class="pln"> </span><span class="atn">align</span><span class="pun">=</span><span class="atv">"right"</span><span class="tag">&gt;&lt;/td&gt;</span><span class="pln">
               </span><span class="tag">&lt;td&gt;&lt;input</span><span class="pln"> </span><span class="atn">type</span><span class="pun">=</span><span class="atv">"submit"</span><span class="pln"> </span><span class="atn">value</span><span class="pun">=</span><span class="atv">"Submit"</span><span class="pln"> </span><span class="tag">/&gt;&lt;/td&gt;</span><span class="pln">
            </span><span class="tag">&lt;/tr&gt;</span><span class="pln">
            
         </span><span class="tag">&lt;/table&gt;</span><span class="pln">
      </span><span class="tag">&lt;/form&gt;</span><span class="pln">
      
   </span><span class="tag">&lt;/body&gt;</span><span class="pln">
</span><span class="tag">&lt;/html&gt;</span></pre>
<h4>Basic Form Validation</h4>
<p>First let us see how to do a basic form validation. In the above form, we are calling <b>validate()</b> to validate data when <b>onsubmit</b> event is occurring. The following code shows the implementation of this validate() function.</p>
<pre class="prettyprint notranslate prettyprinted"><span class="tag">&lt;script</span><span class="pln"> </span><span class="atn">type</span><span class="pun">=</span><span class="atv">"text/javascript"</span><span class="tag">&gt;</span><span class="pln">
   </span><span class="pun">&lt;!--</span><span class="pln">
      </span><span class="com">// Form validation code will come here.</span><span class="pln">
      </span><span class="kwd">function</span><span class="pln"> validate</span><span class="pun">()</span><span class="pln">
      </span><span class="pun">{</span><span class="pln">
      
         </span><span class="kwd">if</span><span class="pun">(</span><span class="pln"> document</span><span class="pun">.</span><span class="pln">myForm</span><span class="pun">.</span><span class="typ">Name</span><span class="pun">.</span><span class="pln">value </span><span class="pun">==</span><span class="pln"> </span><span class="str">""</span><span class="pln"> </span><span class="pun">)</span><span class="pln">
         </span><span class="pun">{</span><span class="pln">
            alert</span><span class="pun">(</span><span class="pln"> </span><span class="str">"Please provide your name!"</span><span class="pln"> </span><span class="pun">);</span><span class="pln">
            document</span><span class="pun">.</span><span class="pln">myForm</span><span class="pun">.</span><span class="typ">Name</span><span class="pun">.</span><span class="pln">focus</span><span class="pun">()</span><span class="pln"> </span><span class="pun">;</span><span class="pln">
            </span><span class="kwd">return</span><span class="pln"> </span><span class="kwd">false</span><span class="pun">;</span><span class="pln">
         </span><span class="pun">}</span><span class="pln">
         
         </span><span class="kwd">if</span><span class="pun">(</span><span class="pln"> document</span><span class="pun">.</span><span class="pln">myForm</span><span class="pun">.</span><span class="typ">EMail</span><span class="pun">.</span><span class="pln">value </span><span class="pun">==</span><span class="pln"> </span><span class="str">""</span><span class="pln"> </span><span class="pun">)</span><span class="pln">
         </span><span class="pun">{</span><span class="pln">
            alert</span><span class="pun">(</span><span class="pln"> </span><span class="str">"Please provide your Email!"</span><span class="pln"> </span><span class="pun">);</span><span class="pln">
            document</span><span class="pun">.</span><span class="pln">myForm</span><span class="pun">.</span><span class="typ">EMail</span><span class="pun">.</span><span class="pln">focus</span><span class="pun">()</span><span class="pln"> </span><span class="pun">;</span><span class="pln">
            </span><span class="kwd">return</span><span class="pln"> </span><span class="kwd">false</span><span class="pun">;</span><span class="pln">
         </span><span class="pun">}</span><span class="pln">
         
         </span><span class="kwd">if</span><span class="pun">(</span><span class="pln"> document</span><span class="pun">.</span><span class="pln">myForm</span><span class="pun">.</span><span class="typ">Zip</span><span class="pun">.</span><span class="pln">value </span><span class="pun">==</span><span class="pln"> </span><span class="str">""</span><span class="pln"> </span><span class="pun">||</span><span class="pln">
         isNaN</span><span class="pun">(</span><span class="pln"> document</span><span class="pun">.</span><span class="pln">myForm</span><span class="pun">.</span><span class="typ">Zip</span><span class="pun">.</span><span class="pln">value </span><span class="pun">)</span><span class="pln"> </span><span class="pun">||</span><span class="pln">
         document</span><span class="pun">.</span><span class="pln">myForm</span><span class="pun">.</span><span class="typ">Zip</span><span class="pun">.</span><span class="pln">value</span><span class="pun">.</span><span class="pln">length </span><span class="pun">!=</span><span class="pln"> </span><span class="lit">5</span><span class="pln"> </span><span class="pun">)</span><span class="pln">
         </span><span class="pun">{</span><span class="pln">
            alert</span><span class="pun">(</span><span class="pln"> </span><span class="str">"Please provide a zip in the format #####."</span><span class="pln"> </span><span class="pun">);</span><span class="pln">
            document</span><span class="pun">.</span><span class="pln">myForm</span><span class="pun">.</span><span class="typ">Zip</span><span class="pun">.</span><span class="pln">focus</span><span class="pun">()</span><span class="pln"> </span><span class="pun">;</span><span class="pln">
            </span><span class="kwd">return</span><span class="pln"> </span><span class="kwd">false</span><span class="pun">;</span><span class="pln">
         </span><span class="pun">}</span><span class="pln">
         
         </span><span class="kwd">if</span><span class="pun">(</span><span class="pln"> document</span><span class="pun">.</span><span class="pln">myForm</span><span class="pun">.</span><span class="typ">Country</span><span class="pun">.</span><span class="pln">value </span><span class="pun">==</span><span class="pln"> </span><span class="str">"-1"</span><span class="pln"> </span><span class="pun">)</span><span class="pln">
         </span><span class="pun">{</span><span class="pln">
            alert</span><span class="pun">(</span><span class="pln"> </span><span class="str">"Please provide your country!"</span><span class="pln"> </span><span class="pun">);</span><span class="pln">
            </span><span class="kwd">return</span><span class="pln"> </span><span class="kwd">false</span><span class="pun">;</span><span class="pln">
         </span><span class="pun">}</span><span class="pln">
         </span><span class="kwd">return</span><span class="pun">(</span><span class="pln"> </span><span class="kwd">true</span><span class="pln"> </span><span class="pun">);</span><span class="pln">
      </span><span class="pun">}</span><span class="pln">
   </span><span class="com">//--&gt;</span><span class="pln">
</span><span class="tag">&lt;/script&gt;</span></pre>
<h4>Data Format Validation</h4>
<p>Now we will see how we can validate our entered form data before submitting it to the web server.</p>
<p>The following example shows how to validate an entered email address. An email address must contain at least a ‘@’ sign and a dot (.). Also, the ‘@’ must not be the first character of the email address, and the last dot must at least be one character after the ‘@’ sign.</p>
<h5>Example</h5>
<p>Try the following code for email validation.</p>
<pre class="prettyprint notranslate prettyprinted"><span class="tag">&lt;script</span><span class="pln"> </span><span class="atn">type</span><span class="pun">=</span><span class="atv">"text/javascript"</span><span class="tag">&gt;</span><span class="pln">
   </span><span class="pun">&lt;!--</span><span class="pln">
      </span><span class="kwd">function</span><span class="pln"> validateEmail</span><span class="pun">()</span><span class="pln">
      </span><span class="pun">{</span><span class="pln">
         </span><span class="kwd">var</span><span class="pln"> emailID </span><span class="pun">=</span><span class="pln"> document</span><span class="pun">.</span><span class="pln">myForm</span><span class="pun">.</span><span class="typ">EMail</span><span class="pun">.</span><span class="pln">value</span><span class="pun">;</span><span class="pln">
         atpos </span><span class="pun">=</span><span class="pln"> emailID</span><span class="pun">.</span><span class="pln">indexOf</span><span class="pun">(</span><span class="str">"@"</span><span class="pun">);</span><span class="pln">
         dotpos </span><span class="pun">=</span><span class="pln"> emailID</span><span class="pun">.</span><span class="pln">lastIndexOf</span><span class="pun">(</span><span class="str">"."</span><span class="pun">);</span><span class="pln">
         
         </span><span class="kwd">if</span><span class="pln"> </span><span class="pun">(</span><span class="pln">atpos </span><span class="pun">&lt;</span><span class="pln"> </span><span class="lit">1</span><span class="pln"> </span><span class="pun">||</span><span class="pln"> </span><span class="pun">(</span><span class="pln"> dotpos </span><span class="pun">-</span><span class="pln"> atpos </span><span class="pun">&lt;</span><span class="pln"> </span><span class="lit">2</span><span class="pln"> </span><span class="pun">))</span><span class="pln"> 
         </span><span class="pun">{</span><span class="pln">
            alert</span><span class="pun">(</span><span class="str">"Please enter correct email ID"</span><span class="pun">)</span><span class="pln">
            document</span><span class="pun">.</span><span class="pln">myForm</span><span class="pun">.</span><span class="typ">EMail</span><span class="pun">.</span><span class="pln">focus</span><span class="pun">()</span><span class="pln"> </span><span class="pun">;</span><span class="pln">
            </span><span class="kwd">return</span><span class="pln"> </span><span class="kwd">false</span><span class="pun">;</span><span class="pln">
         </span><span class="pun">}</span><span class="pln">
         </span><span class="kwd">return</span><span class="pun">(</span><span class="pln"> </span><span class="kwd">true</span><span class="pln"> </span><span class="pun">);</span><span class="pln">
      </span><span class="pun">}</span><span class="pln">
   </span><span class="com">//--&gt;</span><span class="pln">
</span><span class="tag">&lt;/script&gt;</span></pre>








</strong>
<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="81_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

 </div>
 
 
</section>
</article>



 

</div>
 
 
<div class="sidebar widget_area bg_tint_light sidebar_style_light">
 
<aside class="widget">
<?php include 'javascript_header.php'; ?>
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