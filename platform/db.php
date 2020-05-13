<?php 
$dbhost = 'us-cdbr-east-06.cleardb.net';
$dbuser = 'bf3e8d75a985ac';
$dbpass ='7e4d6ba1';
$dbname = 'heroku_89def9d4932c331';


$connection =mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

if(!$connection){
    die("Could not connect ...... ".mysqli_connect_error());

}
else{
    echo "connection found";
}
// return $connection;
// }