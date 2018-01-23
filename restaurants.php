<!DOCTYPE >
<html >
<head>
	<title> KiiTHelper | Restaurants in Bhubaneswar </title>
 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="keywords" content="jquery, mega "/>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/function.js"></script>
		<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="css1/header.css">
    	<link rel="stylesheet" href="css1/footer.css" type='text/css'>
   	<link rel="stylesheet" href="css/hotel.css" type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

<style type="text/css">       
        .input {
    position: relative;
}

.tooltip {
    display: none;
    padding: 2px;
   
}

.input:hover .tooltip {
    background: rgb(40, 121, 148);
    border-radius: 3px;
    bottom: -30px;
    color: white;
    display: inline;
    height: 30px;
    left: 0;
    line-height: 30px;
    position: absolute;
}

.input:hover .tooltip:before {
    display: block;
    content: "";
    position: absolute;
    top: -5px;
    width: 0; 
    height: 0; 
    border-left: 5px solid transparent;
    border-right: 5px solid transparent;
    border-bottom: 5px solid blue;
}
        
 </style>     
</head>

<body > 
<div id="wrap">
	<header>
		<div class="inner relative">
			<a class="logo" href="../index.php"><img src="images/my_logo8.png" alt="KiiTHelper"></a>
			<a style="height: 100%;width: 100%;margin-top: 36px; box-sizing: border-box;height: 19px;width: 24px; background: black;border-radius: 4px;text-align: center;font-weight: 900px;" id="menu-toggle" class="button dark" href="#"><i class="icon-reorder"></i></a>
			<nav id="navigation">
				<ul id="main-menu">
					<li class="current-menu-item">
                    <a href="../index.php"><img src="images/header_menu_home_icon.png"></a>
                    </li>
                    <li><a href="aboutus.php">About Us</a></li>
					<li class="parent">
						<a href="qp.php">Study Portal</a>
						<ul class="sub-menu">
							<li><a href="qp.php"><i class="fa fa-credit-card"></i>&nbsp; Question Papers</a></li>
	                                             <li><a href="placementhelper.php"><i class="fa fa-wrench"></i>&nbsp;Placement Helper</a></li>
							
						</ul>
					</li>
					<li class="parent">
						<a href="#">Restaurants</a>
						<ul class="sub-menu">
							<li><a href="restaurants.php"><i class="fa fa-cutlery"></i>&nbsp;Restaurants</a></li>
							<li><a href="guesthouse.php"><i class="fa fa-bed"></i>&nbsp;Guest House</a></li>
						</ul>
					</li>
                    	<li class="parent">
						<a href="placetovisit.php">Funzone</a>
						<ul class="sub-menu">
							<li><a href="placetovisit.php"><i class="fa fa-university"></i>&nbsp;Places to visit</a></li>
							<li><a href="mall&movie.php"><i class="fa fa-video-camera"></i>&nbsp;Mall and Theatres</a></li>
						</ul>
					</li>
					<li class="parent">
						<a target="_blank" href="http://localhost/blog/#/">Blog</a>
						
					</li>
                    <li class="parent">
						<a href="../content/login.php"><i class="fa fa-upload"></i>&nbsp;Upload&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
						
					</li>
				
                    <li class="signup1"><a href="../content/register.php" ><b style="box-sizing: border-box;padding-left: 11px;padding-right: 11px;height: 20px; color: #fff; width: 33px;padding-top: 7px;margin-right: 2px; padding-bottom: 7px; border-radius: 4px;  color: #fff;text-shadow: 0 -1px 0 rgba(0,0,0,0.15);background-color: #287994;background-image: -webkit-linear-gradient(#287994, #2B8BAB);background-image: linear-gradient(#287994, #2B8BAB);border-color: #065670;"><span style="color: #fff;">Sign up&nbsp;<i class="fa fa-user-plus"></i></span></b></a></li>
                    <li style="margin-left: 4px;" ><a href="../content/login.php"><b style="box-sizing: border-box;padding-left: 11px;margin-left: 4px; padding-right: 11px;height: 19px; color: #fff; width: 24px;padding-top: 6px;padding-bottom: 7px; border-radius: 4px;  color: #fff;text-shadow: 0 -1px 0 rgba(0,0,0,0.15);background-color: #ecf0f1;background-image: -webkit-linear-gradient(#ecf0f1, #bdc3c7);background-image: linear-gradient(#ecf0f1, #bdc3c7);border-color: #7f8c8d;"><span style="color: #2c3e50;">Sign in&nbsp;<i class="fa fa-sign-in"></i>&nbsp;</span></b></a></li>
				</ul>
			</nav>
			<div class="clear"></div>
		</div>
	</header>	
</div>  

<div class="static__heroAboutus">
<table class="CSSTableGenerator" >
<tr><td>
<form method="post" action="" class="hotelsearch">     
     <select name="cityselect" style="height:29px; width: 150px; font-family: monospace; font-size: larger;">
    <option value="Bhubaneswar" selected="Bhubaneswar">Bhubaneswar</option>
    </select>   
</form>
</td>
<td>
<script language="JavaScript">
<!-- 
function goto(form) { var index=form.select.selectedIndex
if (form.select.options[index].value != "0") {
location=form.select.options[index].value;}}
//-->
</script>

