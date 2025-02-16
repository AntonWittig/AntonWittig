<?php
$title = "Anton Wittig";
$current_page = "contact.php";

ob_start(); ?>
<form method="POST" action="http://212.132.110.174:8273">
			<input type="email" name="email" />
			<input type="text" name="subject" />
			<input type="text" name="message" />
			<input type="submit">
		</form>
<?php $content = ob_get_clean();

include "template.php";