<?php include("connecton.php");?>
<?php
    if (isset($_POST['register']))
    {
     $fname     = $_POST['fullName'];
     $fusername = $_POST['username'];
     $femail    = $_POST['email'];
     $fnumber   = $_POST['phoneNumber'];
     $fpass     = $_POST['password'];
     $fconpass  = $_POST['confirmPassword'];
     $fgender   = $_POST['gender'];

     $query = "INSERT INTO lio Values( '$fname','$fusername','$femail', '$fnumber','$fpass','$fconpass','$fgender')";
     $data = mysqli_query($conn, $query);
     if($data)
     {
       echo include('login.php');
     }
     else
     {
      echo "failed";
     }

    }
    ?>