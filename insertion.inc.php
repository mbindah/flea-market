<?php 

//Register User
if (isset($_POST['regu'])) {
 $fname = $_POST['fname'];
 $email = $_POST['email'];
 $phone = $_POST['phone'];
 $type = $_POST['type'];
 $password = $_POST['password'];
 $passwordconfirm = $_POST['cpassword'];
 $mod = $_POST['mod'];

 require_once 'dbconnection.inc.php';

 if ($password == $passwordconfirm) {
  if ($mod == 0) {
  $sql = "INSERT INTO `users`(`Fullname`, `Phone_Number`, `Email_Address`,`User_Type`, `Password`) VALUES ('$fname','$phone','$email','User',md5('$password'))";
     mysqli_query($conn, $sql);
  header("Location: index.html?userregistration=success");
  }else{
  $sql = "INSERT INTO `users`(`Fullname`, `Phone_Number`, `Email_Address`, `User_Type`, `Password`) VALUES ('$fname','$phone','$email','$type',md5('$password'))";
     mysqli_query($conn, $sql);
  header("Location: index.php?userregistration=success");
  }
 }else{
  echo "Passwords do not match.";
 }
}

//Add An Announcement
if (isset($_POST['adda'])) {
 $mname = $_POST['mname'];
 $mdate = $_POST['mdate']; 
 $mdet = $_POST['mdet'];

 require_once 'dbconnection.inc.php';

  $sql = "INSERT INTO `announcements`(`Name`, `Details`, `Market_Date`) VALUES ('$mname','$mdet','$mdate')";
     mysqli_query($conn, $sql);
  header("Location: index.php?addannouncement=success");
}

//Add An Comment
if (isset($_POST['addc'])) {
 $uid = $_SESSION['username'];
 $pid = $_POST['pid'];
 $cont = $_POST['cont']; 

 require_once 'dbconnection.inc.php';

  $sql = "INSERT INTO `comments`(`User_ID`, `Product_ID`, `Content`) VALUES ('$uid','$pid','$cont')";
     mysqli_query($conn, $sql);
  header("Location: index2.php?addcomment=success");
}

//Add A Product
if (isset($_POST['addp'])) {
 $pname = $_POST['pname'];
 $mname = $_POST['mname']; 
 $stat = $_POST['stat']; 
 $pdet = $_POST['pdet'];

  if ($_FILES["image"]["error"] === 4) {
   echo "<script> alert('Image does not exist!'); </script>";
  }else{
  $uploads_dir = 'images';
  $fileName = $_FILES["image"]["name"];
  $fileSize = $_FILES["image"]["size"];
  $tmpName = $_FILES["image"]["tmp_name"];

  $validImageExtension = ['jpg', 'jpeg', 'png'];
  $imageExtension = explode('.', $fileName);
  $imageExtension = strtolower(end($imageExtension));

  if (!in_array($imageExtension, $validImageExtension)) {
    echo "<script> alert('Invalid Image Format!'); </script>";
  }else if($fileSize > 10000000){
    echo "<script> alert('Image is too large!'); </script>";
  }else{

    $newImgName = uniqid();
    $newImgName .= '.' . $imageExtension;

    move_uploaded_file($tmpName, "$uploads_dir/$newImgName");

 require_once 'dbconnection.inc.php';

$sql = "INSERT INTO `products`(`Name`, `Details`, `Image`, `Market_Name`, `Status`) VALUES ('$pname','$pdet','$newImgName','$mname','$stat')";
     mysqli_query($conn, $sql);
  header("Location: index1.php?addproduct=success");
}
}
}

