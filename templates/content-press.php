<!-- templates/content-press.php -->
<?php $press_fields = get_fields(); ?>
<article <?php post_class(); ?>>
  <header>
    <?php if (!empty($press_fields['publication'])): ?>
      <a href="<?php echo empty($press_fields['article_link']) ? '#' :  $press_fields['article_link'] ?>" title="<?php the_title_attribute(); ?>" target="_blank">
      <h2 class="entry-title"><?php echo $press_fields['publication'] ?></h2>
      </a>
    <?php endif ?>
    <h3><?php the_title(); ?></h3>
  </header>
    
  <?php if ( has_post_thumbnail() ) : ?>
      <a href="<?php echo empty($press_fields['article_link']) ? '#' :  $press_fields['article_link'] ?>" title="<?php the_title_attribute(); ?>" target="_blank">
          <?php the_post_thumbnail( 'medium', 'class=img-responsive'); ?>
      </a>
  <?php endif; ?>
  
  <div class="entry-content">
      <?php the_excerpt(); ?>
  </div>

</article>

