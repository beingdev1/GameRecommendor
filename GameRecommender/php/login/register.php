<html>
<head>
	<title>Registration</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<link rel="stylesheet" href="registration.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script>
    var expanded=false;
    function showCheckboxes(){
        var checkboxes=document.getElementById("checkboxes");
        if(!expanded){
        checkboxes.style.display="block";
            expanded=true;
        }else{
            checkboxes.style.display="none";
            expanded=false;
        }
    }
    </script>
</head>
<body>
	<div class="container">
		<div class="row" id="registration">
			<div class="col-md-7"></div>
			<div class="col-md-4">
				<form action="register.php" method="post">
					<h3><b>Registration</b></h3>
					<br>
					<div class="form-group">
						<lable for="">First Name</lable>
						<input type="text" name="firstname" placeholder="First Name" class="form-control" >
					</div>
					<div class="form-group">
						<lable for="">Last Name</lable>
						<input type="text" name="lastname" placeholder="Last Name" class="form-control" >
					</div>
					<div class="form-group">
						<lable for="">Email</lable>
						<input type="text" name="email" placeholder="Email" class="form-control">
					</div>
					<div class="form-group">
						<lable for="">Username</lable>
						<input type="text" name = "username" placeholder="Username" class="form-control">
					</div>
					<div class="form-group">
						<lable for="">Password</lable>
						<input type="password" name="password" placeholder="*****" class="form-control">
					</div>
					<div class ="form-group">
					<label for="">Category Selection</label>
					<table cellspacing="1" border="1" width="200" cellspacing="1" class="form-control" >
					<tr>
				        <td width="30%" ><input type="checkbox" name="isMassivelyMultiplayer" />Massively Multiplayer</td>
				        <td><input type="checkbox" name="isRacing" />Racing</td>
				        <td><input type="checkbox" name="isSports" />Sports</td>
                    </tr>
                    <tr>
				        <td><input type="checkbox" name="isSimulation" />Simulation</td>
				        <td><input type="checkbox" name="isRPG" />RPG</td>
				        <td><input type="checkbox" name="isStrategy" />Strategy</td>
                    </tr>
					<tr>
				        <td><input type="checkbox" name="isCasual" />Casual</td>
				        <td><input type="checkbox" name="isAdventure" />Adventure</td>
				        <td><input type="checkbox" name = "isAction"/>Action</td>
                    </tr>
					<tr>
				        <td><input type="checkbox"/>Indie</td>
				        <td><input type="checkbox" name="isMMO"/>MMO</td>
				        <td><input type="checkbox" name= "isCoop"/>Co-op</td>
                    </tr>
					
                        </table>
                    </div>
					<input type="submit" name="submit" class="btn btn-primary" value="Sign Up"></form>
			</div>
	</div>
    </div>
</body>
</html>
<?php
include '../../connection/connection.php';
if (isset($_POST['submit'])){
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $email = $_POST["email"];
    $username= $_POST["username"];
    $password = $_POST["password"];


//    $data['isMassivelyMultiplayer'] = isset($_POST['isMassivelyMultiplayer']) ? 'True' : 'False';
    
        if (isset($_POST["isMassivelyMultiplayer"])){
            $isMassivelyMultiplayer ="True";
        }else{
        $isMassivelyMultiplayer ="False";
        }

        if (isset($_POST["isRacing"])){
            $isRacing ="True";
        }else{
        $isRacing ="False";
        }

    if (isset($_POST["isSports"])){
            $isSports ="True";
        }else{
        $isSports ="False";
    }

        if (isset($_POST["isSimulation"])){
            $isSimulation ="True";
        }else{
        $isSimulation ="False";
        }

            if (isset($_POST["isRpg"])){
            $isRpg ="True";
        }else{
        $isRpg ="False";
            }

                if (isset($_POST["isStrategy"])){
            $isStrategy ="True";
        }else{
        $isStrategy ="False";
                }

    if (isset($_POST["isCasual"])){
        $isCasual ="True";
        }else{
        $isCasual ="False";
                    }
                        if (isset($_POST["isAdventure"])){
            $isAdventure ="True";
        }else{
        $isAdventure ="False";
                        }
                            if (isset($_POST["isAction"])){
            $isAction ="True";
        }else{
        $isAction ="False";
                            }
                                if (isset($_POST["isIndie"])){
            $isIndie ="True";
        }else{
        $isIndie ="False";
        }
                                
if (isset($_POST["isMmo"])){
            $isMmo ="True";
        }else{
        $isMmo ="False";
        }

if (isset($_POST["isCoop"])){
            $isCoop ="True";
        }else{
        $isCoop ="False";
        }
echo $firstname;
    $check=[$firstname,$lastname,$email,$username,$password,$isMassivelyMultiplayer,$isRacing,$isSports,$isSimulation,$isRpg,$isStrategy,$isCasual,$isAdventure,$isAction,$isIndie,$isMmo,$isCoop];
    print_r($check);
$sql=("INSERT INTO userinfo (firstname,lastname,email,UserID,password,GenreIsMassivelyMultiplayer, GenreIsRacing,GenreIsSports,GenreIsSimulation,GenreIsRPG,GenreIsStrategy,GenreIsCasual,GenreIsAdventure, GenreIsAction,GenreIsIndie,CategoryMMO,CategoryCoop) VALUES('$firstname','$lastname','$email','$username','$password','$isMassivelyMultiplayer','$isRacing','$isSports', '$isSimulation','$isRpg','$isStrategy','$isCasual','$isAdventure','$isAction','$isIndie','$isMmo','$isCoop')");

if (mysqli_query($con,$sql)){
echo "RECORD ADDED";
}
    else{
        echo "ERROR" .mysqli_error($con);
    }
}
?>
