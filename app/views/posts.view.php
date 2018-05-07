<?php require 'partials/header.view.php'; ?>

<h1 class="title">Posts</h1>

<p class="submit-btn">
	
	<button class="button is-info is-outlined">
		<a href="/users">Make New Post</a>
	</button>

</p>

<?php foreach ($blogs as $blog): ?>

	<div class="posts-display">

		<h2 class="title is-3">
			<?= $blog->title; ?>
		</h2>

		<div class="subtitle is-2 body-output">
			<?= nl2br($blog->body); ?>
		</div >

		<div class="subtitle is-4 owner-output">
			<?= $blog->owner; ?>
		</div>

		<p>
			<button class="button delete-btn">
			Delete Post</button>
		</p>

	</div>
<?php endforeach ?>

<?php if ($blog->title == Null) {
	ech
} ?>

<?php require 'partials/footer.view.php'; ?>