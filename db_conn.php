<?php 

# server name
// $sName = "sql309.infinityfree.com";
// # user name
// $uName = "if0_37402826";
// # password
// $pass = "SmToU6XrcMAwZAp";

// # database name
// $db_name = "if0_37402826_online_book_store_db";

$sName = "localhost";
# user name
$uName = "root";
# password
$pass = "";

# database name
$db_name = "online_book_store_db";

/**
creating database connection 
useing The PHP Data Objects (PDO)
**/
try {
    $conn = new PDO("mysql:host=$sName;dbname=$db_name", 
                    $uName, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
  echo "Connection failed : ". $e->getMessage();
}