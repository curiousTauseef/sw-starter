<!-- includes/info_gallery.php -->
<div class="info_gallery container">
  <?php include('contentbox.php'); ?>
  <?php if (!empty($layout['images'])){ ?>
  <div class="images slick">
    <?php foreach($layout['images'] as $k => $image){ ?>
    <figure class="figure image-<?php echo $k; ?>">
      <img src="<?php echo $image['sizes']['medium'] ?>" class="figure-img img-fluid" alt="<?php echo $image['alt']; ?>">
      <figcaption class="figure-caption text-right"><?php echo $image['title'] ?></figcaption>
    </figure>
    <?php } ?>
  </div>
  <?php } ?>
</div>
