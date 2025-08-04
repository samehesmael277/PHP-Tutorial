  <?php

  error_reporting(E_ALL);
  ini_set('display_errors', 1);

  // Autoload كل الكلاسات
  spl_autoload_register(function ($class) {
    $paths = ['../controllers', '../models', '../core', '../config'];
    foreach ($paths as $path) {
      $file = "$path/$class.php";
      if (file_exists($file)) {
        require_once $file;
        return;
      }
    }
  });

  // شغّل الراوتر
  $request = Request::capture();
  $router = new Router();
  $router->handle($request);
