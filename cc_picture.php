
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>向 MySQL 数据库添加数据</title>
</head>
<body>
<?php
if(isset($_POST['add']))
{
$dbhost = '172.16.70.26';
$dbuser = 'root';
$dbpass = '';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
/*if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}

if(! get_magic_quotes_gpc() )
{
   $w3cschool_title = addslashes ($_POST['w3cschool_title']);
   $w3cschool_author = addslashes ($_POST['w3cschool_author']);
}
else
{
   $w3cschool_title = $_POST['w3cschool_title'];
   $w3cschool_author = $_POST['w3cschool_author'];
}
$submission_date = $_POST['submission_date'];

$sql = "INSERT INTO w3cschool_tbl ".
       "(w3cschool_title,w3cschool_author, submission_date) ".
       "VALUES ".
       "('$w3cschool_title','$w3cschool_author','$submission_date')";
mysql_select_db('W3CSCHOOL');
*/
 $sql = " INSERT INTO picture_address ".
                        "(id,address) ".
                        "VALUES ".
                        "('$_POST[id]','$_POST[address])";
mysql_select_db('cc');
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not enter data: ' . mysql_error());
}
echo "Entered data successfully\n";
mysql_close($conn);
}
else
{
?>
<form method="post" action="<?php $_PHP_SELF ?>">
<table width="600" border="0" cellspacing="1" cellpadding="2">
<tr>
<td width="250">id</td>
<td>
<input name="id" type="text" id="id">
</td>
</tr>
<tr>
<td width="250">adderess</td>
<td>
<input name="address" type="text" id="address">
</td>
</tr>
<!--
<tr>
<td width="250">Submission Date [ yyyy-mm-dd ]</td>
<td>
<input name="submission_date" type="text" id="submission_date">
</td>
</tr>
-->
<tr>
<td width="250"> </td>
<td> </td>
</tr>
<tr>
<td width="250"> </td>
<td>
<input name="add" type="submit" id="add" value="Add Tutorial">
</td>
</tr>
</table>
</form>
<?php
}
?>
</body>
</html>
