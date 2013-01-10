<div id="gallery-1" class="royalSlider rsDefault fwImage col span_4">
		<?php
		foreach ($attachments as $attachment) {
			echo '<a class="rsImg" data-rsBigImg="'.$attachment.'" href="'.$attachment.'">Leonardo da Vinci - Mona Lisa<img width="96" height="72" class="rsTmb" src="'.$attachment.'" /></a>';
		}
		?>
</div>
