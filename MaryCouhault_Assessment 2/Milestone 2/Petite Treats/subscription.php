<html>
<body>
<head>
  <link rel="stylesheet" href="stylesheet.css">
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
  <title>Petite Treats - Home</title>
</head>
<body>
  <!-- Logo -->
  <div id="header-container">
    <div id="logo">
        <img src="images/logo.png"  alt="Petite Treat Bakery Logo - Made by Me" width="200" height="200">
    </div>
  </div>
  <!-- Site navigation menu -->
  <div id="nav">
    <ul class="navbar">
        <li><a href="index.html">Home</a></li>
        <li><a href="menu.html">Menu</a></li>
        <li><a href="specials.html">Current Specials</a></li>
        <li><a href="about.html">About Us</a></li>
    </ul>
  </div>
  <!-- Main content -->

  <img src="images/thanksenpai.png"  alt="Thank you for ordering maid" width="500" height="500">
  <br>

  Hi, <?php echo $_POST["fname"]; ?>! Thank you for subscribing!<br>
  Your email address is: <?php echo $_POST["Email"]; ?>
  <br>

  <?php   	  $str = " ";
        	  if ((isset($_POST["AppleCake"])) || (isset($_POST["custardslice"])) || (isset($_POST["Donuts"])) || (isset($_POST["Eggtart"])) || (isset($_POST["Fruittart"])) || (isset($_POST["RasberryCheese"])))
                      $str.= "Your selected products: ";
				      $spacing = ", ";
		  			if (isset($_POST["AppleCake"]))
		      $str.= $_POST["AppleCake"].= " ";
                  			if (isset($_POST["custardslice"]))
                      $str.= $_POST["custardslice"];
					if (isset($_POST["Donuts"]))
                      $str.= $_POST["Donuts"];
					if (isset($_POST["EggTart"]))
                      $str.= $_POST["EggTart"];
					if (isset($_POST["Fruittart"]))
                      $str.= $_POST["Fruittart"];
					if (isset($_POST["RasberryCheese"]))
                      $str.= $_POST["RasberryCheese"];
                  echo $str;    ?>
		<br>
		Your birthday is on the <?php echo $_POST["birth_day"]; ?> / <?php echo $_POST["birth_month"]; ?>
                  <!-- Footer -->
                  <footer id="footer">
                    <div class="info">
                     <p><b>Contacts:</b> 0455 5555 555 / <b>Catering:</b> 0433 3333 333</p>
                     <p><b>Address:</b>123 Prize Lane, Kirwan, QLD</p>
                    </div>
                    <div id="nav-bottom">
                      <ul class="navbar-bottom">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="menu.html">Menu</a></li>
                        <li><a href="specials.html">Current Specials</a></li>
                    <li><a href="about.html">About Us</a></li>
                </ul>
            </div>
        </footer>
    </body>
</html>
