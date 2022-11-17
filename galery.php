<?php
/*
Template Name: Галерея
 */
?> 
	<head>
		<link rel="stylesheet" href="<?php echo get_template_directory_uri();  ?>/css/Style-galery.css">
	</head>
<?php
get_header();
?>
<!-- Page content -->

	<div class="content ">

		<div class="wrapper">
			
			<div class="page_title">
				<h1>Галерея</h1>
			</div>

			<div class="container">
				
				<div class="categories">
					

					<div class="categories__1 category">
						
						<a href="http://wpfolder/категория-коты/" class="category__title"> Наши Коты</a>
						<div class="category__content">
							<a href="http://wpfolder/категория-коты/"><img src="<?php the_field('category-1'); ?>" alt=""></a>
						</div>

					</div>
					
					<div class="categories__2 category">
						
						<a href="http://wpfolder/категория-кошки/" class="category__title">Наши Кошки</a>
						<div class="category__content">
							<a href="http://wpfolder/категория-кошки/"><img src="<?php the_field('category-2'); ?>" alt=""></a>
						</div>

					</div>
					
					<div class="categories__3 category">
						
						<a href="" class="category__title">Наши котята</a>
						<div class="category__content">
							<a href=""><img src="<?php the_field('category-3'); ?>" alt=""></a>
						</div>

					</div>
					
					<div class="categories__4 category">
						
						<a href="" class="category__title">Наши выпускники</a>
						<div class="category__content">
							<a href=""><img src="<?php the_field('category-4'); ?>" alt=""></a>
						</div>

					</div>
					
					<div class="categories__5 category">
						
						<a href="" class="category__title"></a>
						<div class="category__content">
							<a href=""><img src="" alt=""></a>
						</div>

					</div>



				</div>



			</div>	






			
			
		
		</div>
		
	</div>

<?php

get_footer();
