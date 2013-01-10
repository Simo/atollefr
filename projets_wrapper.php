<div  class="page wrapper">    
  <!-- slider code start -->
    <div class="row clearfix">
      <div class="col span_6 fwImage">
        <div id="video-gallery" class="royalSlider videoGallery rsDefault">
          <?php 
            foreach ($projects as $project) {
              echo '<div class="rsContent">'.
                '<a class="rsImg" data-rsVideo="" href="'.$project[2].'">'.
                  '<div class="rsTmb">'.
                    '<h5>'.$project[0].'</h5>'.
                    '<p>'.$project[1].'</p>'.
                  '</div>'.
                '</a>'.
                '<h3 class="rsABlock sampleBlock"><a class="collegamento" href="'.$project[3].'">'.$project[4].' ></a></h3>'.
              '</div>';
            }
          ?>
        </div>
    </div> <!-- chiude span6-->
    </div>
</div>
