@extends('layouts.app')

@section('content')
  



  

  

    <section class="blog-content">
        <div class="container">
            <div class="bg-holder">
                <div class="content-holder">
                    <h1 class="text-center h2-head">Blog</h1>
                    <div class="row">
                        <div class="col-lg-8 col-md-12" data-aos="fade-up-right" data-aos-duration="1500" data-aos-delay="500">
                            @if (!have_posts())
                            <div class="alert alert-warning">
                              {{ __('Sorry, no results were found.', 'sage') }}
                            </div>
                            @endif
                            

                            @while (have_posts()) @php(the_post())
                                @include('partials.content-'.get_post_type())
                            @endwhile
                            
                            <div class="blog-pagination clearfix">
                                {!! get_the_posts_navigation() !!}
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12" data-aos="fade-up-left" data-aos-duration="1500" data-aos-delay="500">
                           @include('blogsidebar')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
