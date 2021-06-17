        <!-- Call footer function hook  -->
        <?php do_action('honeypress_dark_footer_section_hook'); ?>
        </div>
        <?php
        if(get_theme_mod('scrolltotop_setting_enable',true) == true) : ?>
            <div class="scroll-up custom right"><a href="#totop"><i class="fa fa-arrow-up"></i></a></div>
        <?php endif;
        wp_footer();?>
    </body>
</html>
