<?php 

  $order=1;

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="UTF-8">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<link rel="stylesheet" href="style.css">


<title>UPLOAD FILE</title>

<style>
* {
  box-sizing: border-box;
}

/* Style the body */
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;


  box-sizing: border-box;
}

/* Header/logo Title */
.header {
  padding: 15px;
  text-align: center;
  background: #ffa69e;
  color: #000000;
}

/* Increase the font size of the heading */
.header h1 {
  font-size: 40px;
}

/* Sticky navbar - toggles between relative and fixed, depending on the scroll position. It is positioned relative until a given offset position is met in the viewport - then it "sticks" in place (like position:fixed). The sticky value is not supported in IE or Edge 15 and earlier versions. However, for these versions the navbar will inherit default position */
.navbar {
  overflow: hidden;
  background-color: #faf3dd; /* #ffa69e #faf3dd #b8f2e6 #aed9e0 #5e6472*/
}

.navbar a {
  float: left;
  font-size: 16px;
  color: #000000;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}
h2{
  text-align: center;

}

.subnav {
  float: left;
  overflow: hidden;
}

.subnav .subnavbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: #000000; /*สีตัวหนังเมนู */
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}


.navbar a:hover, .subnav:hover .subnavbtn {
  background-color: #aed9e0;
}

.subnav-content {
  display: none;
  position: absolute;
  left: 0;
  background-color: #aed9e0; /*สีเมนู*/
  width: 100%;
  z-index: 1;
}


.subnav-content a {
  float: left;
  color: black;
  text-decoration: none;
}

.subnav-content a:hover {
  background-color: #eee;
  color: black;
}

.subnav:hover .subnav-content {
  display: block;
}
/* Right-aligned link */
.navbar a.right {
  float: right;
}

/* Change color on hover */
.navbar a:hover {
  background-color: #aed9e0;
  color: black;
}

/* Active/current link */
.navbar a.active {
  background-color: #aed9e0 ; /*Home */
  color: #000000;
}


/* Column container */
.row {  
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
}

/* Create two unequal columns that sits next to each other */
/* Sidebar/left column */
.side {
  float: left;
  width: 20%;
  height: 1000px;
  background-color: #b8f2e6;/*สีพื้นหลังข้างๆ*/
  padding: 20px;
}

/* Main column */
.main {   
  -ms-flex: 60%; /* IE10 */
  flex: 60%;
  background-color: white;
  padding: 20px;
}



/* Fake image, just for this example */
.fakeimg {
  background-color: #aaa;
  width: 100%;
  padding: 20px;
}

/* Footer */
.footer {
  padding: 5px;
  width: 100%;
  text-align: center;
  background: #ffa69e;
  color: black;/*สีพื้นหลังล่างสุด*/
}
.footer h1 {
  font-size: 20px;
}

/* Responsive layout - when the screen is less than 700px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 700px) {
  .row {   
    flex-direction: column;
  }
}

/* Responsive layout - when the screen is less than 400px wide, make the navigation links stack on top of each other instead of next to each other */
@media screen and (max-width: 400px) {
  .navbar a {
    float: none;
    width: 100%;
  }
}

form.example input[type=text] {
  padding: 10px;
  font-size: 17px;
  border: 1px solid grey;
  float: left;
  width: 80%;
  background: #f1f1f1;
}

form.example button {
  float: left;
  width: 20%;
  padding: 10px;
  background: #2196F3;
  color: white;
  font-size: 17px;
  border: 1px solid grey;
  border-left: none;
  cursor: pointer;
}

form.example button:hover {
  background: #0b7dda;
}

form.example::after {
  content: "";
  clear: both;
  display: table;
}
.Table{
 width: 810px;
 height: 200px;
 position: absolute;
 top: 500px;
 left: 50%;
 text-align: center;
 transform: translate(-50%, -50%);
 border: 1px solid #1C6EA4;/*เส้นขอบใหญ่*/
  /*background-color: #aed9e0;/*สีด้านใน*/
  border-collapse: collapse;
}
Table td{

 text-align: center;
 font-size: 16px;
 border: 1px solid #ffa69e;/*เส้นขอบใหญ่*/
 background-color: #faf3dd;/*สีด้านใน*/
}
Table th{

text-align: center;
font-size: 16px;
border: 1px solid #1C6EA4;/*เส้นขอบใหญ่*/
background-color: #ffa69e;/*สีด้านใน*/
}

