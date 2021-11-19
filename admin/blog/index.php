<?php session_start() ?>
<?php if (!isset($_SESSION['is_auth'])) {header('Location: /admin');}?>

<?php include __DIR__.'/../../functions/blog.php';?>
<?php include __DIR__.'/../functions/blog.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="/admin/css/style.css">
	<title>Admin/Blog</title>
</head>
<body>
	
	<div class="content">
		<div class="hed">Избенко Дмитрий Викторович<a href="/admin">Главная</a><a href="/admin/logout.php">Выйти</a></div>
	</div>
	<table style="border: 1px solid black">
		<tr>
			<th style="border: 1px solid black">id</th>
			<th style="border: 1px solid black">name</th>
			<th style="border: 1px solid black">data</th>
			<th style="border: 1px solid black">shortText</th>
			<th style="border: 1px solid black" colspan="2"></th>
		</tr>
		<?php $data = get_blog();
		 	foreach ($data as $value) {
				echo '<tr>';		
					echo '<td style="border: 1px solid black">'.$value[0].'</td>';
					echo '<td style="border: 1px solid black">'.$value[1].'</td>';
					echo '<td style="border: 1px solid black">'.$value[2].'</td>';
					echo '<td style="border: 1px solid black">'.$value[3].'</td>';
					echo '<td style="border: 1px solid black"><a href="/admin/blog/?id='.$value[0].'&action=delete">X</a></td>';
					echo '<td style="border: 1px solid black"><a href="/admin/blog/?id='.$value[0].'&action=update">Р</td>';
				echo '</tr>';
		}?>
	</table><br>
	<?php $data = get_article_for_admin();
		
		echo '<form action="/admin/blog/" method="POST">';
			echo '<p>Введите название статьи</p>';
			echo '<input type="text" name="name" value="'.$data[0].'"><br><br>';
			echo '<p>Введите сокращенный текст статьи</p>';
			echo '<input type="text" maxlength="500" name="shortText" value="'.$data[1].'"><br><br>';
			echo '<p>Введите полный текст статьи</p>';
			echo '<textarea name="content">'.$data[2].'</textarea><br><br>';
			echo '<input type="hidden" name="id" value="'.$data[3].'">';
			echo '<input type="submit" value="Сохранить"><br><br>';

	?>

	</form>

</body>
</html>


			