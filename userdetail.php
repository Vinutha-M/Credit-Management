<?php 
session_start();
$con=mysqli_connect('localhost','root','','company');
$name=$_POST['name'];
$q="select * from user where name='$name'";
$result=mysqli_query($con,$q);
$row_count=mysqli_num_rows($result);
$_SESSION['name']=$name;
//echo $_SESSION['name'];

?>
<html>
<head>
   <title>
   viewUser
    </title>
    <link rel="stylesheet" href="style.css">
    <script type="text/javascript" src="main.js"></script>
    <style>
      ::-webkit-scrollbar{
      display: none;
  }
      body .credit {
    margin-bottom: 20px;
    border-collapse:collapse;
    font-family: 'Lato', Calibri, Arial, sans-serif;
    border: none;
            border-radius: 3px;
           -webkit-border-radius: 3px;
           -moz-border-radius: 3px;
           position: relative;
           left: 37%;
           background: rgba(0,0,0,0.75);
           box-sizing: border-box;
           box-shadow: 0 16px 26px rgba(0,0,0,1.0);
           border-radius: 10px;
           margin-top: 3%;

}
 body .credit th {
    font-weight: normal;
    -webkit-font-smoothing: antialiased;
    padding: 0.3rem;
    color: white;
    
    font-size: 1.5em;
    border-bottom: 2px solid white;
}
body .credit td{
  color: white;
    padding: 0.45em 1.15em 0.45em 1.15em;
    text-shadow: 0 0 1px rgba(255,255,255,0.1);
    font-size: 1.4em;
}
 body .credit-1 tr:hover {
    background-color: black;
}
</style>

</head>
    <body>
    <div class="view">
        <h2 style="font-size: 40px; margin-top: -15%;">User Information</h2>
       <table class="credit credit-1">
          
           <th>Name</th>
           <th>Email</th>
           <th>Credit</th>
           <tr>
           <?php  
     
     $row=mysqli_fetch_array($result);
           ?>
 <td><?php echo  $row["name"]; ?></td>
  <td><?php echo  $row["email"]; ?></td>
  <td><?php echo  $row["credit"]; ?></td>
   

           </tr>


        </table>

        </div>
        <br>
        <div class="css-button" style="margin-top: 10px;">
                 <p class="css-button-text" style="margin-top: 16px;"><a href="viewuser.php" >Transfer To</a></p>
               </div>
               


               <br> <br> <br> <br> <br>
               <div class="css-button" style="margin-top: 10px;">
                 <p class="css-button-text" style="margin-top: 16px;"><a href="selectuser.php" >Back</a></p>
               </div>
               


    </body>
</html>