<?php
/* The template for displaying the footer.
 * Contains the closing of the body div and all contents
 *
 * 
 * @package    Auxin
 * @author     averta (c) 2014-2025
 * @link       http://averta.net
 */

do_action( 'auxin_before_the_footer' ); ?>

</div><!--! end of #inner-body -->

<?php do_action( "auxin_before_body_close", $post ); ?>

<!-- outputs by wp_footer -->
<?php wp_footer(); ?>
<!-- end wp_footer -->
<!-- jQuery Mask Plugin CDN -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>

<script>
jQuery(document).ready(function($) {
    // Terapkan input mask ke field dengan class "phone-mask"
    $('.phone-mask input').mask('+62 000 0000 0000', {
        placeholder: "+62 ___ ____ ____"
    });
});
</script>

</body>
</html>
