<?php
session_start();
$con=mysqli_connect('localhost','root','','company');
//mysqli_select_db($con,'id8930489_spark');
$name1=$_SESSION['name'];
$q="select name from user where not name='$name1'";
$result=mysqli_query($con,$q);
//$var=$_POST['name'];

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
           margin-top: -8%;
           margin-left: -30%;

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
        <h1 style="font-size: 50px; margin-top: -20%;">Select the name to transfer the credit</h1>
        <form action="transfer.php" method="post" style="position: relative; left: 40%;">
       <table class="credit credit-1">
           <th><h2 style="font-size: 40px; margin-top: 8%;color: white; ">Name</h2></th>
           <?php  
     while($row = $result->fetch_assoc()) { ?>

        
   <tr>
       <td > <input type="radio" name="transfer" value="<?php echo $row["name"]; ?>"><?php echo $row["name"]; ?></td>
      
   </tr>
<?php }
  ?>
       <tr>
          
           <td><input type="submit" value="credit" style="font-size: 20px; background-color: darkgrey;"></td>
           </tr>
        
        </form>
      </table>
        </div>
    </body>
</html>