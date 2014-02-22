<html>
<head>
</head>
<body>
<h2>Lab02 MySQL Results</h2>


<?php
include('Lab02MySQL.php');
$db = new Database();
$db->connect();
$db->select('mysqlcrud');
$res = $db->getResult();
print_r($res);
?>
<br><br>
<?php;
$db->update('mysqlcrud',array('name'=>'Changed!'),array('id',1));
$db->update('mysqlcrud',array('name'=>'Changed2!'),array('id',2));
$res = $db->getResult();
print_r($res);
?>


</body>
</html>