/*table.Table tr:nth-child(even) {
  background:  #faf3dd ;
}
/*Table tr{

text-align: center;
font-size: 16px;
border: 1px solid #ffa69e;/*เส้นขอบใหญ่*/
/*background: #ffa69e;
}*/



/*Table td,Table th {
  border: 2px solid #ffa69e; /*เส้นขอบเล็ก*/
  /*background: #faf3dd ;/* #ffa69e #faf3dd #b8f2e6 #aed9e0 #5e6472*/
  /*padding: 3px 2px;
}*/

/*table.Table tbody td {
  font-size: 16px;
}*/

/*table.tr:nth-child(even) {
  background: #D0E4F5;
}*/

/*Table thead {/*ไล่สีหัวข้อ*/
  /*background: #1C6EA4;
  background: -moz-linear-gradient(top, #5592bb 0%, #327cad 66%, #1C6EA4 100%);
  background: -webkit-linear-gradient(top, #5592bb 0%, #327cad 66%, #1C6EA4 100%);
  background: linear-gradient(to bottom, #5592bb 0%, #327cad 66%, #1C6EA4 100%);
  border-bottom: 2px solid #444444;
}
/*Table thead th {
  font-size: 16px;
  font-weight: bold;
  color: #FFFFFF;/*สีตัวหนังสือหัวข้อ*/
  /*border-left: 2px solid lightblue;/*สีกรอบหัวข้อ*/





h2{
  text-align: center;

}
h3{
  text-align: center;

}


</style>


</head>
<body>

<div class="header">
<h1>ระบบตรวจจับและอ่านป้ายทะเบียนรถยนต์ผู้ปกครองนักเรียน</h1>
  <h1>โรงเรียนสาธิตละอออุทิศ</h1>
</div>

<div class="navbar">
    <a href="index.php" class="active">Home</a>
    <div class="subnav">
    <button class="subnavbtn">แสดงข้อมูล <i class="fa fa-caret-down"></i></button>
    <div class="subnav-content">
      <a href="Student.php"> นักเรียน </a>
      <a href="Parent.php">ผู้ปกครอง</a>
    </div>
  </div> 
  <div class="subnav">
    <button class="subnavbtn">ข้อมูล <i class="fa fa-caret-down"></i></button>
    <div class="subnav-content">
      <a href="Add.php">เพิ่มข้อมูล</a>
      <a href="Information.php">ดูข้อมูล</a>
      <a href="check_show.php">ประวัติ</a>
    </div>
  </div> 
    <a href="Search.php">ค้นหา</a>
    <a href="Login.php?logout='1'"class="right">ออกจากระบบ</a>
    

    <?php if (isset($_SESSION ['id'])) : ?>     
        <p style="color: #000000" > ยินดีต้อนรับ <strong style="color: #000000;">
        <?php echo $_SESSION['id']; ?></strong>
        
    <?php endif ?>


    <?php if (isset($_SESSION ['username'])) : ?>     
      <strong style="color: #000000;">
        <?php echo $_SESSION['username']; ?></strong>
        
    <?php endif ?>

</div>
<div class="row">
<div class="side">
    <h2>นักเรียน</h2>
    <?php
