<?php
ini_set('dsiplay_errors', 1);
error_reporting(E_ALL);

$books = [];

require_once 'database/database.php';
require_once 'database/db-control.php';
require_once 'templates/book-results.php';
include 'templates/header.php';
?>
<main>
	<h2>
		Recent activity
	</h2>
	<?php 
		get_all_books();
		timeline_cards();
	?>
</main>
<?php include 'templates/footer.php';