//Update A Product
if (isset($_POST['upp'])) {
 $pname = $_POST['pname'];
 $mname = $_POST['mname']; 
 $stat = $_POST['stat']; 
 $pdet = $_POST['pdet'];
 $pid = $_POST['pid'];

  if ($_FILES["image"]["error"] === 4) {
   echo "<script> alert('Image does not exist!'); </script>";
  }else{
  $uploads_dir = 'images';
  $fileName = $_FILES["image"]["name"];
  $fileSize = $_FILES["image"]["size"];
  $tmpName = $_FILES["image"]["tmp_name"];

  $validImageExtension = ['jpg', 'jpeg', 'png'];
  $imageExtension = explode('.', $fileName);
  $imageExtension = strtolower(end($imageExtension));

  if (!in_array($imageExtension, $validImageExtension)) {
    echo "<script> alert('Invalid Image Format!'); </script>";
  }else if($fileSize > 10000000){
    echo "<script> alert('Image is too large!'); </script>";
  }else{

    $newImgName = uniqid();
    $newImgName .= '.' . $imageExtension;

    move_uploaded_file($tmpName, "$uploads_dir/$newImgName");

 require_once 'dbconnection.inc.php';

$sql = "UPDATE `products` SET `Name` = '$pname', `Details` = '$pdet', `Image` = '$newImgName', `Market_Name` = '$mname', `Status` = '$stat', `Updated_At` = 'NOW()' WHERE `Product_ID` = '$pid'";
     mysqli_query($conn, $sql);
  header("Location: index1.php?addproduct=success");
}
}
}

//Delete Functions

        if($_REQUEST['action'] == 'deleteU' && !empty($_REQUEST['id'])){ 
        require_once 'dbconnection.inc.php';
        $deleteItem = $_REQUEST['id'];
        $sql = "DELETE FROM `users` WHERE `User_ID` = '$deleteItem'";
        mysqli_query($conn, $sql); 
        header("Location: index.php?deleteuser=success");
        }

        if($_REQUEST['action'] == 'deleteA' && !empty($_REQUEST['id'])){ 
        require_once 'dbconnection.inc.php';
        $deleteItem = $_REQUEST['id'];
        $sql = "DELETE FROM `announcements` WHERE `Announcement_ID` = '$deleteItem'";
        mysqli_query($conn, $sql); 
        header("Location: index.php?deleteannouncement=success");
        }

        if($_REQUEST['action'] == 'deleteP' && !empty($_REQUEST['id'])){ 
        require_once 'dbconnection.inc.php';
        $deleteItem = $_REQUEST['id'];
        $sql = "DELETE FROM `products` WHERE `Product_ID` = '$deleteItem'";
        mysqli_query($conn, $sql); 
        header("Location: index1.php?deleteproduct=success");
        }

        if($_REQUEST['action'] == 'deleteC' && !empty($_REQUEST['id'])){ 
        require_once 'dbconnection.inc.php';
        $deleteItem = $_REQUEST['id'];
        $sql = "DELETE FROM `comments` WHERE `Comment_ID` = '$deleteItem'";
        mysqli_query($conn, $sql); 
        header("Location: index2.php?deletecomment=success");
        } 

//Update User
if (isset($_POST['upu'])) {
 $uid = $_POST['uid'];
 $fname = $_POST['fname'];
 $email = $_POST['email'];
 $password = $_POST['password'];
 $passwordconfirm = $_POST['cpassword'];
 $phone = $_POST['phone'];
 $mod = $_POST['mod'];

 require_once 'dbconnection.inc.php';

 if ($password == $passwordconfirm) {
  if ($mod == 1) {
  $sql = "UPDATE `users` SET `Fullname`='$fname',`Email_Address`='$email',`Phone_Number`='$phone',`Password`=md5('$password') WHERE `User_ID`='$uid'";
     mysqli_query($conn, $sql);
  header("Location: index.php?updateadministrator=success");
  }else if ($mod == 2) {
  $sql = "UPDATE `users` SET `Fullname`='$fname',`Email_Address`='$email',`Phone_Number`='$phone',`Password`=md5('$password') WHERE `User_ID`='$uid'";
     mysqli_query($conn, $sql);
  header("Location: index1.php?updatevendor=success");
  }else if ($mod == 3) {
  $sql = "UPDATE `users` SET `Fullname`='$fname',`Email_Address`='$email',`Phone_Number`='$phone',`Password`=md5('$password') WHERE `User_ID`='$uid'";
     mysqli_query($conn, $sql);
  header("Location: index2.php?updateuser=success");
  }
 }else{
  echo "Passwords do not match.";
 }
}

 ?>