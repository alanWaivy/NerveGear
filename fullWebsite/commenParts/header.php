<?php 
session_start();
if (isset($_SESSION['username'])) {
   $userStyle = 'display:flex!important;';
   $loginStyle = 'display:none!important;';
}
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    $userStyle = 'display:none!important;';
   $loginStyle = 'display:flex!Important;';
}

?>
    <head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bungee&family=Outfit:wght@100..900&display=swap" rel="stylesheet">
      <script src="https://kit.fontawesome.com/70ff3266e1.js" crossorigin="anonymous"></script>
      <link rel="icon" type="image/x-icon" href="../pics/logo.ico">
      <link rel="stylesheet" href="style2.css">
      <script src="index.js" defer></script>
<style>

     

      *{
      font-family: "outfit" ,sans-serif;
      }

      html,body {
      scroll-behavior: smooth;
      }


      body{
      margin: 0;
      padding: 0;
      overflow-x: hidden;
      }

      ::-webkit-scrollbar {
      width: 10px; /* Adjust as needed */
      }

      ::-webkit-scrollbar-track {
      background-color: #f1f1f1; /* Grey color */
      }

      ::-webkit-scrollbar-thumb {
      background-color: #888; /* Grey color */
      border-radius: 6px;
      }

      a{
      text-decoration: none;
      }

      .OrdersClass {
          min-width: 200px !important;
          min-height: 200px!important;
          padding: 10px;
      }


      /*NAV STYLE START */

      /* Navigation styles */

      nav a b {
      font-family: "Bungee";
      font-weight: 20;
      }

      nav {
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 5px 20px;
      margin-bottom: -65px; /* Adjust for overlapping content */
      z-index: 6;
      position: relative;
      justify-content: space-between;
      }

      /* Login button styles */
      .login, .user {
      display: flex;
      flex-direction: row;
      align-content: center;
      justify-content: center;
      align-items: center;
      gap: 10px;
      }

      .login #login:hover,
      .login #signup:hover , .user #profile:hover , .user #cart:hover {
      transform: scale(0.9); /* Shrink on hover */
      opacity: 0.8; /* Reduce opacity on hover */
      }

      .login #login,
      .login #signup ,.user #profile, .user #cart  {
      transition: opacity, transform 300ms; /* Smooth transition */
      }

      /* user style start  */
      .user {
      gap:30px!important;
      }

      #profile, #cart {
      font-size:23px;
      }
      /* user style end  */


      /* Logo styles */
      nav .logo {
      display: flex;
      justify-content: center;
      align-items: center;
      gap: 10px;
      color: #000; /* Set logo color */
      }

      nav a img {
      width: 50px; /* Adjust image width */
      }

      /* Navigation menu styles */
      nav ul {
      display: flex;
      list-style: none;
      flex: 1;
      justify-content: center;
      gap: 30px;
      padding: 0;
      }

      /* Main navigation link styles */
      nav a b {
      font-family: "Bungee";
      font-weight: 20;
      }

      nav #login ,nav #login {
      padding: 5px 15px 8px 15px;
      background-color: #378ce7; /* Set login button background color */
      border-radius: 5px; /* Rounded corners */
      color: white; /* Set text color */
      transition: opacity, transform 300ms; /* Smooth transition */
      }

      /* Hover effect for login button */
      section #login:hover {
      opacity: 0.8; /* Reduce opacity on hover */
      transform: scale(0.9); /* Shrink on hover */
      }

      nav a {
      text-decoration: none;
      color: black; /* Set default link color */
      }

      /* Hover effect for navigation links */
      .menu li {
      display: block;
      height: 100%;
      margin-right: 30px;
      position: relative;
      display: flex;
      align-items: center;
      overflow-wrap: break-word;
      color: #000000; /* Set default text color */
      transition: all 300ms cubic-bezier(0.075, 0.82, 0.165, 1); /* Smooth transition */
      }

      .menu li:after {
      content: "";
      position: absolute;
      width: 0%;
      height: 3px;
      border-radius: 25px;
      display: block;
      transition: all 0.3s ease; /* Smooth transition */
      bottom: 16%;
      margin-bottom: -5px !important; /* Adjust spacing */
      background: #00a3ff !important; /* Set default background color */
      }

      /* Navigation link specific styles */
      .menu #mainPage:after {
      width: 100%!important; /* Adjust width for specific link */
      height: 3px;
      }

      .menu li:hover::after {
      width: 100%; /* Expand on hover */
      height: 3px;
      background-color: #fff; /* Set hover background color */
      }

      .menu li .all-product {
      margin-right: 12.5px;
      width: 117.6px; /* Adjust width for specific link */
      overflow-wrap: break-word;
      font-family: 'Outfit';
      font-weight: 500;
      font-size: 20px;
      color: #000000; /* Set text color */
      }

      .menu .rectangle-28 {
      border-radius: 4px;
      background: #00a3ff; /* Set background color */
      align-self: flex-start;
      width: 98px; /* Adjust width */
      height: 5px;
      }

      
        .responsiveBtns {
            display: flex;
            gap: 330px;
            justify-content: center;
        }
        


      /* NAV STYLE END */


      /**/


      #cartContainer h1 {
      text-align: center;
      font-family: Tahoma, Arial, sans-serif;
      color: #06D85F;
      margin: 80px 0;
      }

      .box {
      width: 40%;
      margin: 100px auto;
      background: rgba(255,255,255,0.2);
      padding: 35px;
      border: 2px solid #fff;
      border-radius: 20px/50px;
      background-clip: padding-box;
      text-align: center;
      }

      #cartContainer .button {
      font-size: 1em;
      padding: 10px;
      color: #fff;
      border: 2px solid #06D85F;
      border-radius: 20px/50px;
      text-decoration: none;
      cursor: pointer;
      transition: all 0.3s ease-out;

      }

      #cartContainer .button:hover {
      background: #06D85F;
      }

      .overlay {
      position: fixed;
      top: 0;
      bottom: 0;
      left: 0;
      right: 0;
      background: rgba(0, 0, 0, 0.7);
      transition: opacity 500ms;
      visibility: hidden;
      opacity: 0;
      }
      .overlay:target {
      visibility: visible;
      opacity: 1;
      }

      .popup {
      margin: 70px auto;
      padding: 20px;
      background: #fff;
      border-radius: 5px;
      width: 30%;
      position: relative;
      transition: all 5s ease-in-out;
      }

      .popup h2 {
      margin-top: 0;
      color: #333;
      font-family: Tahoma, Arial, sans-serif;
      }
      .popup .close {
      position: absolute;
      top: 20px;
      right: 30px;
      transition: all 200ms;
      font-size: 30px;
      font-weight: bold;
      text-decoration: none;
      color: #333;
      }
      .popup .close:hover {
      color: #06D85F;
      }
      .popup .content {
      max-height: 30%;
      overflow: auto;
      }


      /*cart popup style start*/



      .orderImg img{
      max-width:60px;
      height:auto;
      }

      .orderImg {
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      flex-wrap: wrap;
      align-content: center;

      }


      #DropBtn {

      color: blueviolet;
      border: none;
      background: none;
      max-height: 15px;
      max-width: 15px;
      margin-left: -100px;

      }

      #DropBtn i {
      font-size: 15px;
      }
      /**/

      #cartContainer {
      background: #D9D9D9;
      width: 300px!important;
      position: absolute;
      z-index: 999!Important;
      top: 49px;
      right: 24px;
      opacity:0;
      display:none;
      transition: all .3s ease-in-out;
      z-index: 10;
      }


      /**/
      .orderD {
      height: 15px;
      width: 15px;
      background-color: #00ff15;
      border-radius: 50%;
      display: inline-block;
      }

      .orderD {
      margin-left: auto !important;

      }


      .orderSubprop{
      display:flex;
      max-width:95%;
      }

      p.orderTitle {
      margin-bottom: 5px;
      }
      .order{
        padding: 10px;
      }
      .order:hover {
        background: #c9c5c5;
      }

      .order .img-prop {
      display: flex;
      gap: 20px;
      align-content: center;
      justify-content: center;
      align-items: center;
      }

      .orderDetails {
      display: flex;
      align-content: center;
      align-items: end;
      width: 100%;
      margin-top: 5px;
      }

      #cartContainer hr {
      border:1px grey 
        solid;
      }

      .orderProp {
      width: 170px;
      }

      .orders {
      padding:10px;
      }

      .checkBtn {
      width: 100%;
      margin-top:-22px;
      }
      .checkBtn input {
      width: inherit;
      }

      .checkBtn input {
      background :black;
      border: none ;
      color:white;
      padding: 10px 0px;
      transition: all 200ms ease-in-out;
      font-size: 19px;

      }

      .checkBtn input:hover {
      opacity:.8;
      }

      /*cart popup style end*/
                  .user {
                      display: none;
                  }

      /* profile Container */
      #profileContainer {
            background: #D9D9D9;
            width: 230px !important;
            position: absolute;
            z-index: 999!Important;
            opacity: 0;
            display: none;
            transition: all .3s ease-in-out;
            z-index: 10;
            top: 50px;
            right: 73px;
      }

      .subContainer {
          display: flex;
          flex-direction: row;
          justify-content: space-between;
        }

        .subContainer a {
          text-decoration: none;
          padding: 20px 30px;
          transition: background 300ms ease-in-out;
        }

        .subContainer a:hover {
          background: blueviolet;
          color: white;
        }

