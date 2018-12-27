<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>AmBaDating</title>

        <!-- Fonts -->
        <!-- <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css"> -->
		<link href="{{asset('css/main.css')}}" rel="stylesheet" />
		<link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet" />
		<link href="{{asset('css/my.css')}}" rel="stylesheet" />
		
		
		
        
    </head>
   <body class="index is-preload">
		<div id="page-wrapper">

			<!-- Header -->
				<header id="header" class="alt">
					<h1 id="logo"><a href="index.html">AMdating <span>poznaj innych </span></a></h1>
					<nav id="nav">
						<ul>
							<li class="current"><a href="{{ url('/') }}">Główna</a></li>
							
							<li><a href="{{route('listPerson.show')}}">Przeglądaj</a></li>
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
									<li><a href="{$conf->action_root}myAccountEdit">Edytuj</a></li>
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

			<!-- Banner -->
				<section id="banner">

					
					<div class="inner">

						<header>
							<h2>AMdating</h2>
						</header>
						<p><strong>Portal randkowy</strong>
						<br />
						dla ludzi z aspiracjami
						<br />
						by Amandea96.</p>
						<footer>
							
						</footer>

					</div>

				</section>

			<!-- Main -->
				<article id="main">

					<header class="special container">
					<span class="icon fa-heart-o"></span>
					
						<!-- <span class="icon fa-bar-chart-o"></span>-->
						<h2><strong>Zrób krok do osiągnięcia szczęścia </strong> 
						<br />
						i zarejestruj się na AMdating</h2>
						<p>AMdating jest portalem randkowym dzięki któremu poznasz nowych ludzi.
						<br />
						Poprzez rejestrację masz możliwość utworzenia konta, które będzie stanowić 
						<br />
						dużą więdzę o tobie i o twoich zainteresowaniach. </p>
					</header>
						
						
					
					
					


					
						
					<!-- One -->
						<section class="wrapper style2 container special-alt">
							<div class="row gtr-50">
								<div class="col-8 col-12-narrower">
<div class="transbox">
									<header>
										<h2><strong>Daj poznać siebie</strong> </h2>
									</header>
									<p>Portal daje możliwość dokładnego opisu siebie poprzez rozbudowany formularz rejestracyjny oraz dodawania postów o sobie. 
									Każdy użytkownik może stworzyć galerię na swoim profilu.<footer>
										
									</footer>

								</div></div>
								<div class="col-4 col-12-narrower imp-narrower">

									<ul class="featured-icons">
										</ul>

								</div>
							</div>
						</section>
						
						
						
						
						
						

					

				</article>

			<!-- CTA -->
				<section id="cta">

					<header>
						<h2><strong>Chcesz się cieszyć z dobrodzieństw portalu?</strong></h2>
						<p>Zarejestruj się już teraz, a będziesz mógł rozmawiać z innymi użytkownikami oraz spersonalizować swój profil.</p>
						
					</header>
					<footer>
						<ul class="buttons">
			
			<li><a class="button small" href="{$conf->action_root}loginShow">Dodaj do znajomych</a></li>
			</ul>
					</footer>

				</section>

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
			<script src="js/browser.min.js"></script>
			<script src="js/breakpoints.min.js"></script>
			<script src="js/util.js"></script>
			<script src="js/main.js"></script>
		
			
			
			
			

	</body>
</html>
