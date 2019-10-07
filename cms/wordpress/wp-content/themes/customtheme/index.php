<?php
get_header();
if ( have_posts() ) :
while ( have_posts() ) : the_post(); ?>
 <article class="post">
 <h2><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
<?php substr(the_content(),0,100) ?>
 </article>
<?php endwhile;
else :
echo '<p>Không có post nào được đăng !!!</p>';
endif;
get_footer();
?>