</style>



</head>
<!-- nav bar start-->
<body>

<nav>
	<a href="../homePage/home.php" class="logo">
		<img src="../pics/logo.png" alt="">
		<b>LapShop</b>
	</a>

<div class="responsiveBtns" id="mainListDiv">
  
	<ul class="menu">
    <li id="<?php echo (basename($_SERVER['REQUEST_URI']) == 'home.php') ? 'mainPage' : ''; ?>"><a href="../homePage/home.php">Home</a></li>
    <li id="<?php echo (basename($_SERVER['REQUEST_URI']) == 'products.php') ? 'mainPage' : ''; ?>"><a href="../productsPage/products.php">All Products</a></li>
		<li id="<?php echo (basename($_SERVER['REQUEST_URI']) == 'about.php') ? 'mainPage' : ''; ?>"><a href="../aboutUsPage/about.php">About Us</a></li>
		<li id="<?php echo (basename($_SERVER['REQUEST_URI']) == 'creators.php') ? 'mainPage' : ''; ?>"><a href="../creatorsPage/creators.php">Creators</a></li>
	</ul>

  
 
	<div class="login" style="<?php echo $loginStyle ?>">
		<a href="../loginRegPage/login.php" id="login">Login</a>
		<a href="../loginRegPage/register.php" id="signup">Register</a>
	</div>
  
  <div class="user" style="<?php echo $userStyle ?>">
    <div id="profile">
     <i class="fa-solid fa-user"></i>
    </div>
    <div id="cart">
      <i class="fa-solid fa-cart-shopping"></i>
    </div>
      
    </div>

  
  
  </div>

  

    <span class="navTrigger">
                <i></i>
                <i></i>
                <i></i>
    </span>

