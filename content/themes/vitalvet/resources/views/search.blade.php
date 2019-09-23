@extends('layouts.app')

    @section('content')
        <section class="search-result blog-content">
            <div class="container">
                <div class="bg-holder">
                    <div class="content-holder">
                        <h1 class="text-center h2-head">Search</h1>
                        <div class="row">
                            <div class="col-lg-8 col-md-12" data-aos="fade-up-right" data-aos-delay="500" data-aos-duration="1500">
                                @if (!have_posts())
                                    <div class="alert alert-warning">
                                      {{  __('Sorry, no results were found.', 'sage') }}
                                    </div>
                                @endif

                                @while(have_posts()) @php(the_post())
                                    @include('partials.content-search')
                                @endwhile
                                <div class="clearfix">
                                <?php $args = array(
                                    'prev_text'          => 'Previous Page',
                                    'next_text'          => 'Next Page',
                                    'screen_reader_text' => 'Post navigation'
                                   );
                                   the_posts_navigation($args); ?>

                                </div>
                            </div>
                            <div class="col-lg-4 col-md-12" data-aos="fade-up-left" data-aos-delay="500" data-aos-duration="1500">
                                @include('blogsidebar')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endsection


