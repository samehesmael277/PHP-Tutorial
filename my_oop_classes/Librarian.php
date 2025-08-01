  <?php

  class Librarian extends Member
  {
    use Logger;

    public function __construct(
      string $name,
      int $id
    ) {
      $this->name = $name;
      $this->id = $id;
    }

    public function addBook(Book $book, Library $library): void
    {
      $library->addBook($book);
      $this->logAction("{$this->name} add book {$book->getTitle()}");
    }

    public function removeBook(Book $book, Library $library): void
    {
      $library->removeBook($book);
      $this->logAction("{$this->name} remove book {$book->getTitle()}");
    }

    public function getRole(): string
    {
      return "Librarian";
    }
  }