</nav>


 <div id="cartContainer">
    <div class="orders OrdersClass">

<?php
$db = mysqli_connect('localhost','root','','lapshop');

$sql = "SELECT UserID FROM users WHERE Email = '" . $_SESSION['email'] . "'";
$Result = mysqli_query($db, $sql);

$row = mysqli_fetch_assoc($Result);

$UserID= (int) $row['UserID'];

$sql = "SELECT * FROM cart WHERE userID = '".$UserID."'";
$IDResult = mysqli_query($db,$sql);

$ProductsID = [];
$ProductsName = [];
$ProductsAV = [];
$ProductsAmount = [];
$ProductsImg  =[];
$ProductsPrices = [];

  
    while ($row = mysqli_fetch_assoc($IDResult)) {
      
      $ProductID = $row['ProductID'];

      $ProductName = $row['ProductName'];
      $Available = $row['Available'];
      $Amount = $row['Amount'];

      $sql = "SELECT * FROM products WHERE ProductID = '".$ProductID."'";
      $result = mysqli_query($db, $sql);
      $PrRow = mysqli_fetch_assoc($result);
  
      array_push($ProductsID,$ProductID);
      array_push($ProductsName,$ProductName);
      array_push($ProductsAV,$Available);
      array_push($ProductsAmount,$Amount);
      array_push($ProductsImg,$PrRow['ProductImg']);
      array_push($ProductsPrices,$PrRow['Price']);      
      // Determine background color based on availability
      $backgroundColor = $Available ? '#00ff15' : '#878787';
      echo '
      
          <!---------------->
          <form action="../homePage/home.php" method="POST" >
              <div class="order">
              <div class="img-prop">
              
                  <input type="hidden" name="ProductID value = "'.$ProductID.'">
                  <div class="orderImg">
                    <img src="data:image;base64,'.base64_encode($PrRow['ProductImg']).'" alt="' . $ProductID . '">
                    </div>
                  <div class="orderProp">
                    <p class="orderTitle">
                      '.$ProductName.'
                    </p> 
                    
                    <div class="orderDetails">

                    <p class="orderNum"> x<span>'.$Amount.'</span> </p>
                    <input type="hidden" value="'.$ProductID.'"  name="ProductID">
                    <button type="submit" name="DropBtn" id="DropBtn" ><i class="fa-solid fa-trash"></i></button>

                    <div class="orderD" style="background-color: ' . $backgroundColor . ';"></div>
                      
                    </div>
                      
                    
                    </div>
                 </div>
                 
               </div>
               
            <hr>
            </form>
              ';

    
        $sql = "SELECT UserID FROM users WHERE Email = '".$_SESSION['email']."'";
        $result = mysqli_query($db, $sql);
        $row = mysqli_fetch_assoc($result);
        $UserID = $row['UserID'];
        
        
        $sql = "SELECT * FROM cart WHERE UserID = '".$UserID."'";
        $result = mysqli_query($db, $sql);
        $row = mysqli_fetch_assoc($result);
        $ProductID = $row['ProductID'];
        $Amount = $row['Amount'];
  }

