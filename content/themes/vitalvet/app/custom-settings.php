<?php

/*Remove Post and Page in Search*/

function SearchFilter($query) {
	if ($query->is_search) {
		$query->set('post_type', 'post');
	}
	return $query;
}
add_filter('pre_get_posts','SearchFilter');

/*Remove HTML Tags in Comment*/

function remove_html($comment) {
	return strip_tags($comment, '<strong><b><em><p>');
}
add_filter('get_comment_text', 'remove_html');  

/*For Main Menu*/

function wpdocs_special_nav_class( $args, $item, $depth ) {
	if ( !is_front_page() ) {
		if(strtolower($item->title) !='blog' && strtolower($item->title) !='home' ) {
			$item->url = str_replace ('/core', '', get_site_url() ) . '/' . $item->url;
		}
	}
	return $args;
}
add_filter( 'nav_menu_item_args' , __NAMESPACE__ . '\\wpdocs_special_nav_class' , 10, 3 ); 

/* for custom search layout*/

add_filter('get_search_form', function () {
  return \App\template( 'partials.searchform' );
});


add_filter('masterdev2/template/home/data', function (array $data) {
    $data['julie'] = 'gwapa';
    
 //    $content_post = get_post(9);
	// $content = $content_post->post_content;
	// $content = apply_filters('the_content', $content);
	// $content = str_replace(']]>', ']]&gt;', $content);
	// $data['banner_content'] = wpautop($content);

	print_r($data);
    return $data;
});