<?php

$artifact_a_src = isset($layout['artifact_a']) && ($layout['artifact_a']['sizes']['medium'])
    ? $layout['artifact_a']['sizes']['medium'] : false;

$artifact_b_src = isset($layout['artifact_a']) && isset($layout['artifact_b']['sizes']['medium'])
    ? $layout['artifact_b']['sizes']['medium'] : false;

?>

<?php if($artifact_a_src) { ?>
    <img src="<?php echo $artifact_a_src ?>" class="artifact artifact-a">
<?php } ?>

<?php if($artifact_b_src) { ?>
    <img src="<?php echo $artifact_b_src ?>" class="artifact artifact-b">
<?php } ?>
