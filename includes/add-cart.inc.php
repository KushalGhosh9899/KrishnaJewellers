<?php
session_start();
if(isset($_SESSION['userId'])){
    if(isset($_POST['add-cart'])){
        require 'db.inc.php';
        $pid=$_POST['pid'];
        $sql = "SELECT * FROM products WHERE sno='$pid'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0)
        {
            $row = $result->fetch_assoc(); 
            $pname=$row['pname'];
            $price=$row['price'];
            $image=$row['pimage'];
            $_SESSION['modalvalue']=1;
            $_SESSION['pcategory']=$row['category'];
            $sqlquery = "INSERT INTO cart(pname, pid, pimage, price, userid) VALUES(?,?,?,?,?)";
            $stmt = mysqli_stmt_init($conn);
            mysqli_stmt_prepare($stmt,$sqlquery);
            mysqli_stmt_bind_param($stmt,"sisis",$pname,$pid,$image,$price,$_SESSION['userId']);
            mysqli_stmt_execute($stmt);
            header('Location: ../'.$row['category'].'.php?product_added_to_cart');
        }
    }else{
        header("Location: ../categories.php");
    }
}else{
    header("Location: ../login.php?Login-first");
}
