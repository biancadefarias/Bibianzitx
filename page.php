<?php get_header(); ?>
<?php
if (have_posts()) {
 	while (have_posts()) {
 		the_post();
?>
<div class="row">
	<div class="col-12">
		<div class="jumbotron">
			<h1 class="display-4"><?php the_title(); ?></h1>
		</div>
	</div>
</div>

<?php 
if (!is_page('Formulário de Contato')) { ?>
	<div class="row">
		<div class="col-12">
			<?php the_content(); ?>
		</div>
	</div>	
<?php } ?>

<?php 
if (is_page('Formulário de Contato')) { ?>
<div class="row">
	<div class="col-6">
        <?php the_post_thumbnail();?>      
		<?php the_content(); ?>
	</div>
	<div class="col-6">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d233099.14872224574!2d-46.95298796315117!3d-24.09536872696768!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94d1d57349fa6513%3A0x29b318df3a7ca782!2sItanha%C3%A9m%20-%20SP%2C%2011740-000!5e0!3m2!1spt-BR!2sbr!4v1601593570779!5m2!1spt-BR!2sbr" width="450" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
	</div>
</div>	
<?php } ?>

<?php
 	}
 } 
?>
<?php get_footer(); ?>