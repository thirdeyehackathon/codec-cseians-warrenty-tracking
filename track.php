<html>
<?php
$username="root";
$password="";
$hostname="localhost";
$conn=mysql_connect($hostname,$username,$password) or die("cannot connect to mysql");
echo "connected to mysql";
echo "br";
$se=mysql_select_db("warranty",$conn) or die("cannot connect to database");
$productt=$_POST['prname'];
$purchased=$_POST['purdate'];
$warrantyy=(int)$_POST['wp'];
$costt=(int)$_POST['pcst'];
$iid=(int)$_POST['dti'];
$phn=(int)$_POST['pn'];
$sql="insert into tracker (product,purchaseddate,warrantyperiod,cost,datetointimate,phonenumber) values('$productt','$purchased','$warrantyy','$costt','$idd','$phn')";
$que=mysql_query($sql,$conn);
if($que)
{
echo "data inserted successfully";
echo "<br>";
}
else
echo "data not inserted";
?>
<body style="background-image: url(we.jpg)" >
<h1>DATA BASE</h1>
<?php
$username="root";
$password="";
$hostname="localhost";
$conn=mysql_connect($hostname,$username,$password) or die("cannot connect to mysql");
echo "connected to mysql";
echo "<br>";
$se=mysql_select_db("warranty",$conn) or die("cannot connect to database");
$qe="select * from tracker";
$result=mysql_query($qe,$conn);
echo "<table border='2' cellpadding='10'>";
echo "<tr>
      <th>Product Name:</th>
      <th>Purchased Date:</th>
      <th>Warranty Period:</th>
      <th>Cost:</th>
      <th>Phone Number:</th>  
    </tr>";
    while ($row = mysql_fetch_array($result))
    {
   echo "<tr>";      
echo '<td>'. $row['product'].'</td>';
echo '<td>'. $row['purchaseddate'].'</td>';
echo '<td>'. $row['warrantyperiod'].'</td>';
echo '<td>'. $row['cost'].'</td>';
echo '<td>'. $row['phonenumber'].'</td>';
echo "</tr>";
}
echo "</table>";
?>
</body>
</html>