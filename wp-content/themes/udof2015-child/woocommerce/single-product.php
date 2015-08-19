<?php
/**
 * The Template for displaying all single products.
 *
 * Override this template by copying it to yourtheme/woocommerce/single-product.php
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

get_header( 'shop' ); ?>

	<?php
		/**
		 * woocommerce_before_main_content hook
		 *
		 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
		 * @hooked woocommerce_breadcrumb - 20
		 */
		do_action( 'woocommerce_before_main_content' );
	?>

		<?php while ( have_posts() ) : the_post(); ?>

			<?php wc_get_template_part( 'content', 'single-product' ); ?>
			       
		<?php endwhile; // end of the loop. ?>
 <div class="sidebar-loja">
                                    <!-- CUSTOM FIELDS BY - GUILHERME WP & JAVALI DIGITAL -->
                    <!-- CAMPO - INICIO -->
                                        <?php $inicio = get_post_custom_values( 'inicio' ); ?>
                                    <?php if( !empty($inicio) ) : ?>
                                <div class="course_details">
                                    <ul>
                                        <li class="course_details-custom">Início: <?php echo $inicio[0]; ?><i class="fa fa-calendar"></i></li>
                                    </ul>
                                </div><!-- end INICIO -->
                                    <?php endif; ?>
                                    <!-- CAMPO - DURACAO -->
                                        <?php $duracao = get_post_custom_values( 'duracao' ); ?>
                                    <?php if( !empty($duracao) ) : ?>
                                <div class="course_details">
                                    <ul>
                                        <li class="course_details-custom">Duração: <?php echo $duracao[0]; ?><i class="fa fa-tachometer"></i></li>
                                    </ul>
                                </div><!-- end DURACAO -->
                                    <?php endif; ?>
                                        <!-- CAMPO - CARGA-HORARIA -->
                                        <?php $carga_horaria = get_post_custom_values( 'carga_horaria' ); ?>
                                    <?php if( !empty($carga_horaria) ) : ?>
                                <div class="course_details">
                                    <ul>
                                        <li class="course_details-custom">Carga Horária: <?php echo $carga_horaria[0]; ?><i class="fa fa-clock-o"></i></li>
                                    </ul>
                                </div><!-- end CARGA HORARIA -->
                                    <?php endif; ?>
                                        <!-- CAMPO - FORMATO -->
                                        <?php $formato = get_post_custom_values( 'formato' ); ?>
                                    <?php if( !empty($formato) ) : ?>
                                <div class="course_details">
                                    <ul>
                                        <li class="course_details-custom">Formato: <?php echo $formato[0]; ?><i class="fa fa-wifi"></i></li>
                                    </ul>
                                </div><!-- end FORMATO-->
                                    <?php endif; ?>
                                    <div class="valor-reais">
                <span class="valor-reais-date">FORMAS DE PAGAMENTO:</span>
                <ul class="valor-reais-list">
                    <li>»  Boleto bancário (à vista com 5% de desconto ou em até 3 vezes)</li>
                    <li>»  Cartão de crédito (à vista ou em até 6 vezes)</li>
                </ul>
                <ul class="webdoor-box-summary-payment-icons">
                    <li><img src="http://ead.universidadedofutebol.com.br/wp-content/themes/curso-uf-theme/images/icon-summary-payment-boleto.png" alt="Boleto Bancário"></li>
                    <li><img src="http://ead.universidadedofutebol.com.br/wp-content/themes/curso-uf-theme/images/icon-summary-payment-visa.png" alt="Cartão de Crédito - Visa"></li>
                    <li><img src="http://ead.universidadedofutebol.com.br/wp-content/themes/curso-uf-theme/images/icon-summary-payment-master.png" alt="Cartão de Crédito - MasterCard"></li>
                    <li><img src="http://ead.universidadedofutebol.com.br/wp-content/themes/curso-uf-theme/images/icon-summary-payment-paypal.png" alt="PayPal"></li>                                   
                </ul>       
            </div>
                        <!-- F I M *** CUSTOM FIELDS BY - GUILHERME WP & JAVALI DIGITAL *** -->
                        <?php dynamic_sidebar( 'loja_right_1' ); ?>
                    <?php do_action('woocommerce_sidebar'); ?>
                    <?php
                        do_action('woocommerce_after_main_content');
                    ?>
                </div>
	<?php
		/**
		 * woocommerce_after_main_content hook
		 *
		 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
		 */
		do_action( 'woocommerce_after_main_content' );
	?>

	<?php
		/**
		 * woocommerce_sidebar hook
		 *
		 * @hooked woocommerce_get_sidebar - 10
		 */
		do_action( 'woocommerce_sidebar' );
	?>

<?php get_footer( 'shop' ); ?>
