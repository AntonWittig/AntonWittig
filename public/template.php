<?php
$nav_links = [
	"Home" => "index.php",
	"About" => "about.php",
	"Portfolio" => "portfolio.php",
	"Contact" => "contact.php",
];?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="css/style.css">
	<title><?php echo $title; ?></title>
	<!-- redirect script -->
	<script defer src="./js/headerPadding.js"></script>
</head>

<body>
	<header id="header">
		<nav>
			<ul>
<?php foreach ($nav_links as $link_name => $link_url):
	if ($current_page !== $link_url): ?>
				<li><a href="<?php echo $link_url; ?>"><?php echo $link_name; ?></a></li>
<?php else: ?>
				<li><?php echo $link_name; ?></li>
<?php endif;
endforeach; ?>
			</ul>
		</nav>
	</header>
	<aside id="left-column">

	</aside>
	<main>
		<?php echo $content; ?>
	</main>
	<aside id="right-column">
		
	</aside>
	<footer>
		&copy; 2025 My Website
	</footer>
</body>

</html>