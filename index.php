<?php
$Username = "root";
$Password = "root";
$Hostname = "localhost";

$conn = mysql_connect($Hostname, $Username, $Password) or die ("Unable to connect to Mysql");
$db = mysql_select_db("blog",$conn) or die("Could not select examples");
?>
<html>
  <head>
    <title>Blog - Index page</title>
  </head>
  <body>
<?php
 $result = mysql_query("SELECT * FROM users");
?>

<table cellspacing="1" cellpadding="2"border="1">
<?php
echo '<tr>
<td><a href="/add.php?"><img src="add.jpeg" alt="" width="29" height="25"></a></td>
</tr>'
?>

<table cellspacing="1" cellpadding="2" border="1">
<tr>
<td>ID</td>
<td>Name</td>
<td>Mobile</td>
<td>Age</td>
<td>Password</td>
<td>edit</td>
<td>dell</td>
</tr>
<?php

  while ($row = mysql_fetch_array($result)) {
    echo '<tr>
    <td>'.$row['id'].'</td>
    <td>'.$row['name'].'</td>
    <td>'.$row['mobile'].'</td>
    <td>'.$row['age'].'</td>
    <td>'.$row['password'].'</td>
    <td><a href="http://www.w3schools.com"><img src ="edit.png" alt="" width="29" height="25"></a></td>
    <td><a href="http://www.bolor-toli.com"><img src="delete.jpeg" alt="" width="29" height="25"/></a></td>
    </tr>';
  }
?>
</table>
<?php
  while ($row = mysql_fetch_array($result)) {
    echo $row[0];
  }

  mysql_close();
?>
</body>
</html>
