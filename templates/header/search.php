<form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search" class="navbar-form navbar-right">
	<div class="form-group">
		<input type="text" class="form-control" name="s" value="<?php echo esc_attr( get_search_query( ) ); ?>" id="s" placeholder="<?php esc_attr_e( 'Search &hellip;', 'bgtfw' ); ?>" />
	</div>
	<button type="submit" class="btn btn-default button-primary"><span class="fa fa-search"></span><span>&nbsp;Search</span></button>
</form>