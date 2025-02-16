<?php
$title = "Anton Wittig";
$current_page = "contact.php";

ob_start(); ?>
<h1>Contact form</h1>
		<form method="POST" action="http://212.132.110.174:8273">
			<p>Required fields are followed by <span aria-label="required">*</span>.</p>

			<section class="two-columns">
				<label for="email">
					Email: <span aria-label="required">*</span>
					<input required type="email" id="email" name="email" pattern="[^@\s]+@[^@\s]+\.[^@\s]+" placeholder="name@example.org"/>
				</label>
				
				<label for="subject">
					Subject: <span aria-label="required">*</span>
					<input required type="text" id="subject" name="subject" minlength="10" maxlength="50" placeholder="The subject of your message"/>
				</label>
			</section>
			
			<label for="message">
				Message: <span aria-label="required">*</span>
				<textarea required type="text" id="message" name="message" minlength="150" maxlength="1500" rows="5" placeholder="Enter your message to here."></textarea>
			</label>

			<input type="submit">
		</form>
<?php $content = ob_get_clean();

include "template.php";