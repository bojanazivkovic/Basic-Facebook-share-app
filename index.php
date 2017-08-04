<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:og="http://ogp.me/ns#">
<head>
  	<meta charset="utf-8" />
<meta property="og:url" content="apps.facebook.com/donate_your_status" /> 
<meta property="og:title" content="Donate your status" /> 
<meta property="og:description" content="I am one in a million, are you?" /> 

  <title>Donate us</title>

<script type="text/javascript">
	if (navigator.userAgent.toLowerCase().indexOf('chrome'))
	{
	document.write('<link rel="stylesheet" type="text/css" href="_/css/chrome.css"/>');                    
	}
	
</script>


  <link href='https://fonts.googleapis.com/css?family=Exo:700,700italic|Average' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" type="text/css" href="_/css/mystyle.css">
  


<!--[if lt IE 7 ]><body class="IE IE6 IE7down IE8down IE9down"><![endif]--> 
<!--[if IE 7 ]><body class="IE IE7 IE7down IE8down IE9down IE7up"><![endif]--> 
<!--[if IE 8 ]><body class="IE IE8 IE8down IE9down IE8up IE7up"><![endif]--> 
<!--[if gte IE 9 ]><body class="IE IE9 IE9down IE9up IE8up IE7up"><![endif]--> 
<!--[if !IE]>--><body class="notIE"><!--<![endif]--> 


  <script type="text/javascript" src="_/js/jquery-1.8.2.js"></script>
  <script type="text/javascript" src="_/js/myscript.js"></script>
  <script src='http://connect.facebook.net/en_US/all.js'></script>
  
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>

<body>
	
<div id="fb-root"></div>
  
    
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
    
    
<?php
// Connecting, selecting database
$link = mysql_connect('localhost', 'username', 'password')
    or die('Could not connect: ' . mysql_error());
mysql_select_db('DB_name') or die('Could not select database');

// Performing SQL query
$result = mysql_query('SELECT PhraseText FROM Phrases ORDER BY RAND()');
if (!$result) {
    die('Could not query:' . mysql_error());
}
?>
<script>
var myWindow=null;

function onPopupClose(){
	window.parent.location="http://www.facebook.com"
};
function openPopup(){
var pollTimer = window.setInterval(function() {
    if (myWindow.closed !== false) { // !== is required for compatibility with Opera
        window.clearInterval(pollTimer);
        onPopupClose();
    }
}, 200);

}
</script><div class="okvir"> 

<div class="header"></div> 
<br/>
<div class="centar">

 
<div class="tekst">
<div class="linija_dole2"></div>
<div class="strelica"></div>
<div class="forma">
<form action="" method="post">
 <input type="text" class="tekst_polje" style="background-color:#1D3B79; width:525px; height:auto; float:left; color:#FFF; text-indent:5px; text-align:center; padding-top:5px; padding-bottom:5px; font-size:11px" value="<? echo mysql_result($result,1);?>" readonly="true">
  <a onClick="myWindow=window.open('http://www.facebook.com/sharer.php?s=100&amp;p[title]=I%20am%20one%20in%20a%20million%2C%20are%20you%3F&amp;p[summary]=<?php echo mysql_result($result,1);?>&amp;p[url]=http%3A%2F%2Fwww.facebook.com%2Fpages%2Fnovonordisk%3F%3Dapp_240900089368882&amp;&amp;p[images][0]=http%3A%2F%2Fwww.wddnn.com%2Fimages%2Fwwd4.jpg','sharer','toolbar=0,status=0,width=558,height=335');openPopup();" href="javascript: void(0)"></a><a onClick="myWindow=window.open('http://www.facebook.com/sharer.php?s=100&amp;p[title]=I%20am%20one%20in%20a%20million%2C%20are%20you%3F&amp;p[summary]=<?php echo mysql_result($result,1);?>&amp;p[url]=http%3A%2F%2Fwww.facebook.com%2Fpages%2Fnovonordisk%3F%3Dapp_240900089368882&amp;&amp;p[images][0]=http%3A%2F%2Fwww.wddnn.com%2Fimages%2Fwwd4.jpg','sharer','toolbar=0,status=0,width=558,height=335');openPopup();" href="javascript: void(0)"><img src="images/post-btn.jpg" width="64" height="27"></a>
</form>
<?
// Free resultset
mysql_free_result($result);

// Closing connection
mysql_close($link);
?>
</div> <!--forma-->


 <div class="linija_dole"></div>
</div> 
<!--kraj teksta-->

<div id="tekst2">
<br/><br/>
550 million people could have diabetes by 2030<sup>1</sup> unless we all make a determined effort. More than half of type 2 diabetes cases can be prevented with healthy lifestyle changes like taking the stairs instead of the lift, dancing to your favourite song for three minutes or getting off the bus a few stops too early.<br/><br/>

 Be one in a million and donate your Facebook status. Share a blue circle to spread the word about the little things that will change diabetes.<br/><br/>

See a short film about World Diabetes Day:
<span class="style1"><a href="http://novonordisk.com/about_us/changing-diabetes/wdd.asp" target="_blank">1,000,000 blue circles for change</a></span><br/>
<br/>
<div class="mali_tekst">1     International Diabetes Federation. IDF Atlas, fifth edition, 2011.</div>
<br/><br/><br/>

</div> 

<!--kraj teksta2-->



</div> 
<!--centar-->



<div class="footer"></div>

<div class="fbslika">
<fb:profile-pic uid="loggedinuser" size:"thumb" linked="false"\><fb:profile-pic>
</div>

</div><!--okvir-->
    
</body>
</html>
