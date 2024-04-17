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
<?php include("../commenParts/header.php");?>


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

       
        echo $ProductsName[0];

     ?>
     
    <div class="scProduct">
      <input type="checkbox" name="product" id="product">
      <div class="img1">
        <img src="../pics/img slide 1 homepage.png" width="90px" height="70px" >
      </div>
      <div class="prop">
          <div class="Text TitlePrice">
            <p class="Title" >Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            <p class="Price">360<span>$</span></p>
          </div>
          <div class="TrashAmount">
                <div class="trash">
                  <i class="fa-solid fa-trash"></i>
                </div>
                <div class="Amount">
                  <button type="submit" value="minusBtn"> <i class="fa-solid fa-plus"></i></button>
                  <p>1</p>
                  <button type="submit" value="plusBtn"><i class="fa-solid fa-minus"></i></button>
                </div>
          </div>
          
      </div>

		</div>

    <div class="scProduct">
      <input type="checkbox" name="product" id="product">
      <div class="img1">
        <img src="../pics/img slide 1 homepage.png" width="90px" height="70px">
      </div>
      <div class="prop">
          <div class="Text TitlePrice">
            <p class="Title">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            <p class="Price">360<span>$</span></p>
          </div>
          <div class="TrashAmount">
                <div class="trash">
                  <i class="fa-solid fa-trash" aria-hidden="true"></i>
                </div>
                <div class="Amount">
                  <button type="submit" value="minusBtn"> <i class="fa-solid fa-plus" aria-hidden="true"></i></button>
                  <p>1</p>
                  <button type="submit" value="plusBtn"><i class="fa-solid fa-minus" aria-hidden="true"></i></button>
                </div>
          </div>
          
      </div>

      

		</div>

    <div class="scProduct">
      <input type="checkbox" name="product" id="product">
      <div class="img1">
        <img src="../pics/img slide 1 homepage.png" width="90px" height="70px">
      </div>
      <div class="prop">
          <div class="Text TitlePrice">
            <p class="Title">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            <p class="Price">360<span>$</span></p>
          </div>
          <div class="TrashAmount">
                <div class="trash">
                  <i class="fa-solid fa-trash" aria-hidden="true"></i>
                </div>
                <div class="Amount">
                  <button type="submit" value="minusBtn"> <i class="fa-solid fa-plus" aria-hidden="true"></i></button>
                  <p>1</p>
                  <button type="submit" value="plusBtn"><i class="fa-solid fa-minus" aria-hidden="true"></i></button>
                </div>
          </div>
          
      </div>

      

		</div>


		
  </div>
  
		<div class="scPart2">
			<h1 class="scSummary">Summary</h1>
      <div id="Prices">
          <div class="subTotal"><p class="firstSub">sub Total:</p> <p class="secondSub"> 24010 DH</p></div>
              <div class="shippingPrice"><p class="firstSub">Shipping Price:</p> <p class="secondSub"> 100 DH</p></div>
            <div class="totalPrice"><p class="firstSub TotalP">Total: </p> <p class="secondSub TotalP"> 24110 DH</p></div>
      </div>

			<button class="CheckBtn">Checkout</button>
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

<!-- shopping cart end -->

<?php include("../commenParts/QA-Part.php");?>
<?php include("../commenParts/footer.php");?>

</body>
</html>