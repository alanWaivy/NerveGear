<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>LapShop</title>
	<link rel="stylesheet" href="ProductStyle.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Bungee&family=Outfit:wght@100..900&display=swap" rel="stylesheet">
	<script src="ProductScript.js" defer></script>
	<link rel="icon" type="image/x-icon" href="../pics/logo.ico">


	
    <link rel="stylesheet" href="../CommenParts/Header/HeaderStyle.css">
    <script src="../CommenParts/Header/HeaderScript.js" defer></script>
    
    <link rel="stylesheet" href="../CommenParts/Footer/FooterStyle.css">

    <script src="../CommenParts/QA/QaScript.js" defer></script>
    <link rel="stylesheet" href="../CommenParts/QA/QaStyle.css">

    

</head>

<body>
	<?php
	include("../CommenParts/Header/Header.php");
	$db = mysqli_connect('localhost', 'root', '', 'lapshop');
	if (!$db) {
		die("Connection failed: " . mysqli_connect_error());
	}
	$_SESSION['productID'] = !empty($_GET["productID"])?$_GET["productID"]:$_SESSION['productID'] ;
	$ID = $_SESSION['productID'];
	$sql = "SELECT * FROM products WHERE ProductID = $ID LIMIT 1";
	$result = mysqli_query($db, $sql);
	$product = mysqli_fetch_assoc($result);
	$Name = $product['Name'];
	$Av = $product['Available'];
	?>
	<section class="hero">

		<div class="part01">

			<div class="container">
				<div class="slideshow-container">
					<div class="slide-container">


						<div class="slide1">
							<img src="data:image;base64,<?php echo base64_encode($product['ProductImg']) ?>">
						</div>
						<div class="slide1">
							<img src="data:image;base64,<?php echo base64_encode($product['ProductImg1']) ?>">
						</div>
						<div class="slide1">
							<img src="data:image;base64,<?php echo base64_encode($product['ProductImg2']) ?>">
						</div>


					</div>
				</div>

				<div class="arrows">
					<button class="prev" onclick="moveSlide(-1)">&#10094;</button>
					<button class="next" onclick="moveSlide(1)">&#10095;</button>
				</div>
			</div>

		</div>

		<form method="POST" action="Product.php">
			<div class="part02">
				<h1><?php echo $product['Name'] ?></h1>
				<p><?php echo $product['Description'] ?></p>
				<h2><?php echo $product['Price'] ?> DH</h2>
				<input type="hidden" name="ProductID" value="<?php echo $ID ?>">
				<input type="hidden" name="ProductN" value="<?php echo $Name ?>">
				<input type="hidden" name="Available" value="<?php echo $Av ?>">


				<div class="part02Btns">
					<button class="button1" name="CartBtn" style="background: black; color: white;">Add To cart</button>
					<button class="button1" name="ShopBtn" style="background: #378ce7; color: white;">Shop Now</button>
				</div>
			</div>
		</form>

	</section>
	<section class="g">
		<div class="guarantee">
			<img src="../pics/Gimg.png" width="300px" height="auto" alt="">
			<div class="Gtxt">
				<h2>Achetez en toute confiance !</h2>
				<p>Nous voulons que vous soyez entièrement satisfait de votre achat sur Wish. Renvoyez tous les produits dans les 30 jours suivant la livraison s’ils ne vous satisfont pas.</p>
			</div>
		</div>
	</section>


	<section class="moreP">
		<div class="mHeaders">

			<p>Produits connexes</p>


			<a href="../AllProducts/Products.php">
				<p>plus</p>
			</a>

		</div>
		<div class="mProducts">

			<?php
			$db = mysqli_connect('localhost', 'root', '', 'lapshop');
			$sql = "SELECT * FROM products WHERE Available = 1 LIMIT 4";
			$result = mysqli_query($db, $sql);
			while ($row = mysqli_fetch_assoc($result)) {
				// Determine background color based on availability
				$backgroundColor = $row['Available'] ? '#00ff15' : '#878787';

				echo '
                      <div class="slide2">
                      <div class="cart ">
                          <div class="bsDot" style="background-color: ' . $backgroundColor . ';"></div>
                          <form id="form1" method="GET" action="../Product/Product.php">
                                <input type="hidden" name="productID" value="' . $row['ProductID'] . '">
                                <button type="submit" name="ImgBtn" id="ImgBtn"> 
                                    <div class="bsImg">
                                        <img src="data:image;base64,' . base64_encode($row['ProductImg']) . '" alt="' . $row['ProductID'] . '">
                                    </div> 
                                </button>
                            </form>

                          <div class="bsTitle"><p>' . $row['Name'] . '</p></div>
                          <div class="Price" style="text-align:center; "> <p>' . $row['Price'] . ' DH </p> </div>

                          <div class="bsProperties">

                              <div class="prop"><p>' . $row['Specification'] . '</p></div>
                              
                          </div>

						  <form action="../Checkout/Checkout.php" method="GET">
                          <div class="bsButtons">
                              <input type="hidden" name="ProductID" value="' . $row['ProductID'] . '">
                              <input type="hidden" name="Available" value="' . $row['Available'] . '">
                              <input type="hidden" name="ProductN" value="' . $row['Name'] . '">
                              <button type="submit" id="btn01" name="CartBtn">Add To Cart</button>
                              <button type="submit" id="btn02" name="ShopBtn">Shop Now</button>
                          </div> 
                      </form>
                      </div>
                      </div>

                      
                     
                  ';
			}
			?>





		</div>


	</section>


	<?php include("../CommenParts/QA/QA.php") ?>


	<?php include("../CommenParts/Footer/Footer.php") ?>


