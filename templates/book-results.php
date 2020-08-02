<?php
function book_cards() {
	global $userBooks;
	echo "<div class=\"cards shown\">";
	for($i = 0; $i < count($userBooks); $i++) {
		echo "<div class=\"book-card\">";
		echo "<div class=\"title\">";
		echo "<h3>".$userBooks[$i][1]."</h3></div>";
		echo "<span class=\"author\">";
		echo $userBooks[$i][2]."</span><hr>";
		echo "<span class=\"added-on\">";
		echo "Added on: ".$userBooks[$i][7]."</span>";
		echo "<span class=\"rating\">";
		echo "Rating: ".$userBooks[$i][3]."</span>";
		echo "<span class=\"shelf\">";
		echo "Shelf: ".$userBooks[$i][5]."</span>";
		echo "<span class=\"genre\">";
		echo "Genre: ".$userBooks[$i][6]."</span>";
		echo "<span class=\"review\">";
		echo "Review: <p>".$userBooks[$i][4]."</p></span>";
		echo "</div>";
	}
	echo "</div>";	
}

function book_list() {
	global $userBooks;
	echo "<div class=\"list hidden\">";
	echo "<ol>";
	for($i = 0; $i < count($userBooks); $i++) {
		echo "<li><span class=\"list-title\">".$userBooks[$i][1]."</span> <span class=\"list-author\">".$userBooks[$i][2]."</span> <span class=\"list-date\">".$userBooks[$i][7]."</span></li>";
	}
	echo "</ol>";	
	echo "</div>";
}

function timeline_cards() {
	global $books;
	echo "<div class=\"timeline-cards\">";
	for($i = 0; $i < count($books); $i++) {
		echo "<div class=\"timeline-card\">";
		echo "<h3>".$books[$i][0]."</h3>";
		echo "<span class=\"timeline-author\">".$books[$i][1]."</span><hr>", PHP_EOL,
			"Added by <span class=\"timeline-user\">".$books[$i][4]."</span> to their ".$books[$i][2]." shelf,", PHP_EOL,
			" on ".$books[$i][3].".</div>";
	}
	echo "</div>";
}

?>	
