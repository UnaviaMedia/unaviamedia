<?php
$PAGE_TITLE = "Blog | Error";
require_once(FRAGMENT_HEADER);
?>

<section class="content__header--offset">
	<div class="row">
		<div class="column text-center">
			<h1>Blog Error</h1>
		</div>
	</div>
</section>

<section class="row align-center">
	<div class="column medium-10 large-8">
		<p>
			<?=$result->message?>
		</p>
	</div>
</section>

<?php
require_once(FRAGMENT_FOOTER);
?>
