  <?php

  class User
  {
    private $pdo;

    public function __construct()
    {
      $this->pdo = Database::connect();
    }

    public function create($name, $email, $password)
    {
      $hashed = password_hash($password, PASSWORD_DEFAULT);
      $stmt = $this->pdo->prepare("INSERT INTO users (name, email, password) VALUES (?, ?, ?)");
      $stmt->execute([$name, $email, $hashed]);
      return ['status' => 'success', 'message' => 'User registered'];
    }

    public function login($email, $password)
    {
      $stmt = $this->pdo->prepare("SELECT * FROM users WHERE email = ?");
      $stmt->execute([$email]);
      $user = $stmt->fetch(PDO::FETCH_ASSOC);

      if ($user && password_verify($password, $user['password'])) {
        $token = bin2hex(random_bytes(50));
        $this->pdo->prepare("UPDATE users SET token = ? WHERE id = ?")->execute([$token, $user['id']]);
        return ['status' => 'success', 'token' => $token];
      }

      return ['status' => 'error', 'message' => 'Invalid credentials'];
    }
  }
