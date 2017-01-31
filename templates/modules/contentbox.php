  <div class="contentbox col-xs-12 col-md-6 col-centered">
    <?php if ($layout['sur_title']) {?>
      <h3 class="text-center"><?php echo $layout['sur_title']; ?></h3>
    <?php  } ?>
    <?php if ($layout['title']) {?>
      <h2 class="text-center"><?php echo $layout['title']; ?></h2>
    <?php  } ?>
    <?php if ($layout['content']) {?>
      <div class="col-centered col-xs-12 text-center"><?php echo $layout['content']; ?></div>
    <?php  } ?>
    <?php include('cta.php'); ?>
  </div>