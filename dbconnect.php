<!DOCTYPE html>


<html>

<head>


<meta charset="utf-8">


<titile></titile>



</head>




<body>


<main>



<h2></h2>



<?php


try{
    $db=new PDO('mysql:dbname=mydb;host=127.0.0.1;charset=utf8','root','');

}catch(PDOException $e){
    echo 'DB接続エラー'.$e->getMessage();
}


?>

</form>



</main>




</body>







</html>