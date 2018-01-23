<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title> KiiT Helper </title>
	<link rel="stylesheet" href="css1/footer.css" type='text/css'>
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
<body>

	<footer class="footer-distributed">

			<div class="footer-left">

				<h3>KiiT<span>Helper</span></h3>

				<p class="footer-links" style="font-family: 'Montserrat', sans-serif;">
					<a href="index.php">Home</a>
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

				<div class="footer-right">
            			<p>Contact Us</p>
				<form action="../content/login.php " method="post">
                <div class="input">
                <input type="text" name="text" placeholder="Name" />
                <span class="tooltip">You have to login</span>
                </div>

					<input type="email" name="email" placeholder="Email" />
                    
					<textarea name="message" placeholder="Message"></textarea>
                    
					<button>Send</button>

				</form>

			</div>


		</footer>

</body>
</html>