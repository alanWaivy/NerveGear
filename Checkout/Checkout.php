 <!DOCTYPE html>
 <html lang="en">

 <head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>LapShop</title>
   <script src="https://kit.fontawesome.com/abfa77da96.js" crossorigin="anonymous"></script>
   <link rel="icon" type="image/x-icon" href="../pics/logo.ico">

   <link rel="stylesheet" href="CheckoutStyle.css">

   
   <link rel="stylesheet" href="../CommenParts/Header/HeaderStyle.css">
    <script src="../CommenParts/Header/HeaderScript.js" defer></script>
    
    <link rel="stylesheet" href="../CommenParts/Footer/FooterStyle.css">

    <script src="../CommenParts/QA/QaScript.js" defer></script>
    <link rel="stylesheet" href="../CommenParts/QA/QaStyle.css">

    

 </head>

 <body>

   <?php include("../CommenParts/Header/Header.php");?>


   <!---shopping cart start -->
   <div id="scContainer">
     <div class="scPart1">

       <div class="scCheckboxs">
         <h2>Shopping cart <span></span></h2>
         <div class="range">
           <div class="scDelete">
             <form action="checkoutPage.php" method="post">
               <input value="Delete select items" type="submit" name="deleteBtn">
             </form>
           </div>

         </div>
       </div>

       <?php

        $i = 0;
        $sql = "SELECT * FROM cart WHERE userID = '" . $UserID . "'";
        $IDResult = mysqli_query($db, $sql);
        while ($row = mysqli_fetch_assoc($IDResult)) {

          $ProductsPrices[$i] = $ProductsAmount[$i] * $ProductsPrices[$i];
          $AV = $ProductsAV[$i] ? "" : "NAvailable";

          echo '
  <form action="checkoutPage.php" method="post">
  <div class="scProduct ' . $AV . '">
  <div class="img1">
    <img src="data:image;base64,' . base64_encode($ProductsImg[$i]) . '" width="90px" height="70px">
  </div>
  <div class="prop">
      <div class="Text TitlePrice">
        <p class="Title">' . $ProductsName[$i] . '</p>
        <p class="Price">' . $ProductsPrices[$i] . '<span>DH</span></p>
      </div>
      <div class="TrashAmount">
            <button name="trashBtn" class="trashBtn">
            <div class="trash" >
              <i class="fa-solid fa-trash" aria-hidden="true"></i>
            </div>
            </button> 
            <div class="Amount">
           
              <button type="submit" name="plusBtn" value="plusBtn"> <i class="fa-solid fa-plus" aria-hidden="true"></i></button>
              <p>' . $ProductsAmount[$i] . '</p>
              <input type="hidden" value="' . $i . '" name="i" >
              <button type="submit" name="minusBtn" value="minusBtn"><i class="fa-solid fa-minus" aria-hidden="true"></i></button>
            </div>
      </div>
      
  </div>

  

</div></form>
  
      ';

          if ($AV == "NAvailable") {
            $ProductsPrices[$i] = 0;
            $ProductsID[$i] = "x";
          }

          

          $i++;

          

        }


        ?>

       <?php

        if (isset($_POST['minusBtn'])) {
          if (isset($_SESSION['username'])) {

            $i1 = $_POST['i'];
            $ProductsAmount[$i1]--;
            if($ProductsAmount[$i1]<1){
              $ProductsAmount[$i1]=1;
            }
            $sql = "UPDATE cart SET Amount = $ProductsAmount[$i1] WHERE userID = $UserID AND productID =  $ProductsID[$i1] ";
            mysqli_query($db, $sql);
            echo "<script> window.location.href = 'checkoutPage.php' </script>";
          }
        }

        if (isset($_POST['plusBtn'])) {
          if (isset($_SESSION['username'])) {
            $i2 = $_POST['i'];
            $ProductsAmount[$i2]++;
            $sql = "UPDATE cart SET Amount = $ProductsAmount[$i2] WHERE userID = $UserID AND productID = $ProductsID[$i2] ";
            mysqli_query($db, $sql);
            echo "<script> window.location.href = 'checkoutPage.php' </script>";
          }
        }

        if (isset($_POST['trashBtn'])) {
          if (isset($_SESSION['username'])) {

            $i3 = $_POST['i'];
            # error_reporting(0);

            $result =mysqli_query($db,"SELECT * FROM cart WHERE userID = $UserID AND productID = $ProductsID[$i3] LIMIT 1") ;

            if (mysqli_num_rows($result) > 0) {
              $sql = "DELETE FROM cart WHERE userID = $UserID AND productID = $ProductsID[$i3]";
              mysqli_query($db, $sql);
              echo "<script> window.location.href = 'checkoutPage.php' </script>";
            }
          }
        }
        ?>


     </div>
     <div class="scPart2">
       <h1 class="scSummary">Summary</h1>
       <div id="Prices">
         <div class="subTotal">
           <p class="firstSub">sub Total:</p>
           <p class="secondSub"><?php echo array_sum($ProductsPrices); ?>DH</p>
         </div>
         <div class="shippingPrice">
           <p class="firstSub">Shipping Price:</p>
           <p class="secondSub"> 100 DH</p>
         </div>
         <div class="totalPrice">
           <p class="firstSub TotalP">Total: </p>
           <p class="secondSub TotalP"> <?php echo array_sum($ProductsPrices) + 100; ?> DH</p>
         </div>
       </div>
       <form action="../Checkout/Checkout.php" method="post">
         <button class="CheckBtn" name="CheckBtn">Checkout</button>
       </form>
       <div class="ContainerF">
         <div class="payWith">
           <p class="payWith">Pay With</p>
           <div id="PaymentMeths">
             <img src="../pics/pyMethods1.png" alt="" width="190px" height="40px"><img src="../pics/pyMethods2.png" alt="" width="50px" height="auto">
           </div>
         </div>
         <div id="buyerProtection">
           <p id="buyerPTitle">Buyer Protection</p>
           <div id="buyerPDI">
             <i class="fa-solid fa-clipboard-check"></i>

             <p id="buyerPDesc">Get full refund if the item is not as described or of is not delivered</p>

           </div>
         </div>
       </div>
     </div>



   </div>

   <?php

    $j = 0;
    if (isset($_POST['CheckBtn'])) {
      if (isset($_SESSION['username'])) {

        foreach ($ProductsID as $key => $value) {


          if ($ProductsID[$j] == "x") {

            $j++;
            continue;
          } else {
            $sql = "SELECT * FROM products WHERE ProductID = ?";
            $stmt = mysqli_prepare($db, $sql);
            mysqli_stmt_bind_param($stmt, "s", $ProductsID[$j]);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            $PrRow = mysqli_fetch_assoc($result);
            $productImg = mysqli_real_escape_string($db, $PrRow['ProductImg']);
            $sq2l = "INSERT INTO orders (ProductID, UserID, ProductImg, NName, Amount, Price) VALUES ('$ProductsID[$j]', '$UserID', '$productImg', '$ProductsName[$j]', '$ProductsAmount[$j]', '$ProductsPrices[$j]')";
            mysqli_query($db, $sq2l);
            $j++;
          }
          mysqli_query($db, "DELETE FROM cart WHERE UserID = '" . $UserID . "' ");
          echo '<script>window.location.href = "../Home/Home.png";</script>';
        }
      }
    }

    ?>

   <?php
    if (isset($_POST['deleteBtn'])) {
      if (isset($_SESSION['username'])) {
        // Perform deletion in the database
        mysqli_query($db, "DELETE FROM cart WHERE UserID = '" . $UserID . "' ");

        // Redirect using JavaScript
        echo '<script>window.location.href = "../Home/Home.php";</script>';
        exit();
      }
    }
    ?>




   <!-- shopping cart end -->

   <?php include("../CommenParts/QA/QA.php"); ?>
   <?php include("../CommenParts/Footer/Footer.php"); ?>

 </body>

 </html>