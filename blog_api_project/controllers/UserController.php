  <?php

  class UserController
  {
    private $user;

    public function __construct()
    {
      $this->user = new User();
    }

    public function register($data)
    {
      $result = $this->user->create($data['name'], $data['email'], $data['password']);
      echo json_encode($result);
    }

    public function login($data)
    {
      $result = $this->user->login($data['email'], $data['password']);
      echo json_encode($result);
    }
  }
