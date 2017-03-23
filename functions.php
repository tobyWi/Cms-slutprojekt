<?php 

require 'includes/cpt.php';

# Theme support


function theme_scripts(){
		
	wp_enqueue_style( 'flexslider' , get_template_directory_uri().'/assets/css/flexslider.css' );
	wp_enqueue_script('flexslider', get_template_directory_uri().'/assets/js/flexslider-min.js' , array('jquery'), false, true);
	wp_enqueue_script('scripts', get_template_directory_uri().'/assets/js/script.js' , array('jquery'), false, true);
	wp_enqueue_style( 'fontawesome' , get_template_directory_uri().'/assets/css/font-awesome.css' );
	wp_enqueue_style( 'bootstrap' , get_template_directory_uri().'/assets/css/bootstrap.css' );
	wp_enqueue_style( 'style' , get_template_directory_uri().'/assets/css/style.css' );

	}
	
	add_action('wp_enqueue_scripts', 'theme_scripts');


function register_my_menu() {
  register_nav_menu( "huvudmeny", "Huvudmeny" );
  register_nav_menu( "termmeny", "Termmeny" );
}
add_action( 'after_setup_theme' , 'register_my_menu' );



add_theme_support( 'post-thumbnails' );



function register_my_sidebar() {
    register_sidebar( array(
        'name' => __( 'Main Sidebar'),
        'id' => 'sidebar-1',
        'description' => '',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
    	) 
    );
}
add_action( 'widgets_init', 'register_my_sidebar' );



if( function_exists('acf_add_options_page') ) {	
	acf_add_options_page();
}


function change_post_menu_label() {
    global $menu;
    global $submenu;
    $menu[5][0] = 'News';
    $submenu['edit.php'][5][0] = 'News';
    $submenu['edit.php'][10][0] = 'Add News';
    echo '';
}
function change_post_object_label() {
        global $wp_post_types;
        $labels = &$wp_post_types['post']->labels;
        $labels->name = 'News';
        $labels->singular_name = 'News';
        $labels->add_new = 'Add News';
        $labels->add_new_item = 'Add News';
        $labels->edit_item = 'Edit News';
        $labels->new_item = 'News';
        $labels->view_item = 'View News';
        $labels->search_items = 'Search News';
        $labels->not_found = 'No News found';
        $labels->not_found_in_trash = 'No News found in Trash';
}
add_action( 'init', 'change_post_object_label' );
add_action( 'admin_menu', 'change_post_menu_label' );




# Custom functions 

function custom_background_image() {

    echo "body { background-image: url('";

    if (is_front_page()) {
        the_field('background_frontpage', 'options');
    } elseif (is_page("menu") || is_tax()) {
        the_field('background_menu', 'options');
    } elseif (is_home() || is_archive() || is_single() ) {
        the_field('background_news', 'options');
    } elseif (is_page('about-us')) {
        the_field('background_about', 'options');
    } elseif (is_page('contact')) {
        the_field('background_contact', 'options');
    } elseif (is_404()) {
        the_field('background_404', 'options');
    } else {
        the_field('background_fallback', 'options');
    }

    echo "');}";
}


function remove_time_from_posts($date){
    $temp = DateTime::createFromFormat("Y-m-d H:i:s", $date);
    return $temp->format("F d, Y");
}


function get_recent_posts($amount) {

    $lastposts = get_posts( array(
        'posts_per_page' => $amount
        ));

    if ( $lastposts ) {
        foreach ( $lastposts as $post ) :

             ?>
            <div class="col-xs-12 col-sm-6 col-md-4 box">
                <h4><a href="<?php echo get_permalink($post); ?>"><?php echo $post->post_title ?></h4>
                <p><i class="fa fa-calendar"></i> <?php echo remove_time_from_posts($post->post_date) ?></p>
                <?php echo get_the_post_thumbnail($post, 'thumbnail'); ?>
                </a>
            </div>
            <?php
        endforeach;    
    }
}


function opening_hours(){
    $day = date('D');
    $opening = array(
        'Mon' => get_field('open_mon_thu' , 'options'),
        'Tue' => get_field('open_mon_thu' , 'options'),
        'Wed' => get_field('open_mon_thu' , 'options'),
        'Thu' => get_field('open_mon_thu' , 'options'),
        'Fri' => get_field('open_fri' , 'options'),
        'Sat' => get_field('open_sat' , 'options'),
        'Sun' => get_field('open_sun' , 'options')
        );
    echo 'Todays opening hours: ' . $opening[$day];
}

function updated_copyright_information($start_year, $name){
    $message = 'Copyright &copy ' . $start_year;
    $todays_year = date('Y');
    if ($start_year != $todays_year) {
        $message .= ' - ' . $todays_year;
    }
    $message .= ' ' . $name;
    echo $message;
}

function archive_title(){
    if (is_author()) {      
       echo 'Author | <i class="fa fa-user"></i> ' . get_the_author();
    }
    elseif (is_category()) { 
       echo 'Category | <i class="fa fa-folder-open"></i> '; 
       single_cat_title();
    }
    elseif (is_date()) {
       echo 'Archive | <i class="fa fa-calendar"></i> '; 
       single_month_title(); 
    }

    else { 
       echo 'Archive';
    }

}
             
       

