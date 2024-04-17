<?php 
if(isset($_POST['DropBtn'])) {
 
        $ProductID1 = $_POST['ProductID'];
        $sql = "SELECT * FROM cart WHERE UserID = '".$UserID."' AND ProductID = '".$ProductID1."'";
        $result = mysqli_query($db, $sql);
        $row = mysqli_fetch_assoc($result);
        $Amount = $row['Amount'];
        if ($Amount) { 
            $Amount = $Amount - 1;
            $sql = "UPDATE cart SET Amount = '$Amount' WHERE UserID = '".$UserID."' AND ProductID = '".$ProductID1."'";
            mysqli_query($db, $sql);
        
        } elseif ($Amount == 0) {
            $sql = "DELETE FROM cart WHERE UserID = '".$UserID."' AND ProductID = '".$ProductID1."'";
            mysqli_query($db, $sql);
        }
    }

    
  
?>