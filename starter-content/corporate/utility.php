<?php
$image_path = function ( $path ) {
	echo get_parent_theme_file_uri( 'starter-content/corporate/' .  $path );
};

$divider = function() { ?>
	<div class="row bg-editor-hr-wrap" style="padding-bottom: 15px;">
		<div class="col-md-12 col-xs-12 col-sm-12">
			<div>
				<hr class="bg-hr color1-color bg-hr-15" style="width: 50px; margin-left: 0px; margin-right: auto; margin-top: 0px; border-radius: 100px;">
			</div>
		</div>
	</div>
<?php }; ?>
