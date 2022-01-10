<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="styles/index-style.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <style>
	  /* Slideshow */
/* Make the image fully responsive */
  .carousel-inner img {
    width: 100%;
    height: 100%;
	
  }
	  </style>
</head>
<?php require_once 'header.php' ?>
<body style="background-color: #f2f3f7">
	<div class="cover">
	<div class="container" id="carouselandcat">
	<div class="conatiner" id="carousel">
	<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="../images/1_1.jpg" alt="Los Angeles" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="../images/2_1.jpg" alt="Chicago" width="1100" height="500">
    </div>
	  <div class="carousel-item">
      <img src="../images/3.jpg" alt="Chicago" width="1100" height="500">
    </div>
   
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
</div>
		<div class="container" id="cat">
			<table class="table">
  
    <tbody>
      <tr>
        <td><a href="">Laptops & Desktops</a></td>
		<td><i class="material-icons" style="font-size:15px;color:grey;" >chevron_right</i></td>
      </tr>
		<tr>
        <td><a href="">Toners & Cardriges</a></td>
			<td><i class="material-icons" style="font-size:15px;color:grey;" >chevron_right</i></td>
      </tr>
		<tr>
        <td><a href="">Accessories</a></td>
			<td><i class="material-icons" style="font-size:15px;color:grey;" >chevron_right</i></td>
      </tr>
		<tr>
        <td><a href="">Compoenents</a></td>
			<td><i class="material-icons" style="font-size:15px;color:grey;" >chevron_right</i></td>
      </tr>
		<tr>
        <td><a href="">Gaming</a></td>
			<td><i class="material-icons" style="font-size:15px;color:grey;" >chevron_right</i></td>
      </tr>
		<tr>
        <td><a href="">Monitors & Projectors</a></td>
			<td><i class="material-icons" style="font-size:15px;color:grey;">chevron_right</i></td>
      </tr>
		<tr>
        <td><a href="">Phones & Tabs</a></td>
			<td><i class="material-icons" style="font-size:15px;color:grey;" >chevron_right</i></td>
      </tr>
		<tr>
        <td><a href="">Security</a></td>
			<td><i class="material-icons" style="font-size:15px;color:grey;">chevron_right</i></td>
      </tr>
          </tbody>
  </table>
	
		
		</div>
	</div>
</div>

	<div class="container" id="brands">
		<div class="brands">
		<img src="../images/hp.png" width="100" height="100">
		</div>
		<div class="brands">
		<img src="../images/dell.png" width="100" height="100">
		</div>
		<div class="brands">
		<img src="../images/asus.png" width="250" height="90" style="padding: 3%">
		</div>
		<div class="brands">
		<img src="../images/msi.png" width="100" height="100">
		</div>
		<div class="brands" >
		<img src="../images/apple.png" width="100" height="100" >
		</div>
	</div>
	
	<div class="cont">
	<h2 class="new">New Arrivals</h2>
	<hr class="dark1" align="center">
	
	<div class="container" id="items">
		<div class="pc">
		<h3>Asus Zen Book</h3>
		<img src="../images/pc1.jpg" width="200" alt="pc">
		<h4>Rs.250,000</h4>
		</div>
		<div class="pc">
		<h3>MSI Gaming</h3>
		<img src="../images/pc2.jpg" width="200" alt="pc">
		<h4>Rs.199,000</h4>
		</div>
		<div class="pc">
		<h3>HP Pavilion</h3>
		<img src="../images/pc3.jpg" width="200" alt="pc">
		<h4>Rs.200,000</h4>
		</div>
		<div class="pc">
		<h3>MSI Bravo</h3>
		<img src="../images/pc4.jpg" width="200" alt="pc"> 
		<h4>Rs.350,000</h4>
		</div>
		<div class="pc">
		<h3>Asus TUF</h3>
		<img src="../images/pc5.jpg" width="200" alt="pc">
		<h4>Rs.250,000</h4>
		</div>
		<div class="pc">
		<h3>HP Probook</h3>
		<img src="../images/pc6.jpg" width="200" alt="pc">
		<h4>Rs.250,000</h4>
		</div>
		<div class="pc">
		<h3>MSI Plus</h3>
		<img src="../images/pc7.jpg" width="200" alt="pc">
		<h4>Rs.250,000</h4>
		</div>
		
		
		
	</div>
	</div>
	<img src="../images/banner.jpg" class="banner">
		<div class="cont">
	<h2 class="new">Popular Categories</h2>
	<hr class="dark1" align="center">
	
	<div class="container" id="items">
		<div class="pc">
		<h3>Asus Zen Book</h3>
		<img src="../images/pc1.jpg" width="200" alt="pc">
		<h4>Rs.250,000</h4>
		</div>
		<div class="pc">
		<h3>MSI Gaming</h3>
		<img src="../images/pc2.jpg" width="200" alt="pc">
		<h4>Rs.199,000</h4>
		</div>
		<div class="pc">
		<h3>HP Pavilion</h3>
		<img src="../images/pc3.jpg" width="200" alt="pc">
		<h4>Rs.200,000</h4>
		</div>
		<div class="pc">
		<h3>MSI Bravo</h3>
		<img src="../images/pc4.jpg" width="200" alt="pc"> 
		<h4>Rs.350,000</h4>
		</div>
		<div class="pc">
		<h3>Asus TUF</h3>
		<img src="../images/pc5.jpg" width="200" alt="pc">
		<h4>Rs.250,000</h4>
		</div>
		<div class="pc">
		<h3>HP Probook</h3>
		<img src="../images/pc6.jpg" width="200" alt="pc">
		<h4>Rs.250,000</h4>
		</div>
		<div class="pc">
		<h3>MSI Plus</h3>
		<img src="../images/pc7.jpg" width="200" alt="pc">
		<h4>Rs.250,000</h4>
		</div>
		
		
		
	</div>
	</div>
	<div class="alldis">
	<h2 class="dis">Offers</h2>
	
	<hr class="dark" align="center">
<div class="offer"><img src="../images/side1.jpg" width="300" id="of1">
	<div class="discount">
	<div class="pc">
		<h3>MSI Bravo</h3>
		<img src="../images/pc4.jpg" width="200" alt="pc"> 
		<strike><h6>Rs.370,000</h6></strike>
		<h4>Rs.350,000</h4>
		</div>
		<div class="pc">
		<h3>Asus TUF</h3>
		<img src="../images/pc5.jpg" width="200" alt="pc">
		<strike><h6>Rs.270,000</h6></strike>
		<h4>Rs.250,000</h4>
		</div>
		<div class="pc">
		<h3>HP Probook</h3>
		<img src="../images/pc6.jpg" width="200" alt="pc">
		<strike><h6>Rs.270,000</h6></strike>
		<h4>Rs.250,000</h4>
		</div>
	</div>
	<img src="../images/side 2.jpg" width="300">
	
		</div>
		</div>
        <?php require_once 'footer.php' ?>
		
</body>
</html>
