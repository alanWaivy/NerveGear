<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LapShop</title>
    <link rel="stylesheet" href="ProductsStyle.css">
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bungee&family=Outfit:wght@100..900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="icon" type="image/x-icon" href="../pics/logo.ico">
    <link rel="stylesheet" href="https://kit.fontawesome.com/abfa77da96.js" crossorigin="anonymous">



    <link rel="stylesheet" href="../CommenParts/Header/HeaderStyle.css">
    <script src="../CommenParts/Header/HeaderScript.js" defer></script>
    
    <link rel="stylesheet" href="../CommenParts/Footer/FooterStyle.css">

    <link rel="stylesheet" href="../AllProducts/SearchBar/SBStyle.css">

</head>

<body>

    <?php include ("../CommenParts/Header/Header.php"); ?>

    <div class="main">

        <?php include ("../AllProducts/SearchBar/SearchBar.php"); ?>

        <!-- carts -->
        <div class="carts">
            <?php
            $alertLogin = "";
            $alertLogout = "";
            $db = mysqli_connect('localhost', 'root', '', 'lapshop');

            if (!$db) {
                die("Connection failed: " . mysqli_connect_error());
            }
            $_SESSION['price'] = !empty($_GET['price']) ? $_GET['price'] : (isset($_SESSION['price']) ? $_SESSION['price'] : 'ASC');
            $q = !empty($_GET['q']) ? $_GET['q'] : '';
            $max = !empty($_GET['Mprice']) ? $_GET['Mprice'] : '50000';
            $min = !empty($_GET['Nprice']) ? $_GET['Nprice'] : '0';
            $price = isset($_SESSION['price']) ? $_SESSION['price'] : 'ASC';
            $cat = !empty($_GET['cat']) ? "AND Specification = '{$_GET['cat']}'" : '';
            $sql = "SELECT * FROM products WHERE Name LIKE '%{$q}%' AND Price BETWEEN $min AND $max $cat ORDER BY Price $price";
            $result = mysqli_query($db, $sql);

            if (mysqli_num_rows($result) == 0) {
                echo "<div style='height:30vh';>No Results</div>";
            } else {
                while ($row = mysqli_fetch_assoc($result)) {
                    $backgroundColor = $row['Available'] ? '#00ff15' : '#878787';
                    echo '<div class="cart ">
                       
                            <div class="bsDot" style="background-color: ' . $backgroundColor . ';"></div>
                            
                            <form id="form1" method="GET" action="../Product/Product.php">
                                <input type="hidden" name="productID" value="'.$row['ProductID'].'">
                                <button type="submit" name="ImgBtn" id="ImgBtn"> 
                                    <div class="bsImg">
                                        <img src="data:image;base64,' . base64_encode($row['ProductImg']) . '" alt="' . $row['ProductID'] . '">
                                    </div> 
                                </button>
                            </form>

                            <div class="bsTitle"><p>' . $row['Name'] . '</p></div> 
                                        <div class="Price" style="text-align:center; "> <p>' . $row['Price'] . ' DH </p> </div>
    
                            <div class="bsProperties">
                                <div class="prop"><p>' . $row['Specification'] . '</p></div>
                            
                            </div> 
                            <form method="post" action="products.php" >
                                <div class="bsButtons">
                                    <input type="hidden" name="ProductID" value="' . $row['ProductID'] . '">
                                    <input type="hidden" name="Available" value="' . $row['Available'] . '">
                                    <input type="hidden" name="ProductN" value="' . $row['Name'] . '">
                                    <button type="submit" id="btn01" name="CartBtn">Add To Cart</button>
                                    <button type="submit" id="btn02" name="ShopBtn">Shop Now</button>
                                </div> 
                            </form>
                       
                    </div>';
                }
            }

            if (isset($_POST['CartBtn'])) {
                if (isset($_SESSION['username'])) {

                    $alertLogin = 'alertOn';
                    $alertLogout = 'alertOff';


                    $ProductID = (int) $_POST['ProductID'];
                    $ProductName = $_POST['ProductN'];
                    $Available1 = $_POST['Available'];

                    $sql = "SELECT UserID FROM users WHERE Email = '" . $_SESSION['email'] . "'";
                    $Result = mysqli_query($db, $sql);

                    $row = mysqli_fetch_assoc($Result);

                    $UserID = (int) $row['UserID'];
                    $Result = mysqli_query($db, "SELECT Amount FROM cart WHERE UserID = '" . $UserID . "' AND ProductID = '" . $ProductID . "' ");

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


                        echo '<script>window.location.href = "../AllProducts/Products.php";</script>';
                    }
                } else {

                    $alertLogin = 'alertOff';
                    $alertLogout = 'alertOn';
                }
            }

            if (isset($_POST['ShopBtn'])) {
                if (isset($_SESSION['username'])) {

                    $alertLogin = 'alertOn';
                    $alertLogout = 'alertOff';


                    $ProductID = (int) $_POST['ProductID'];
                    $ProductName = $_POST['ProductN'];
                    $Available1 = $_POST['Available'];

                    $sql = "SELECT UserID FROM users WHERE Email = '" . $_SESSION['email'] . "'";
                    $Result = mysqli_query($db, $sql);

                    $row = mysqli_fetch_assoc($Result);

                    $UserID = (int) $row['UserID'];
                    $Result = mysqli_query($db, "SELECT Amount FROM cart WHERE UserID = '" . $UserID . "' AND ProductID = '" . $ProductID . "' ");

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

                    echo '<script>window.location.href = "../Checkout/Checkout.php";</script>';
                } else {

                    $alertLogin = 'alertOff';
                    $alertLogout = 'alertOn';
                }
            }


            ?>
        </div>
    </div>

    <div class="alertDiv <?php echo $alertLogout; ?>">
        <h1>Login First!!</h1>
    </div>
    <div class="alertDiv <?php echo $alertLogin; ?>">
        <h1>Complete!!</h1>
    </div>

    <?php include ("../CommenParts/Footer/Footer.php"); ?>



</body>

</html>