</body>

</html>




<?php


if (isset($_POST['CartBtn'])) {
	if (isset($_SESSION['username'])) {

		$alertLogin = 'alertOn';
		$alertLogout = 'alertOff';


		$ProductID = (int) $_POST['ProductID'];
		$ProductName = $_POST['ProductN'];
		$Available1 = $_POST['Available'];

		$sql = "SELECT UserID FROM users WHERE Email = '" . $_SESSION['email'] . "'";
		$Result = mysqli_query($db, $sql);

		$row = mysqli_fetch_assoc($Result);

		$UserID = (int) $row['UserID'];
		$Result = mysqli_query($db, "SELECT Amount FROM cart WHERE UserID = '" . $UserID . "' AND ProductID = '" . $ProductID . "' ");

		if ($Result && mysqli_num_rows($Result) > 0) {
			$row = mysqli_fetch_assoc($Result);
			$Amount = $row['Amount'] + 1;
			$sql4 = "UPDATE cart SET Amount = $Amount WHERE UserID = $UserID";
			mysqli_query($db, $sql4);
		} else {
			$Amount = 1;
			$sql5 = "INSERT INTO cart (ProductName, ProductID, UserID, Available, Amount) 
                       VALUES ('$ProductName', $ProductID, $UserID, $Available1, $Amount)";
			mysqli_query($db, $sql5);


			echo '<script>window.location.href = "../AllProducts/Products.php";</script>';
		}
	} else {

		$alertLogin = 'alertOff';
		$alertLogout = 'alertOn';
	}
}

if (isset($_POST['ShopBtn'])) {
	if (isset($_SESSION['username'])) {

		$alertLogin = 'alertOn';
		$alertLogout = 'alertOff';


		$ProductID = (int) $_POST['ProductID'];
		$ProductName = $_POST['ProductN'];
		$Available1 = $_POST['Available'];

		$sql = "SELECT UserID FROM users WHERE Email = '" . $_SESSION['email'] . "'";
		$Result = mysqli_query($db, $sql);

		$row = mysqli_fetch_assoc($Result);

		$UserID = (int) $row['UserID'];
		$Result = mysqli_query($db, "SELECT Amount FROM cart WHERE UserID = '" . $UserID . "' AND ProductID = '" . $ProductID . "' ");

		if ($Result && mysqli_num_rows($Result) > 0) {
			$row = mysqli_fetch_assoc($Result);
			$Amount = $row['Amount'] + 1;
			$sql4 = "UPDATE cart SET Amount = $Amount WHERE UserID = $UserID";
			mysqli_query($db, $sql4);
		} else {
			$Amount = 1;
			$sql5 = "INSERT INTO cart (ProductName, ProductID, UserID, Available, Amount) 
                       VALUES ('$ProductName', $ProductID, $UserID, $Available1, $Amount)";
			mysqli_query($db, $sql5);
		}

		echo '<script>window.location.href = "../Checkout/Checkout.php";</script>';
	} else {

		$alertLogin = 'alertOff';
		$alertLogout = 'alertOn';
	}
}









?>