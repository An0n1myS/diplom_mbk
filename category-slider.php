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