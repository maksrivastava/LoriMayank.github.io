<html>
<body>
<?php
$nm=$_GET["nm"];
$ph=$_GET["ph"];
$em=$_GET["em"];

$DB_HOST = 'localhost';
$DB_USER = 'LoriMayankDB';
$DB_PASS = 'lorimayank';
$DB_NAME = '';

/*try{
	$DB_con = new PDO("mysql:host={$DB_HOST};dbname={DB_NAME}",$DB_USER,$DB_PASS);
	$DB_con -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION)
	
}
catch(PDOException $e)
{
	
}*/
mysql_connect("localhost","lorimayank","0109#LoriMayank");
mysql_select_db("LoriMayankDB");
mysql_query("insert into Guests values('$nm','$ph','$em')");
?>
</body>
</html>