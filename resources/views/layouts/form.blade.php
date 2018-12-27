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
		<link href="{{asset('css/main.css')}}" rel="stylesheet" />
		<link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet" />
		<link href="{{asset('css/my.css')}}" rel="stylesheet" />
	
			
	</head>
	
	<style>table.prof {
	width: 200px;
	border-collapse: collapse;
	overflow: hidden;
	
	box-shadow: 0 0 20px rgba(10,0,10,0.1);
}

th.prof,
td.prof {
	text-align: center;
	padding: 7px;
	background-color: rgba(255,255,255,0.2);
	color: #fff;
}

th.prof {
	text-align: center;
	font-family: "Monotype Corsiva", sans-serif;
	
	letter-spacing: 0.1em;
	font-size: 1.2em;
}


 th.prof {
		background-color: #55608f;
		font-family: Monotype Corsiva;
	font-weight: bold;
	}


	td.prof {
		 position: relative;
		font-family: sans-serif;
	font-weight: 100;
		color: black;
		
	}
	form {
		margin: 0 0 2em 0;
	}

	label {
		display: block;
		font-size: 0.9em;
		font-weight: 700;
		margin: 0 0 1em 0;
	}

	input[type="text"],
	input[type="password"],
	input[type="email"],
	select,
	textarea {
		-moz-appearance: none;
		-webkit-appearance: none;
		-ms-appearance: none;
		appearance: none;
		border-radius: 0;
		border: none;
		border: solid 1px;
		color: inherit;
		display: block;
		outline: 0;
		padding: 0 1em;
		text-decoration: none;
		width: 100%;
	}

		input[type="text"]:invalid,
		input[type="password"]:invalid,
		input[type="email"]:invalid,
		select:invalid,
		textarea:invalid {
			box-shadow: none;
		}

	.select-wrapper {
		text-decoration: none;
		display: block;
		position: relative;
	}

		.select-wrapper:before {
			-moz-osx-font-smoothing: grayscale;
			-webkit-font-smoothing: antialiased;
			font-family: FontAwesome;
			font-style: normal;
			font-weight: normal;
			text-transform: none !important;
		}

		.select-wrapper:before {
			content: '\f078';
			display: block;
			height: 2.75em;
			line-height: 2.75em;
			pointer-events: none;
			position: absolute;
			right: 0;
			text-align: center;
			top: 0;
			width: 2.75em;
		}

		.select-wrapper select::-ms-expand {
			display: none;
		}

	input[type="text"],
	input[type="password"],
	input[type="email"],
	select {
		height: 2.75em;
	}

	textarea {
		padding: 0.75em 1em;
	}

	input[type="checkbox"],
	input[type="radio"] {
		-moz-appearance: none;
		-webkit-appearance: none;
		-ms-appearance: none;
		appearance: none;
		display: block;
		float: left;
		margin-right: -2em;
		opacity: 0;
		width: 1em;
		z-index: -1;
	}

		input[type="checkbox"] + label,
		input[type="radio"] + label {
			text-decoration: none;
			cursor: pointer;
			display: inline-block;
			font-size: 1em;
			font-weight: 300;
			padding-left: 2.4em;
			padding-right: 0.75em;
			position: relative;
		}

			input[type="checkbox"] + label:before,
			input[type="radio"] + label:before {
				-moz-osx-font-smoothing: grayscale;
				-webkit-font-smoothing: antialiased;
				font-family: FontAwesome;
				font-style: normal;
				font-weight: normal;
				text-transform: none !important;
			}

			input[type="checkbox"] + label:before,
			input[type="radio"] + label:before {
				border-radius: 0;
				border: solid 1px;
				content: '';
				display: inline-block;
				height: 1.65em;
				left: 0;
				line-height: 1.58125em;
				position: absolute;
				text-align: center;
				top: 0;
				width: 1.65em;
			}

		input[type="checkbox"]:checked + label:before,
		input[type="radio"]:checked + label:before {
			content: '\f00c';
		}

	input[type="checkbox"] + label:before {
		border-radius: 0;
	}

	input[type="radio"] + label:before {
		border-radius: 100%;
	}

	::-webkit-input-placeholder {
		opacity: 1.0;
	}

	:-moz-placeholder {
		opacity: 1.0;
	}

	::-moz-placeholder {
		opacity: 1.0;
	}

	:-ms-input-placeholder {
		opacity: 1.0;
	}

	.formerize-placeholder {
		opacity: 1.0;
	}

	label {
		color: #555;
	}

	input[type="text"],
	input[type="password"],
	input[type="email"],
	select,
	textarea {
		background: rgba(144, 144, 144, 0.075);
		border-color: rgba(144, 144, 144, 0.25);
	}

		input[type="text"]:focus,
		input[type="password"]:focus,
		input[type="email"]:focus,
		select:focus,
		textarea:focus {
			border-color: #fff;
			box-shadow: 0 0 0 1px #fff;
		}

	.select-wrapper:before {
		color: rgba(144, 144, 144, 0.25);
	}

	input[type="checkbox"] + label,
	input[type="radio"] + label {
		color: #444;
	}

		input[type="checkbox"] + label:before,
		input[type="radio"] + label:before {
			background: rgba(144, 144, 144, 0.075);
			border-color: rgba(144, 144, 144, 0.25);
		}

	input[type="checkbox"]:checked + label:before,
	input[type="radio"]:checked + label:before {
		background-color: #fff;
		border-color: #fff;
		color: #1abc9c;
	}

	input[type="checkbox"]:focus + label:before,
	input[type="radio"]:focus + label:before {
		border-color: #fff;
		box-shadow: 0 0 0 1px #fff;
	}

	::-webkit-input-placeholder {
		color: #bbb !important;
	}

	:-moz-placeholder {
		color: #bbb !important;
	}

	::-moz-placeholder {
		color: #bbb !important;
	}

	:-ms-input-placeholder {
		color: #bbb !important;
	}

	.formerize-placeholder {
		color: #bbb !important;
	}
	

	
	
	
	
	</style>
	<body class="contact is-preload">
		<div id="page-wrapper">
			<!-- Header -->
				<header id="header">
					<h1 id="logo"><a href="index.html">AMdating <span>poznaj innych</a></h1>
					<nav id="nav">
						<ul>
							@yield('navigation')
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
						
						@yield('descr')
					</header>
	
					<!-- One -->
						<section class="wrapper style4 special container medium">

							<!-- Content -->
								<div class="content">
								@yield('content')

								
								</ul>
							</div>
							

							
							
				
								</div>

						</section>

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

