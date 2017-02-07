<header class="header">

	<div class="scale-animation">

		<div class="titre <?= $content['transform'] ?>">
			<a href="<?php bloginfo('wpurl')?>">
				<div class="container-titre wow slideInLeft" data-wow-delay="1.2s">
					<div class="titre-text">
						<p>couleur nature</p>
					</div>
				</div>
			</a>
		</div>

		<nav class="nav-container wow slideInRight <?= $content['nav'] ?> " data-wow-delay="1.2s">
			<div >
			    <?php 
			        wp_nav_menu(array( 
			            "theme_location"=>"menu-principal",
			            "items_wrap"    =>'<ul><li class="col-btn menu-item menu-item-type-custom menu-item-object-custom "><span class="glyphicon glyphicon-menu-left"></span></li>%3$s</ul>'
			        ) ); 
			    ?>
			</div>
		</nav>
	</div>

</header>


