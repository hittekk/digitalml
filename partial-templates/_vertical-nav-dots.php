<?php
/**
 * required args
 *  - section_count
 */
$num_sections = $this->section_count;
$container_class = $this->container_class;
?>

<div class="section-dots <?= $container_class ?>">
<?php
for( $i=1; $i<=$num_sections; $i++ ) {
?>
	<div id="dot-<?= $i ?>" data-navsection="section-<?= $i ?>"></div>
<?php } ?>
</div>
