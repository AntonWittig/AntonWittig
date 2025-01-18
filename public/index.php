<?php
$title = "Anton Wittig";
$current_page = "index.php";
$nav_links = [
	"Portfolio" => "portfolio.php",
	"Contact" => "contact.php",
];

ob_start(); ?>
Hallo und herzlich willkommen auf <strong>dieser</strong> Website!
<?php $content = ob_get_clean();

include "template.php";