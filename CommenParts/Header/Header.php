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
      <link rel="stylesheet" href="HeaderStyle.css">
      <script src="HeaderScript.js" defer></script>



</head>


<!-- nav bar start-->
<body>

<nav>
	<a href="../Home/Home.php" class="logo">
		<img src="../Pics/logo.png" alt="">
		<b>LapShop</b>
	</a>

<div class="responsiveBtns" id="mainListDiv">
  
	<ul class="menu">
    <li id="<?php echo (basename($_SERVER['REQUEST_URI']) == 'home.php') ? 'mainPage' : ''; ?>"><a href="../Home/Home.php">Home</a></li>
    <li id="<?php echo (basename($_SERVER['REQUEST_URI']) == 'products.php') ? 'mainPage' : ''; ?>"><a href="../AllProducts/Products.php">All Products</a></li>
		<li id="<?php echo (basename($_SERVER['REQUEST_URI']) == 'about.php') ? 'mainPage' : ''; ?>"><a href="../AboutUs/AboutUs.php">About Us</a></li>
		<li id="<?php echo (basename($_SERVER['REQUEST_URI']) == 'creators.php') ? 'mainPage' : ''; ?>"><a href="../Creators/Creators.php">Creators</a></li>
	</ul>

  
 
	<div class="login" style="<?php echo $loginStyle ?>">
		<a href="../LoginRegister/Login/Login.php" id="login">Login</a>
		<a href="../LoginRegister/Register/Register.php" id="signup">Register</a>
	</div>
  
  <div class="user" style="<?php echo $userStyle ?>">
    <div id="profile">
     <i class="fa-solid fa-user"></i>
    </div>
    <div id="cart">
        <div id="CartButton"><p>2</p></div>
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

<!-- nav bar end -->


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
          <form action="../Home/Home.php" method="POST" >
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


  </div> <a href="../Checkout/Checkout.php">
     <div class="checkBtn">
      <input type="button" 
             value="checkout">
     </div>
     </a>
    </div>
    </div>


    
<div id="profileContainer"  >
    <div class="subContainer">
      <a href="../Orders/Orders.php">Orders</a>
      <a href="../Home/Home.php?logout='1'" >Log out</a>


    </div></div>
</body>




 


