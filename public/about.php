<?php
$title = "Anton Wittig";
$current_page = "about.php";

ob_start(); ?>
<h1>Anton Wittig</h1>
<p>
	Kurze Vorstellung
</p>
<dl>
	<dt>Geburtstag</dt>
	<dd>7. Mai 2001</dd>
	<dt>Wohnort</dt>
	<dd>Leipzig</dd>
</dl>
<h2>Beruflicher Werdegang</h2>
<ul>
	<li>
		dainox
	</li>
	<li>
		Uni des Saarlandes
	</li>
	<li>
		Harikoah
	</li>
	<li>
		DFKI
	</li>
	<li>
		KPMG
	</li>
</ul>
<h2>Akademischer Werdegang</h2>
<ul>
	<li>
		Bsc. Medieninformatik Uni des Saarlandes
	</li>
	<li>
		Elisabeth von Thadden Gymnasium 
	</li>
</ul>
<?php $content = ob_get_clean();

include "template.php";