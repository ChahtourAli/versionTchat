<?php

$db = mysqli_connect("localhost","root","","chat"); //keep your db name
$sql = "SELECT * FROM message WHERE id = 376 ";
$sth = $db->query($sql);
$result=mysqli_fetch_array($sth);
echo '<img src="data:image/jpeg;base64,'.base64_encode( $result['file'] ).'"/>';

?>