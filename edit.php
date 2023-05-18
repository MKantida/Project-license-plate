<?php 
session_start();
require('connect.php');

  $idnumber = $_GET["idnumber"];
  $sql = "SELECT * FROM uploadfile WHERE idnumber= $idnumber";
  $result = mysqli_query($con, $sql);
  $row = mysqli_fetch_assoc($result);
  extract($row);
  //echo $sql;

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="UTF-8">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<title>UPLOAD FILE</title>



<style>
* {
  box-sizing: border-box;
}

/* Style the body */
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
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
  height: 750px;
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

.input-group {
    margin: 10px 0px 10px 0px;
}

.input-group label {
    display: block;
    text-align: left;
    margin: 3px;
}

.input-group input {
    height: 30px;
    width: 93%;
    padding: 5px 10px;
    font-size: 16px;
    border-radius: 5px;
    border: 1px solid gray;
}



.btn {
    background-color: #0A84C6;
    color: white;
    padding: 10px 20px;
    margin: 10px 25%;
    border: none;
    cursor: pointer;
    width: calc(50% - 50px);
    height: 30px;
    opacity: 0.9;
    
}
.btn:hover {
  opacity: 1;
}

/* Add padding to containers */
.container {
  padding: 15px;}
  .centerdiv{
 width: 500px;
 height: 450px;
 position: absolute;
 top: 50%;
 left: 50%;
 background-color: red;
 transform: translate(-50%, -50%);
 background-image: linear-gradient(27deg, #013A6B 50%, #004E95 50%);
 box-shadow: 0 1px 6px rgba(0, 0, 0, 0.12), 0 1px 4px rgba(0, 0, 0, 0.24);
}
h2{
  text-align: center;

}
h3{
  text-align: left;

}


.center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 20%;
  
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
<h2>รูปนักเรียน:</h2>
<img src="fileupload/<?php echo $row["fileupload"];?> "width="250px"><br><br>
  </div>

  <div class="main">

<form action="edit_file_db.php" method="post" enctype="multipart/form-data" name="upfile" id="upfile">
  <p>&nbsp;</p>
  <h2>แก้ไขข้อมูล:</h2>
  <h3>ส่วนของนักเรียน:</h3>

          <div class="input-group">
              <input type="hidden" name="fileupload2"value="<?php echo $row["fileupload"] ?>">
              <label ><b>รูปนักเรียน</b></label>
              <input type="file" name="fileupload" id="fileupload">
          </div>
          <div class="input-group">
              <label ><b>ชื่อ-นามสกุล ( ใส่เด็กชายหรือเด็กหญิงด้วย )</b></label>
              <input type="text" name="namestudent" id="namestudent"value="<?php echo $row["namestudent"]  ?>">
          </div>
          <div class="input-group">
              <label ><b>เลขประจำตัวนักเรียน</b></label>
              <input type="text" name="idnumber" id="idnumber"value="<?php echo $row["idnumber"] ?>">
          </div>


          <h3>ส่วนของผู้ปกครอง:</h3>
          <div class="input-group">
              <label ><b>ชื่อ-นามสกุลผู้ปกครอง</b></label>
              <input type="text" name="nameparent" id="nameparent"value="<?php echo $row["nameparent"]  ?>">
          </div>
          <div class="input-group">
              <label ><b>เบอร์โทรศัพท์</b></label>
              <input type="text" name="phonenumber" id="phonenumber"value="<?php echo $row["phonenumber"]  ?>">
          </div><div class="input-group">
          <div class="input-group">
              <input type="hidden" name="carpicture2"value="<?php echo $row["carpicture"] ?>">
              <label ><b>รูปป้ายทะเบียนรถ</b></label>
              <input type="file" name="carpicture" id="carpicture">
          </div>
              <label ><b>เลขทะเบียนรถ</b></label>
              <input type="text" name="carnumber" id="carnumber"value="<?php echo $row["carnumber"]  ?>">
          </div>
          <div class="input-group">
            <button type="submit" onclick="alert('อัพเดตข้อมูลสำเร็จ')" class="btn">อัพเดตข้อมูล</button>
        </div>
</form>


</div>

            
<div class="side">
<h2>รูปป้ายทะเบียนรถ:</h2>
<img src="carpicture/<?php echo $row["carpicture"];?> "width="250px"><br><br>
    </div>  


    <div class="footer">
        <h1>โดย นางสาวกานต์ธิดา เทียนสุวรรณ 6111011660015</h1>
    </div>
</div>

</body>
</html>