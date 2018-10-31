<?php
/**
 * Fires after the main content, before the footer is output.
 *
 * @since 3.10
 */
do_action('et_after_main_content');

if ('on' == et_get_option('divi_back_to_top', 'false')): ?>

<span class="et_pb_scroll_top et-pb-icon"></span>

<?php endif;

if (!is_page_template('page-template-blank.php')): ?>

<footer id="main-footer">
  <?php get_sidebar('footer');?>

  <?php
if (has_nav_menu('footer-menu')): ?>

  <div id="et-footer-nav">
    <div class="container">
      <?php
wp_nav_menu(array(
    'theme_location' => 'footer-menu',
    'depth' => '1',
    'menu_class' => 'bottom-nav',
    'container' => '',
    'fallback_cb' => '',
));
?>
    </div>
  </div> <!-- #et-footer-nav -->

  <?php endif;?>
  <?php
$logo = ($user_logo = et_get_option('divi_logo')) && '' != $user_logo
? $user_logo
: $template_directory_uri . '/images/logo.png';
?>
  <div class="logo_footer_container">
    <a href="<?php echo esc_url(home_url('/')); ?>">
      <img src="<?php echo esc_attr($logo); ?>" alt="<?php echo esc_attr(get_bloginfo('name')); ?>" id="logo-footer" />
    </a>
  </div>

  <div id="footer-bottom">
    <div class="container clearfix">
      <?php
if (false !== et_get_option('show_footer_social_icons', true)) {
    get_template_part('includes/social_icons', 'footer');
}

echo et_get_footer_credits();
?>
    </div> <!-- .container -->
  </div>
</footer> <!-- #main-footer -->
</div> <!-- #et-main-area -->

<?php endif; // ! is_page_template( 'page-template-blank.php' ) ?>

</div> <!-- #page-container -->

<?php wp_footer();?>
</body>

</html>