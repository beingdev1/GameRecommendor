<?php
include 'connection.php';
function intersection($user,$total_genere){
    $intersect=array();
    foreach($user as $key){
        if (in_array($key,$total_genere)){
            array_push($intersect,$key);
        }
    }
    return count($intersect);
}
function union($user,$total_genere,$intersect){
    $a=count($user);
    $b=count($total_genere);
    $intersec=$intersect;
    return (($a+$b)-$intersec);
    
}
function jacard($user,$total_genre){
$anb=intersection($user,$total_genre);
$aUb=union($user,$total_genre,$anb);    
return ($anb/$aUb);
}
function Normalize($con){ //finds the true genre
$genre=['GenreIsMassivelyMultiplayer','GenreIsRacing','GenreIsSports','GenreIsSimulation','GenreIsRPG','GenreIsStrategy','GenreIsCasual','GenreIsAdventure','GenreIsAction','GenreIsIndie','CategoryMMO','CategoryCoop'];
$sql1=$con->query("SELECT * from userinfo where `UserID`='devthokar' limit 1"); //devthor should be replaced by session $_SESSION
$result=mysqli_fetch_object($sql1);
$user=array();
foreach($genre as $rows){
    $genre1=$result->$rows;
    if ($genre1=="True"){
        array_push($user,$rows);
    }
}
$game=$con->query("SELECT * from gamedata");
$total_genre=array();
while($result=$game->fetch_assoc()){
    $game1=array();
    foreach($genre as $rows ){
      $genre1=$result[$rows];
        if (strtolower($genre1)=="true"){
            array_push($game1,$rows);
        }
        
    }
    array_push($total_genre,array("gameid"=>$result['ResponseID'],"norm"=>$game1));
}
    return [$user,$total_genre];
}
$data=Normalize($con);
$jac_result=array();
foreach ($data[1] as $games=>$row){
    $jacards=jacard($data[0],$row['norm']);
    array_push($jac_result,array("gameid"=>$row['gameid'],"score"=>$jacards));
}
$score=array();
foreach($jac_result as $key=>$row){
    $score[$key]=$row['score'];
}
array_multisort($score,SORT_DESC,$jac_result);
$games_to_rec=array_slice($jac_result,0,6);
print_r($games_to_rec);


//
//$user=["fight","adventure","devc"];
//$total_genre=["fight","adventure","action","open","rpg"];
//echo jacard($user,$total_genre);
?>