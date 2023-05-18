<?php 
  session_start();
  require('connect.php');
  $_sql ="SELECT * FROM uploadfile ";
  $result=mysqli_query($con,$_sql);
  
  $order=1;

?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>ค้นหาข้อมูล</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Cinzel" rel="stylesheet">

<link rel="stylesheet" href="style.css">


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
  height: 500px;
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
h2{
  text-align: center;

}
</style>
</head>
<body>

<div class="header">
  <h1>ระบบตรวจจับและอ่านป้ายทะเบียนรถยนต์ผู้ปกครองนักเรียน</h1>
  <h1>โรงเรียนสาธิตละอออุทิศ</h1>
  
</div>

<form action="edit_file_db.php" method="post">
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
</form>

<div class="row">
  <div class="side">
    
  </div>
  
  <div class="main">
    <h2 class="text-center">ค้นหาข้อมูล</h2>
<form class="example" action="searchData.php" method="post">
  <input type="text" placeholder="ค้าหาข้อมูล" name="search">
  <button type="submit"><i class="fa fa-search"></i></button>
</form>
  </div>

  <div class="side">
  <h2></h2>
    <br><br><br><br><br><br><br><br>
  </div>


<div class="footer">
  <h1>โดย นางสาวกานต์ธิดา เทียนสุวรรณ 6111011660015</h1>
  </div>

</body>
</html>
