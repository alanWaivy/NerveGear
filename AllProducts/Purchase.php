<?php
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


            echo '<script>window.location.href = "../productsPage/products.php";</script>';
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

        echo '<script>window.location.href = "../checkoutPage/checkoutPage.php";</script>';
    } else {

        $alertLogin = 'alertOff';
        $alertLogout = 'alertOn';
    }
}

?>