<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package redbiz
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>

<script async>(function(w, d) { w.CollectId = "5eb3d7a15eacdb75acef8f56"; var h = d.head || d.getElementsByTagName("head")[0]; var s = d.createElement("script"); s.setAttribute("type", "text/javascript"); s.setAttribute("src", "https://collectcdn.com/launcher.js"); h.appendChild(s); })(window, document);</script>
</head>

<body <?php body_class(); ?>>

<!-- Preloader -->
<?php if (themesflat_choose_opt('enable_preload') == 1): ?>
<section id="loading-overlay">
    <div class="themesflat-loader"></div>
</section>
<?php endif; ?>

<div class="themesflat-boxed">	
	<?php 
		get_template_part( 'tpl/topbar');       
        get_template_part( 'tpl/site-header');        		
	?>
	<!-- Page Title -->
	<?php get_template_part( 'tpl/page-title'); ?>	
	<div id="themesflat-content" class="page-wrap <?php echo esc_attr( themesflat_blog_layout() ); ?>">
		<div class="container content-wrapper">
			<div class="row">