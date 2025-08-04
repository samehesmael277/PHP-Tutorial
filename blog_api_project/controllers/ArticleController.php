  <?php

  class ArticleController
  {
    private $article;
    private $pdo;

    public function __construct()
    {
      $this->article = new Article();
      $this->pdo = Database::connect();
    }

    private function getUserFromToken()
    {
      $headers = apache_request_headers();
      if (!isset($headers['Authorization'])) {
        http_response_code(401);
        echo json_encode(['error' => 'Token required']);
        exit;
      }

      $token = trim(str_replace('Bearer', '', $headers['Authorization']));
      $stmt = $this->pdo->prepare("SELECT * FROM users WHERE token = ?");
      $stmt->execute([$token]);
      $user = $stmt->fetch(PDO::FETCH_ASSOC);

      if (!$user) {
        http_response_code(401);
        echo json_encode(['error' => 'Invalid token']);
        exit;
      }

      return $user;
    }

    public function index()
    {
      echo json_encode($this->article->getAll());
    }

    public function show($id)
    {
      $article = $this->article->getById($id);
      if ($article) {
        echo json_encode($article);
      } else {
        http_response_code(404);
        echo json_encode(['error' => 'Article not found']);
      }
    }

    public function store($data)
    {
      $user = $this->getUserFromToken();
      echo json_encode($this->article->create($data['title'], $data['content'], $user['id']));
    }

    public function update($id, $data)
    {
      $user = $this->getUserFromToken();
      echo json_encode($this->article->update($id, $data['title'], $data['content'], $user['id']));
    }

    public function destroy($id)
    {
      $user = $this->getUserFromToken();
      echo json_encode($this->article->delete($id, $user['id']));
    }
  }
