<?php
ob_start();

?>
<h1>It's server's area</h1>
<?php
//echo "<pre>";print_r($GLOBALS);echo "</pre>";
$auth=array();
include("lib.php");
loadArray();
//$auth=array("raju"=>"123","mina"=>"321","mithu"=>"456");
$u=$_REQUEST['uname'];
$p=$_REQUEST['pass'];
//echo $u;

if(isset($auth[$u]) && $auth[$u]==$p){
	//echo "Hello ".$u;
	header("Location: home.php?m=12345"); 
}
else{
	//echo "I can't recognize you";
	header("Location: index.php?m='error occured'");
}
ob_flush();
?>