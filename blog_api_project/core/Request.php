  <?php

  class Request
  {
    public $method;
    public $uri;
    public $body;

    public static function capture()
    {
      $request = new self;
      $request->method = $_SERVER['REQUEST_METHOD'];

      $fullPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
      $basePath = '/sameh/blog_api_project/public';
      $request->uri = str_replace($basePath, '', $fullPath);

      $request->body = json_decode(file_get_contents('php://input'), true);
      return $request;
    }
  }
