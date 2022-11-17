<?php
/*
Template Name: Наши котята
 */
?>
<head>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri();  ?>/css/Style-kittens.css">
</head>
<?php
get_header();
?>

<!-- Page content -->
	<div class="content">
		
		<div class="wrapper">
			
			<div class="page-title">
				<h1><i>Наши Котята</i></h1>
			</div>

			<div class="con-text text_1">
			
				<p>
					<b>
					Если Вы желаете приобрести котенка в нашем питомнике, просто позвоните нам или напишите письмо.
					</b>
				</p>
				<br>
				<p>
					Котята из нашего питомника переезжают к новым хозяевам не ранее 12-ти недельного возраста, прививки по возрасту, с ветеринарным паспортом, с родословной и договором купли-продажи. Котята в этом возрасте уже умеют пользоваться туалетом, когтеточкой и самостоятельно кушать. До достижения 12-ти недельного возраста котята могут быть зарезервированы.Котёнок считается зарезервированным, если за него внесён задаток

				</p>

			</div>
			<br>
			<br>
			
					
					
			<div class="pom pom-с">
				<?php
					$loop = CFS()->get('pomet');

					foreach ($loop as $row){
				?>
					<h2 class="pom__name"><p><?= $row['pomet_name']; ?></p> <p><?= $row['pomet_date']; ?></p></h2>
					<br>
					<br>
					<div class="pom__image per-img">
						<img src="<?= $row['parent_1']; ?>" alt="#" class="per-img__1">
						<img src="<?= $row['some_icon']; ?>" alt="#" class="per-img__2">
						<img src="<?= $row['parent_2']; ?>" alt="#" class="per-img__3">
					</div>

					<div class="pom__kittens">
						<?php
							foreach ($row['kittens'] as $rows){
						?>
							<div class="kitten__2">

								<img class="kittens_logo" src="<?= $rows['kitten_foto']; ?>" alt="#">
								
								<table class="info-kttn">
									
									<tr>
										
										<th>Кличка</th>
										<th>Пол</th>
										<th>Порода</th>
										<th>Окрас</th>

									</tr>
									<tr>
										<td><?= $rows['kitten_name']; ?></td>
										<td><?= $rows['kitten_sex']; ?></td>
										<td><?= $rows['poroda']; ?></td>
										<td><?= $rows['kitten_color']; ?></td>
									</tr>
								</table>
							</div>
						<div class="status">
							<?= $rows['kitten_status']; ?>
						</div>
						<? }?>
							
						
					</div>
				<? }?>
			</div>


			<br>
			<br>
			<br>
			<br>
			


		</div>
		
	</div> 
<?php

get_footer();
