<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LapShop</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bungee&family=Outfit:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="icon" type="image/x-icon" href="../pics/logo.ico">

    <link rel="stylesheet" href="https://kit.fontawesome.com/abfa77da96.js" crossorigin="anonymous">
</head>

<body>

<?php include("../commenParts/header.php"); ?>

<div class="main">

    <?php include("searchBar.php"); ?>

    <!-- carts -->
    <div class="carts">
        <?php
        $alertLogin = "";
        $alertLogout = "";
        $db = mysqli_connect('localhost', 'root', '', 'lapshop');

        if (!$db) {
            die("Connection failed: " . mysqli_connect_error());
        }
        $price = isset($_GET['price']) ? $_GET['price'] : 'ASC';
        $sql = "SELECT * FROM products ORDER BY Price $price";
        $result = mysqli_query($db, $sql);

        while ($row = mysqli_fetch_assoc($result)) {
             $backgroundColor = $row['Available'] ? '#00ff15' : '#878787';
    echo '
    
            <div class="cart ">
                
                <form method="post" action="products.php" >
                 <div class="bsDot" style="background-color: ' . $backgroundColor . ';"></div>
                <div class="bsImg">
                    <img src="data:image;base64,'.base64_encode($row['ProductImg']).'" alt="' . $row['ProductID'] . '">
                </div>
                <div class="bsTitle"><p>' . $row['Name'] . '</p></div>
                <div class="bsProperties">
                    <div class="prop"><p>'.$row['Specification'].'</p></div>
                 
                </div>
                <div class="Price" style="text-align:center; "> <p>'.$row['Price'].' DH </p> </div>
                    <div class="bsButtons">
                    <input type="hidden" name="ProductID" value="' . $row['ProductID'] . '">
                    <input type="hidden" name="Available" value="' . $row['Available'] . '">
                    <input type="hidden" name="ProductN" value="' . $row['Name'] . '">
                        <button type="submit" id="btn01" name="CartBtn" >Add To Cart</button>
                        <button type="submit" id="btn02" name="ShopBtn">Shop Now</button>
                    </div>
                </form>
            </div>
        ';
    
    
}

    if(isset($_POST['CartBtn'])) {
        if (isset($_SESSION['username'] )){ 
            
            $alertLogin = 'alertOn';
            $alertLogout = 'alertOff';

            
            $ProductID = (int) $_POST['ProductID'];
            $ProductName = $_POST['ProductN'];
            $Available1 = $_POST['Available'];
            
            $sql = "SELECT UserID FROM users WHERE Email = '" . $_SESSION['email'] . "'";
            $Result = mysqli_query($db, $sql);

            $row = mysqli_fetch_assoc($Result);
            
            $UserID= (int) $row['UserID'];
            $Result = mysqli_query($db, "SELECT Amount FROM cart WHERE UserID = '". $UserID."' AND ProductID = '".$ProductID."' ");

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
 
}       else{   
        
    $alertLogin = 'alertOff';
    $alertLogout = 'alertOn';
}}    

    if(isset($_POST['ShopBtn'])) {
        if (isset($_SESSION['username'] )){ 
            
            $alertLogin = 'alertOn';
            $alertLogout = 'alertOff';

            
            $ProductID = (int) $_POST['ProductID'];
            $ProductName = $_POST['ProductN'];
            $Available1 = $_POST['Available'];
            
            $sql = "SELECT UserID FROM users WHERE Email = '" . $_SESSION['email'] . "'";
            $Result = mysqli_query($db, $sql);

            $row = mysqli_fetch_assoc($Result);
            
            $UserID= (int) $row['UserID'];
            $Result = mysqli_query($db, "SELECT Amount FROM cart WHERE UserID = '". $UserID."' AND ProductID = '".$ProductID."' ");

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
 
}       else{   
        
    $alertLogin = 'alertOff';
    $alertLogout = 'alertOn';
}}    





        
        ?>
    </div>
</div>

<div class="alertDiv <?php echo $alertLogout; ?>"><h1>Login First!!</h1></div>
<div class="alertDiv <?php echo $alertLogin; ?>"><h1>Complete!!</h1></div>

<?php include("../commenParts/footer.php"); ?>



</body>
</html>

 
<style>

    .alertOn{
        
        animation: alert 700ms 50ms ease-in-out;
        z-index: 999;
        opacity: 0  ;



        
    }
    .alertOff{
         display: none!important;
        
    }
 
    .alertDiv{
    width: 153px;
    height: 46px;
    background-color: blueviolet;
    color: white;
    left: 43%;
    top: 20%;
    opacity: 0;
    align-items: center;
    align-content: center;
    flex-direction: row;
    border-radius: 24px;
    transition: opacity 300ms ease-in-out;
    box-shadow: 6px 8px 9px 10px rgba(0, 0, 0, 0.1);
    justify-content: center;
    z-index: -1;

}

.alertDiv h1 {
    font-size: 18px;
    margin-bottom: 15px;
}

    @keyframes alert {
    0%{
            opacity: 0;
            display: flex;
            z-index: -1;
    } 

    50%{
            opacity: 1;
            display: flex;
            z-index: 999;
            position: fixed ;

    }

    100%{
            opacity: 0;
            display: none;
            z-index: -1;;
            transform: translateY(-28px);;
    }
    }



    .Price p {
    font-size: 27px;
    }
    .Price {
    margin-top: 40px;}

</style>


