<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package diplom
 */

?>

<!-- Footer -->

	<footer class="footer">
			
			<div class="footer__text">
				
				C нашими кошками и котами производителями Вы можете познакомиться на страничках "Коты" и "Кошки. Новости о котятах, которые ищут новых хозяев,а так же о содержании котят и уходе за ними можно узнать на страничке "Покупателям". В нашей "Галерее" представлены Вашему вниманию фото наших производителей, котят, а также фоторепортаж с различных выставок. На страничке "Статьи" можно узнать очень много полезной и интересной информации о британских кошках и т.д.

			</div>

			<div class="footer__contacts">
				
				<div class="footer__contact contact">
					<div class="contact__element contact_1">
						<span class="contact_title">Контакты:</span>		
						<div class="phone">
							
							<a href="tel:+380667467184" class="contact-link">+38(066)-746-71-84</a> 
							<br>
							<a href="tel:+380631598602" class="contact-link">+38(063)-159-86-02</a>

						</div> 
						
					</div>
				</div>
				
				<div class="footer__logo ">
					
					<img src="<?php the_field('footer_logo'); ?>" alt="#" >

				</div>
				
				<div class="footer__contact contact">
					<div class="contact__element">e-mail: <a href="mailto:amormiocats@rambler.ru" class="contact-mail">amormiocats@rambler.ru</a> </span>
				</div>
				
			</div>
			
		<br>
		<br>
		<br>
		<br>

	</footer>

<div class="auth-and-reg">

	<form action="<?php echo get_template_directory_uri();  ?>/php/check.php" class="form-reg" id="form-reg" method="post">
		
		<div class="form-reg__close ppc" id="regclose">
			
		</div>
		<div class="form-reg__title">
			<span>Регистрация</span>
		</div>
		<div class="form-reg__input">
			<div class="form-reg__block">
				<label class="reg-input-name" for="login">Логин</label>
				<input type="text" class="form-reg__control" name="login" id="login" placeholder="  Введите логин">
			</div>

			<div class="form-reg__block">
				<label class="reg-input-name" for="name">Ф.И.О</label>
				<input type="text" class="form-reg__control" name="name" id="name" placeholder="  Введите имя">
			</div>
			
			<div class="form-reg__block">

				<label class="reg-input-name" for="mail">Почта</label>
				<input type="email" class="form-reg__control1" name="mail" id="mail" placeholder="  Введите почту">
		
				<label class="reg-input-name" for="pass">Пароль</label>
				<input type="password" class="form-reg__control1" name="pass" id="pass" placeholder="Введите пароль">

			</div>
			
		</div>

		<button class="btn btn-reg" type="submit" >Зарегистрироваться</button>
	</form>


	<form action="<?php echo get_template_directory_uri();  ?>/php/auth.php" class="form-auth" id="form-auth" method="post">
		
		<div class="form-auth__close ppc" id="authclose">
			
		</div>
		<div class="form-auth__title">
			<span>Авторизация</span>
		</div>
		<div class="form-auth__input">
			<label class="auth-input-name" for="login-auth">Логин</label>
			<input type="text" class="form-auth__control" name="login-auth" id="login-auth" placeholder="Введите логин">

			<label class="auth-input-name" for="pass-auth">Пароль</label>
			<input type="password" class="form-auth__control" name="pass-auth" id="pass-auth" placeholder="Введите пароль">

			<button type="submit" class="btn-auth btn">Авторизироваться</button>
		</div>
	</form>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="<?php echo get_template_directory_uri();  ?>/js/slick.min.js"></script>
<script src="<?php echo get_template_directory_uri();  ?>/js/main.js"></script>
</body>
</html>
	