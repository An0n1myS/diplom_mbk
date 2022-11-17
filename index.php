<?php
/*
Template Name: Главная
 */

get_header();
?>
	<div class="content">
		
		<div class="wrapper">
			
			<div class="page-title">
				<h1><i>Главная</i></h1>
			</div>

			<div class="slider">
				<?php
					$loop = CFS()->get('slider');
					foreach ($loop as $row){
				?>	
					<div class="slider__item">
						<img src="<?= $row['slider_img']?>" alt="#">
					</div>
				<?php	
					}
				?>

			</div>

			<br>
			<br>

			<div class="con-text text_1">
			
				<p>
					Mio Amor Mio*UA – монопородный питомник, который специализируется на разведении британских кошек редкого, очень изысканного и изумительного окраса серебристая шиншилла (ns12) и серебристый затушеванный (ns11)
				</p>

				<p>
					Основной целью питомника является получение здоровых, с хорошим породным типом, уникальным окрасом британских кошек, которые бы полностью отвечали стандартам породы.
				</p>

			</div>
				<br>
			<div class="con-text text_2">
				<p>
					Все наши производители имеют чистокровные родословные лучших линий Германии, Англии, Чехии, Австрии, России, Эстонии. Наши кошки здоровы, регулярно проходят плановый осмотр ветеринара, вакцинированы качественными зарубежными препаратами, ухожены, обладают прекрасной психикой и 	характером. Питаются животные только высококачественными сбалансированными кормами суперпремиум класса. Наши питомцы успешно выставляются на выставках, удостоены высоких наград и титулов.
				</p>
				<p>
					В нашем питомнике Вы можете купить чистопородных британских котят окраса черный серебристый затушеванный (black silver shaded) и шиншилла (black silver shell, chinchilla). Котята покидают наш дом в возрасте 3-х месяцев, получив полный курс вакцинации. Малыши приучены к лотку и когтеточке, полностью социально адаптированы к жизни.
				</p>
			</div>
				<br>
			<div class="con-text text_3">
				<p>
					Британские шиншиллы дружелюбны, интеллигентны, деликатны, являются прекрасными компаньонами и любят детей, легко находят общий язык с другими домашними животными. Тактичность и ум отличительная особенность породы. Серебристые шиншиллы это невероятно ласковые, спокойные и уравновешенные кошки, которые готовы подарить Вам свое тепло. Хотели бы отметить еще одну особенность – британские коты наших породных линий не метят территорию ! В свою очередь британские шиншиллы-кошки не беспокоят брачными криками своих хозяев.
				</p>
				<p>
					Серебристая шиншилла – это дивной красоты с зелеными или изумрудно-малахитовами глазами кошка. Ее белоснежная песцовая шубка придает ей сказочный вид, а естественный природный «макияж» - глазки, ротик и носик словно подведены черным карандашом – не оставит никого равнодушным. Черные подушечки лап создают необыкновенный контраст с вуалево-серебристой шубкой.
				</p>

			</div>
			
			<div class="con-text text_4">
				
				<p>
					Наш питомник Amor mio – «моя любовь» - имеет такое название неспроста. Увидев однажды кошку серебристая шиншилла, мы влюбились в эту породу и окрас навсегда.
				</p>

				<p>
					Надеемся и Вы не останетесь равнодушны и возможно пополните ряды поклонников кошек этого пленительного окраса. И кто знает, может именно Вы найдете среди наших котят именно Вашего малыша, который принесет в Ваш дом улыбки, радость и счастье, станет приятным украшением вашего дома и верным компаньоном для Вас и Ваших детей.

				</p>
				<br>
				<p>
					<h2>С уважением, Юлия!</h2>
				</p>
			</div>
			<br>
		</div>
		
	</div>


<?php

get_footer();