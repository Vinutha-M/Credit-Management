<?php
session_start();
$con=mysqli_connect('localhost','root','','company');
//mysqli_select_db($con,'test');
$q="select name from user";
$result=mysqli_query($con,$q);
//echo $_POST["transfer"];
if(isset($_POST['transfer'])){
$_SESSION['to']=$_POST["transfer"];
}

?>
<html>
<head>
   <title>
   viewUser
    </title>
    <link rel="stylesheet" href="style.css">
   <style>
     
         input[type=text]
        { 
            margin-top:20 px;
            width:8em;
            height:2em;
            font-size:20px;
           
            font-weight: bold;
        }
         input[type=submit]
        { 
            margin-top: 10px;
             border: 2px solid #cc0000;
             height: 52px;
             width: 110px;
             font-size: 14px;
            background-color: red;
             border: 2px solid #cc0000;
            font-weight: bold;
            cursor: pointer;
            outline: none;
            border-radius: 25px;
        }
       
    </style>
    </head>
    <body>
     <form action="checkcredit.php" method="post"  style="position: relative; top:20%; ">
          <div class="view">
              <strong><p style="margin-top: -20%;">Transfer Amount:</p></strong>
          <br>
            <br>
          <input type="text" name="transfer" style="margin-top: -5%;"><br>
          <br>
        
          <input type="submit" style="margin-top: 1%;">
        
        </div>
        </form>

        
    </body>
</html>
