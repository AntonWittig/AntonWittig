<?php
$title = "Anton Wittig";
$current_page = "index.php";

ob_start(); ?>
Hallo und herzlich willkommen auf <strong>dieser</strong> Website!
<?php $content = ob_get_clean();

include "template.php";