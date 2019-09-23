<header id="header">
	<div class="container">
		<div class="row">
			<div class="col-md-3 col-sm-9 for-logo align-self-center">
				<div class="logo-cont">
					<a href="{{ home_url('/') }}">{{ get_bloginfo('name', 'display') }}</a>
				</div>
			</div>
			<div class="col-md-9 col-sm-3 for-menu align-self-md-center">
				<div class="menu-area">
					<nav class="navbar navbar-expand-md navbar-light">
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
						</button>
						@if (has_nav_menu('primary_navigation'))
							{!! 
								wp_nav_menu([
								'theme_location' => 'primary_navigation', 
								'menu_class' => 'navbar-nav',
								'container_class' =>'collapse navbar-collapse',
								'container_id' => 'navbarNavAltMarkup'
								]);
							!!}
						@endif
					</nav>
				</div>
			</div>
		</div>
	</div>
</header>