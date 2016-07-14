<?php
session_start();
$hostname ="localhost";
$username ="root";
$password ="";
$dbname ="project";
$conn = mysql_connect($hostname, $username, $password); 
mysql_query("SET NAMES UTF8",$conn);

$no = $_SESSION['x'];
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
	alert ("บันทึกแก้ไขข้อมูลไม่สำเร็จ  กรุณากรอกข้อมูลให้ครบ");
	window.location = "showedit.php";
	</script>
 <?php
}
else
 {
mysql_select_db($dbname);
$sql = "update nidapoll set 
Phone = '$phone', Otherphone ='$otherphone', Sex = '$sex', Age = '$age',Year = '$year', District1 ='$district1', District ='$district', Province = '$province',Area = '$area', Religious ='$religious', Status = '$status', Education='$education', Career='$career',Salary = '$salary',Other1 = '$other1',Other2 = '$other2',Other3 = '$other3',Other4 = '$other4' where No = '$no'";
mysql_select_db($dbname);
$retval = mysql_query( $sql, $conn );

?>
	<script type="text/javascript">
	alert ("บันทึกแก้ไขข้อมูลสำเร็จ");
	window.location = "showdetail.php";
	</script>
<?php
}
?>