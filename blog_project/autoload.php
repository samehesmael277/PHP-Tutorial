  <?php

  spl_autoload_register(
    function ($class) {
      foreach (['models', 'controllers', 'config'] as $dir) {
        $file = __DIR__ . "/$dir/$class.php";
        if (file_exists($file)) {
          require_once $file;
          return;
        }
      }
    }
  );
