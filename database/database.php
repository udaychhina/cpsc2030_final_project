<?php
require 'config.php';

function db_connect() {
	try {
		$connString = "mysql:host=localhost;dbname=project";
		$user = DBUSER;
		$pass = DBPASS;
		$pdo = new PDO($connString, $user, $pass);
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		return $pdo;
  	}
  	catch (PDOException $e) {
		die($e->getMessage());
  	}
}

function add_new_book() {
	global $pdo;
	try {
		if($_SERVER["REQUEST_METHOD"] == "POST") {
			if(($_POST["title"] != '') && ($_POST["username"] != '')) {
				$sql = "INSERT INTO `books`(`title`, `author`, `rating`, `review`, `shelf`, `genre`, `added_on`, `added_by`) VALUES (?,?,?,?,?,?,?,?)";
				$date = date("Y\-m\-d");

				$statement = $pdo->prepare($sql);
				$statement->bindValue(1, $_POST["title"]);
				$statement->bindValue(2, $_POST["author"]);
				$statement->bindValue(3, $_POST["rating"]);
				$statement->bindValue(4, $_POST["review"]);
				$statement->bindValue(5, $_POST["shelf"]);
				$statement->bindValue(6, $_POST["genre"]);
				$statement->bindValue(7, $date);
				$statement->bindValue(8, $_POST["username"]);

				if($statement->execute()) {
					$message = "Book Added!";
					echo "<script type='text/javascript'>alert('$message');</script>";
				}
			} else {
				$message = "Please enter username and title.";
				echo "<script type='text/javascript'>alert('$message');</script>";
			}
			
		}
	} catch (Exception $e) {
		echo "Message: ".$e->getMessage();
	}
		
	
}

function get_books_by_user() {
	global $pdo;
	global $userBooks;

	if($_SERVER["REQUEST_METHOD"] == "POST") {
		$sql = "SELECT * FROM `books` WHERE `added_by` = ? ORDER BY `ID` DESC";

		$result = $pdo->prepare($sql);
		$result->bindValue(1, $_POST["username"]);
		$result->execute();

		$count = $result->rowCount();
		if($count == 0) {
			$message = "No such user was found!";
			echo "<script type='text/javascript'>alert('$message');</script>";
		}

		while($row = $result->fetch()) {
			array_push($userBooks, $row);
		}
	}
}

function get_all_books() {
	global $pdo;
	global $books;

	$sql = "SELECT `title`, `author`, `shelf`, `added_on`, `added_by` FROM `books` ORDER BY `added_on` DESC";
	$result = $pdo->query($sql);
	$count = $result->rowCount();
	if($count == 0) {
		echo "<p>No books in the database</p>";
	}

	while($row = $result->fetch()) {
		array_push($books, $row);
	}
}
?>