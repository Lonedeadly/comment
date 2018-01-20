<?php 
require_once 'db.php';

if (isset($_POST['name'])){
	mysqli_query($db, 'INSERT INTO comments SET name = "'.$_POST['name'].'", text = "'.$_POST['text'].'", date = CURDATE()');
	header ('Location: .');
}

if (isset($_GET['delete'])) {
	mysqli_query($db, 'DELETE FROM comments WHERE id = "'. $_POST['id'] . '"');
	mysqli_query($db, 'DELETE FROM seccomments WHERE commentid = "'. $_POST['id'] . '"');
	header ('Location: .');
}