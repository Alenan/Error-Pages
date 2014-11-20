<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Es funktioniert!</title>
	<meta name="description" content="Es funktioniert! Hier entsteht eine neue Webseite">
	<!--[if lt IE 9]>  
	<script src="https://html5shiv.googlecode.com/svn/trunk/html5.js"></script>  
	<![endif]-->

	<link href='https://fonts.googleapis.com/css?family=Lato:100,300' rel='stylesheet' type='text/css'>

	<style type="text/css">
		* {
			margin: 0;
			padding: 0;
			font-family: 'Lato', sans-serif;
		}

		body {
			background-color:#3498db;
			color: white;
		}

		h1 {
			font-weight: 300;
			font-size: 1000%;
			text-align: center;
			margin-top: 15%;
		}

		article p {
			font-size: 300%;
			font-weight: 300;
			text-align: center;
		}

		footer {
			width: 100%;
			height: 30px;
			bottom: 0;
			background-color: #333333;
			padding: 5px;
			position: relative;
		}

		footer h2 {
			text-align: center;
		}

		.footer a {
			color: #ffffff;
			position: absolute;
			right: 0;
			bottom: 0;
			margin-right: 5px;
			margin-bottom: 5px;
			font-weight: 100;
		}

		.footer p {
			color: #ffffff;
			position: absolute;
			left: 0;
			bottom: 0;
			margin-left: 5px;
			margin-bottom: 5px;
			font-weight: 100;
		}
	</style>

</head>
<body>
	<article>
		<h1>Es funktioniert! </h1>
		<p>Hier entsteht eine neue Webseite</p>
	</article>

	<div class="footer">
		<p>Server Software: <?php echo $_SERVER['SERVER_SOFTWARE']; ?> PHP Version: <?php print_r(phpversion());?></p>
		<a href="https://www.pioneerhost.net/de/wiki/anfang/index" alt="Warum wird mir diese Seite angezeigt?">Warum wird mir diese Seite angezeigt?</a>
	</div>
</body>
</html>