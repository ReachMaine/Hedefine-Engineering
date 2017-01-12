<?php
	defined('_JEXEC') or die;
	$app = JFactory::getApplication();
	$content_size = $this->params->get('content-width');
?>
<!doctype html>
<html>
	<head>

		<jdoc:include type="head" />

		<!-- Stylesheet -->
		<link href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/css/master.css" rel="stylesheet" type="text/css" />

		<!-- Javascripts -->
		<!-- dont include else conflicts with FPSS <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>  -->
		<script src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/js/modernizr.min.js" type="text/javascript"></script>
		<script src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/js/custom.js" type="text/javascript"></script>
		<script src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/js/analytics.min.js" type="text/javascript"></script>
<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
<link rel="icon" href="/favicon.ico" type="image/x-icon">
	</head>

	<body>
	<!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-TLWNXT"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-TLWNXT');</script>
<!-- End Google Tag Manager -->
		<!-- Main Content Wrapper -->
		<div id="site-wrapper">
			<!-- Header -->

			<div id="site-header-wrapper">
				<header>
					<nav id="site-header"><jdoc:include type="modules" name="site-header" /></nav>
				</header>
			</div>
			<!--left side panel -->
			<section id="left-panel-wrapper">
				<div id="left-panel">
					<jdoc:include type="modules" name="left-panel"/>
				</div>
			</section>

			<!-- center panel -->
			<section id="center-panel-wrapper">
				<div id="site-header-wrapper">
					<div>
						<div id="center-header"><jdoc:include type="modules" name="center-top" /></nav>
					</div>
				</div>
				<div id="showcase-wrapper">
					<div id="showcase">
						<a href="index.php">
							<img id="logo-overlay" src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/images/logoHED2.png" alt="Hedefine Engineering" />
						</a>
						<jdoc:include type="modules" name="showcase" />
					</div>
				</div>
				<div id="main-top-wrapper">
					<div id="main-top">
						<jdoc:include type="modules" name="main-top" />
					</div>
				</div>

				<!-- Main Content -->
				<div id="content-area-wrapper">
					<div id="content-top-wrapper">
						<div id="content-top">
							<jdoc:include type="modules" name="content-top" />
						</div>
					</div>
					<div id="left-sidebar-wrapper">
						<div id="left-sidebar">
							<jdoc:include type="modules" name="left-sidebar" />
						</div>
					</div>

					<div id="main-content-wrapper" <?php if ($this->countModules('right-sidebar')) { ?> style="width:<?php echo $content_size ?>px" <?php  } else { ?> style="width:100%"  <?php } ?> >
						<article id="main-content">
							<jdoc:include type="component" />
						</article>
					</div>
					<div id="right-sidebar-wrapper">
						<div id="right-sidebar">
							<jdoc:include type="modules" name="right-sidebar" />
						</div>
					</div>
					<div id="content-bottom-wrapper">
						<div id="content-bottom">
							<jdoc:include type="modules" name="content-bottom" />
						</div>
					</div>

				</div>
				<!-- end of content-area wrapper -->
				<div id="center-bottom-wrapper">
					<div id="center-bottom">
						<jdoc:include type="modules" name="center-bottom" />
					</div>
				</div>
			</section>
			<!-- end of center panel -->

			<!-- right panel -->
			<section id="right-panel-wrapper">
				<div id="right-panel">
					<jdoc:include type="modules" name="right-panel"/>
				</div>
			</section>

			<footer>
				<div id="footer-wrapper">
					<jdoc:include type="modules" name="footer" />
				</div>
				<div id="copyright-wrapper">
					<div id="copyright">
						Copyright &copy;
						<?php echo date('Y');
							echo '&nbsp;'; ?>
						<a href="<?php echo $this->baseurl; ?>">
							<?php echo $app->getCfg('sitename'); ?>
						</a>.&nbsp;
						 All Rights Reserved.
					</div>
					<?php /* zig x-out <div id="ea-logo">
						<a href="http://eaonline.info" target="_blank" class="brand"><img src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/images/ea-white.png" alt="Ellsworth American Logo" /></a>
					</div>	*/ ?>
				</div>
			</footer>
		</div>
	</body>
</html>
