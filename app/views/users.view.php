<?php require 'partials/header.view.php'; ?>

<div class="p-8">
	
	<h1 class="title">Users</h1>

	<form action="/users" method="POST">

		<p class="submit-btn">
		
			<button type="submit" class="button is-info is-outlined">
				Submit
			</button>
		
		</p>
		
		<div class="posts-inputs">
		
			<p class="title-input">
				<input class="input is-large is-success" type="text" name="title" placeholder="Title">
			</p>
	
			<p class="body-input">
				<textarea class="input is-medium is-danger" type="text" name="body" placeholder="Body">
				</textarea>
			</p>
		
			<p class="owner-input">
				<input class="input is-info is-medium" type="text" name="owner" placeholder="Owner">
			</p>
		
		</div>

	</form>

</div>

<?php require 'partials/footer.view.php'; ?>