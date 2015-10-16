<?php


$connection=mysql_connect("localhost","root","anushiya19") or die("Connection failed");
$db=mysql_select_db("Mydb",$connection) or die("Database Failure");


$fname=$_POST['fn'];
$query3="delete from Details where FirstName='$fname'";
$result3=mysql_query($query3) or die("Query Failed");

$query2="select * from Details";
$result2=mysql_query($query2) or die("Query Failed");

echo "<table bgcolor=pink bordercolor=red align=center border=10 cellsapcing=3 cellpadding=5 ><tr><th colspan=7><h1>Details Table
<tr><th>FirstName<th>LastName<th>Address<th>DOB<th>Password<th>Gender<th>Country";

while($row=mysql_fetch_array($result2))
{
echo "<tr><td>",$row[FirstName],"<td>",$row['LastName'],"<td>",$row[Address],"<td>",$row[DOB],"<td>",$row[Password],"<td>",$row[Gender],"<td>",$row[Country];
}

mysql.close($conncetion);
?>