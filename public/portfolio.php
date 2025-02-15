<?php
$title = "Anton Wittig";
$current_page = "portfolio.php";

ob_start(); ?>
<p>Hier wird mein Portfolio zu finden sein.</p>
<p>Come back &#128284;</p>
<?php $content = ob_get_clean();

include "template.php";
// <ul>
// 	<li>
// 		<article>
// 			Bachelorthesis
// 		</article>
// 	</li>
// 	<li>
// 		<article>
// 			Voxelhap
// 		</article>
// 	</li>
// 	<li>
// 		<article>
// 			Nanometry
// 		</article>
// 	</li>
// </ul>