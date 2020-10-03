<?php get_header(); ?>
	<div class="row">
				<div class="col-12">
					<?php masterslider(1); ?>
				</div>
			</div>

			<br>
	<div class="row">
		<div class="col-12">
			<div class="jumbotron sbv">
				<h3 class="display-4"><b>Seja Bem-Vindo!</b></h3>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<?php 
			if (have_posts()) {
				while (have_posts()) {
					the_post();
			?>
            <div class="col-6 col-md-4">
    	        <h2><?php the_title();?></h2>
    	        <div class="foto">
    		        <?php the_post_thumbnail();?>
    	        </div>
    	        <p><?php the_excerpt();?></p>
    	        <a style="color: #800000;" href="<?php the_permalink(); ?>">Leia mais</a>
            </div>
            <?php
				}
			}
			?>
       </div>
	</div>

<?php get_footer(); ?>