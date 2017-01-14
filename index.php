<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:og="http://ogp.me/ns#">
<head>
  	<meta charset="utf-8" />
    
<meta property="og:title" content="title" /> 
<meta property="og:description" content="description" /> 
<meta property="og:image" content="thumbnail_image" /> 

  <title>Donate us</title>
  <link href='https://fonts.googleapis.com/css?family=Exo:700,700italic|Average' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" type="text/css" href="_/css/mystyle.css">
  <script type="text/javascript" src="_/js/jquery-1.8.2.js"></script>
  <script type="text/javascript" src="_/js/myscript.js"></script>
  
  
  
</head>
<body>
	
    <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
    
    
    
    
<div id="content">

<div id="main">
		  <div id="fb-root"></div>
		  <div id="mymessage"></div>
   		  <div id="welcome"></div>
	
	  <div class="centar">

<script src='http://connect.facebook.net/en_US/all.js'></script>
 <div class="linija_gore"></div>

<div id="fb_slika">
<fb:profile-pic uid="loggedinuser" size:"thumb" linked="true"\><fb:profile-pic>
</div>
 <div class="linija_dole"></div>

<div class="tekst">
<?
$random_text = array("Random Text 1",
                     "Random Text 2",
                     "Random Text 3",
                     "Random Text 4",
                     "Random Text 5");
srand(time());
$sizeof = count($random_text);
$random = (rand()%$sizeof);

?>


<form action="" method="post">
<input type="text" value="<? print("$random_text[$random]");?>" readonly="true" style="background-color:#638CC4; width:434px; height:22px">
<a onClick="window.open('http://www.facebook.com/ajax/sharer/?s=99','sharer','toolbar=0,status=0,location=0,width=558,height=335');" href="javascript: void(0)"><img src="images/post-btn.jpg" width="51" height="22"></a>
</form>
</div>






  </div>
  </div> 
<!--main -->
  
  </div><!--content -->
    
</body>
</html>
