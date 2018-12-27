<!DOCTYPE HTML>
<!--
	Twenty by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>@yield('title')</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link href="{{asset('css/main.css')}}" rel="stylesheet" />
		<link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet" />
		<link href="{{asset('css/my.css')}}" rel="stylesheet" />
		
		<noscript><link rel="stylesheet" href="{$conf->app_url}/css/noscript.css" /></noscript>
			
	</head>
	
	
	<body class="left-sidebar is-preload">
	
		<div id="page-wrapper">

			<!-- Header -->
				<header id="header">
					<h1 id="logo"><a href="index.html">AMdating <span>poznaj innych</span></a></h1>
					<nav id="nav">
						<ul>
							@yield('navigation')
							@guest
							
							@if (session('status'))
                        
                   
					@else
                            <li class="nav-item">
                                <a class="button primary" href="{{ route('login') }}">{{ __('Zaloguj') }}</a>
                            </li>
							
							 @endif
                            <li class="nav-item">
                                @if (Route::has('register'))
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                @endif
                            </li>
                        @else
							
						<li class="submenu ">
								<a href="#">{{ Auth::user()->name }}</a>
								<ul>
								<li><a href="{$conf->action_root}myaccountShow">Profil</a></li>
									<li><a href="{{ route('personEdit') }}">Edytuj</a></li>
									<li><a href="{$conf->action_root}friendList">Znajomi</a></li>
									<li><a href="{$conf->action_root}feaShow">Cechy</a></li>
									<li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"> {{ __('Logout') }}</a></li>
								
									
									</ul>
							</li>
                            

                             

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
							</li>
							<!--{if count($conf->roles)>0}
							<li><a href="{$conf->action_root}logout" class="button primary">Wyloguj</a></li>
							{else}	
							<li><a href="{$conf->action_root}loginShow" class="button primary">Zaloguj</a></li>
							{/if}-->
						</ul>
					</nav>
				</header>

			<!-- Main -->
				<article id="main">

					<header class="special container">
						@yield('descr')
						
					</header>

					<!-- One -->
						<section class="wrapper style4 container">

							<div class="row gtr-150">
								<div class="col-4 col-12-narrower">

									<!-- Sidebar -->
										<div class="sidebar">
											<section>
												@yield('contsmall')
												
											</section>

											<section>
												@yield('contsmall2')
												
											</section>
										</div>

								</div>
								<div class="col-8 col-12-narrower imp-narrower">

									<!-- Content -->
										<div class="content">
											<section>
												@yield('contbig')
												
												</section>
										</div>

								</div>
							</div>
						</section>

				@yield('posty')	
				
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
			<script src="js/jquery.min.js"></script>
			<script src="js/jquery.dropotron.min.js"></script>
			<script src="js/jquery.scrolly.min.js"></script>
			<script src="js/jquery.scrollex.min.js"></script>
			<script src="js/js/jquery.scrollgress.min.js"></script>
			<script src="js/browser.min.js"></script>
			<script src="js/breakpoints.min.js"></script>
			<script src="js/util.js"></script>
			<script src="js/main.js"></script>

	</body>
</html>
	
	
	
	
	
	
	
	