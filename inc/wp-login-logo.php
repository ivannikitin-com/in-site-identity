<?php
/**
 * Установка логотипа на странице wp-login.php
 */
add_action( 'login_head', 'insi_login_head', 100 );
function insi_login_head() {
  
    if ( has_custom_logo() ) :
  
        $image = wp_get_attachment_image_src( get_theme_mod( 'custom_logo' ), 'full' );
        ?>
        <style type="text/css">
            .login h1 a {
                background-image: url(<?php echo esc_url( $image[0] ); ?>);
                -webkit-background-size: <?php echo absint( $image[1] )?>px;
                background-size: <?php echo absint( $image[1] ) ?>px;
                height: <?php echo absint( $image[2] ) ?>px;
                width: <?php echo absint( $image[1] ) ?>px;
            }
        </style>
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                document.querySelector('#login h1 a').href='<?php echo esc_url( home_url( '/' ) )?>';
            });
        </script>        
        <?php
    endif;
}
