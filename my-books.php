<?php
$userBooks = [];

require_once 'database/database.php';
require_once 'database/db-control.php';
require_once 'templates/book-results.php';
include 'templates/header.php';

?>

<main>
	<h2>
		Your Books!
	</h2>
	<form action="my-books.php" method="post" class="my-books-form">
		<label>
			Please enter your username.
		</label>
		<input type="text" name="username">		
		<button class="get-books" type="submit">Get Books!</button>
	</form>
	<div class="result-format-buttons">
		<button class="card-button">Cards</button>
		<button class="list-button">List</button>
	</div>
	<?php
	get_books_by_user();
	book_cards();
	book_list();
	?>

</main>

<?php include 'templates/footer.php';?>