<?php
error_reporting(0);
$hostname = "localhost";
$username = "root";
$password = "";
$conn = mysql_pconnect($hostname, $username, $password); 
//mysql_query("set NAMES tis620");
mysql_query("SET NAMES UTF8");
$dbname = "project";


$phone      = $_POST['phone'];
$otherphone = $_POST['otherphone'];
$sex        = $_POST['sex'];
$age        = $_POST['age'];
$year       = $_POST['year'];
$district1  = $_POST['district1'];
$district   = $_POST['district'];
$province   = $_POST['province'];
$area       = $_POST['area'];
$religious  = $_POST['religious'];
$status     = $_POST['status'];
$education  = $_POST['education'];
$career     = $_POST['career'];
$salary     = $_POST['salary'];
$other1     = $_POST['other1'];
$other2     = $_POST['other2'];
$other3     = $_POST['other3'];
$other4     = $_POST['other4'];

if($phone == null||$otherphone == null ||$sex == null ||$age == null ||$year == null ||$district == null ||$district1 == null ||$province == null ||$area == null 
||$religious == null ||$status  == null ||$education == null ||$career == null ||$salary == null){
?>
 	<script type="text/javascript" >
	alert ("บันทึกข้อมูลไม่สำเร็จ  กรอกข้อมูลไม่ครบ");
	window.location = "Nida poll.html";
	</script>
 <?php
}
else
 {
mysql_select_db($dbname);
$sql = "INSERT INTO nidapoll (Phone,Sex,Province,Religious,Status,Education,Career,Salary,Age,Year,Area,Other1,Other2,Other3,Other4,District1,District,Otherphone) value ('$phone','$sex','$province','$religious','$status','$education','$career','$salary','$age','$year','$area','$other1','$other2','$other3','$other4','$district1','$district','$otherphone')";
$result = mysql_db_query($dbname,$sql);
?>
	<script type="text/javascript">
	alert ("บันทึกข้อมูลสำเร็จ");
	window.location = "Nida poll.html";
	</script>
<?php
}
?>