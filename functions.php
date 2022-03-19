register_nav_menus( array(
    'menu-1' => __( 'Primary Menu', 'my-custom-theme' ),
);

function my_custom_theme_sidebar() {
    register_sidebar( array(
        'name' => __( 'Primary Sidebar', 'my-custom-theme' ),
        'id'   => 'sidebar-1',
    ) );
}
add_action( 'widgets_init', 'my_custom_theme_sidebar' );
