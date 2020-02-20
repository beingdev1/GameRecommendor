<html>
<form method="POST" action="checktest.php">
    <input type="checkbox" name="just" >
    <input type="submit" name="submit">
    </form>    
</html>
<?php
if (isset($_POST['submit'])){

    
    if(isset($_POST['just'])){
        echo "DONE";
    }
}
?>