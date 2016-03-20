<html>
<?php
$username="root";
$password="";
$hostname="localhost";
$conn=mysql_connect($hostname,$username,$password) or die("cannot connect to mysql");
echo "connected to mysql<br>";
$se=mysql_select_db("warranty",$conn) or die("cannot connect to database");
//$productt=$_POST['prd'];
$sql="select purchaseddate from tracker where product='laptop'";

$que=mysql_query($sql,$conn);
echo "Date";
echo $que;
if($que)
echo "data successfully retrieved";
else
echo "data not retrieved";
while($row = mysql_fetch_array($que))
{
echo $row['purchaseddate'];
$spdd=date('Y-m-d',strtotime($row['purchaseddate']));
echo "<br>";
$pd=time();
echo "second date";
echo $dt1= date("Y-m-d",$pd);
$i=6;
echo $da=strtotime(date("Y-m-d",strtotime($spdd))." +".$i."years");
echo $dt=strtotime(date("Y-m-d",strtotime($spdd))." -".$i."days");
echo "<br>";
echo date('Y-m-d',$da);
echo date('Y-m-d',$dt);
if($dt1==$dt1)
 echo "<script>alert('warranty is going to expire');</script>";
else
  echo "no";

}
?>
</html>