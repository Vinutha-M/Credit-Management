<?php
$con=mysqli_connect('localhost','root','','company');
//mysqli_select_db($con,'id8930489_spark');
$q="select name from user";
$result=mysqli_query($con,$q);
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Select User</title>
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


<form  action="userdetail.php" method="post">
    <h1 style="margin-top: -19%;margin-left: 7%;"> Select User from the list</h1>
    <table class="credit credit-1">


    <?php 
session_start();
$con=mysqli_connect('localhost','root','','company');

$q="select * from user ";
$result=mysqli_query($con,$q);
$row_count=mysqli_num_rows($result);
//echo $_SESSION['name'];

?>




  <thead>
    <th>Name</th>
    <th>Email</th>
    <th>Credit</th>
    
  </thead>
  <tbody>
    <tr>
        <?php  
     
     $row=mysqli_fetch_array($result);
           ?>
 <td><?php echo  $row["name"]; ?></td>
  <td><?php echo  $row["email"]; ?></td>
  <td><?php echo  $row["credit"]; ?></td>
   

    </tr>
    <tr>
        <?php  
     
     $row=mysqli_fetch_array($result);
           ?>
 <td><?php echo  $row["name"]; ?></td>
  <td><?php echo  $row["email"]; ?></td>
  <td><?php echo  $row["credit"]; ?></td>
   

        </tr>
        <tr>
        <?php  
     
     $row=mysqli_fetch_array($result);
           ?>
 <td><?php echo  $row["name"]; ?></td>
  <td><?php echo  $row["email"]; ?></td>
  <td><?php echo  $row["credit"]; ?></td>
   

        </tr>
        <tr>
        <?php  
     
     $row=mysqli_fetch_array($result);
           ?>
 <td><?php echo  $row["name"]; ?></td>
  <td><?php echo  $row["email"]; ?></td>
  <td><?php echo  $row["credit"]; ?></td>
   

        </tr>
        <tr>
        <?php  
     
     $row=mysqli_fetch_array($result);
           ?>
 <td><?php echo  $row["name"]; ?></td>
  <td><?php echo  $row["email"]; ?></td>
  <td><?php echo  $row["credit"]; ?></td>
   

        </tr>
        <tr>
        <?php  
     
     $row=mysqli_fetch_array($result);
           ?>
 <td><?php echo  $row["name"]; ?></td>
  <td><?php echo  $row["email"]; ?></td>
  <td><?php echo  $row["credit"]; ?></td>
   

        </tr>
        <tr>
        <?php  
     
     $row=mysqli_fetch_array($result);
           ?>
 <td><?php echo  $row["name"]; ?></td>
  <td><?php echo  $row["email"]; ?></td>
  <td><?php echo  $row["credit"]; ?></td>
   

        </tr>
        <tr>
        <?php  
     
     $row=mysqli_fetch_array($result);
           ?>
 <td><?php echo  $row["name"]; ?></td>
  <td><?php echo  $row["email"]; ?></td>
  <td><?php echo  $row["credit"]; ?></td>
   

        </tr>
        <tr>
        <?php  
     
     $row=mysqli_fetch_array($result);
           ?>
 <td><?php echo  $row["name"]; ?></td>
  <td><?php echo  $row["email"]; ?></td>
  <td><?php echo  $row["credit"]; ?></td>
   

        </tr>
        <tr>
        <?php  
     
     $row=mysqli_fetch_array($result);
           ?>
 <td><?php echo  $row["name"]; ?></td>
  <td><?php echo  $row["email"]; ?></td>
  <td><?php echo  $row["credit"]; ?></td>
   

        </tr>
        
  </tbody>
</table>


    <div class="view">

<table cellspacing= 80px style="margin-top: -5%;margin-left: 35%;">
  <tr>
      <td> <h2 style="font-size: 40px;color: white;font-weight: lighter; background: rgba(0,0,0,0.75);
           box-sizing: border-box;
          width: 120%;margin-top: 20%; margin-left: -30px;">SELECT USER</h2></td>
   
<td>

<?php
$con=mysqli_connect('localhost','root','','company');
//mysqli_select_db($con,'id8930489_spark');
$q="select name from user";
$result=mysqli_query($con,$q);
?>


  <select name="name" onchange="this.form.submit()" style="width: 250px; padding: 8px 16px; background-color: darkgrey; color: black; font-size: 20px;">
      <option>--Select--</option>
   <?php  
     while($row = $result->fetch_assoc()) { ?>

      <option value="<?php echo $row['name']; ?>"> <?php echo $row["name"]; ?></option>

<?php }
  ?>
  
        </select>
      </td>
    </tr>
       <tr>
           <td></td>
           <!--<td><input type="submit" value="submit"></td>-->
    </tr>
        </table>
</div>
    </form> 
</body>
</html>