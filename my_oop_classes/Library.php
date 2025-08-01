  <?php

  class Library
  {
    /** @var Book[] */
    private array $books = [];

    public function listBooks(): void
    {
      if (empty($this->books)) {
        echo "There are no book in this Library yet<br>";
        return;
      }

      echo "Books in Library is: ";
      foreach ($this->books as $key => $book) {
        echo "{$book->getTitle()}" . ($key == count($this->books) - 1 ? "<br>" : " - ");
      }
    }

    public function removeBook(Book $book): void
    {
      if (!$book->getAvailability()) {
        echo "This book can't remove because someone borrowed it.<br>";
        return;
      }

      if (!in_array($book, $this->books, true)) {
        echo "This book is not in the library.<br>";
        return;
      }

      $this->books = array_filter(
        $this->books,
        function (Book $b) use ($book) {
          return $b->getIsbn() != $book->getIsbn();
        }
      );
    }

    public function addBook(Book $book): void
    {
      if (in_array($book, $this->books, true)) {
        echo "This book is added before to library <br>";
        return;
      }

      $this->books[] = $book;
    }
  }
