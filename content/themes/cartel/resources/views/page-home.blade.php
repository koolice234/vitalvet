@extends('layouts.app')

@section('content')
	@while(have_posts()) @php(the_post())
	<section id="banner">
		<div class="container">
			<div class="wrapper">
				<div class="row">
					<div class="col-md-5 align-self-md-center">
						<div class="text-cont text-center" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600">
							{!! get_post(9)->post_content !!}
							<a href="#contact" target="_blank"
							   class="btn-style buy-book">Contact Us</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section><!-- /#banner -->

	<section id="services">
		<div class="container">
			<div class="wrapper">
				<div class="title">
					<h2 data-aos="fade-up" data-aos-duration="1000">{{ get_the_title(11) }}</h2>
					<div class="subtitle">
						{!! wpautop(get_post(11)->post_content) !!}
					</div>
				</div>
				
				<div class="service-cont">
					<div class="row">
						@foreach(get_post_meta(11, 'services_content', true) as $content)
							<div class="col-md-3">
								<div class="service-img">
									{!! wp_get_attachment_image($content['service-image'], 'full') !!}
								</div>
								<div class="service-title">
									<h3>{{ $content['service-title'] }}</h3>
								</div>
								<div class="service-desc">
									<p>
										{{ $content['service-description'] }}
									</p>
								</div>
							</div>
						@endforeach
					</div>
				</div>
			</div>
		</div>
	</section>
	<section id="team">
		<div class="container">
			<div class="wrapper">
				<div class="title">
					<h2 data-aos="fade-up" data-aos-duration="1000">{{ get_the_title(13) }}</h2>
					<div class="subtitle">
						{!! wpautop(get_post(13)->post_content) !!}
					</div>
				</div>
			</div>
			<div class="team-cont">
				<div class="row">
					@foreach(get_post_meta(13, 'team_content', true) as $content)
						<div class="col-md-4">
							<div class="team-img">
								{!! wp_get_attachment_image($content['team-image'], 'full') !!}
							</div>
							<div class="team-name">
								<h3>{{ $content['team-name'] }}</h3>
							</div>
							<div class="team-desc">
								<p>
									{{ $content['team-description'] }}
								</p>
							</div>
						</div>
					@endforeach
				</div>
			</div>
		</div>
	</section>
	<section id="portfolio">
		<div class="container">
			<div class="wrapper">
				<div class="title">
					<h2 data-aos="fade-up" data-aos-duration="1000">{{ get_the_title(15) }}</h2>
					<div class="subtitle">
						{!! wpautop(get_post(15)->post_content) !!}
					</div>
				</div>
				<div class="row">
				</div>
			</div>
		</div>
	</section>

	<section id="contact">
		<div class="container">
			<div class="wrapper">
				<div class="title">
					<h2 data-aos="fade-up" data-aos-duration="1000">{{ get_the_title(19) }}</h2>
					<div class="subtitle">
						{!! wpautop(get_post(19)->post_content) !!}
					</div>
				</div>
				<div class="row">
					<div class="col-md-5">
						<div class="text-social-cont" data-aos="fade-up" data-aos-duration="1000">
							<h2>{{ get_the_title(19) }}</h2>

							{!! wpautop(get_post(19)->post_content) !!}
							{!! wp_nav_menu(['menu' => 'Footer Social Menu', 'menu_class' => 'footer-social']) !!}
						</div>
					</div>
					<div class="col-md-7">
						<div class="form-cont" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600">
							{!! do_shortcode('[contact-form-7 id="4" title="Contact form"]') !!}
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	@endwhile
@endsection
