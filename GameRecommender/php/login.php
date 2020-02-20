 <?php
    include 'connection.php';
   
    $username = $_post['username'];
    $password = $_post['password'];
    
    $sql = "SELECT * from userinfo where username = " . $username ." && password = " .$password ;
    $result = mysqli_query($con,$sql);
    if(mysqli_num_rows($result) = 1){
        echo("Login Successful");
    }
?>