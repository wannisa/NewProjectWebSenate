<?php
$hostname ="localhost";
$username ="root";
$password ="";
$dbname ="project";
$conn = mysql_connect($hostname, $username, $password); 
mysql_query("SET NAMES UTF8",$conn);
?>
<center>
<table border="1" cellspacing="1" >
<tr>
<td><div align="center">รหัส</div></td>
<td><div align="center">เบอร์โทร</div></td>
<td><div align="center">เบอร์โทรอื่นๆ</div></td>
<td><div align="center">เพศ</div></td>
<td><div align="center">อายุ</div></td>
<td><div align="center">ปีเกิด</div></td>
<td><div align="center">ตำบล/เขต</div></td>
<td><div align="center">อำเภอแขวง</div></td>
<td><div align="center">จังหวัด</div></td>
<td><div align="center">เขตพื้นที่</div></td>
<td><div align="center">ศาสนา</div></td>
<td><div align="center">สถานะ</div></td>
<td><div align="center">การศึกษา</div></td>
<td><div align="center">อาชีพ</div></td>
<td><div align="center">เงินเดือน</div></td>
<td><div align="center">ศาสนาอื่นๆ</div></td>
<td><div align="center">สถานะภาพอื่นๆ</div></td>
<td><div align="center">ระดับการศึกษาอื่นๆ</div></td>
<td><div align="center">อาชีพอื่นๆ</div></td>
<td><div align="center">แก้ไข</div></td>
<td><div align="center">ลบข้อมูล</div></td>



</tr>
<?php
mysql_select_db($dbname);
$sql = "select * from nidapoll";
$result = mysql_query($sql);
while($row_show = mysql_fetch_array($result))
{
?>
<tr>
<td><?php echo $row_show['No']?> </td>
<td><?php echo $row_show['Phone']?> </td>
<td><?php echo $row_show['OtherPhone']?> </td>
<td><?php echo $row_show['Sex']?> </td>
<td><?php echo $row_show['Age']?> </td>
<td><?php echo $row_show['Year']?> </td>
<td><?php echo $row_show['District']?> </td>
<td><?php echo $row_show['District1']?> </td>
<td><?php echo $row_show['Province']?> </td>
<td><?php echo $row_show['Area']?> </td>
<td><?php echo $row_show['Religious']?> </td>
<td><?php echo $row_show['Status']?> </td>
<td><?php echo $row_show['Education']?> </td>
<td><?php echo $row_show['Career']?> </td>
<td><?php echo $row_show['Salary']?> </td>
<td><?php echo $row_show['Other1']?> </td>
<td><?php echo $row_show['Other2']?> </td>
<td><?php echo $row_show['Other3']?> </td>
<td><?php echo $row_show['Other4']?> </td>
<td><div align="center"><a href="showedit.php?ID=<?php echo $row_show['No']?>">แก้ไข</a></div></td>
<td><div align="center"><a href="delete.php?ID=<?php echo $row_show['No']?>">ลบ</a></div></td>
</tr>
<?php
}
?>
</table>
<input type="button" name="edit" value="phpMyAdmin" ONCLICK="window.location.href = 'http://localhost/phpmyadmin/tbl_operations.php?db=project&table=nidapoll&token=48f0c1fd0cd5144d79290f3258d99658'"> 
</center>