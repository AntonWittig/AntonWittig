<?php
$title = "Anton Wittig";
$current_page = "index.php";

ob_start(); ?>
<p>
	<strong>Willkommen</strong><br />
	Mein Name ist Anton Wittig, ich bin leidenschaftlicher Softwareentwickler.
</p>
<p>
	Auf dieser Website biete ich einen Einblick in meinen beruflichen Werdegang, meine bisherigen Projekte, meine
	persönlichen Interessen, und die Möglichkeit mit mir in Kontakt zu treten.
</p>
<p>
	Ich freue mich über Ihr Interesse!
</p>
<?php $content = ob_get_clean();

include "template.php";