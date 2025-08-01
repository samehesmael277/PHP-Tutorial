<?php

// ✅ Trait - لإعادة استخدام الوظائف
trait CanLogin
{
    public function login()
    {
        echo "{$this->name} logged in.\n";
    }

    public function logout()
    {
        echo "{$this->name} logged out.\n";
    }
}

// ✅ Interface - لتحديد التزامات معينة
interface HasRole
{
    public function getRole(): string;
}

// ✅ Base class: User
class User implements HasRole
{
    use CanLogin;

    public string $name;
    private string $email;
    protected string $password;
    public static int $userCount = 0;

    public function __construct(string $name, string $email, string $password)
    {
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
        self::$userCount++;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getRole(): string
    {
        return "User";
    }

    public static function getUserCount(): int
    {
        return self::$userCount;
    }
}

// ✅ Child class: Admin - ترث من User
class Admin extends User
{
    public function getRole(): string
    {
        return "Admin";
    }

    public function deleteUser(User $user)
    {
        echo "Admin {$this->name} deleted user {$user->name}\n";
    }
}

echo "<pre>";

// ✅ تجربة الكود:
$user1 = new User("Ali", "ali@example.com", "123456");
$user2 = new User("Sara", "sara@example.com", "abcdef");

$admin = new Admin("Zonak", "admin@example.com", "admin123");

// ✅ استخدام الـ methods
$user1->login();
echo "Email: " . $user1->getEmail() . "\n";
echo "Role: " . $user1->getRole() . "\n\n";

$admin->login();
echo "Role: " . $admin->getRole() . "\n";
$admin->deleteUser($user1);

// ✅ Static property
echo "\nTotal Users: " . User::getUserCount() . "\n";

echo "</pre>";