//1. เชื่อมต่อ database: 
include('connect.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
//2. query ข้อมูลจากตาราง: 
$idnumber = $_GET["idnumber"];
$sql = "SELECT * FROM uploadfile WHERE idnumber= $idnumber";
//3.เก็บข้อมูลที่ query ออกมาไว้ในตัวแปร result . 
$result = mysqli_query($con, $sql); 

while($row = mysqli_fetch_array($result)) { 
  echo "<tr>";
  echo "<td align='center'>"."<img src='fileupload/".$row["fileupload"]."' width='250'>"."</td>";
  
  echo "</tr>";
}
echo "</table>";
//5. close connection
mysqli_close($con);
?>
    <?php
//1. เชื่อมต่อ database: 
include('connect.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
//2. query ข้อมูลจากตาราง: 
$idnumber = $_GET["idnumber"];
$sql = "SELECT * FROM uploadfile WHERE idnumber= $idnumber";
//3.เก็บข้อมูลที่ query ออกมาไว้ในตัวแปร result . 
$result = mysqli_query($con, $sql); 

while($row = mysqli_fetch_array($result)) { 
  echo "<tr>";
  echo "<td>" . "<h3>".$row["namestudent"] . "</h3>". "</td> ";
  echo "</tr>";
}
echo "</table>";
//5. close connection
mysqli_close($con);
?>
    
  </div>

  <div class="main">
  <h2>นักเรียน</h2>
  <?php
//1. เชื่อมต่อ database:
include('connect.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี  index2.py   connect.php conn2.php

//2. query ข้อมูลจากตาราง tb_member:
$sql = "SELECT * FROM `licenseplate` ORDER BY id DESC ";
//$sql = "SELECT * FROM `users` ORDER BY id DESC ";

//3.เก็บข้อมูลที่ query ออกมาไว้ในตัวแปร result .
$result = mysqli_query($con,$sql); //cursor_execute
//4 . แสดงข้อมูลที่ query ออกมา โดยใช้ตารางในการจัดข้อมูล:
echo "<table class='Table'>";
//หัวข้อตาราง
      echo "<tr >
          <th>ลำดับ</th>
          <th>รหัสนักเรียน</th>
          <th>ชื่อนักเรียน</th>
          <th>เลขทะเบียนรถ</th>
          <th>เวลาเข้า</th>
          <th>รูป</th>
          <th>เช็ค</th>

    </tr>";
    if (mysqli_num_rows($result) > 0) {
      while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" .$order++.  "</td> ";
        echo "<td align='center'>" .$row["idnumber"] .  "</td> ";
        echo "<td>".$row["namestudent"]."</td> ";
        echo "<td>".$row["carnumber"]."</td> ";
        echo "<td>".$row["workin"]."</td> ";
        //echo "<td>".$row["time"]."</td> ";
        echo "<td align='center' ><a href='Student_show.php?idnumber=$row[idnumber]'><i class='fas fa-address-card'style='font-size:25px'></i></a></td> ";
        echo "<td align='center' ><a href='check.php?idnumber=$row[idnumber]'><i class='fas fa-paper-plane'style='font-size:25px'></i></a></td> ";
        echo "</tr>";

        }
      }
echo "</table>";
?>
<br/>
</div>

            
<div class="side">
    <h2>ป้ายทะเบียนรถ</h2>
    <?php
//1. เชื่อมต่อ database: 
include('connect.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
//2. query ข้อมูลจากตาราง: 
$idnumber = $_GET["idnumber"];
$sql = "SELECT * FROM uploadfile WHERE idnumber= $idnumber";
//3.เก็บข้อมูลที่ query ออกมาไว้ในตัวแปร result . 
$result = mysqli_query($con, $sql); 

while($row = mysqli_fetch_array($result)) { 
  echo "<tr>";
  echo "<td align='center'>"."<img src='carpicture/".$row["carpicture"]."' width='250'>"."</td>";
  echo "</tr>";
}
echo "</table>";
//5. close connection
mysqli_close($con);
?>
    <?php
//1. เชื่อมต่อ database: 
include('connect.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
//2. query ข้อมูลจากตาราง: 
$idnumber = $_GET["idnumber"];
$sql = "SELECT * FROM uploadfile WHERE idnumber= $idnumber";
//3.เก็บข้อมูลที่ query ออกมาไว้ในตัวแปร result . 
$result = mysqli_query($con, $sql); 

while($row = mysqli_fetch_array($result)) { 
  echo "<tr>";
  echo "<td>" . "<h3>".$row["carnumber"] . "</h3>". "</td> ";
  echo "</tr>";
}
echo "</table>";
//5. close connection
mysqli_close($con);
?>
  


</div>  
    <div class="footer">
        <h1>โดย นางสาวกานต์ธิดา เทียนสุวรรณ 6111011660015</h1>
    </div>
</div>
</body>
</html>