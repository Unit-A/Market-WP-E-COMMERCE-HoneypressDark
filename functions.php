<?php
// Global variables define
define('HONEYPRESS_DARK_PARENT_TEMPLATE_DIR_URI', get_template_directory_uri());
define('HONEYPRESS_DARK_TEMPLATE_DIR_URI', get_stylesheet_directory_uri());
define('HONEYPRESS_DARK_CHILD_TEMPLATE_DIR', trailingslashit(get_stylesheet_directory()));

if (!function_exists('wp_body_open')) {
    function wp_body_open() {
        /**
         * Triggered after the opening <body> tag.
         */
        do_action('wp_body_open');
    }
}
add_action('after_setup_theme', 'honeypress_dark_setup');

function honeypress_dark_setup() {
    load_theme_textdomain('honeypress-dark', HONEYPRESS_DARK_CHILD_TEMPLATE_DIR . '/languages');
}

add_action('wp_enqueue_scripts', 'honeypress_dark_enqueue_styles');

function honeypress_dark_enqueue_styles() {
    wp_enqueue_style('honeypress-dark-parent-style', HONEYPRESS_DARK_PARENT_TEMPLATE_DIR_URI . '/style.css', array('bootstrap'));
    wp_style_add_data('honeypress-dark-parent-style', 'rtl', 'replace' );
    wp_style_add_data('honeypress-dark-style', 'rtl', 'replace' );
    if (get_theme_mod('custom_color_enable') == true) {
        honeypress_custom_light();
    }
    else {
        wp_enqueue_style('honeypress-dark-default-style', HONEYPRESS_DARK_TEMPLATE_DIR_URI . '/assets/css/default.css');
    }
}

if (is_admin()) {
    require get_stylesheet_directory() . '/admin/admin-init.php';
}

function honeypress_dark_footer_section_hook() {
    ?>
    <footer class="site-footer">
        <div class="container">
            <?php if (is_active_sidebar('footer-sidebar-1') || is_active_sidebar('footer-sidebar-2') || is_active_sidebar('footer-sidebar-3')): ?>
                <div class="seprator-line"></div>
                <?php
                get_template_part('sidebar', 'footer');
            endif;
            ?>
        </div>
        <div class="site-info text-center">
            <p><?php esc_html_e( 'Proudly powered by', 'honeypress-dark' ); ?> <a href="<?php echo esc_url( __( 'https://wordpress.org', 'honeypress-dark' ) ); ?>"><?php esc_html_e( 'WordPress', 'honeypress-dark' ); ?> </a> <?php esc_html_e( '| Theme:', 'honeypress-dark' ); ?> <a href="<?php echo esc_url( __( 'https://spicethemes.com', 'honeypress-dark' ) ); ?>" rel="nofollow"> <?php esc_html_e( 'Honeypress Dark', 'honeypress-dark' ); ?></a> <?php esc_html_e( 'by SpiceThemes', 'honeypress-dark' );?></p>
        </div>
    </footer>
    <?php
}
add_action('honeypress_dark_footer_section_hook', 'honeypress_dark_footer_section_hook');
