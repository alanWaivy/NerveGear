<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LapShop</title>
    <link rel="icon" type="image/x-icon" href="../Pics/logo.ico">
    <link rel="stylesheet" href="AboutUsStyle.css">


    <link rel="stylesheet" href="../CommenParts/Header/HeaderStyle.css">
    <script src="../CommenParts/Header/HeaderScript.js" defer></script>
    
    <link rel="stylesheet" href="../CommenParts/Footer/FooterStyle.css">

    <script src="../CommenParts/QA/QaScript.js" defer></script>
    <link rel="stylesheet" href="../CommenParts/QA/QaStyle.css">

    


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bungee&family=Outfit:wght@100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap" rel="stylesheet">

</head>

<body>

<?php include("../CommenParts/Header/Header.php");?>

    <section class="hero">
        <div>
            <span>Bienvenue chez LapShop</span>
            <p>Faites-nous confiance pour vous offrir l'excellence technologique à chaque achat. </p>
            <div id="heroBtn">
            <button id="Hbtn01" ><a href="../AllProducts/Products.php">All Products</a></button>
		      	<button id="Hbtn02" ><a href="../Home/Home.php#bsHeader">Best Sales</a></button>
            </div>
        </div>
    </section>


    <!--brands part start-->
    <div class="brandsSec">
      <img src="../Pics/pics of the brands/Vector.png" alt="hp"  id="hp">
      <img src="../Pics/pics of the brands/simple-icons_razer.png" alt="razer">
      <img src="../Pics/pics of the brands/simple-icons_msibusiness.png" alt="">
      <img src="../Pics/pics of the brands/simple-icons_acer.png" alt="acer">
      <img src="../Pics/pics of the brands/mdi_microsoft.png" alt="microsoft">
      <img src="../Pics/pics of the brands/ic_baseline-apple.png" alt="Apple">
     </div>
    <!-- brands part end -->

    <div class="img01">
      <div class="part01">
        <h1>Innovation et Engagement : Notre Promesse Technologique</h1>
      <p>À Lapshop, notre mission va au-delà de la simple vente de produits informatiques. Nous aspirons à être votre partenaire de confiance dans le monde de la technologie. Notre engagement envers l'innovation, la qualité et le service client inégalé nous distingue. Que vous soyez un professionnel à la recherche de solutions avancées ou un amateur passionné, nous sommes là pour vous accompagner dans la réalisation de vos objectifs technologiques. Avec [Nom de votre entreprise], vous pouvez être assuré de trouver non seulement les meilleurs produits, mais aussi le soutien et l'expertise dont vous avez besoin pour réussir.</p>
      <button><a href="../AllProducts/Products.php">All Products</a></button>
      </div> 
    </div>
    <div class="parag">
    <h1>Notre Engagement : Votre Partenaire de Confiance dans la Technologie</h1>
    <p>Chez Lapshop, nous privilégions la transparence et l'intégrité, garantissant des informations précises sur nos produits et pratiques. Nous nous engageons également envers la responsabilité sociale et environnementale, tout en cultivant des relations durables fondées sur la confiance et le respect mutuel.
    </p>
    </div>
    <div class="img02">
      <div class="part02">
        <h1>Exploration et Collaboration : Joignez-vous à notre Communauté Créative</h1>
      <p>Dans notre communauté de créateurs chez Lapshop , nous célébrons la diversité des talents et des idées. Que vous soyez un développeur passionné, un designer innovant ou un artiste numérique, vous trouverez ici un espace pour partager votre vision et collaborer avec d'autres esprits créatifs. Rejoignez-nous pour faire partie d'une communauté dynamique où chaque contribution compte </p>
      <button><a href="../AllProducts/Products.php">All Products</a></button>
      </div> 
    </div>

    
  
    <?php include("../CommenParts/QA/QA.php");?>

   

</body>

<?php include("../CommenParts/Footer/Footer.php");?>

</html>