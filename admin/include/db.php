<?php
ob_start();
try{
$db = new PDO("mysql:host=localhost;dbname=portfolio;charset=utf8","root","");
}
catch(PDOExeption $e){
echo $e;

}


?>