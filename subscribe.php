<?php 

    include'connect.php';

    $email = $_POST['email'];

    $sqli = mysqli_query($con, "INSERT INTO subscriber (sid,email) VALUES(0,'$email')");
   
    If($sqli)
    {
       echo "<h1 style='margin-left:45%; margin-top:9%;'>success</h1>";
    }
    else
    {
        echo "gagal";
    }
     mysqli_close($con);
?>

<!DOCTYPEhtml>
<html lang="en">
<head>

  <!-- SITE TITTLE -->
  <meta charset="utf-8">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>JOIN℣ITΛ</title>

</head>

<body>
   
 <form>
 <input style="width: 100px; height: 50px; padding: 10px; margin-left: 45%; margin-top: 10%; cursor: pointer; font-size: 20px;" type="button" value="Back" onclick="window.location.href='http://www.joinvit.com.abkhrr.com/index.php'" />
 </form> 
 
 
</body>

</html>