<form name="form1" class="areaselect">
<select name="select" onchange="goto(this.form)" size="1" style="height:29px; width: 210px; font-family: monospace; font-size: larger;">
<option value="">Select Location
<option value="kiitroad.php">KIIT Road
<option value="infocityarea.php">Infocity area 
<option value="patia.php">Patia 
</form>
</td>
</tr>
</table>
</div>
<div class="aboutUs">
<h3 style="alignment-adjust: central;margin-left: 64px;font-family:Georgia, Times, 'Times New Roman', serif ;font-style: italic;font-size: 20px;">Baffled with hostel food ? Trying to find Restaurants in your Budget? Ah! The right place</h3>
	<section style="float: center;margin-top: 40px;">
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- restaurants -->
<ins class="adsbygoogle"
     style="display:inline-block;width:528px;height:70px"
     data-ad-client="ca-pub-1746107884135176"
     data-ad-slot="2790955248"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</section>
    </div>

<div class="aboutUs__secondBox">
<div class="aboutUs__quarterBox">
			<div class="imageDiv imageDiv--first">
				
			</div>
			<div class="content">
				<h5>Reasonable</h5>
				<p>
				 You will find most Reasonable Restaurants here and we are trying to serve you better
				</p>
			</div>
		</div>

<div class="aboutUs__quarterBox">

			<div class="imageDiv imageDiv--second">
			
			</div>
			<div class="content">
				<h5>Eminent Quality</h5>
				<p>
				 Tried and tested Restaurants with good food Quality
				</p>
			</div>
		</div>
       
        <div class="aboutUs__quarterBox">
			<div class="imageDiv imageDiv--third">
			
			</div>
			<div class="content">
				<h5>Ambience</h5>
				<p>
			The first thing that fascinates you the most when you enter a Restaurant is it's Ambience and Aroma.
				</p>
			</div>
		</div>
</div>


	<footer class="footer-distributed" style="height: 393px;">

			<div class="footer-left">

				<h3>KiiT<span>Helper</span></h3>

				<p class="footer-links" style="font-family: 'Montserrat', sans-serif;">
					<a href="../index.php">Home</a>
					·
					<a href="restaurants.php">Restaurants</a>
					·
					<a href="aboutus.php">About Us</a>
					·
					<a href="mall&movie.php">Funzone</a>
					·
				</p>

				<p class="footer-company-name">KiiTHelper &copy; 2016</p>

				<div class="footer-icons">

					<a href="https://www.facebook.com/kiithelper.IND"><img src="images/fblogo.png"/> <i class="fafacebook"></i></a>
					<a href="https://twitter.com/KiiTHelper"><img src="images/ttlogo.png"/><i class="fatwitter"></i></a>
					<a href="https://www.linkedin.com/nhome/"><i class="fagithub"><img src="images/liin.png"/></i></a>
                    <a href="https://plus.google.com/u/0/b/103914821924545868457/103914821924545868457/posts/p/pub?_ga=1.103148160.1828233034.1455224524"><img src="images/gplus.png"/></i></a>


				</div>

			</div>


			<div class="footer-right" style="float: right;">

				<p style="display: inline-block;
	vertical-align: top;
	margin: 5px 5px 0 0;
	color: #ffffff;">Contact Us</p>
   
				<form action="../content/login.php" method="post" style="display: inline-block;">
 <div class="input">
                <input type="text" name="text" placeholder="Name" style="	height: 40px;
	margin-bottom: 15px;	display: block;
	border-radius: 3px;
	box-sizing: border-box;
	background-color:  #676c72;
	box-shadow: 0 1px 0 0 rgba(255, 255, 255, 0.1);
	border: none;
	resize: none;
	font: inherit;
	font-size: 14px;
	font-weight: normal;
	color:  #d1d2d2;

	width: 400px;
	padding: 15px;"/>
<span class="tooltip">You have to login</span>
                </div>

					<input type="email" name="email" placeholder="Email" style="	height: 40px;
	margin-bottom: 12px;	display: block;	border-radius: 3px;box-sizing: border-box;background-color:  #676c72;box-shadow: 0 1px 0 0 rgba(255, 255, 255, 0.1);
	border: none;
	resize: none;
	font: inherit;
	font-size: 14px;
	font-weight: normal;
	color:  #d1d2d2;

	width: 400px;
	padding: 15px;"/>
					<textarea name="message" placeholder="Message" style="height: 70px;
	margin-bottom: 15px;	display: block;
	border-radius: 3px;
	box-sizing: border-box;
	background-color:  #676c72;
	box-shadow: 0 1px 0 0 rgba(255, 255, 255, 0.1);
	border: none;
	resize: none;

	font: inherit;
	font-size: 14px;
	font-weight: normal;
	color:  #d1d2d2;

	width: 400px;
	padding: 15px;"></textarea>
					<button style="border-radius: 3px;
	background-color:  #4e698b;
	color: #ffffff;
	border: 0;
	padding: 15px 50px;
	font-weight: bold;
	float: right;">Send</button>

				</form>

			</div>

		</footer>


</body> 

</html>