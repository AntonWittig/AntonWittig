<?php
$title = "Anton Wittig";
$current_page = "contact.php";

ob_start(); ?>
Here a form for sending a contact request will appear.
<?php $content = ob_get_clean();

include "template.php";