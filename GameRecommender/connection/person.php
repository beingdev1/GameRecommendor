<?php

include 'connection.php';
function correlation($x,$y,$n){
	$sum_x=0;
	$sum_y=0;
	$sum_xy=0;
	$square_sum_x=0;
	$square_sum_y=0;
	for($i=0;$i<$n;$i++){
		$sum_x=$sum_x+$x[$i];
		$sum_y=$sum_y+$y[$i];
		$sum_xy=$sum_xy+$x[$i]*$y[$i];
		$square_sum_x=$square_sum_x+$x[$i]*$x[$i];
		$square_sum_y=$square_sum_y+$y[$i]*$y[$i];
	}
	
	$corr=($n*$sum_xy-$sum_x*$sum_y)/(sqrt(($n*$square_sum_x-$sum_x*$sum_x)*($n*$square_sum_y-$sum_y*$sum_y)));
		return $corr;
}

function PearsonImp($con){
$userd=$con->query("SELECT UserID from users where UserID<>'U01' ");
    $user=[];
    $check=mysqli_num_rows($userd);
    if($check>0){
        
        $sql=$con->query("SELECT U01 FROM `userrates` where U01 <> 0"); //this part is for rates of user using using or user in session
        $check=mysqli_num_rows($sql);
        if($check>0){
        $userrates=[];
    while($rows=$sql->fetch_assoc()){
        array_push($userrates,$rows['U01']);
    }
//        print_r($userrates);
//        echo "<br>";
    }
    else{
echo "NO ANY DATA";
    }
        
    while($rows=$userd->fetch_assoc()){
        array_push($user,$rows['UserID']);
    }
         $rates=array();
    foreach($user as $users){
        $r=[];
$sql=$con->query("SELECT $users FROM `userrates` where U01 <> 0");
$check=mysqli_num_rows($sql);
    if($check>0){
    while($rows=$sql->fetch_assoc()){
        array_push($r,$rows[$users]);
    }
        array_push($rates,$r);
    }
    else{
echo "NO ANY DATA";
    }
    }
    }
else{
    "NO ANY DATA USER";
}
$n=count($userrates);
    $result=array();
    $i=0;
    foreach($rates as $data){
        $rs=correlation($userrates,$data,$n);
        if($rs>0){
        array_push($result,array("userid"=>$user[$i],"score"=>$rs));
        }
        $i++;
    }
    if(count($result)==0)
    {
        return "NO ANY RESULT";
    }
    else{
        return $result;
    }
//echo "Similarity between x and z is "+correlation($x,$z,$n);

}
function sorting($result){
    $score=array();
    foreach($result as $key =>$row){
        $score[$key]=$row['score'];
    }
    array_multisort($score,SORT_DESC,$result);
    $result_final=array_slice($result,0,1);
    return $result_final;
    
}
function extract_response_id($con,$result){
foreach($result as $key =>$row){
    
//    echo  "SIMILARTIYT OF USER WITH ".$row['userid'] ."  ".$row['score'] ."<br>";
    $user1=$row['userid'];
    $sql=$con->query("SELECT ResponseID from userrates where U01=0 and $user1<>0 ");
    $check=mysqli_num_rows($sql);
    if ($check>0){
        $responseID=array();
        while($rows=$sql->fetch_assoc()){
            array_push($responseID,$rows['ResponseID']);
        }
        return $responseID;
    }
    else{
        return [''];
    }
}
}

function extract_game($con,$responseID){ //put this in home page
    foreach($responseID as $gameid){
        $sql=$con->query("SELECT * from gamedata  where ResponseID='$gameid' limit 1");
        $result=mysqli_fetch_object($sql);
        $my_game=$result->ResponseName;
        $game_img=$result->HeaderImage;
        echo $my_game ."<br>";
        echo "<img src=$game_img'>";
    }
}

$result1=PearsonImp($con);
$result=sorting($result1);
$responseID=extract_response_id($con,$result);
extract_game($con,$responseID);

//        for($i=0;$i<count($result);$i++){   
//        echo "Similarity between x and next user is " .$result[$i];
//        }


?>