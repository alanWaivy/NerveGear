 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LapShop</title>
    <script src="https://kit.fontawesome.com/abfa77da96.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php include("../commenParts/header.php");
?>



<!---shopping cart start -->
<div id="scContainer">
  
  <div class="scPart1">

    <div class="scCheckboxs">
      <h2>Shopping cart <span></span></h2>
      <div class="range">
      <div class="scCheckbox" >
        <input  type="checkbox">Select of items
      </div>
        <div class="scDelete">
        <a href="">Delete select items</a>
      </div>
    </div>
    </div>

<?php 

$i = 0;
$sql = "SELECT * FROM cart WHERE userID = '".$UserID."'";
$IDResult = mysqli_query($db,$sql);
while ($row = mysqli_fetch_assoc($IDResult)) {

    $ProductsPrices[$i] = $ProductsAmount[$i]*$ProductsPrices[$i];
    $AV = $ProductsAV[$i]? "" : "NAvailable";

  echo '
  
  <div class="scProduct '.$AV.'">
  <input type="checkbox" name="product" id="product">
  <div class="img1">
    <img src="data:image;base64,'.base64_encode($ProductsImg[$i]).'" width="90px" height="70px">
  </div>
  <div class="prop">
      <div class="Text TitlePrice">
        <p class="Title">'.$ProductsName[$i].'</p>
        <p class="Price">'.$ProductsPrices[$i].'<span>DH</span></p>
      </div>
      <div class="TrashAmount">
            <div class="trash">
              <i class="fa-solid fa-trash" aria-hidden="true"></i>
            </div>
            <div class="Amount">
              <button type="submit" value="minusBtn"> <i class="fa-solid fa-plus" aria-hidden="true"></i></button>
              <p>'.$ProductsAmount[$i].'</p>
              <button type="submit" value="plusBtn"><i class="fa-solid fa-minus" aria-hidden="true"></i></button>
            </div>
      </div>
      
  </div>

  

</div>
  
      ';

      if($AV == "NAvailable") {
        $ProductsPrices[$i] = 0;
        $ProductsID[$i] = "x";

      }



      $i++;

      


}
?>

 

    



		
  </div>
		<div class="scPart2">
			<h1 class="scSummary">Summary</h1>
      <div id="Prices">
          <div class="subTotal"><p class="firstSub">sub Total:</p> <p class="secondSub"><?php  echo array_sum($ProductsPrices); ?>DH</p></div>
              <div class="shippingPrice"><p class="firstSub">Shipping Price:</p> <p class="secondSub"> 100 DH</p></div>
            <div class="totalPrice"><p class="firstSub TotalP">Total: </p> <p class="secondSub TotalP"> <?php  echo array_sum($ProductsPrices)+100; ?> DH</p></div>
      </div>
      <form action="../checkoutPage/checkoutPage.php" method="post">
			<button class="CheckBtn"  name="CheckBtn">Checkout</button> </form>
      <div class="ContainerF">
			<div class="payWith">
				<p class="payWith">Pay With</p>
				<div id="PaymentMeths">
        <img src="../pics/pyMethods1.png" alt=""  width="190px" height="40px"><img src="../pics/pyMethods2.png" alt="" width="50px" height="auto">
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
  if(isset($_POST['CheckBtn'])) { 
    if (isset($_SESSION['username'] )){ 
     
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
               }
    }
    }
    
?>


<!-- shopping cart end -->

<?php include("../commenParts/QA-Part.php");?>
<?php include("../commenParts/footer.php");?>

</body>
</html>