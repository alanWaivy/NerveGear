<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LapShop</title>
    <link rel="stylesheet" href="OrdersStyle.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bungee&family=Outfit:wght@100..900&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/70ff3266e1.js" crossorigin="anonymous"></script>
    <link rel="icon" type="image/x-icon" href="../pics/logo.ico">

</head>

<body>

<?php include('../commenParts/header.php'); ?>

<div class="Container">
    <div class="OrHeader"> <h1>Orders</h1> </div>
    <div class="Orders">

<?php 
            $sql = "SELECT * FROM orders WHERE userID = '".$UserID."'";
            $IDResult = mysqli_query($db,$sql);
            while ($row = mysqli_fetch_assoc($IDResult)) { 

                echo '   <div class="Order">

               <div class="imgProp">

                    <div class="imgAmount">
                        <img src="data:image;base64,'.base64_encode($row['ProductImg']).'" width="90px" height="70px">
                        <div class="Amount">
                        <p>Amount : '.$row['Amount'].'</p> 
                        </div>
                    </div>
                    <div class="prop">
                            <p class="Title">'.$row['NName'].'</p>
                            <p class="Price">'.$row['Price'].'<span>DH</span></p>
                    </div>

                </div>      
                    
                    
                
                  
      </div> ';

             }

                         error_reporting(0);

?>

       
      
  </div>

  

</div>
        </div>
    </div>

</div>


</body>
</html>