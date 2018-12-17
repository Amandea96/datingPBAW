<!DOCTYPE HTML>
<!--
	Twenty by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Contact - Twenty by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link href="<?php echo e(asset('css/main.css')); ?>" rel="stylesheet" />
		<link href="<?php echo e(asset('css/font-awesome.min.css')); ?>" rel="stylesheet" />
		<link href="<?php echo e(asset('css/my.css')); ?>" rel="stylesheet" />
		
		<noscript><link rel="stylesheet" href="{$conf->app_url}/css/noscript.css" /></noscript>
			
	</head>
	
	
	<body class="left-sidebar is-preload">
	
		<div id="page-wrapper">

			<!-- Header -->
				<header id="header">
					<h1 id="logo"><a href="index.html">AMdating <span>poznaj innych</span></a></h1>
					<nav id="nav">
						<ul>
							<?php echo $__env->yieldContent('navigation'); ?>
							
							{if count($conf->roles)>0}
							<li><a href="{$conf->action_root}logout" class="button primary">Wyloguj</a></li>
							{else}	
							<li><a href="{$conf->action_root}loginShow" class="button primary">Zaloguj</a></li>
							{/if}
						</ul>
					</nav>
				</header>

			<!-- Main -->
				<article id="main">

					<header class="special container">
						<?php echo $__env->yieldContent('descr'); ?>
						
					</header>

					<!-- One -->
						<section class="wrapper style4 container">

							<div class="row gtr-150">
								<div class="col-4 col-12-narrower">

									<!-- Sidebar -->
										<div class="sidebar">
											<section>
												<?php echo $__env->yieldContent('contsmall'); ?>
												
											</section>

											<section>
												<?php echo $__env->yieldContent('contsmall2'); ?>
												
											</section>
										</div>

								</div>
								<div class="col-8 col-12-narrower imp-narrower">

									<!-- Content -->
										<div class="content">
											<section>
												<?php echo $__env->yieldContent('contbig'); ?>
												
												</section>
										</div>

								</div>
							</div>
						</section>

				<?php echo $__env->yieldContent('posty'); ?>	
				
				</article>

			<!-- Footer -->
				<footer id="footer">

					<ul class="icons">
						<li><a href="#" class="icon circle fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="#" class="icon circle fa-facebook"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="icon circle fa-google-plus"><span class="label">Google+</span></a></li>
						<li><a href="#" class="icon circle fa-github"><span class="label">Github</span></a></li>
						<li><a href="#" class="icon circle fa-dribbble"><span class="label">Dribbble</span></a></li>
					</ul>

					<ul class="copyright">
						<li>&copy; Untitled</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
					</ul>

				</footer>

		</div>

		<!-- Scripts -->
			<script src="{$conf->app_url}/js/jquery.min.js"></script>
			<script src="{$conf->app_url}/js/jquery.dropotron.min.js"></script>
			<script src="{$conf->app_url}/js/jquery.scrolly.min.js"></script>
			<script src="{$conf->app_url}/js/jquery.scrollgress.min.js"></script>
			<script src="{$conf->app_url}/js/jquery.scrollex.min.js"></script>
			<script src="{$conf->app_url}/js/browser.min.js"></script>
			<script src="{$conf->app_url}/js/breakpoints.min.js"></script>
			<script src="{$conf->app_url}/js/util.js"></script>
			<script src="{$conf->app_url}/js/main.js"></script>

	</body>
</html>
	
	
	
	
	
	
	
	