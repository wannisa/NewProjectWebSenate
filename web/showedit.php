<?php
session_start();
$_SESSION['x']= $_GET['ID'];
?>
<html>
<body>
<head>
<title>NidaPoll</title>
<style type="text/css">
body
 {
    background-color: #d0e4fe;
}
</style> 
<meta http-equiv=Content-Type content="text/html; charset=utf-8">
</head>
<form action="edit.php" method="post">
<?php
$ID = $_GET['ID'];
$hostname ="localhost";
$username ="root";
$password ="";
$dbname ="project";
$conn = mysql_connect($hostname, $username, $password); 
mysql_query("SET NAMES UTF8",$conn);
mysql_select_db($dbname);
$sql = "select * from nidapoll where No = $ID";
$result = mysql_query($sql);
while($row_show = mysql_fetch_array($result))
{
?>
<big><big>แบบสอบถามเพื่อจัดทำตัวอย่างหลักสำหรับ NIDA POLL</big></big><br><br>
<strong>NO.</strong>
<?php echo $ID 
?>
<br><br>


<td><strong>เบอร์โทรศัพท์</strong>
&nbsp;&nbsp;&nbsp;<input type="text" value="<?php echo $row_show['Phone']?>" name="phone" maxlength="10"></td>
<strong>&nbsp;&nbsp;&nbsp;หมายเลขโทรศัพท์อื่นๆ ที่สามารถติดต่อได้</strong>
&nbsp;&nbsp;&nbsp;<input type="text" value="<?php echo $row_show['OtherPhone']?>" name="otherphone" maxlength="10"><br><br>


<table>
<tr>

<td><strong>เพศ</strong></td>


 <td><input type="radio" name="sex" value="ชาย"<?php if($row_show['Sex']== "ชาย"){echo "checked";}?> >ชาย </td>
 
 <td><input type="radio" name="sex" value="หญิง" <?php if($row_show['Sex']== "หญิง"){echo "checked";}?> > หญิง</td>


<td><strong>&nbsp;&nbsp;&nbsp;อายุ</strong>
<td colspan="2">
<select name="age">
<option value="<?php echo $row_show['Age']?>"><?php echo $row_show['Age']?></option>
<option value="18">18</option>
<option value="19">19</option>
<option value="20">20</option>
<option value="21">21</option>
<option value="22">22</option>
<option value="23">23</option>
<option value="24">24</option>
<option value="25">25</option>
<option value="26">26</option>
<option value="27">27</option>
<option value="28">28</option>
<option value="29">29</option>
<option value="30">30</option>
<option value="31">31</option>
<option value="32">32</option>
<option value="33">33</option>
<option value="34">34</option>
<option value="35">35</option>
<option value="36">36</option>
<option value="37">37</option>
<option value="38">38</option>
<option value="39">39</option>
<option value="40">40</option>
<option value="41">41</option>
<option value="42">42</option>
<option value="43">43</option>
<option value="44">44</option>
<option value="45">45</option>
<option value="46">46</option>
<option value="47">47</option>
<option value="48">48</option>
<option value="49">49</option>
<option value="50">50</option>
<option value="51">51</option>
<option value="52">52</option>
<option value="53">53</option>
<option value="54">54</option>
<option value="55">55</option>
<option value="56">56</option>
<option value="57">57</option>
<option value="58">58</option>
<option value="59">59</option>
<option value="60">60</option>
</select>&nbsp;&nbsp;ปี</td>

<td><strong>&nbsp;&nbsp;&nbsp;พ.ศ.ที่เกิด</strong>
<td colspan="2">
<select name="year" value="">
<option value="<?php echo $row_show['Year']?>"><?php echo $row_show['Year']?></option>
<option value="2517">2517</option>
<option value="2518">2518</option>
<option value="2519">2519</option>
<option value="2520">2520</option>
<option value="2521">2521</option>
<option value="2522">2522</option>
<option value="2523">2523</option>
<option value="2524">2524</option>
<option value="2525">2525</option>
<option value="2526">2526</option>
<option value="2527">2527</option>
<option value="2528">2528</option>
<option value="2529">2529</option>
<option value="2530">2530</option>
<option value="2531">2531</option>
<option value="2532">2532</option>
<option value="2533">2533</option>
<option value="2534">2534</option>
<option value="2535">2535</option>
<option value="2536">2536</option>
<option value="2537">2537</option>
<option value="2538">2538</option>
<option value="2539">2539</option>
<option value="2540">2540</option>
<option value="2541">2541</option>
<option value="2542">2542</option>
<option value="2543">2543</option>
<option value="2544">2544</option>
<option value="2545">2545</option>
<option value="2546">2546</option>
<option value="2547">2547</option>
<option value="2548">2548</option>
<option value="2549">2549</option>
<option value="2550">2550</option>
<option value="2551">2551</option>
<option value="2552">2552</option>
<option value="2553">2553</option>
<option value="2554">2554</option>
<option value="2555">2555</option>
<option value="2556">2556</option>
<option value="2557">2557</option>
<option value="2558">2558</option>
<option value="2559">2559</option>
</select></td>
</tr></table><br>

<table>
<tr>
<td><strong>ตำบล</strong>
<input type="text" name="district" value="<?php echo $row_show['District']?>" maxlength="30"></td>
<td><strong>อำเภอ</strong>
<input type="text" name="district1" value="<?php echo $row_show['District1']?>" maxlength="30"></td>




<td><strong>จังหวัดที่อยู่</strong> 
<td colspan="2">
<select name="province" value="">
<option value="<?php echo $row_show['Province']?>"><?php echo $row_show['Province']?></option>
<option value="กรุงเทพมหานคร">กรุงเทพมหานคร </option>
<option value="กระบี่">กระบี่ </option>
<option value="กาญจนบุรี">กาญจนบุรี </option>
<option value="กาฬสินธุ์">กาฬสินธุ์ </option>
<option value="กำแพงเพชร">กำแพงเพชร</option>
<option value="ขอนแก่น">ขอนแก่น </option>
<option value="จันทบุรี">จันทบุรี</option>
<option value="ฉะเชิงเทรา">ฉะเชิงเทรา</option>
<option value="ชลบุรี">ชลบุรี</option>
<option value="ชัยนาท">ชัยนาท </option>
<option value="ชัยภูมิ">ชัยภูมิ </option>
<option value="ชุมพร">ชุมพร</option>
<option value="เชียงราย">เชียงราย</option>
<option value="เชียงใหม่">เชียงใหม่ </option>
<option value="ตรัง">ตรัง</option>
<option value="ตราด">ตราด </option>
<option value="ตาก">ตาก</option>
<option value="นครนายก">นครนายก</option>
<option value="นครปฐม">นครปฐม</option>
<option value="นครพนม">นครพนม</option>
<option value="นครราชสีมา">นครราชสีมา </option>
<option value="นครศรีธรรมราช">นครศรีธรรมราช</option>
<option value="นครสวรรค์">นครสวรรค์ </option>
<option value="นนทบุรี">นนทบุรี </option>
<option value="นราธิวาส">นราธิวาส </option>
<option value="น่าน">น่าน</option>
<option value="บึงกาฬ">บึงกาฬ </option>
<option value="บุรีรัมย์">บุรีรัมย์</option>
<option value="ปทุมธานี">ปทุมธานี </option>
<option value="ประจวบคีรีขันธ์">ประจวบคีรีขันธ์ </option>
<option value="ปราจีนบุรี">ปราจีนบุรี</option>
<option value="ปัตตานี">ปัตตานี</option>
<option value="พระนครศรีอยุธยา">พระนครศรีอยุธยา </option>
<option value="พังงา">พังงา </option>
<option value="พัทลุง">พัทลุง</option>
<option value="พิจิตร">พิจิตร</option>
<option value="พิษณุโลก">พิษณุโลก</option>
<option value="เพชรบุรี">เพชรบุรี </option>
<option value="เพชรบูรณ์">เพชรบูรณ์</option>
<option value="แพร่">แพร่</option>
<option value="พะเยา">พะเยา</option>
<option value="ภูเก็ต">ภูเก็ต </option>
<option value="มหาสารคาม">มหาสารคาม </option>
<option value="มุกดาหาร">มุกดาหาร</option>
<option value="แม่ฮ่องสอน">แม่ฮ่องสอน</option>
<option value="ยะลา">ยะลา</option>
<option value="ยโสธร">ยโสธร</option>
<option value="ร้อยเอ็ด">ร้อยเอ็ด</option>
<option value="ระนอง">ระนอง</option>
<option value="ระยอง">ระยอง</option>
<option value="ราชบุรี">ราชบุรี</option>
<option value="ลพบุรี">ลพบุรี</option>
<option value="ลำปาง">ลำปาง</option>
<option value="ลำพูน">ลำพูน </option>
<option value="เลย">เลย</option>
<option value="ศรีสะเกษ">ศรีสะเกษ</option>
<option value="สกลนคร">สกลนคร</option>
<option value="สงขลา">สงขลา </option>
<option value="สตูล">สตูล</option>
<option value="สมุทรปราการ">สมุทรปราการ</option>
<option value="สมุทรสงคราม">สมุทรสงคราม </option>
<option value="สมุทรสาคร">สมุทรสาคร</option>
<option value="สระแก้ว">สระแก้ว</option>
<option value="สระบุรี">สระบุรี </option>
<option value="สิงห์บุรี">สิงห์บุรี</option>
<option value="สุโขทัย">สุโขทัย</option>
<option value="สุพรรณบุรี">สุพรรณบุรี </option>
<option value="สุราษฎร์ธานี">สุราษฎร์ธานี</option>
<option value="สุรินทร์">สุรินทร์ </option>
<option value="หนองคาย">หนองคาย</option>
<option value="หนองบัวลำภู">หนองบัวลำภู </option>
<option value="อ่างทอง">อ่างทอง</option>
<option value="อุดรธานี">อุดรธานี</option>
<option value="อุทัยธานี">อุทัยธานี</option>
<option value="อุตรดิตถ์">อุตรดิตถ์</option>
<option value="อุบลราชธานี">อุบลราชธานี</option>
<option value="อำนาจเจริญ">อำนาจเจริญ</option>
</select></td>
</td>
</tr>
</table>

<strong><p>เขต</p></strong>
      <input type="radio" name="area" value="ในเขตเทศบาล"<?php if($row_show['Area']== "ในเขตเทศบาล"){echo "checked";}?>> ในเขตเทศบาล</td>  
      <input type="radio" name="area" value="นอกเขตเทศบาล"<?php if($row_show['Area']== "นอกเขตเทศบาล"){echo "checked";}?>> นอกเขตเทศบาล <br>

<strong><p>ศาสนา</p></strong>


  <input type="radio" name="religious" value="พุทธ"<?php if($row_show['Religious']== "พุทธ"){echo "checked";}?>> พุทธ  
  <input type="radio" name="religious" value="คริสต์"<?php if($row_show['Religious']== "คริสต์"){echo "checked";}?>> คริสต์
  <input type="radio" name="religious" value="อิสลาม"<?php if($row_show['Religious']== "อิสลาม"){echo "checked";}?>> อิสลาม
  <input type="radio" name="religious" value="other1"<?php if($row_show['Religious']== "other1"){echo "checked";}?>> อื่นๆ(ระบุ)
  <input type="text" value="<?php echo $row_show['Other1']?>" name="other1" maxlength="20">
  



<strong><p>สถานภาพสมรส</p></strong>

  <input type="radio" name="status" value="โสด"<?php if($row_show['Status']== "โสด"){echo "checked";}?>> โสด  
  <input type="radio" name="status" value="สมรส"<?php if($row_show['Status']== "สมรส"){echo "checked";}?>> สมรส
  <input type="radio" name="status" value="หม้าย"<?php if($row_show['Status']== "หม้าย"){echo "checked";}?>> หม้าย 
  <input type="radio" name="status" value="หย่าร้าง"<?php if($row_show['Status']== "หย่าร้าง"){echo "checked";}?>> หย่าร้าง
  <input type="radio" name="status" value="other2"<?php if($row_show['Status']== "other2"){echo "checked";}?>> อื่นๆ(ระบุ)
  <input type="text" value="<?php echo $row_show['Other2']?>" name="other2" maxlength="20">
  
<table>

<strong><p>การศึกษา</p></strong>

<tr>
  <td><input type="radio" name="education" value="ไม่ได้รับการศึกษา"<?php if($row_show['Education']== "ไม่ได้รับการศึกษา"){echo "checked";}?>> ไม่ได้รับการศึกษา</td> 
  <td><input type="radio" name="education" value="ประถมศึกษา"<?php if($row_show['Education']== "ประถมศึกษา"){echo "checked";}?>> ประถมศึกษา</td>
</tr>
<tr>  
  <td><input type="radio" name="education" value="มัธยมศึกษาหรือเทียบเท่า"<?php if($row_show['Education']== "มัธยมศึกษาหรือเทียบเท่า"){echo "checked";}?>> มัธยมศึกษาหรือเทียบเท่า</td> 
  <td><input type="radio" name="education" value="อนุปริญาญาหรือเทียบเท่า"<?php if($row_show['Education']== "อนุปริญาญาหรือเทียบเท่า"){echo "checked";}?>> อนุปริญาญาหรือเทียบเท่า</td>
</tr>
<tr>
  <td><input type="radio" name="education" value="ปริญญาตรีหรือเทียบเท่า"<?php if($row_show['Education']== "ปริญญาตรีหรือเทียบเท่า"){echo "checked";}?>> ปริญญาตรีหรือเทียบเท่า</td>
  <td><input type="radio" name="education" value="ปริญญาโทหรือเทียบเท่า"<?php if($row_show['Education']== "ปริญญาโทหรือเทียบเท่า"){echo "checked";}?>> ปริญญาโทหรือเทียบเท่า</td> 
</tr>
<tr>  
  <td><input type="radio" name="education" value="ปริญญาเอกหรือเทียบเท่า"<?php if($row_show['Education']== "ปริญญาเอกหรือเทียบเท่า"){echo "checked";}?>> ปริญญาเอกหรือเทียบเท่า</td>
  <td><input type="radio" name="education" value="other3"<?php if($row_show['Education']== "other3"){echo "checked";}?>> อื่นๆ(ระบุ)
      <input type="text" value="<?php echo $row_show['Other3']?>" name="other3" maxlength="30"></td>
</tr>
</table>

<table>
<strong><p>อาชีพหลัก</p></strong>
<tr>

  <td><input type="radio" name="career" value="รับราชการ/พนักงาน/ลูกจ้างของรัฐ"<?php if($row_show['Career']== "รับราชการ/พนักงาน/ลูกจ้างของรัฐ"){echo "checked";}?>> รับราชการ/พนักงาน/ลูกจ้างของรัฐ</td>  
  <td><input type="radio" name="career" value="พนักงานรัฐวิสาหกิจ"<?php if($row_show['Career']== "พนักงานรัฐวิสาหกิจ"){echo "checked";}?>> พนักงานรัฐวิสาหกิจ</td>
</tr>
<tr>
  <td><input type="radio" name="career" value="เอกชน"<?php if($row_show['Career']== "เอกชน"){echo "checked";}?>> เอกชน </td>      
  <td><input type="radio" name="career" value="เจ้าของธุรกิจส่วนตัว(มีลูกจ้าง)"<?php if($row_show['Career']== "เจ้าของธุรกิจส่วนตัว(มีลูกจ้าง)"){echo "checked";}?>> เจ้าของธุรกิจส่วนตัว(มีลูกจ้าง)</td>
</tr>
<tr>
  <td><input type="radio" name="career" value="อาชีพอิสระ(ไม่มีลูกจ้าง)"<?php if($row_show['Career']== "อาชีพอิสระ(ไม่มีลูกจ้าง)"){echo "checked";}?>> อาชีพอิสระ(ไม่มีลูกจ้าง)</td>          
  <td><input type="radio" name="career" value=" รับจ้างทั่วไป"<?php if($row_show['Career']== "รับจ้างทั่วไป"){echo "checked";}?>> รับจ้างทั่วไป</td> 
</tr>
<tr>  
  <td><input type="radio" name="career" value="เกษตรกรรม"<?php if($row_show['Career']== "เกษตรกรรม"){echo "checked";}?>> เกษตรกรรม</td>    
  <td><input type="radio" name="career" value="ประมง"<?php if($row_show['Career']== "ประมง"){echo "checked";}?>> ประมง</td>  
</tr>
<tr>
  <td><input type="radio" name="career" value="พ่อบ้าน/แม่บ้าน"<?php if($row_show['Career']== "พ่อบ้าน/แม่บ้าน"){echo "checked";}?>> พ่อบ้าน/แม่บ้าน</td>   
  <td><input type="radio" name="career" value="กษียณอายุ"<?php if($row_show['Career']== "กษียณอายุ"){echo "checked";}?>> เกษียณอายุ</td>
</tr>
<tr>
  <td><input type="radio" name="career" value="นักเรียน/นักศึกษา"<?php if($row_show['Career']== "นักเรียน/นักศึกษา"){echo "checked";}?>> นักเรียน/นักศึกษา</td>
  <td><input type="radio" name="career" value="ว่างงาน"<?php if($row_show['Career']== "ว่างงาน"){echo "checked";}?>> ว่างงาน</td>
</tr>
<tr>
  <td><input type="radio" name="career" value="องค์กรอิสระที่ไม่แสวงหากำไร"<?php if($row_show['Career']== "องค์กรอิสระที่ไม่แสวงหากำไร"){echo "checked";}?>> องค์กรอิสระที่ไม่แสวงหากำไร</td>
  <td><input type="radio" name="career" value="other4"<?php if($row_show['Career']== "other4"){echo "checked";}?>> อื่นๆ(ระบุ)
  <input type="text" value="<?php echo $row_show['Other4']?>" name="other4" maxlength="30"></td>
</tr>


</table>
<table>

<strong><p>รายได้/เดือน</p></strong>
 <tr>
  <td><input type="radio" name="salary" value="ไม่เกิน 5,000 บ."<?php if($row_show['Salary']== "ไม่เกิน 5,000 บ."){echo "checked";}?>> ไม่เกิน 5,000 บ.</td>
  <td><input type="radio" name="salary" value="5,001-10,000 บ."<?php if($row_show['Salary']== "5,001-10,000 บ."){echo "checked";}?>> 5,001-10,000 บ.</td>
</tr>
<tr>  
  <td><input type="radio" name="salary" value="10,001-20,000 บ."<?php if($row_show['Salary']== "10,001-20,000 บ."){echo "checked";}?>> 10,001-20,000 บ.</td>  
  <td><input type="radio" name="salary" value="30,001-40,000 บ."<?php if($row_show['Salary']== "30,001-40,000 บ."){echo "checked";}?>> 30,001-40,000 บ.</td>
</tr>
<tr>
  <td><input type="radio" name="salary" value="40,001-50,000 บ."<?php if($row_show['Salary']== "40,001-50,000 บ."){echo "checked";}?>> 40,001-50,000 บ.</td>  
  <td><input type="radio" name="salary" value="50,001-60,000 บ."> 50,001-60,000 บ.</td>  
</tr>
<tr>  
  <td><input type="radio" name="salary" value="60,001-70,000 บ."<?php if($row_show['Salary']== "60,001-70,000 บ."){echo "checked";}?>> 60,001-70,000 บ.</td>  
  <td><input type="radio" name="salary" value="70,001-80,000 บ."<?php if($row_show['Salary']== "70,001-80,000 บ."){echo "checked";}?>> 70,001-80,000 บ.</td>
</tr>
<tr>    
  <td><input type="radio" name="salary" value="80,001-90,000 บ."<?php if($row_show['Salary']== "80,001-90,000 บ."){echo "checked";}?>> 80,001-90,000 บ.</td>
  <td><input type="radio" name="salary" value="90,001-110,000 บ."<?php if($row_show['Salary']== "90,001-110,000 บ."){echo "checked";}?>> 90,001-110,000 บ.</td> 
</tr>  
<tr>
  <td><input type="radio" name="salary" value="มากกว่า 100,000 บ."<?php if($row_show['Salary']== "มากกว่า 100,000 บ."){echo "checked";}?>> มากกว่า 100,000 บ.</td>
  <td><input type="radio" name="salary" value="ม่มีรายได้"<?php if($row_show['Salary']== "ม่มีรายได้"){echo "checked";}?>> ไม่มีรายได้</td>
</tr>
<tr>  
  <td><input type="radio" name="salary" value="ไม่ระบุ"<?php if($row_show['Salary']== "ไม่ระบุ"){echo "checked";}?>> ไม่ระบุ</td> 
 
 </tr>

</table><br>
<table>
<?php
}
?>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="submit" value="บันทึกข้อมูลแก้ไข">

</table>
</form>    
</body>
</html> 
