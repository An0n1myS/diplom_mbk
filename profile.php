<?php
/*
Template Name: Профиль
*/
?>
<head>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri();  ?>/css/Style-profile.css">
</head>
<?php
	if ($_COOKIE['user'] == '') {
		header("location: /");	
	}
	else	{
		$login = $_COOKIE['user'];

		$mysql = new mysqli('mioamormioua.com','root','root','register-bd');

		$result = $mysql->query("SELECT * FROM `users` WHERE `login` = '$login' ");

		$user = $result->fetch_assoc();
	}

	get_header();
?>	


<!-- Page content -->
	<div class="content">
		
		<div class="wrapper">
			
			<div class="page-title">
				<h1>Профиль</h1>
			</div>

			<div class="profile">
					
				<div class="profile__info">
						
					<ul class="info-view">
						<li> 
							<span>Логин пользователя: <?= $user['login'] ?> ;</span>
						</li>
						<li>
							<span>Имя пользователя: <?= $user['name'] ?> ;</span>
						</li>
						<li>
							<span>Адрес электронной почты: <?= $user['mail'] ?> .</span>
						</li>
						<? if ($user['status'] == ''):?>
							
						<? else: ?>
							<li>
								<span> Роль пользователя: <?= $user['status'] ?> .</span>
							</li>
							<li>
								<br>
							</li>
								<div class="admin-panel">
									<a class="admin-link" href="http://wpfolder/wp-admin">Перейти к панели администратора</a> 
								</div>
						<? endif ?>
					</ul>

				</div>
				<br>
				<div class="booking-table">
					
					<table border="4" cellspacing="5" bordercolor="blue" class="booking">
						
						<caption><h3>Бронированные питомцы</h3></caption>

						<tr>
							<th>Lorem</th>
							<th>Lorem.</th>
							<th>Lorem.</th>
							<th>lorem</th>
						</tr>

						<tr>
							<td>Lor! Accrem dolore?</td>
							<td>Lor! Accrem dolore?</td>
							<td>Lor! Accrem dolore?</td>
							<td>Lor! Accrem dolore?</td>
						</tr>
						<tr>
							<td>Lor! Accrem dolore?</td>
							<td>Lor! Accrem dolore?</td>
							<td>Lor! Accrem dolore?</td>
							<td>wvwewcwvwevwvw</td>
						</tr>
						<tr>
							<td>Lor! Accrem dolore?</td>
							<td>Lor! Accrem dolore?</td>
							<td>Lor! Accrem dolore?</td>
							<td>wefwrvwercwe</td>
						</tr>

					</table>

				</div>

			</div>
		
			
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
		
		</div>
		
	</div>

<?php

get_footer();
