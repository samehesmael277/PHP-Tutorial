  <?php

  trait Logger
  {
    public function logAction(string $message): void
    {
      echo "$message" . "<br>";
    }
  }
