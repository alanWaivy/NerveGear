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
    <script src="https://kit.fontawesome.com/70ff3266e1.js" crossorigin="anonymous"></script>
    <link rel="icon" type="image/x-icon" href="../pics/logo.ico">

</head>

<body>
<?php include("../commenParts/header.php");
      include('../productsPage/purchase.php');?>

<!---shopping cart start -->
<div id="scContainer">
  
  <div class="scPart1"></div>
  <div class="scPart2"></div>
</div>

<!-- shopping cart end -->
    <!--sliding part start-->

  <div id="slider">
    <!--  first slide  -->
    <div class="slide" id="slide01"> 
      <div class="container">
          <div class="part1">
            <p class="firstPslide">Améliorez votre expérience quotidienne</p>
            <h1>Apple MacBook <br>Air</h1>
            <p class="secondPslide">ordinateur portable ultra portable, l'original revient pour un rappel.</p>
            
            <a class="buttonA" href="#">
              <div class="button">
              <p>SHOP NOW</p>
              <img src="../pics/greaterThanSign.png" alt=">">
            </div></a>
          </div>
          <div class="part2">
            <img src="../pics/img slide 1 homepage.png">
          </div>
      </div>
    </div>
   
  
    <!-- second slide -->
    <div class="slide" id="slide02"> 
      <div class="container">
          <div class="part1">
            <p class="firstPslide">Pour une meilleure qualité de jeu</p>
            <h1>Acer - Predator <br>Helios Neo 16</h1>
            <p class="secondPslide">Plongez dans un monde éclairé au néon avec des spécifications de pointe</p>
            
            <a class="buttonA" href="#">
              <div class="button">
              <p>SHOP NOW</p>
              <img src="../pics/greaterThanSign.png" alt=">">
            </div></a>
          </div>
          <div class="part2">
            <img src="../pics/laptop image for second slide in homepage.png">
          </div>
      </div>
     </div>
      <!-- third slide -->

      <div class="slide" id="slide03"> 
        <div class="container">
            <div class="part1">
              <p class="firstPslide">éditez vos vidéos avec une qualité colorée</p>
              <h1>Razer Blade 18</h1>
              <p class="secondPslide">ordinateur portable ultra portable, l'original revient pour un rappel.</p>
              
              <a class="buttonA" href="#">
                <div class="button">
                <p>SHOP NOW</p>
                <img src="../pics/greaterThanSign.png" id="gr1" alt=">">
              </div></a>
            </div>
            <div class="part2">
              <img src="../pics/third laptop in homepage slides.png">
            </div>
        </div>
   </div>
    </div> 

    <!--glow effect 01 start -->
    <div id="glowEf01"><img src="../pics/glow effect01.png" alt="glowEf01"></div>

 <!--glow effect 01 end -->
    
     <!--sliding part end -->

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

    <!--glow effect 02 start -->
    <div id="glowEf02"><img src="../pics/glow effect 02.png" alt="glowEf02"></div>

 <!--glow effect 02 end -->

    <!--Best sales start -->
    <div id="bsHeader"><h1>Produit populaire </h1></div>
    <div class="bsContainer">
      <div class="bsPart1">
        <h2>Libérez le supérieur <br> Performance</h2>
        <p>Améliorez votre expérience informatique avec nos ordinateurs portables de pointe. </p> 
       <div id="BsPart1Btn"> <a  href="../productsPage/products.php">All Products</a>
      </div></div>

   

      <!---->
      <div class="bsPart2">
        
        <div class="container">
          <button class="prev" onclick="moveSlide(-1)">&#10094;</button>
        <div class="slideshow-container">
        <div class="slide-container">

        <?php
          $db = mysqli_connect('localhost', 'root', '', 'lapshop');
          $sql = "SELECT * FROM products WHERE popularProduct = 1  LIMIT 3";
          $result = mysqli_query($db, $sql);
          while ($row = mysqli_fetch_assoc($result)) {
              // Determine background color based on availability
              $backgroundColor = $row['Available'] ? '#00ff15' : '#878787';
              
              echo '
                      <div class="slide1">
                      <div class="cart ">
                          <div class="bsDot" style="background-color: ' . $backgroundColor . ';"></div>

                          <form id="form1" method="GET" action="../product/index.php">
                          <input type="hidden" name="productID" value="'.$row['ProductID'].'">
                          <button type="submit" name="ImgBtn" id="ImgBtn"> 
                              <div class="bsImg">
                                  <img src="data:image;base64,' . base64_encode($row['ProductImg']) . '" alt="' . $row['ProductID'] . '">
                              </div> 
                          </button>
                      </form>
                          <div class="bsTitle"><p>' . $row['Name'] . '</p></div>
                          <div class="Price" style="text-align:center; "> <p>'.$row['Price'].' DH </p> </div>

                          <div class="bsProperties">

                              <div class="prop"><p>'.$row['Specification'].'</p></div>
                              
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
        
          </div>

          <button class="next" onclick="moveSlide(1)">&#10095;</button>
        
        </div>
        
        
        
        
      </div>
      

    </div>

   <!--glow effect 03 start -->
   <div id="glowEf03"><img src="../pics/glow effect 03.png" alt="glowEf03"></div>

   <!--glow effect 03 end -->


    <!--glow effect 04 start -->
    <div id="glowEf04"><img src="../pics/glow effect 04.png" alt="glowEf04"></div>

    <!--glow effect 04 end -->
 
    <div class="aboutUs">
        <div id="asHeader"><h1>à propos de nous</h1></div>
        <div class="asSection">
          <div class="part1">
            <h2>Service de Livraison Rapide et Fiable</h2>
            <p>Chez Lapshop, nous nous engageons à vous fournir un service de livraison rapide et fiable pour vos achats. Notre équipe dévouée garantit que votre commande vous parvienne en toute sécurité et dans les plus brefs délais, où que vous soyez.
</p>
            <button type="button">Learn More</button>
          </div>
          <div class="part2"></div>
        </div>
    </div>


   
<?php include("../commenParts/QA-Part.php") ?>
    

</body>


<?php include("../commenParts/footer.php") ?>

</html>
