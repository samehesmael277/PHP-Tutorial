  <?php

  class Member implements Person
  {
    use Logger;

    protected string $name;
    protected int $id;
    /** @var Book[] */
    private array $borrowedBooks = [];

    public function __construct(
      string $name,
      int $id
    ) {
      $this->name = $name;
      $this->id = $id;
    }

    public function borrowBook(Book $book): void
    {
      if (!$book->getAvailability()) {
        echo "Sorry this book is unavilible<br>";
        return;
      }

      foreach ($this->borrowedBooks as $b) {
        if ($b->getIsbn() == $book->getIsbn()) {
          echo "Sorry you borroed this book before<br>";
          return;
        }
      }
      $book->borrow();
      $this->borrowedBooks[] = $book;
      $this->logAction("{$this->name} borrowed book {$book->getTitle()}");
    }

    public function returnBook(Book $book): void
    {
      $found = false;
      foreach ($this->borrowedBooks as $b) {
        if ($b->getIsbn() == $book->getIsbn()):
          $found = true;
          break;
        endif;
      }

      if (!$found) {
        echo "You didn't borrow this book.<br>";
        return;
      }


      $book->returnBook();
      $this->borrowedBooks = array_filter(
        $this->borrowedBooks,
        function (Book $b) use ($book) {
          return $b->getIsbn() != $book->getIsbn();
        }
      );
      $this->logAction("{$this->name} return book {$book->getTitle()}");
    }

    public function listBorrowedBooks(): void
    {
      echo "{$this->name} has borrowed:\n";
      foreach ($this->borrowedBooks as $book) {
        echo "- " . $book->getTitle() . "<br>";
      }
    }

    public function getRole(): string
    {
      return "Member";
    }
  }
