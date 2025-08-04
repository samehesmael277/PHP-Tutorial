  <?php

  class Router
  {
    public function handle(Request $request)
    {
      $uri = trim($request->uri, '/');
      $method = $request->method;

      // تسجيل مستخدم
      if ($uri === 'api/register' && $method === 'POST') {
        (new UserController)->register($request->body);
        return;
      }

      // تسجيل دخول
      if ($uri === 'api/login' && $method === 'POST') {
        (new UserController)->login($request->body);
        return;
      }

      // عرض المقالات
      if ($uri === 'api/articles' && $method === 'GET') {
        (new ArticleController)->index();
        return;
      }

      if (preg_match('#^api/articles/(\d+)$#', $uri, $matches) && $method === 'GET') {
        (new ArticleController)->show($matches[1]);
        return;
      }

      if ($uri === 'api/articles' && $method === 'POST') {
        (new ArticleController)->store($request->body);
        return;
      }

      if (preg_match('#^api/articles/(\d+)$#', $uri, $matches) && $method === 'PUT') {
        (new ArticleController)->update($matches[1], $request->body);
        return;
      }

      if (preg_match('#^api/articles/(\d+)$#', $uri, $matches) && $method === 'DELETE') {
        (new ArticleController)->destroy($matches[1]);
        return;
      }

      // غير ذلك:
      http_response_code(404);
      echo json_encode(['error' => 'Route not found']);
    }
  }
