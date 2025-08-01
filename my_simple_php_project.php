	<?php

	error_reporting(E_ALL);
	ini_set('display_errors', '1');

	require_once 'autoload.php';

	// Run Code
	$library = new Library();

	$book1 = new Book("Clean Code", "Robert C. Martin", "12345");
	$book2 = new Book("Design Patterns", "GoF", "54321");
	$book3 = new Book("Refactoring", "Martin Fowler", "98765");

	$librarian = new Librarian("Mona", 1);
	$librarian->addBook($book1, $library);
	$librarian->addBook($book2, $library);
	$librarian->addBook($book3, $library);

	$library->listBooks();

	$member = new Member("Ali", 2);
	$member->borrowBook($book1);
	$member->borrowBook($book1); // يجرب استعارة كتاب مستعار فعلاً
	$member->listBorrowedBooks();

	$member->returnBook($book2); // يحاول يرجع كتاب لم يستعيره
	$member->returnBook($book1);

	$library->removeBook($book1); // يحاول يشيله بعد ما رجع
	$library->removeBook($book2); // متاح
	$library->listBooks();
