<?php
/*
Template Name: Категория кошки
 */
?>
<head>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri();  ?>/css/Style-girls_galery.css">
</head>
<?php
get_header();
?>
<!-- Page content -->
	<div class="content">
		
		<div class="wrapper">
			

			<div class="container">
				
				<div class="categories">
					
					<div class="categories__ category">
						
					<?php
							$loop = CFS()->get('sub-category');

							foreach ($loop as $row){
						?>
							<div class="page_title">
								<h1><?= $row['cat_title']?></h1>
							</div>

							<div class="slider">
								<?php
									foreach ($row['cat-galery'] as $rows){
								?>	
									<div class="slider__item">
										<img src="<?= $rows['image-cat']?>" alt="#">
									</div>
								<?php	
									}
								?>
							</div>
						<?		
							}
						?>
						<br>
					</div>
					

				</div>

			</div>	
		
		
		</div>
		
	</div>

<?php

get_footer();
