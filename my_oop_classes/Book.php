  <?php

  class Book
  {
    private string $title;
    private string $author;
    private string $isbn;
    private bool $isAvailable;

    public function __construct(
      string $title,
      string $author,
      string $isbn
    ) {
      $this->title = $title;
      $this->author = $author;
      $this->isbn = $isbn;
      $this->isAvailable = true;
    }

    public function borrow(): void
    {
      $this->isAvailable = false;
    }

    public function returnBook(): void
    {
      $this->isAvailable = true;
    }

    public function getInfo(): void
    {
      echo "title: {$this->title}" . "<br>" .
        "author: {$this->author}" . "<br>" .
        "isbn: {$this->isbn}" . "<br>" .
        ($this->isAvailable ? "available" : "unavailable") . "<br>";
    }

    public function getIsbn(): string
    {
      return $this->isbn;
    }

    public function getTitle(): string
    {
      return $this->title;
    }

    public function getAvailability(): bool
    {
      return $this->isAvailable;
    }
  }
