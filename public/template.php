<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="css/style.css">
	<title><?php echo $title; ?></title>
	<!-- redirect script -->
</head>

<body>
	<header>
<?php if ($current_page !== "index.php"): ?>
		<a href="index.php">
			<h1>Anton Wittig</h1>
		</a>
<?php else: ?>
		<h1>Anton Wittig</h1>
<?php endif; ?>
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
	<main>
		<?php echo $content; ?>
	</main>
	<footer>
		&copy; 2025 My Website
	</footer>
</body>

</html>