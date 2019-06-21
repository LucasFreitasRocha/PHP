<?php 

require_once("config.php");

//$user = new User();
//$user->getList();
//echo $user;

$list = User::getList();
echo json_encode($list);


// $user = new User();
// $user->setDeslogin("freitas");
 //$user->setDessenha("789");
 //$user->insert();

 //echo $user;

 ?>