?>


  </div> <a href="../checkoutPage/checkoutPage.php">
     <div class="checkBtn">
      <input type="button" 
             value="checkout">
     </div>
     </a>
    </div>
    </div>


    
<div id="profileContainer"  >
    <div class="subContainer">
      <a href="../ordersPage/orders.php">Orders</a>
      <a href="../homePage/home.php?logout='1'" >Log out</a>


    </div></div>
</body>

 
<script defer> document.addEventListener('DOMContentLoaded', function() {
    const cart = document.getElementById('cart');
    const cartContainer = document.getElementById('cartContainer');

    let isCartContainerVisible = false;

    cart.addEventListener('click', function() {
        if (!isCartContainerVisible) {
            cartContainer.style.opacity = '1';
            cartContainer.style.display = 'block';
            isCartContainerVisible = true;
        } else {
            cartContainer.style.opacity = '0';
            setTimeout(() => {
                cartContainer.style.display = 'none';
            }, 300); // Delay the hiding of cartContainer after the animation completes
            isCartContainerVisible = false;
        }
    });
});


  const Profile = document.getElementById('profileContainer');
  const profileIcon = document.getElementById('profile');
  let isProfileVisible = false;

  profileIcon.addEventListener('click', function() {
        if (!isProfileVisible) {
            Profile.style.opacity = '1';
            Profile.style.display = 'block';
            isProfileVisible = true;
        } else {
            Profile.style.opacity = '0';
            setTimeout(() => {
                Profile.style.display = 'none';
            }, 300); // Delay the hiding of cartContainer after the animation completes
            isProfileVisible = false;
        }
    });


</script>
