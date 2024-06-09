<?php

if(count($errors) > 0): ?>
	<div class="error-display">
		<?php foreach ($errors as $error): ?>
			<p><?php echo $error; ?></p>
<?php endforeach ?>
	</div>
<?php endif ?>


<?php

if(count($exceptions) > 0): ?>
	<div class="exception-display">
		<?php foreach ($exceptions as $exception): ?>
			<p><?php echo $exception; ?></p>
<?php endforeach ?>
	</div>
<?php endif ?>