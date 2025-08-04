  <?php

  class Article
  {
    private $pdo;

    public function __construct()
    {
      $this->pdo = Database::connect();
    }

    public function getAll()
    {
      $stmt = $this->pdo->query(
        "SELECT articles.*, users.name AS author
             FROM articles
             JOIN users ON articles.user_id = users.id
             ORDER BY created_at DESC"
      );
      return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getById($id)
    {
      $stmt = $this->pdo->prepare(
        "SELECT articles.*, users.name AS author
             FROM articles
             JOIN users ON articles.user_id = users.id
             WHERE articles.id = ?"
      );
      $stmt->execute([$id]);
      return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function create($title, $content, $user_id)
    {
      $stmt = $this->pdo->prepare("INSERT INTO articles (title, content, user_id) VALUES (?, ?, ?)");
      $stmt->execute([$title, $content, $user_id]);
      return ['status' => 'success', 'message' => 'Article created'];
    }

    public function update($id, $title, $content, $user_id)
    {
      $stmt = $this->pdo->prepare(
        "UPDATE articles SET title = ?, content = ? WHERE id = ? AND user_id = ?"
      );
      $stmt->execute([$title, $content, $id, $user_id]);
      return ['status' => 'success', 'message' => 'Article updated'];
    }

    public function delete($id, $user_id)
    {
      $stmt = $this->pdo->prepare("DELETE FROM articles WHERE id = ? AND user_id = ?");
      $stmt->execute([$id, $user_id]);
      return ['status' => 'success', 'message' => 'Article deleted'];
    }
  }
