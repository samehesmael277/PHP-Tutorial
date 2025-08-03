  <?php

  class ArticleController
  {
    private $articleModel;

    public function __construct()
    {
      $this->articleModel = new Article();
    }

    public function index()
    {
      $articles = $this->articleModel->all();
      include __DIR__ . '/../views/articles_list.php';
    }

    public function store($title, $content, $user_id)
    {
      $this->articleModel->create($title, $content, $user_id);
    }
  }
