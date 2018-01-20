<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Гостевая книга</title>
		<link rel="stylesheet" href="css/main.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
		<link rel="stylesheet" href="../css/main.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="js/script.js"></script>
	</head>
	<body>
		<div class="container" id="container">
			<div class="column comments">
				<?php foreach ($comments as $comment => $row) :?>
				<form action="?delete" method="post" id="deletecomment">
					<div class="comment" id="comment">
						<div class="maincomment" id="maincomment">
							<div class="user_name text-primary">
								<?php echo $row['name'];?>
							</div>
							<div class="date text-secondary">
								<em><small><?php echo $row['date'];?></small></em>
							</div>
							
							<div class="text">
								-<?php echo $row['text'];?>
							</div>
							<input type="hidden" name="id" value="<?php echo $row['id'];?>">
							<input type="submit" value="Удалить отзыв">
						</div>
						<?php foreach ($seccomments as $seccomment => $row2) :?>
						<?php if($row['id'] == $row2['commentid']){?>
						<div class="seccomment col-10">
							<div class="user_name text-primary">
								<?php echo $row2['sec.name'];?>
							</div>
							<div class="date text-secondary">
								<em><small><?php echo $row2['sec.date'];?></small></em>
							</div>
							<div class="text">
								-<?php echo $row2['sec.text'];?>
							</div>
						</div>
						
						<?php } endforeach; ?>
						<hr>
					</div>
				</form>
				<?php endforeach;?>
			</div>
			<form method="post" class="addcomment" id="addcomment">
				<label for="name">Ваше имя: </label>
				<input type="text" id="name" name="name"><br>
				<label for="text">Оставить отзыв:</label><br>
				<textarea name="text" id="text"></textarea>
				<button type="submit">Отправить</button>
			</form>
		</div>

		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
	
	</body>
</html>