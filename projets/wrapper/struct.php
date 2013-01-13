<div id="gallery-1" class="royalSlider rsDefault fwImage col span_4">
		<?php
		foreach ($attachments as $attachment) {
			echo '<a class="rsImg" data-rsBigImg="'.$attachment.'" href="'.$attachment.'">Leonardo da Vinci - Mona Lisa<img width="96" height="72" class="rsTmb" src="'.$attachment.'" /></a>';
		}
		?>
</div>
<div class="col span_1">
   <div>
	<div class="titlehead"><?php echo $description; ?></div>
	<h6 class="titleized">Description:</h6>
	<p><span class="eyeon">Titre:</span> <span class="txt"><?php echo $long[0]; ?></span></p>
	<p><span class="eyeon">Lieu:</span> <span class="txt"><?php echo $long[1]; ?></span></p>
	<p><span class="eyeon">Année de fabrication:</span> <span class="txt"><?php echo $long[2]; ?></span></p>
	<p><span class="eyeon">Type de travaux:</span> <span class="txt"><?php echo $long[3]; ?></span></p>
   </div>
</div>
