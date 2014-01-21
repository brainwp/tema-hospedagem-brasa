<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>

	</div><!-- #main -->
</div><!-- #page -->

<div id="separador"></div>

<footer id="colophon" role="contentinfo">

	<div id="content-rodape">
    	<hr />
		<div id="dados-footer">
			<div id="descricao-footer"><?php bloginfo( 'name'); ?> - <?php echo date('Y'); ?></div>	   
			<div id="licenca-footer"><a href="<?php echo stripslashes (get_option('mo_termos_url')); ?>" target="_self">Termos de Uso</a> | <a href="<?php echo stripslashes (get_option('mo_privacy_url')); ?>" target="_self">Pol&iacute;tica de Privacidade</a></div>
		</div>
		<div id="essencial">
			<div id="logo-wordpress"><a href="http://brasa.art.br/sobre-wordpress/" target="_self" class="a-logo-wordpress"></a></div>
			<div id="frase-footer"><?php echo stripslashes (get_option('mo_frase')); ?></div>
		</div>
	</div><!-- #content-footer -->

</footer><!-- #colophon -->
	
	<?php wp_footer(); ?>
</body>
</html>
