<?php 

require 'controler.php';



$comments = mysqli_query($db, "SELECT * FROM comments");
$seccomments = mysqli_query($db, "SELECT * FROM comments INNER JOIN seccomments ON commentid = comments.id ORDER BY comments.id ASC");



require_once 'comments.html.php';
?>
