  <?php

  class Database
  {
    private static $host = "localhost";
    private static $db = "blog";
    private static $user = "root";
    private static $pass = "";
    private static $pdo;

    public static function connect()
    {
      if (!self::$pdo) {
        self::$pdo = new PDO(
          "mysql:host=" . self::$host . ";dbname=" . self::$db,
          self::$user,
          self::$pass
        );
        self::$pdo->setAttribute(
          PDO::ATTR_ERRMODE,
          PDO::ERRMODE_EXCEPTION
        );
      }
      return self::$pdo;
    }
  }
