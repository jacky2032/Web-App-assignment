<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" type="text/css" href="main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
	<div class= "overlay">
		<i id="overlayclose"class= "fa fa-close"></i>
		<form method="GET" action="itemDisplay.php">
		<span>Search Something ?
		<br>
		<input type="text" name="Search"><i id="overlaysearch" class="fa fa-search"></i>
		</form>
		</span>
	</div>
    <div class="topNav-1">
		<div class="topNav-2">

		<a href="firstpage.php" class="logo">DIGITALLIBRARY</a>
			<!-- Right-sided navbar links -->
			<form method="get" action="itemDisplay.php">
			<div class="topNav-right">
			
				<span>
				
					<input type="text" placeholder=" Search..." name="Search" class="topNavButton" id="SearchBar">
					<button type="submit" class="topNavButton SearchBtn"><i class="fa fa-search"></i></button>
			
				</span>
</form>
					
			  <a href="about.php" class="topNavButton"><i class="fa fa-ellipsis-h"></i> ABOUT</a>
			  <a href="contact.php" class="topNavButton"><i class="fa fa-envelope"></i> CONTACT</a>
			  <a href="adminLogin.php" class="topNavButton"><i class="fa fa-user"></i> ADMIN PORTAL</a>
			  <a href="login.php" class="topNavButton m-r-100"><i class="fa fa-sign-in"></i> SIGN IN</a>
			</div>
			<div class = "topNav-rightMedia">
				<button onclick="sideBar_open()"><i class="fa fa-navicon"></i></button>
				<div class = "navBar" id="mediaNavBar">
					<button onclick="sideBar_close()"><i class= "fa fa-close"></i></button>
					<ul>
						<li> <a href="about.php"><i class="fa fa-user"></i> ABOUT</a></li>
						<li> <a href="contact.php"><i class="fa fa-envelope"></i> CONTACT</a></li>
						<li> <a href="adminLogin.php" class="topNavButton"><i class="fa fa-user"></i> ADMIN PORTAL</a> </li>
						<li> <a href = "#"  id="navSearch"><i class="fa fa-search"></i> SEARCH</a></li>
						<li> <a href="login.php"><i class="fa fa-sign-in"></i> SIGN IN</a></li>
					</ul>
				</div>
			</div>
			<!-- Hide right-floated links on small screens and replace them with a menu icon -->
      </div>
        <div id="SearchValue">        
        </div>
	</div>
    </body>
    <script type="text/javascript" src="jScript"></script>
</html>