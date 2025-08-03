  <?php

  require_once __DIR__ . "/../config/database.php";

  class User
  {
    private $pdo;

    public function __construct()
    {
      $this->pdo = Database::connect();
    }

    public function create($name, $email)
    {
      $stmt = $this->pdo->prepare(
        "INSERT INTO users (name, email) VALUES (:name, :email)"
      );
      return $stmt->execute(
        [
          'name' => $name,
          'email' => $email
        ]
      );
    }

    public function all()
    {
      return $this->pdo->query("SELECT * FROM users")->fetchAll(PDO::FETCH_ASSOC);
    }
  }
