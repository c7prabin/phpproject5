<?php
session_start();
function debug($data) {
    echo '<pre>';
    print_r($data);
    echo '</pre>';
    die;
}
function loggedin()
{
if(isset($_SESSION['user_id']) && !empty($_SESSION['user_id']))    
{
  return true;  
}
else {
    return false;
}
}
//function to get the user field
if(loggedin())
{
    $my_id=$_SESSION['user_id'];  
    $result= mysqli_query($conn,"SELECT username,user_level FROM users WHERE id='$my_id'");
    $run_query= mysqli_fetch_array($result);
    $user_name=$run_query['username'];
    $user_level=$run_query['user_level'];
    $query_level= mysqli_query($conn,"SELECT name FROM user_level WHERE id='$user_level'");
    $run_level= mysqli_fetch_array($query_level);
    $level_name=$run_level['name'];
}
?>