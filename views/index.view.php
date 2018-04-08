<?php require 'partials/header.view.php'; ?>

<div class="p-8">

	<?php foreach ($users as $user): ?>
		<p>
			<?= $user->name; ?>
		</p>
	<?php endforeach ?>

	<form action="/names" method="POST">
		<input type="text" name="name" class="border border-grey">
		<button type="submit">Submit</button>
	</form>
</div>

<?php require 'partials/footer.view.php'; ?>