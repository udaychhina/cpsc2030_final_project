<?php
ini_set('dsiplay_errors', 1);
error_reporting(E_ALL);

include 'templates/header.php';
require_once 'database/database.php';
require_once 'database/db-control.php';
?>

<main>
	<h2>
		Add a new book!
	</h2>
	<form method="post" class="new-book-form">
		<label>
			Title:
		</label>
			<input type="text" name="title">
		<label>
			Author: 
			</label>
			<input type="text" name="author">
		</label>
		<label>
			Rating:
		</label>
			<select name="rating">
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
				<option value="6">6</option>
				<option value="7">7</option>
				<option value="8">8</option>
				<option value="9">9</option>
				<option value="10">10</option>
			</select>
		<label for="review" class="">
			Review:
		</label>
			<input type="textbox" name="review">
		<label>
			Shelf:
		</label>
			<select name="shelf">
				<option value="To read">To Read</option>
				<option value="Read">Read</option>
				<option value="Want To Read">Want To Read</option>
			</select>
		<label>
			Genre:
		</label>
			<input type="text" name="genre">
		<label>
			Username:
		</label>
			<input type="text" name="username">

		<button type="submit" name="button">Add Book!</button>
	</form>
	<?php
	add_new_book();
	?>
</main>

<?php
include 'templates/footer.php';
?>