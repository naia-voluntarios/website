<?php 

class Banner{
    function __construct($pageTitle, $pageDescription = '', $image = 'heading-bg.jpg'){
        echo '<div class="page-heading text-center" style="background-image: url(assets/images/banner/'.$image.')">

		<div class="container zoomIn animated">
			
			<h1 class="page-title" style="color:white;">'.$pageTitle.' <span class="title-under"></span></h1>
			<p class="page-description">
				'.$pageDescription.'
			</p>
			
		</div>

	</div>';
    }
}


?>