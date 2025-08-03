  <?php

  require_once __DIR__ . "/../config/database.php";

  class Article
  {
    private $pdo;

    public function __construct()
    {
      $this->pdo = Database::connect();
    }

    public function create($title, $content, $user_id)
    {
      $stmt = $this->pdo->prepare(
        "INSERT INTO articles (title, content, user_id) VALUES (:title, :content, :user_id)"
      );
      return $stmt->execute(
        [
          'title' => $title,
          'content' => $content,
          'user_id' => $user_id
        ]
      );
    }

    public function all()
    {
      return $this->pdo->query(
        "SELECT articles.*, users.name AS author
        FROM articles
        JOIN users
        ON articles.user_id = users.id
        ORDER BY created_at DESC"
      )->fetchAll(PDO::FETCH_ASSOC);
    }
  }
