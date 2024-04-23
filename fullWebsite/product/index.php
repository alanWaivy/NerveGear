<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>LapShop</title>
	<link rel="stylesheet" href="style.css">

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Bungee&family=Outfit:wght@100..900&display=swap" rel="stylesheet">
	<script src="index.js" defer></script>
	<link rel="icon" type="image/x-icon" href="../pics/logo.ico">

</head>

<body>
	<?php
	include("../commenParts/header.php");

	$db = mysqli_connect('localhost', 'root', '', 'lapshop');
	if (!$db) {
		die("Connection failed: " . mysqli_connect_error());
	}

	$_SESSION['productID'] = !empty($_GET["productID"])?$_GET["productID"]:$_SESSION['productID'] ;
	$ID = $_SESSION['productID'];
	$sql = "SELECT * FROM products WHERE ProductID = $ID LIMIT 1";
	$result = mysqli_query($db, $sql);
	$product = mysqli_fetch_assoc($result);

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

		<form method="POST" action="index.php">
			<div class="part02">
				<h1><?php echo $product['Name'] ?></h1>
				<p><?php echo $product['Description'] ?></p>
				<h2><?php echo $product['Price'] ?> DH</h2>
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


			<a href="../productsPage/products.php">
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
                          <form id="form1" method="GET" action="../product/index.php">
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

                          <div class="bsButtons">
                              <button type="button" id="btn01">Add To Cart</button>
                              <button type="button" id="btn02">Shop Now</button>
                          </div>
                      </div>
                      </div>

                      
                     
                  ';
			}
			?>





		</div>


	</section>


	<?php include("../commenParts/QA-Part.php") ?>


	<?php include("../commenParts/footer.php") ?>


</body>

</html>



<script>
	let slideIndex = 0;

	function showSlides() {
		const slides1 = document.querySelectorAll('.slide1');
		if (slideIndex >= slides1.length) {
			slideIndex = 0;
		} else if (slideIndex < 0) {
			slideIndex = slides.length - 1;
		}
		const offset = -slideIndex * 105;
		document.querySelector('.slide-container').style.transform = `translateX(${offset}%)`;
	}

	function moveSlide(n) {
		slideIndex += n;
		showSlides();
	}

	showSlides();
</script>

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


			echo '<script>window.location.href = "../productsPage/products.php";</script>';
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

		echo '<script>window.location.href = "../checkoutPage/checkoutPage.php";</script>';
	} else {

		$alertLogin = 'alertOff';
		$alertLogout = 'alertOn';
	}
}









?>