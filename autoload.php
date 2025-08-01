  <?php

  spl_autoload_register(
    function ($className) {
      $path = __DIR__ . "/my_oop_classes/{$className}.php";
      if (file_exists($path)) {
        require_once $path;
      } else {
        echo "Class $className not found in $path<br>";
      }
    }
  );
