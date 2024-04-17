<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LapShop</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/x-icon" href="../pics/logo.ico">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bungee&family=Outfit:wght@100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap" rel="stylesheet">
    <script src="script.js" defer></script>
</head>

<body>

<?php include("../commenParts/header.php");?>

    <section class="hero">
        <div>
            <span>Welcome To NerveGear</span>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aliquam cum fuga odit, </p>
            <div id="heroBtn">
            <button id="Hbtn01" ><a href="../productsPage/products.php">All Products</a></button>
		      	<button id="Hbtn02" ><a href="../homePage/home.php#bsHeader">Best Sales</a></button>
            </div>
        </div>
    </section>


    <!--brands part start-->
    <div class="brandsSec">
      <img src="../pics/pics of the brands/Vector.png" alt="hp"  id="hp">
      <img src="../pics/pics of the brands/simple-icons_razer.png" alt="razer">
      <img src="../pics/pics of the brands/simple-icons_msibusiness.png" alt="">
      <img src="../pics/pics of the brands/simple-icons_acer.png" alt="acer">
      <img src="../pics/pics of the brands/mdi_microsoft.png" alt="microsoft">
      <img src="../pics/pics of the brands/ic_baseline-apple.png" alt="Apple">
     </div>
    <!-- brands part end -->

<div class="img01">
  <div class="part01">
    <h1>Lorem ipsum dolor sit amet</h1>
  <p>Illo, nisi architecto. Veritatis, sint maiores veniam nulla repudiandae doloribus neque reiciendis hic dolor praesentium, </p>
  <button>All Products</button>
  </div> 
</div>
<div class="parag">
<h1>Lorem ipsum dolor sit amet</h1>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
   Sint perspiciatis ullam molestiae velit pariatur cupiditate,
    corporis id obcaecati deserunt eveniet nulla maiores maxime
     provident placeat laudantium quaerat voluptate quidem minus?
</p>
</div>
<div class="img02">
  <div class="part02">
    <h1>Lorem ipsum dolor sit amet</h1>
  <p>Illo, nisi architecto. Veritatis, sint maiores veniam nulla repudiandae doloribus neque reiciendis hic dolor praesentium, </p>
  <button>All Products</button>
  </div> 
</div>

    
  
<?php include("../commenParts/QA-Part.php") ?>

   

</body>

<?php include("../commenParts/footer.php")?>

</html>