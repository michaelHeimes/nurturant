<?php
	$fields = get_sub_field('wysiwyg_editor');
	$wysiwyg = $fields['wysiwyg_editor'];
?>
<section class="module wysiwyg-editor">
	<div class="grid-container">
		<div class="grid-x grid-padding-x">
			<?php if( !empty( $wysiwyg ) ):?>
			<div class="cell small-12">
				<?= $wysiwyg;?>
			</div>
			<?php endif;?>
		</div>
	</div>
</section>