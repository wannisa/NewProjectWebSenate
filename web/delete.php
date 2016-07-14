<?php
$hostname ="localhost";
$username ="root";
$password ="";
$dbname ="project";
$conn = mysql_connect($hostname, $username, $password); 
mysql_query("SET NAMES UTF8",$conn);
mysql_select_db($dbname);
$ID = $_GET['ID'];
$sql = "DELETE FROM nidapoll WHERE No = $ID";
$result = mysql_query($sql);
?>
<script type="text/javascript" >
	alert ("ลบข้อมูลสำเร็จ");
	window.location = "showdetail.php";
</script>