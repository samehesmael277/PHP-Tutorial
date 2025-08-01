  <?php

  // 🟢 1. Class & Object
  class Car
  {
    public $color;

    public function drive()
    {
      echo "The car is driving!";
    }
  }

  $myCar = new Car();
  $myCar->color = "Red";
  $myCar->drive(); // The car is driving!

  echo "<br><br>&&&&&&&&&&&&&&&&&&";
  echo "<br>&&&&&&&&&&&&&&&&&&";
  echo "<br>&&&&&&&&&&&&&&&&&&<br><br>";

  // 🟢 2. Constructor
  class Car2
  {
    public $brand;
    public $price;

    public function __construct($brand)
    {
      $this->brand = $brand;
    }
  }

  $car1 = new Car2("Toyota");
  echo $car1->brand; // Toyota

  echo "<br><br>&&&&&&&&&&&&&&&&&&";
  echo "<br>&&&&&&&&&&&&&&&&&&";
  echo "<br>&&&&&&&&&&&&&&&&&&<br><br>";

  // 🟢 3. Encapsulation (Private, Protected, Public)
  class BankAccount
  {
    private $balance = 0;

    public function deposit($amount)
    {
      $this->balance += $amount;
    }

    public function getBalance()
    {
      return $this->balance;
    }
  }

  $account = new BankAccount();
  $account->deposit(500);
  echo $account->getBalance(); // 500

  echo "<br><br>&&&&&&&&&&&&&&&&&&";
  echo "<br>&&&&&&&&&&&&&&&&&&";
  echo "<br>&&&&&&&&&&&&&&&&&&<br><br>";

  // 🟢 4. Inheritance
  class Animal
  {
    public function makeSound()
    {
      echo "Some sound";
    }
  }

  class Dog extends Animal
  {
    public function makeSound()
    {
      echo "Bark!";
    }
  }

  $dog = new Dog();
  $another_animal = new Animal();
  $dog->makeSound(); // Bark!
  echo "<br>";
  $another_animal->makeSound(); // Some sound

  echo "<br><br>&&&&&&&&&&&&&&&&&&";
  echo "<br>&&&&&&&&&&&&&&&&&&";
  echo "<br>&&&&&&&&&&&&&&&&&&<br><br>";

  // 🟢 5. Polymorphism
  function makeAnimalSound(Animal $animal)
  {
    $animal->makeSound();
  }

  $animal = new Animal();
  $dog = new Dog();

  makeAnimalSound($animal); // Some sound
  echo "<br>";
  makeAnimalSound($dog);    // Bark!

  echo "<br><br>&&&&&&&&&&&&&&&&&&";
  echo "<br>&&&&&&&&&&&&&&&&&&";
  echo "<br>&&&&&&&&&&&&&&&&&&<br><br>";

  // 🟢 6. Abstract Class
  abstract class Shape
  {
    abstract public function area();
  }

  class Circle extends Shape
  {
    public function area()
    {
      return 3.14 * 5 * 5; // example
    }
  }

  echo "<br><br>&&&&&&&&&&&&&&&&&&";
  echo "<br>&&&&&&&&&&&&&&&&&&";
  echo "<br>&&&&&&&&&&&&&&&&&&<br><br>";

  // 🟢 7. Interfaces
  interface Loggerv2
  {
    public function log($message);
  }

  class FileLogger implements Loggerv2
  {
    public function log($message)
    {
      echo "Logging to file: $message";
    }
  }
