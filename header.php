<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package diplom
 */

?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri();  ?>/css/Style.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri();  ?>/css/Style-main.css">	
	<title>Mio Amor Mio*Ua</title>
	<script type="text/javascript" src="http://livejs.com/live.js"></script>
	<script src="//code.jivosite.com/widget/bMTILrxuRa" async></script>
</head>
<body>
<a href="#regclose" class="form-reg-bg" id="formregbg"></a>
<a href="#authclose" class="form-auth-bg" id="formauthbg"></a>

<!-- Header -->
	<header class="header">

		<div class="header__content">
			
			<div class="header__logo">
				
				<img src=" <?php the_field('логотип'); ?>" alt="#" width="90%" height="90%">

			</div>

			<div class="header__text">
					
				<nav class="menu">

					<ul class="menu__list">
						<li>
							<a href="http://wpfolder/" class="menu__link mn1">Главная</a>
						</li>
						<li>
							<a  class="menu__link mn2">Наши питомцы</a>
							<span class="menu__arrow arrow"></span>
							<ul class="sub-menu__list">
								
								<li class="sub-menu__li">
									<a href="http://wpfolder/наши-коты/" class="sub-menu__link">Наши коты</a>
								</li>

								<li class="sub-menu__li">
									<a href="http://wpfolder/наши-кошки/" class="sub-menu__link">Наши кошки</a>
								</li>

								<li class="sub-menu__li">
									<a href="http://wpfolder/наши-котята/" class="sub-menu__link">Наши котята</a>
								</li>

							</ul>
						</li>
						<li>
							<a href="buyers.php" class="menu__link mn3">Покупателям</a>
						</li>
						<li>
							<a href="http://wpfolder/галерея/" class="menu__link mn3">Галерея</a>
						</li>
						<li>
							<a href="Publication.php" class="menu__link mn4">Статьи</a>
						</li>
					</ul>

				</nav>

				<div class="lang">

					<div class="lang__icons">
						
						<a href="" class="lang__icon">En</a>
						<a href="" class="lang__icon">Ru</a>
						<a href="" class="lang__icon">Uk</a>

					</div>
				
				</div>


			 	<div class="form-logo" >
					<img  class="form-logo__image" src=" <?php the_field('avatar-logo'); ?> " alt="#">
					

					

					<div class="panel" id="panel">

						<div class="panel__open form-panel">

							
							<ul class="form-panel__list">

								<?php
								if ($_COOKIE['user'] == ''):  
								?>
								<li>
									<a class="form-panel__link" id="auth-btn">Авторизация</a>
								</li>
								<li>
									<a class="form-panel__link" id="reg-btn">Регистрация</a>
								</li>
								<li>
									<a class="form-panel__link exit-link" id="exit-link">Закрыть</a>
								</li>

								<?php else: ?>
										
									<li>
										<a class="form-panel__link" href="http://wpfolder/профиль/" id="auth-btn"><?= $_COOKIE['user']  ?></a>
									</li>
									<li>
										<a href="http://wpfolder/выход/" class="form-panel__link" id="reg-btn">Выход</a>
									</li>
				
								<?php
									 
									endif; 
								?>

							</ul>	

						</div>
					</div>

				</div> 

			</div>				

		</div>

	</header>