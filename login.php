<?php session_start();?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>LoginForm</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link href="https://fonts.googleapis.com/css?family=Cinzel" rel="stylesheet">

  <link rel="stylesheet" href="style.css">

  <style>
      /*'Cinzel', serif*/
  *{
 margin: 0;
 padding: 0;
 font-family: 'Arial', Helvetica, sans-serif;
}

.bgimg{
 width: 100%;
 height: 100vh;
 background-image: linear-gradient(27deg, #b8f2e6 50%, #ffa69e 50%);
}

.centerdiv{
 width: 350px;
 height: 450px;
 position: absolute;
 top: 50%;
 left: 50%;
 padding: 10px;
 background-color: red;
 transform: translate(-50%, -50%);
 background-image: linear-gradient(27deg, #ffa69e 50%, #b8f2e6 50%);
 box-shadow: 0 1px 6px rgba(0, 0, 0, 0.12), 0 1px 4px rgba(0, 0, 0, 0.24);
}

#profilepic{
 width: 120px;
 height: 120px;
 border-radius: 50%;
 position: relative;
 top: -60px;
 left: calc( (350px - 120px) / 2 )
}

h2{
 text-align: center;
 color: #3d405b;
 text-transform: uppercase;
 font-size: 2em;
 word-spacing: 10px;
 margin-top: -50px;
 margin-bottom: 50px;
 text-shadow: -2px 2px 1px #f4f1de;
}

b{
    color: #3d405b;
    text-shadow: -2px 2px 1px #f4f1de;
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
    background-color: #b8f2e6;
    color: #3d405b;
    padding: 10px 20px;
    margin: 10px 25px;
    border: none;
    cursor: pointer;
    width: calc(100% - 50px);
    height: 30px;
    opacity: 0.9;
    
}
.btn:hover {
  opacity: 1;
}

.b{
    color: #3d405b;
    text-shadow: -2px 2px 1px #f4f1de;
}
p{
    color: #3d405b;
    
}

.error {
    width: 92%;
    margin: 0px auto;
    padding: 10px;
    border: 1px solid #a94442;
    color: #a94442;
    background: #f2dede;
    border-radius: 5px;
    text-align: left;
}


</style>
</head>
<body>

<div class="bgimg">
   <div class="centerdiv">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQprjP-BMSaPG1L-_gGNVEVpP9pqXbmkUJk2g&usqp=CAU" id="profilepic">
    <h2>เข้าสู่ระบบ</h2>


      <form name="frmlogin"  method="post" action="login_db.php">

        <div class="input-group">
            <label for="Username" ><b>Username</b></label>
            <input type="text" id="Username" required name="Username" placeholder="Username">
        </div>
        <div class="input-group">
            <label for="password"><b>รหัสผ่าน</b></label>
            <input type="password" id="Password"required name="Password" placeholder="Password">
        </div>
        <div >
            <button type="submit" name="login_user" class="btn">Login</button>
        </div>
        

      </form>


</body>
</html>