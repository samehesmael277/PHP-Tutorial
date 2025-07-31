  <?php

  /*
    echo gettype(true);
    echo '<br>';
    echo gettype(1);
    echo '<br>';
    echo gettype(-1);
    echo '<br>';
    echo gettype(1.5);
    echo '<br>';
    echo gettype(-1.5);
    echo '<br>';
    echo gettype('Sameh Esmael');
    echo '<br>';
    echo gettype(
            array(
                    "EG" => "Egypt",
                    "KSA" => "Saudi Aribia"
            )
    );
    echo '<br>';
    echo gettype(array("Egypt", "Saudi Aribia"));
    echo '<br>';
    echo gettype(["Egypt", "Saudi Aribia"]);
    */

  /*
    echo 1 + "2";
    echo '<br>';
    echo gettype(1 + "2");
    echo '<br>';
    echo TRUE;
    echo '<br>';
    echo FALSE;
    echo '<br>';
    echo 5 + "5 Lessons";
    echo '<br>';
    echo gettype(5 + "5 Lessons");
    echo '<br>';
    echo 10 + 15.5;
    echo '<br>';
    echo gettype(10 + 15.5);
    echo '<br>';
    echo 12.5 / 1.5;
    echo '<br>';
    echo gettype(12.5 / 1.5);
    */

  /*
    echo 1 + (int) "2 Lessons";
    echo '<br>';
    echo 1 + 12.5;
    echo '<br>';
    echo 1 + (int) 12.5;
    echo '<br>';
    echo (int) (1.5 + 12.5);
    echo '<br>';
    echo (int)1.5 + (int) 12.5;
    */

  /*
    var_dump(20);
    echo "<br>";
    // FALSE
    var_dump((bool) "");
    echo "<br>";
    var_dump((bool) []);
    echo "<br>";
    var_dump((bool) 0);
    echo "<br>";
    var_dump((bool) "0");
    echo "<br>";
    var_dump((bool) -0);
    // TRUE
    echo "<br>";
    var_dump((bool) 1);
    echo "<br>";
    var_dump((bool) " ");
    echo "<br>";
    var_dump((bool) -1);
    echo "<br>";
    */

  /*
    echo (int) 15.2 + (int) 14.7 + (10.5 + 10.5); // 50
    echo "<br>";
    echo gettype((int) 15.2 + (int) 14.7 + (int)(10.5 + 10.5)); // Integer
    echo "<br>";
    echo gettype(100);
    echo "<br>";
    var_dump(100);
    */

  /*
    echo "Hello";
    echo "<br>";
    echo "Hello 'PHP'";
    echo "<br>";
    echo 'Hello "PHP"';
    echo "<br>";
    echo 'Hello \'PHP\'';
    echo "<br>";
    echo "Hello \"PHP\"";
    echo "<br>";
    echo "Hello \\";
    echo "<br>";
    echo '
    Hello
    Sameh
    ';
    echo "<br>";
    echo nl2br('My
    Name
    Is
    Sameh');
    echo "<br>";
    echo "<br>";
    echo "<br>";
    */

  /*
    $name = 'Sameh';

    echo <<<"Heredoc"
    Hello Php
    ;;; ''' """ '/ \\\\
    $name
    Heredoc;

    echo '<br>';


    echo <<<'Nowdoc'
    Hello Php
    ;;; ''' """ '/ \\\\
    $name
    Nowdoc;
    */


  /*
    echo '<pre>';

    print_r([
            0 => 'Osama',
            'A' => 'Ahmed',
            'S' => 'Sameh',
            'Mohamed',
            true => 'Mahmoud',
            'Gamal',
            9 => 'Zenab',
            'Yonis',
            False => 'Elzero',
            8 => 'Mostafa',
            'Samy',
            'Classes' => [
                    'A',
                    'B',
                    'C',
                    [
                            1,
                            2,
                            3
                    ]
            ]
    ]);

    echo '</pre>';
    */

  /*
    $username = 'sameh';
    $user_number = 2;

    echo $username;
    echo '<br>';
    echo $user_number;
    echo '<br>';
    echo 'hello $username';
    echo '<br>';
    echo "hello $username";
    echo '<br>';
    echo '<br>';
    */


  /*
    $s = "sameh";
    $$s = "esmael";

    echo $s;
    echo '<br>';
    echo $$s;
    echo '<br>';
    echo $sameh;
    echo '<br>';
    echo "Hello {$$s}";
    echo '<br>';
    echo "Hello {$s}";
    echo '<br>';

    // Assign by value
    $x = 1;
    $y = $x;

    // Assign by reference
    $w = 2;
    $z = &$w;
    */

  /*
    // Predefined Variables
    echo "<pre>";
    print_r($_SERVER);
    echo "<br>";
    echo $_SERVER["HTTP_CONNECTION"];
    echo "</pre>";
    */

  /*
    // Constants
    define("DB_NAME", "sameh_db");
    echo DB_NAME;
    echo "<br>";
    echo php_uname();
    */

  /*
    var_dump(100 != 100);
    echo "<br>";
    var_dump(100.0 != 100);
    echo "<br>";
    var_dump(100 <> "100");
    echo "<br>";

    echo "<br>";
    echo "##########";
    echo "<br>";

    var_dump(100 === 100);
    echo "<br>";
    var_dump(100.0 === 100);
    echo "<br>";
    var_dump(100 === "100");
    echo "<br>";
    */

  /*
    define("DB_NAME", "sameh_db");
    $a = "Sameh";
    $b = "Esmael";
    $c = "Nady";

    echo $a . $b . $c . " " . DB_NAME;
    echo "<br>";
    echo $a . " " . $b . " " . $c;
    echo "<br>";
    echo "{$a} {$b} {$c}";
    echo "<br>";
    echo "{$a} {$b} {$c} " . DB_NAME;
    echo "<br>";

    $name = "Sameh";
    $name .= " Esmael";
    $name .= " Nady";

    echo $name;
    */

  /*
    echo "<pre>";
    $arr1 = [
            1 => "A",
            2 => "B"
    ];
    $arr2 = [
            3 => "C",
            4 => "D"
    ];

    $arr3 = [
            1 => 10,
            2 => 20
    ];
    $arr4 = [
            1 => "10",
            2 => "20"
    ];

    print_r($arr1 + $arr2);
    var_dump($arr3 != $arr4);
    var_dump($arr3 <> $arr4);
    echo "</pre>";
    */


  // echo "<pre>";

  // $a = "3";
  // $b = $a;

  // echo @$b or die("var not found");

  // echo "</pre>";

  /*
    $a = 10 || false;
    $b = 10 or false;
    echo $a;
    echo "<br>";
    echo $b;
    */

  /*
    if (10 < 5) {
            echo "1";
    } elseif (10 < 5) {
            echo "2";
    } else {
            echo "3";
    }

    echo "<br>";

    if (10 < 5) :
            echo "1";
    elseif (10 > 5) :
            echo "2";
    else :
            echo "3";
    endif;

    echo "<br>";

    $a = 5;
    echo ($a > 3) ? "con 1" : "con 2";
    echo "<br>";
    echo "I love php because it's a " . ($a > 3 ? "good" : "bad") . " language";
    */

  /*
    $num = 7;

    switch ($num) {
        case 1:
            echo "one";
            break;
        case 2:
            echo "two";
            break;
        case 3:
            echo "three";
            break;
        case 4:
        case 5:
            echo "four or five";
            break;
        default:
            echo "unknown number";
    }

    $num = 7;
    switch ($num):
        case 1:
            echo "one";
            break;
        case 2:
            echo "two";
            break;
        case 3:
            echo "three";
            break;
        case 4:
        case 5:
            echo "four or five";
            break;
        default:
            echo "unknown number";
    endswitch;
    */

  /*
    $i = 1;
    while ($i <= 10) {
        echo "{$i} <br>";
        $i++;
    }

    echo "&&&&&&&&&& <br>";

    $x = 1;
    while ($x <= 5):
        echo "{$x} <br>";
        $x++;
    endwhile;

    echo "&&&&&&&&&& <br>";

    $w = 5;
    do {
        echo "{$w} <br>";
        $w++;
    } while ($w <= 3);
    */

  /*
    for ($i = 1; $i <= 10; $i++) {
        echo "{$i} <br>";
    }

    echo "&&&&&&&&&& <br>";


    for ($i = 1; $i <= 10; $i++) :
        echo "{$i} <br>";
    endfor;
    */

  /*
    $arr = [1, 2, 3, 4, 5];
    foreach ($arr as $num) {
        echo "{$num} <br>";
    }

    echo "&&&&&&&&&& <br>";

    foreach ($arr as $key => $value):
        echo " {$key} => {$value} <br>";
    endforeach;

    echo "&&&&&&&&&& <br>";
    */

  /*
    include("test.php"); // not cuse error if file not found
    require("test.php"); // // cuse error if file not found

    echo $a . "<br>";
    echo "hello";

    echo "&&&&&&&&&&& <br>";


    include("test.php");
    echo $a;
    $a = 100;
    echo "<br>";
    include("test.php");
    echo $a;
    echo "<br>";

    echo "&&&&&&&&&&& <br>";

    include_once("test.php");
    echo $a;
    $a = 100;
    echo "<br>";
    include_once("test.php");
    echo $a;
    echo "<br>";
    */



  /*

  function printHello()
  {
    echo "Hello<br>";
  }

  printHello();
  printHello();

  function printHelloToName($name)
  {
    echo "Hello {$name}<br>";
  }

  printHelloToName("Sameh");
  printHelloToName("Ahmed");

  function sum2Num($num1, $num2)
  {
    return $num1 + $num2;
  }

  var_dump(sum2Num(2, 4));

  echo "<br>";

  function sayHelloV2($name = "", $age = 0)
  {
    echo "Hello $name your age is: $age<br>";
  }

  sayHelloV2("sameh");
  sayHelloV2();
  sayHelloV2("sameh", 23);
  sayHelloV2(age: 23);
  sayHelloV2(
    name: "Sameh",
    age: 23
  );

  echo "<br>";

  function get_args_numers()
  {
    echo "Number of args " . func_num_args() . "<br>";
    echo "index 2 is: " . func_get_arg(2) . "<br>";
    print_r(func_get_args());
    echo "<br>";
    $result = 0;
    foreach (func_get_args() as $value):
      $result += $value;
    endforeach;
    echo "sum of args is: " . $result . "<br>";
  }

  echo get_args_numers(1, 2, 3, 4);

  echo "<br>";

  function sumInfinityNums(...$nums)
  {
    $result = 0;
    foreach ($nums as $num):
      $result += $num;
    endforeach;
    return $result;
  }

  echo sumInfinityNums(1, 2, 3, 4) . "<br>";

  echo "<br>";

  function one()
  {
    return "one from fun";
  }

  $func1 = "one";

  echo $func1;
  echo "<br>";
  echo $func1();

  echo "<br>";

  var_dump(function_exists("one"));
  echo "<br>";
  var_dump(function_exists("two"));

  echo "<br>";
  echo strlen("Sameh_1");
  echo "<br>";

  // passed by reference
  $num = 1;
  function add_five(&$number)
  {
    $number += 5;
    return $number;
  }

  echo add_five($num) . "<br>";
  echo $num . "<br>";

  function sum_two_numbers($n1, $n2): float
  {
    return $n1 + $n2;
  }

  function sum_two_numbers_int($n1, $n2): int
  {
    return $n1 + $n2;
  }

  echo sum_two_numbers(5.5, 4) . "<br>";
  echo sum_two_numbers_int(5.5, 4) . "<br>";

  echo "&&&&&&&&&&&&&&&&&&<br>";

  $say_hello = function () {
    return "hello";
  };

  $say_hello_to_someone = function ($name) {
    return "hello $name";
  };

  echo $say_hello() . "<br>";
  echo $say_hello_to_someone("Sameh") . "<br>";


  $msg = "message";
  $say_hello_to_someone_with_user = function ($name) use ($msg) {
    return "hello $name, $msg";
  };
  echo $say_hello_to_someone_with_user("Sameh") . "<br>";

  echo "&&&&&&&&&&&&&&&&&&<br>";

  $nums = [5, 10, 15, 20];
  function add_ten($num)
  {
    return $num += 10;
  }
  $nums_after_adding = array_map("add_ten", $nums);
  echo "<pre>";
  print_r($nums_after_adding);
  echo "</pre>";

  echo "&&&&&&&&&&&&&&&&&&<br>";

  // Anonymous Function
  $nums_after_adding = array_map(
    function ($num) {
      return $num += 10;
    },
    $nums
  );
  echo "<pre>";
  print_r($nums_after_adding);
  echo "</pre>";

  echo "&&&&&&&&&&&&&&&&&&<br>";

  // Arrow Function
  $num_five = fn() => 5;
  echo $num_five() * $num_five() . "<br>";
*/

  // Strings
  $str = "Sameh ";
  echo $str[0] . "<br>";
  echo $str[1] . "<br>";
  echo $str[2] . "<br>";
  echo  $str[strlen($str) - 1] . "<br>";
  echo  $str[-1] . "<br>";
  echo  $str[-2] . "<br>";
  echo strlen($str) . "<br>";
  $str[5] = "1";
  echo $str . "<br>";
  echo "<br><br>&&&&&&&&&&&&&&&&&&<br><br>";

  // strings biltin fuctions
  # 1
  echo lcfirst("Sameh Esmael Nady") . "<br>";
  echo ucfirst("sameh esmael nady") . "<br>";
  echo strtolower("Sameh Esmael Nady") . "<br>";
  echo strtoupper("Sameh Esmael Nady") . "<br>";
  echo ucwords("sameh esmael nady") . "<br>";
  echo ucwords("sameh esmael|nady", "|") . "<br>";
  echo str_repeat("sameh ", 5) . "<br>";
  echo "<br><br>&&&&&&&&&&&&&&&&&&<br><br>";

  # 2
  $arr = ["Sameh", "Esmael", "Nady"];
  echo implode($arr) . "<br>";
  echo implode("", $arr) . "<br>";
  echo implode(" ", $arr) . "<br>";
  echo implode("@", $arr) . "<br>";
  echo implode("#", $arr) . "<br>";
  echo implode("|", $arr) . "<br>";
  echo implode(",", $arr) . "<br>";

  $srt = "Sameh Esmael Nady";
  $srt_2 = "Sameh,Esmael,Nady";
  echo "<pre>";
  print_r(explode(" ", $srt));
  print_r(explode(",", $srt_2));
  print_r(explode(" ", $srt, 2));
  print_r(explode(" ", $srt, -1));
  echo "</pre>";

  echo str_shuffle("Sameh") . "<br>";
  echo strrev("Sameh") . "<br>";
  echo strlen(trim("   Sameh    ")) . "<br>";
  echo strlen(rtrim("   Sameh    ")) . "<br>";
  echo strlen(ltrim("   Sameh    ")) . "<br>";
  echo strlen(trim(",,Sameh,,,,,",  ",")) . "<br>";
  echo trim(",,Sameh,,,,,",  ",") . "<br>";
  echo trim("@@@#Sameh!@##",  "#@") . "<br>";

  /*
    String Functions
    - chunk_split(String[Required], Length[Optional], End[Optional])
    - strlen(String[Required])
    - str_split(String[Required], Length[Optional])
    - strip_tags(String[Required], Allowed[Optional])
    - nl2br(String[Required], XHTML[Optional])
  */

  echo chunk_split("Elzero Web School", 3, "@");
  echo '<br>';

  echo '<pre>';
  print_r(str_split("Elzero"));
  echo '</pre>';

  echo '<pre>';
  print_r(str_split("Elzero", 2));
  echo '</pre>';

  echo "<h3>Hello <b>Elzero</b></h3>";
  echo '<br>';

  echo strip_tags("<h3>Hello <b>Elzero</b></h3>");
  echo '<br>';

  echo strip_tags("<h3>Hello <b>Elzero</b></h3>", "<h3><b>");
  echo '<br>';

  echo nl2br("Elzero\nWeb\nSchool", false);

  echo "<br><br>&&&&&&&&&&&&&&&&&&<br><br>";
  echo "<br><br>&&&&&&&&&&&&&&&&&&<br><br>";
  echo "<br><br>&&&&&&&&&&&&&&&&&&<br><br>";

  /*
    String Functions
    - strpos(String[Required], Value[Required], Start Position[Optional]) Case-Sensitive
    - strrpos(String[Required], Value[Required], Start Position[Optional]) Case-Sensitive
    - stripos(String[Required], Value[Required], Start Position[Optional]) Case-Insensitive
    - strripos(String[Required], Value[Required], Start Position[Optional]) Case-Insensitive
    - substr_count(String[Required], Value[Required], Start Position[Optional], Length[Optional])
  */

  var_dump(strpos("Hello Hello", "H")); // 0
  echo '<br>';
  var_dump(strpos("Hello Hello", "H", 3)); // 6
  echo '<br>';
  var_dump(strpos("Hello Hello", "H", 6)); // 6
  echo '<br>';
  var_dump(strpos("Hello Hello", "h")); // False
  echo '<br>';
  var_dump(strpos("Hello Hello", "H", -2)); // False
  echo '<br>';
  var_dump(strpos("Hello Hello", "H", -5)); // 6
  echo '<br>';
  var_dump(strpos("Hello Hello", "H", -11)); // 0
  echo '<br>';
  var_dump(strrpos("Hello Hello", "H")); // 6
  echo '<br>';
  var_dump(strrpos("Hello Hello", "H", 5)); // 6
  echo '<br>';
  var_dump(stripos("Hello Hello", "h")); // 0
  echo '<br>';
  var_dump(strripos("Hello Hello", "h")); // 6
  echo '<br>';
  var_dump(substr_count("Hello Hello", "He")); // 2
  echo '<br>';
  var_dump(substr_count("Hello Hello", "He", 1)); // 1
  echo '<br>';
  var_dump(substr_count("Hello Hello", "He", 1, 6)); // 0
  echo '<br>';
  var_dump(substr_count("abcdabcda", "abcda")); // 1

  echo "<br><br>&&&&&&&&&&&&&&&&&&<br><br>";
  echo "<br><br>&&&&&&&&&&&&&&&&&&<br><br>";
  echo "<br><br>&&&&&&&&&&&&&&&&&&<br><br>";

  /*
    String Functions
    - parse_str(String[Required], Array[Required])
    - quotemeta(String[Required])
    - str_pad(String[Required], Length[Required], String[Optional], Pad Flag[Optional])
    --- STR_PAD_BOTH
    --- STR_PAD_LEFT
    --- STR_PAD_RIGHT
    - strtr(String[Required], From[Required], To[Required]) || strtr(String[Required], Array[Required])
  */

  parse_str("name=Osama&#038;email=o@nn.sa&#038;os=mac", $query);

  echo '<pre>';
  print_r($query);
  echo '</pre>';

  echo $query["name"] . "<br>";
  echo $query["email"] . "<br>";
  echo $query["os"] . "<br>";

  echo "Hello [] () * + . <br>";
  echo quotemeta("Hello [] () * + . <br>");

  echo str_pad("12", 8, 0, STR_PAD_BOTH) . "<br>";
  echo str_pad("321", 8, 0, STR_PAD_BOTH) . "<br>";
  echo str_pad("1313", 8, 0, STR_PAD_LEFT) . "<br>";
  echo str_pad("15435", 8, 0, STR_PAD_LEFT) . "<br>";
  echo str_pad("500432", 8, 0, STR_PAD_LEFT) . "<br>";

  echo strtr("E@zero Web Schoo@", "@", "l");

  echo "<br>";

  $translation = ["@" => "l", "#" => "o"];

  echo strtr("E@zer# Web Sch##@", $translation);

  echo "<br><br>&&&&&&&&&&&&&&&&&&<br><br>";
  echo "<br><br>&&&&&&&&&&&&&&&&&&<br><br>";
  echo "<br><br>&&&&&&&&&&&&&&&&&&<br><br>";

  /*
    String Functions
    - str_replace(Find[Required], Replace With[Required], Data[Required], Replace Count[Optional])
    --- Its Case-Sensitive
    - str_ireplace(Find[Required], Replace With[Required], Data[Required], Replace Count[Optional])
  */

  echo str_replace("@", "o", "Elzer@ Web Sch@@l", $r); // Elzero Web School
  echo '<br>';
  echo "Replaces Count Is $r"; // 3
  echo '<br>';
  echo str_replace(["#", "@"], "A", "E#zer@ Web Sch@@#"); // EAzerA Web SchAAA
  echo '<br>';
  echo str_replace(["#", "@"], ["l", "o"], "E#zer@ Web Sch@@#"); // Elzero Web School

  echo '<pre>';
  print_r(str_replace("One", 1, ["One", "Two", "Three", "One", "One"]));
  echo '</pre>';

  echo '<pre>';
  print_r(str_replace(["One", "Two"], [1, 2], ["One", "Two", "Three", "One", "One"]));
  echo '</pre>';

  echo '<pre>';
  print_r(str_replace(["One", "Two", "Three"], [1, 2], ["One", "Two", "Three", "One", "One"]));
  echo '</pre>';

  echo '<pre>';
  print_r(str_ireplace(["one", "two"], [1, 2], ["One", "Two", "Three", "One", "One"]));
  echo '</pre>';


  echo "<br><br>&&&&&&&&&&&&&&&&&&";
  echo "<br>&&&&&&&&&&&&&&&&&&";
  echo "<br>&&&&&&&&&&&&&&&&&&<br><br>";

  /*
    String Functions
    - substr_replace(String[Required], Replace With Or Insert[Required], Start[Required], Length[$])
    --- $ Positive Number => Length Of String To Be Replaced
    --- $ Negative Number => Characters Left At The End After Replacement
    --- $ 0               => Insert Instead Of Replace
  */

  echo substr_replace("OneTwo", 1, 0); // 1
  echo '<br>';
  echo substr_replace("OneTwo", 1, 3); // One1
  echo '<br>';
  echo substr_replace("OneTwo", 1, 5); // OneTw1
  echo '<br>';
  echo substr_replace("OneTwo", 1, -1); // OneTw1
  echo '<br>';
  echo substr_replace("OneTwo", 2, 2); // On2
  echo '<br>';
  echo substr_replace("OneTwo", 2, 2, 2); // On2wo
  echo '<br>';
  echo substr_replace("OneTwo", 2, 1, 4); // O2o
  echo '<br>';
  echo substr_replace("Elzero_Web_School", "A", 7, 3); // Elzero_A_School
  echo '<br>';
  echo substr_replace("Elzero_Web_School", "A", 7, -1); // Elzero_Al eb_School
  echo '<br>';
  echo substr_replace("Elzero_Web_School", "A", 7, -3); // Elzero_Aool eb_Sch
  echo '<br>';
  echo substr_replace("Elzero_Web_School", "A", 7, -9); // Elzero_Aeb_School
  echo '<br>';
  echo substr_replace("Elzero_Web_School", "A", 7, -10); // Elzero_AWeb_School
  echo '<br>';
  echo substr_replace("Elzero_Web_School", "@", 1, 0); // E@lzero_Web_School

  echo "<pre>";
  print_r(substr_replace(["OneTwo", "ThreeFour"], 1, 0));
  echo "</pre>";

  echo "<br><br>&&&&&&&&&&&&&&&&&&";
  echo "<br>&&&&&&&&&&&&&&&&&&";
  echo "<br>&&&&&&&&&&&&&&&&&&<br><br>";

  /*
    String Functions
    - wordwrap(String[Required], Width[Optional = 75], Break_Char[Optional = "\n"], Cut_Long[Optional = False])
    - ord(String[Required])
    - chr(Int[Required])
    - similar_text(String_One[Required], String_Two[Required], Percent[Optional])
    --- Returns The Number Of Matching Characters
  */

  $str = "Welcome To To To T Elzeroo Web School Website Very_Very_Very_Long";

  echo strlen($str) . "<br>";

  echo wordwrap($str, 8, "<br>", True);

  echo "<br>";

  echo ord("a"); // 97

  echo "<br>";

  echo chr(97); // a

  echo "<br>";

  echo similar_text("Elz@ero", "Elz_eroo");

  echo "<br>";

  echo similar_text("Elzero", "Elzeroo", $perc);

  echo "<br>";

  echo $perc;

  echo "<br><br>&&&&&&&&&&&&&&&&&&";
  echo "<br>&&&&&&&&&&&&&&&&&&";
  echo "<br>&&&&&&&&&&&&&&&&&&<br><br>";

  /*
    String Functions
    - strstr(String[Required], Search[Required], Before_Search[Optional] = False)
    --- => Alias [strchr]
    --- Case-Sensitive
    - stristr(String[Required], Search[Required], Before_Search[Optional] = False)
    --- Case-Insensitive
    - number_format(Number[Required], Decimals[Optional], Decimal_String[Optional], Separator[Optional])
  */

  echo strstr("Elzero Web", "W") . "<br>"; // Web
  echo strstr("Elzero Web", "z") . "<br>"; // zero Web
  echo strstr("Elzero Web", "W", True) . "<br>"; // Elzero
  echo strlen(strstr("Elzero Web", "W", True)) . "<br>"; // 7


  echo strstr("Elzero Web", "w") . "<br>"; // False
  var_dump(strstr("Elzero Web", "w"));
  echo '<br>';


  echo stristr("Elzero Web", "w") . "<br>"; // Web
  var_dump(stristr("Elzero Web", "w")); // Web
  echo '<br>';

  echo 10_000_000;
  echo '<br>';

  echo number_format(10000000.156023);
  echo '<br>';
  echo number_format(10000000.156023, 3);
  echo '<br>';
  echo number_format(10000000.156023, 3, "@");
  echo '<br>';
  echo number_format(10000000.156023, 3, "@", "#");

  echo "<br><br>&&&&&&&&&&&&&&&&&&";
  echo "<br>&&&&&&&&&&&&&&&&&&";
  echo "<br>&&&&&&&&&&&&&&&&&&<br><br>";





  // Array Functions

  /*
    Array Functions

    - array_chunk(Array[Required], Length[Required], Preserve_Key[Optional])
    --- Split An Array Into Chunks [Return A Multidimensional Indexed Array]
    --- Preserve_Key
    ------ [False => Default] Reindex The Keys
    ------ [True] Preserve The Keys

    - array_change_key_case(Array[Required], Case[Optional])
    --- Changes The Case Of All Keys In An Array
    --- Case
    ------ [CASE_LOWER => Default] Changes The Keys To Lowercase
    ------ [CASE_UPPER] Changes The Keys To Uppercase

    - array_combine(Array_Of_Keys[Required], Array_Of_Values[Required])

    - array_count_values(Array[Required])
    --- Counts All The Values Of An Array

  */

  $friends = ["Osama", "Ahmed", "Sameh", "Mahmoud", "Gamal"];

  echo '<pre>';
  print_r(array_chunk($friends, 2));
  echo '</pre>';

  $countries = ["EG" => "Egypt", "KSA" => "Saudi Arabia", "Sy" => "Syria", "USA" => "United States"];

  echo '<pre>';
  print_r(array_chunk($countries, 2, True));
  echo '</pre>';

  echo '<pre>';
  print_r(array_change_key_case($countries, CASE_UPPER));
  echo '</pre>';

  $keys = ["A", "O", "K"];
  $values = ["Ahmed", "Osama", "Kamal"];

  echo '<pre>';
  print_r(array_combine($keys, $values));
  echo '</pre>';

  $counting = ["B", "A", "A", "B", "B", "B", "C"];

  echo '<pre>';
  print_r(array_count_values($counting));
  echo '</pre>';

  echo "<br><br>&&&&&&&&&&&&&&&&&&";
  echo "<br>&&&&&&&&&&&&&&&&&&";
  echo "<br>&&&&&&&&&&&&&&&&&&<br><br>";

  /*
    Array Functions

    - array_reverse(Array[Required], Preserve[Optional])
    --- Reverse Array Elements

    - array_flip(Array[Required])
    --- Exchange Keys With Its Values

    - count(Array[Required], Mode[Optional])
    --- Count Array Elements
    --- Mode
    ------ 0 => Default => Does Not Count Elements Of Multidimensional Arrays
    ------ 1 => Count Elements Of Multidimensional Arrays

    - in_array(Search[Required], Array[Required], Type[Optional])
    --- Checks If A Value Exists In An Array

    - array_key_exists(Key[Required], Array[Required])
    --- Check If Key Is Exists

  */

  $family = ["Osama", "Ahmed", "Sameh", "Mahmoud", "Gamal", ["Eman", "Noha"]];

  echo '<pre>';
  print_r($family);
  print_r(array_reverse($family, True));
  echo '</pre>';

  $countries = ["EG" => "Egypt", "KSA" => "Saudi Arabia", "Sy" => "Syria", "USA" => "United States"];

  echo '<pre>';
  print_r(array_flip($countries));
  echo '</pre>';

  $counting = [
    "A",
    "B",
    "C",
    [1, 2, 3]
  ];

  echo count($counting, 1);

  echo '<br>';

  $search = ["1", 2, 3, 4];

  if (in_array(1, $search, True)) {
    echo "The Element Is Found";
  }

  echo '<br>';

  $courses = [
    "Javascript" => 95,
    "PHP" => 100,
    "HTML" => 60,
    "CSS" => 65
  ];

  if (array_key_exists("PHP", $courses)) {
    echo "The Course Is Found And The Price Is: " . $courses["PHP"];
  }

  echo "<br><br>&&&&&&&&&&&&&&&&&&";
  echo "<br>&&&&&&&&&&&&&&&&&&";
  echo "<br>&&&&&&&&&&&&&&&&&&<br><br>";

  /*
    Array Functions

    - array_keys(Array[Required], Value[Optional], Type[Optional])
    --- Return The Array Keys
    --- Type
    ------ False => Default => No Checking For Type
    ------ True => Check For Type

    - array_values(Array[Required])
    --- Return All The Values Of An Array

    - array_pad(Array[Required], Size[Required], Value[Required])
    --- Pad Array To The Specified Length With A Value
    --- Negative Value Add Elements Before Original Items
    --- If Size < Array Length Nothing Will Be Deleted

    - array_product(Array[Required])
    --- Calculate The Product Of Values In An Array => Return Int || Float
    --- In Mathematics, A Product Is The Result Of Multiplication

    - array_sum(Array[Required])
    -- Calculate The Sum Of Values In An Array

  */

  $friends = ["Osama", "Ahmed", "Sameh", "Mahmoud", "Gamal", "Osama", "Eman", 1, "1"];

  echo '<pre>';
  print_r(array_keys($friends));
  echo '</pre>';

  echo '<pre>';
  print_r(array_keys($friends, "Osama"));
  echo '</pre>';

  echo '<pre>';
  print_r(array_keys($friends, 1, True));
  echo '</pre>';

  $countries = ["EG" => "Egypt", "KSA" => "Saudi Arabia", "Sy" => "Syria", "USA" => "United States"];

  echo '<pre>';
  print_r(array_values($countries));
  echo '</pre>';

  $pad = ["A", "B", "C", "D"];

  echo '<pre>';
  print_r(array_pad($pad, 10, "@"));
  echo '</pre>';

  echo '<pre>';
  print_r(array_pad($pad, -10, "@"));
  echo '</pre>';

  echo '<pre>';
  print_r(array_pad($pad, 2, "@"));
  echo '</pre>';

  $product = [10, 5, 2, 10];

  echo array_product($product) . "<br>";

  $sum = [10, 5, 2, 10];

  echo array_sum($sum);


  echo "<br><br>&&&&&&&&&&&&&&&&&&";
  echo "<br>&&&&&&&&&&&&&&&&&&";
  echo "<br>&&&&&&&&&&&&&&&&&&<br><br>";


  /*
    Array Functions

    --- Every Array Has An Internal Pointer To Its "Current" Element
    --- Which Is Initialized To The First Element.
    --- Functions Returns Value Of Array Element That's Currently Pointed By The Internal Pointer

    - current(Array[Required]) => Return The Current Element In An Array
    - next(Array[Required]) => Advance The Internal Pointer
    - prev(Array[Required]) => Rewind The Internal Pointer
    - reset(Array[Required]) => Put The Internal Pointer On First Element
    - end(Array[Required]) => Put The Internal Pointer On Last Element

  */

  $friends = ["Osama", "Ahmed", "Sameh", "Mahmoud", "Gamal", "Eman"];

  echo current($friends) . "<br>"; // "Osama"
  echo next($friends) . "<br>"; // "Ahmed"
  echo current($friends) . "<br>"; // "Ahmed"
  echo next($friends) . "<br>"; // "Sameh"
  echo current($friends) . "<br>"; // "Sameh"
  echo prev($friends) . "<br>"; // "Ahmed"
  echo reset($friends) . "<br>"; // "Osama"
  echo current($friends) . "<br>"; // "Osama"
  echo end($friends) . "<br>"; // "Eman"
  echo current($friends) . "<br>"; // "Eman"


  echo "<br><br>&&&&&&&&&&&&&&&&&&";
  echo "<br>&&&&&&&&&&&&&&&&&&";
  echo "<br>&&&&&&&&&&&&&&&&&&<br><br>";

  /*
    Array Functions

    - array_merge(Array[Required], Other_Array/s[Optional])
    --- Merge One Or More Arrays
    ------ Later Array Key With The Same Name Override The Value Of The Previous One
    ------ Numeric Key Will Be Renumbered

    - array_replace(Array[Required], Replacement/s[Optional])
    --- Replaces Elements From Passed Arrays Into The First Array
    ------ Same Key => Value In Second Array Replace Same Key => Value In First Array
    ------ If Key In Second Array Not Found In Fisrt Array It Will Be Created

    - array_rand(Array[Required], Num[Optional])
    --- Pick One Or More Random Keys Out Of An Array

    - shuffle(Array[Required])
    --- Shuffle An Array
  */


  $merge_one = ["One" => "PHP", "Two" => "CSS", "Three" => "JavaScript"];
  $merge_two = ["One" => "HTML", "Four" => "Python"];

  echo '<pre>';
  print_r(array_merge($merge_one, $merge_two));
  echo '</pre>';

  $merge_three = [10 => "PHP", 20 => "CSS", 30 => "JavaScript"];
  $merge_four = [40 => "Python", "10" => "Go"];

  echo '<pre>';
  print_r(array_merge($merge_three, $merge_four));
  echo '</pre>';

  $main = ["One" => "PHP", "Two" => "CSS", "Three" => "JavaScript"];
  $replace = ["One" => "HTML", "Four" => "Python"];

  echo '<pre>';
  print_r(array_replace($main, $replace));
  echo '</pre>';

  echo '<pre>';
  print_r(array_replace($merge_three, $merge_four));
  echo '</pre>';

  $nums = ["A", "B", "C", "D"];

  echo $nums[array_rand($nums)] . "<br>";

  echo '<pre>';
  print_r(array_rand($nums, 3));
  echo '</pre>';

  shuffle($nums);

  echo '<pre>';
  print_r($nums);
  echo '</pre>';

  echo "<br><br>&&&&&&&&&&&&&&&&&&";
  echo "<br>&&&&&&&&&&&&&&&&&&";
  echo "<br>&&&&&&&&&&&&&&&&&&<br><br>";


  /*
    Array Functions

    - array_shift(Array[Required])
    --- Shift An Element Off The Beginning Of Array
    --- This Function Will Reset => "reset()" The Input Array Pointer

    - array_pop(Array[Required])
    --- Pop The Element Off Ehe End Of Array
    --- This Function Will Reset => "reset()" The Input Array Pointer

    - array_push(Array[Required], Values[Optional])
    --- Push One Or More Elements Onto The End Of Array
    --- You Can Use $arr[]

    - array_unshift(Array[Required], Values[Optional])
    --- Add One Element In The Beginning Of An Array
    --- This Function Will Reset => "reset()" The Input Array Pointer
  */


  $chars = ["A", "B", "C", "D"];

  echo '<pre>';
  print_r($chars);
  echo '</pre>';

  $first = array_shift($chars);

  echo "$first<br>"; // "A"

  echo '<pre>';
  print_r($chars);
  echo '</pre>';

  $last = array_pop($chars);

  echo "$last<br>"; // "D"

  echo '<pre>';
  print_r($chars);
  echo '</pre>';

  array_push($chars, "X", "Y", "Z");

  echo '<pre>';
  print_r($chars);
  echo '</pre>';

  array_push($chars, "1");

  $chars[] = "1";

  echo '<pre>';
  print_r($chars);
  echo '</pre>';

  array_unshift($chars, "One", "Two", "Three");

  echo '<pre>';
  print_r($chars);
  echo '</pre>';


  echo "<br><br>&&&&&&&&&&&&&&&&&&";
  echo "<br>&&&&&&&&&&&&&&&&&&";
  echo "<br>&&&&&&&&&&&&&&&&&&<br><br>";

  /*
    Array Functions

    - array_slice(Array[Required], Start[Required], Length[Optional], Preserve_Keys[Optional])
    --- Extract A Slice Of The Array
    --- Start
    ------ 0 From Start
    ------ -1 From Last Element
    --- Length
    ------ Negative => Stop Slicing Until This Index
    ------ Not Set => All Elements From Start Position
    --- Preserve Keys
    ------ False => Default => Reset Keys
    ------ True => Preserve Keys
    --- If Array Have String Keys, It Will Always Preserve The Keys

    - array_splice(Array[Required], Start[Required], Length[Optional], Array[Optional])
    --- Remove A Portion Of The Array And Replace It With Something Else
    --- Start
    ------ 0 From Start
    ------ -1 From Last Element
    --- Length
    ------ Negative => Stop Removing Until This Index
    ------ Not Set => Remove All Elements From Start Position

  */


  $chars = ["A", "B", "C", "D", "E", "F", "G"];
  $chars_with_string_keys = ["A" => 1, "B" => 2, "C" => 3];
  $chars_with_numeric_keys = [10 => 1, 20 => 2, 30 => 3];

  echo '<pre>';
  print_r(array_slice($chars, 2));
  print_r(array_slice($chars, -4));
  print_r(array_slice($chars, 2, 3));
  print_r(array_slice($chars, 2, -2));
  echo '</pre>';

  echo '<pre>';
  print_r(array_slice($chars_with_string_keys, 0, 2));
  print_r(array_slice($chars_with_numeric_keys, 0, 2));
  print_r(array_slice($chars_with_numeric_keys, 0, 2, True));
  echo '</pre>';

  echo '<pre>';
  print_r($chars);
  echo '</pre>';

  $nums = [10, 20, 30, 40, 50, 60, 70];

  echo '<pre>';
  print_r(array_splice($nums, 2, 1, ["One", "Two"]));
  print_r($nums);
  echo '</pre>';

  echo "<br><br>&&&&&&&&&&&&&&&&&&";
  echo "<br>&&&&&&&&&&&&&&&&&&";
  echo "<br>&&&&&&&&&&&&&&&&&&<br><br>";

  /*
    Array Functions

    - sort(Array[Required], Flag[Optional])
    --- Sort An Indexed Array In Ascending Order

    - rsort(Array[Required], Flag[Optional])
    - Sort An Indexing Array In Descending Order

    - asort(Array[Required], Flag[Optional])
    --- Sort An Associative Array In Ascending Order According To The Value

    - arsort(Array[Required], Flag[Optional])
    --- Sort An Associative Array In Descending Order According To The Value

    - ksort(Array[Required], Flag[Optional])
    --- Sort An Associative Array In Ascending Order According To The Key

    - krsort(Array[Required], Flag[Optional])
    --- Sort An Associative Array In Descending Order According To The Key

    - natsort(Array[Required], Flag[Optional])
    --- Sorts An Array By Using A "Natural Order" Algorithm

    Practice
    -- Flags
    -- Our Own Sorting Function

  */

  $names = ["Osama", "Ahmed", "Sayed", "Mahmoud", "Sameh", "Gamal"];

  sort($names);

  echo '<pre>';
  print_r($names);
  echo '</pre>';

  rsort($names);

  echo '<pre>';
  print_r($names);
  echo '</pre>';

  $countries = ["S" => "Syria", "E" => "Egypt", "I" => "Iraq", "Q" => "Qatar"];

  asort($countries);

  echo '<pre>';
  print_r($countries);
  echo '</pre>';

  arsort($countries);

  echo '<pre>';
  print_r($countries);
  echo '</pre>';

  $codes = ["1" => "Syria", "3" => "Egypt", "2" => "Iraq", "5" => "Qatar"];

  ksort($codes);

  echo '<pre>';
  print_r($codes);
  echo '</pre>';

  krsort($codes);

  echo '<pre>';
  print_r($codes);
  echo '</pre>';

  $files = ["Photo1.png", "Photo20.png", "Photo3.png"];

  sort($files);

  echo '<pre>';
  print_r($files);
  echo '</pre>';

  natsort($files);

  echo '<pre>';
  print_r($files);
  echo '</pre>';



  echo "<br><br>&&&&&&&&&&&&&&&&&&";
  echo "<br>&&&&&&&&&&&&&&&&&&";
  echo "<br>&&&&&&&&&&&&&&&&&&<br><br>";



  /*
    Array Functions

    - array_map(Callback Function[Required], Array[Required], Other Arrays[Optional])
    --- Applies The Callback To The Elements Of The Given Arrays

    - array_filter(Array[Required], Callback Function[Required], Flag[Optional])
    --- Filter Values Of An Array Using A Callback Function
    --- Flag
    ------ ARRAY_FILTER_USE_KEY
    ------ ARRAY_FILTER_USE_BOTH
    ------ 0 Default => Send Value As Arguments

  */

  function add_title($fname, $lname)
  {
    return "Hello Mr $fname $lname";
  }

  // echo add_title("Osama");

  $first_names = ["Osama", "Ahmed", "Sayed", "Mahmoud", "Sameh", "Gamal"];
  $last_names = ["Ameer", "Samy", "Shady", "Amr", "Mohamed", "Ibrahim"];

  echo '<pre>';
  print_r(array_map("add_title", $first_names, $last_names));
  print_r(array_map(fn($f, $l) => "Hello Mr $f $l", $first_names, $last_names));
  echo '</pre>';

  $nums = [
    1 => 3,
    6 => 1,
    3 => 2,
    4 => 8,
    5 => 4
  ];

  function check_nums($n1, $n2)
  {
    return $n1 > 4 || $n2 > 4;
  }

  echo '<pre>';
  print_r(array_filter($nums, "check_nums", ARRAY_FILTER_USE_BOTH));
  echo '</pre>';



  echo "<br><br>&&&&&&&&&&&&&&&&&&";
  echo "<br>&&&&&&&&&&&&&&&&&&";
  echo "<br>&&&&&&&&&&&&&&&&&&<br><br>";


  /*
    Array Functions

    - array_reduce(Array[Required], Callback Function[Required], Initial_Value[Optional])
    --- Reduce The Array To A Single Value
    --- Carry => The Value Of The Previous Iteration || Initial Value
    --- Item => The Value Of The Current Iteration

  */

  function add($carry, $item)
  {
    echo "$carry<br>";
    echo "$item<br>";
    echo $carry + $item . "<br>";
    echo "###########<br>";
    return $carry + $item;
  }

  $nums = [10, 20, 50, 100, 10];

  echo array_reduce($nums, "add", 100);




  echo "<br><br>&&&&&&&&&&&&&&&&&&";
  echo "<br>&&&&&&&&&&&&&&&&&&";
  echo "<br>&&&&&&&&&&&&&&&&&&<br><br>";



  /*
    Math Functions

    - abs(Number[Required])
    --- Absolute Value => Non Negative Value

    - mt_rand(min[Optional], max[Optional]) || rand(min[Optional], max[Optional])
    --- mt_getrandmax() => Show Largest Possible Random Value
    --- Generate Random Value Via The Mersenne Twister Random Number Generator Algorithm

    - intdiv(dividend[Required], divisor[Required])
    --- Integer Division
    --- intdiv vs /

    - fmod(dividend[Required], divisor[Required])
    --- Floating Point Remainder (Modulo)
    --- fmod vs %
  */

  echo abs(10) . "<br>";
  echo abs(0) . "<br>";
  echo abs(-20) . "<br>";

  echo rand() . "<br>";
  echo mt_getrandmax() . "<br>";
  echo rand(50, 60) . "<br>";

  echo 10 / 5 . "<br>";
  echo gettype(10 / 5) . "<br>";

  echo 11 / 5 . "<br>";
  echo gettype(11 / 5) . "<br>";

  echo intdiv(11, 5) . "<br>";
  echo gettype(intdiv(11, 5)) . "<br>";

  echo 11.5 % 5 . "<br>";
  echo gettype(11 % 5) . "<br>";

  echo fmod(11.5, 5) . "<br>";
  echo gettype(fmod(11.5, 5)) . "<br>";



  echo "<br><br>&&&&&&&&&&&&&&&&&&";
  echo "<br>&&&&&&&&&&&&&&&&&&";
  echo "<br>&&&&&&&&&&&&&&&&&&<br><br>";



  /*
    Math Functions

    - ceil(Number[Required])
    --- Round Up To Integer

    - floor(Number[Required])
    --- Round Down To Integer
  */

  // -1 -2 -3 -4 -5 -6
  // 1  2  3  4  5  6

  echo ceil(5.99) . "<br>";
  echo ceil(5.49) . "<br>";
  echo ceil(5.10) . "<br>";
  echo ceil(5.01) . "<br>";
  echo ceil(-5.99) . "<br>"; // -5

  echo floor(5.99) . "<br>";
  echo floor(5.49) . "<br>";
  echo floor(5.10) . "<br>";
  echo floor(5.01) . "<br>";
  echo floor(-5.99) . "<br>"; // -6


  echo "<br><br>&&&&&&&&&&&&&&&&&&";
  echo "<br>&&&&&&&&&&&&&&&&&&";
  echo "<br>&&&&&&&&&&&&&&&&&&<br><br>";


  /*
    Math Functions

    - round(Number[Required], Precision[Optional], Mode[Optional])
    --- Round Up To Integer
    --- Mode
    ------ PHP_ROUND_HALF_UP
    ------ PHP_ROUND_HALF_DOWN
    ------ PHP_ROUND_HALF_EVEN
    ------ PHP_ROUND_HALF_ODD

    - ceil, floor, round => Return Double
  */

  echo round(5.99) . "<br>";
  echo round(5.50) . "<br>";
  echo round(5.49) . "<br>";
  echo round(5.10) . "<br>";

  echo round(5.99, 1) . "<br>"; // 6
  echo round(5.94, 1) . "<br>"; // 5.9
  echo round(5.995, 2) . "<br>"; // 6
  echo round(5.994, 1) . "<br>"; // 6
  echo round(5.994, 2) . "<br>"; // 5.99

  echo round(5.99, 0, PHP_ROUND_HALF_UP) . "<br>";
  echo round(5.49, 0, PHP_ROUND_HALF_UP) . "<br>";

  echo round(5.50, 0, PHP_ROUND_HALF_DOWN) . "<br>";

  echo round(5.50, 0, PHP_ROUND_HALF_EVEN) . "<br>";
  echo round(4.50, 0, PHP_ROUND_HALF_EVEN) . "<br>";

  echo round(5.50, 0, PHP_ROUND_HALF_ODD) . "<br>";
  echo round(4.50, 0, PHP_ROUND_HALF_ODD) . "<br>";



  echo "<br><br>&&&&&&&&&&&&&&&&&&";
  echo "<br>&&&&&&&&&&&&&&&&&&";
  echo "<br>&&&&&&&&&&&&&&&&&&<br><br>";


  /*
    Math Functions

    - sqrt(Number[Required])
    --- Square Root

    - min(array[Required]) || min(Values[Required])
    --- Find Lowest Value

    - max(array[Required]) || min(Values[Required])
    --- Find Highest Value
  */

  echo sqrt(16) . "<br>"; // 4
  echo sqrt(25) . "<br>"; // 5
  echo sqrt(100) . "<br>"; // 10

  echo min(10, 20, -40, -30, 50) . "<br>"; // -40
  echo min([10, 20, -40, -30, 50]) . "<br>"; // -40

  echo "<pre>";
  print_r(min([1, 3, 5], [1, 2, 6]));
  echo "</pre>";

  echo max(10, 20, -40, -30, 50) . "<br>"; // 50
  echo max([10, 20, -40, -30, 50]) . "<br>"; // 50

  echo "<pre>";
  print_r(max([1, 3, 5], [1, 2, 6]));
  echo "</pre>";


  echo "<br><br>&&&&&&&&&&&&&&&&&&";
  echo "<br>&&&&&&&&&&&&&&&&&&";
  echo "<br>&&&&&&&&&&&&&&&&&&<br><br>";



  /*
    Filter Functions

    - filter_list()
    --- Returns A List Of All Supported Filters

    - filter_id(Filter_Name[Required])

    - filter_var(Value[Required], Filter[Optional], Options[Optional])
    --- Filters A Variable With A Specified Filter
  */

  echo "<pre>";
  print_r(filter_list());
  echo "</pre>";

  echo filter_id("boolean") . "<br>"; // 258

  $val = "on"; // True || 1 || "yes" || "on"

  if (filter_var($val, FILTER_VALIDATE_BOOL)) { // Or ID "258"

    echo "This Is True";
  } else {

    echo "This Is False";
  }




  echo "<br><br>&&&&&&&&&&&&&&&&&&";
  echo "<br>&&&&&&&&&&&&&&&&&&";
  echo "<br>&&&&&&&&&&&&&&&&&&<br><br>";



  /*
    Filter Functions

    - filter_var(Value[Required], Filter[Optional], Options[Optional])
    --- Validate Filters

    ------ FILTER_VALIDATE_BOOL => [True, 1, Yes, On]
    ---------- Flag => FILTER_NULL_ON_FAILURE => False For [False, 0, No, Off, ""] Only

    ------ FILTER_VALIDATE_URL
    ---------- Flag => FILTER_NULL_ON_FAILURE
    ---------- Flag => FILTER_FLAG_PATH_REQUIRED
    ---------- Flag => FILTER_FLAG_QUERY_REQUIRED

    ------ FILTER_VALIDATE_IP
    ---------- Flag => FILTER_NULL_ON_FAILURE
    ---------- Flag => FILTER_FLAG_IPV4
    ---------- Flag => FILTER_FLAG_IPV6

    ------ FILTER_VALIDATE_MAC
    ---------- Flag => FILTER_NULL_ON_FAILURE
  */

  $bool = "Elzero"; // True | 1 | "yes" | "on"

  var_dump(filter_var($bool, FILTER_VALIDATE_BOOL, FILTER_NULL_ON_FAILURE));

  echo "<br>";

  $url = "https://elzero.org/?id=100";

  var_dump(filter_var(
    $url,
    FILTER_VALIDATE_URL,
    ["flags" => FILTER_NULL_ON_FAILURE | FILTER_FLAG_PATH_REQUIRED | FILTER_FLAG_QUERY_REQUIRED]
  ));

  echo "<br>";

  $ip = "192.168.2.1";

  var_dump(filter_var($ip, FILTER_VALIDATE_IP, ["flags" => FILTER_NULL_ON_FAILURE | FILTER_FLAG_IPV6]));

  echo "<br>";

  $mac = "00:00:5e:00d:53:af";

  var_dump(filter_var($mac, FILTER_VALIDATE_MAC));



  echo "<br><br>&&&&&&&&&&&&&&&&&&";
  echo "<br>&&&&&&&&&&&&&&&&&&";
  echo "<br>&&&&&&&&&&&&&&&&&&<br><br>";


  /*
    Filter Functions

    - filter_var(Value[Required], Filter[Optional], Options[Optional])
    --- Validate Filters

    ------ FILTER_VALIDATE_EMAIL
    ---------- Flag => FILTER_NULL_ON_FAILURE

    ------ FILTER_VALIDATE_INT
    ---------- Flag => FILTER_NULL_ON_FAILURE
    ---------- Options => min_range
    ---------- Options => max_range
    ---------- Convert To Int On Success

    ------ FILTER_VALIDATE_FLOAT
    ---------- Flag => FILTER_NULL_ON_FAILURE
    ---------- Options => min_range
    ---------- Options => max_range
    ---------- Convert To Float On Success
  */

  $email = "o@nn.sa";

  var_dump(filter_var($email, FILTER_VALIDATE_EMAIL, FILTER_NULL_ON_FAILURE));

  echo "<br>";

  $int = "90";

  var_dump(filter_var(
    $int,
    FILTER_VALIDATE_INT,
    ["flags" => FILTER_NULL_ON_FAILURE, "options" => ["min_range" => 50, "max_range" => 100]]
  ));

  echo "<br>";

  $float = "90.50";

  var_dump(filter_var(
    $float,
    FILTER_VALIDATE_FLOAT,
    ["flags" => FILTER_NULL_ON_FAILURE, "options" => ["min_range" => 50, "max_range" => 100]]
  ));




  echo "<br><br>&&&&&&&&&&&&&&&&&&";
  echo "<br>&&&&&&&&&&&&&&&&&&";
  echo "<br>&&&&&&&&&&&&&&&&&&<br><br>";



  /*
    Filter Functions

    - filter_var(Value[Required], Filter[Optional], Options[Optional])
    --- Sanitize Filters

    ------ FILTER_SANITIZE_EMAIL
    ------ Remove All But Letters + Digits + !#$%&#038;'*+-=?^_`{|}~@.[]
    ------ Test ¥

    ------ FILTER_SANITIZE_NUMBER_INT
    --------- Remove All But Digits, +, -

    ------ FILTER_SANITIZE_NUMBER_FLOAT
    --------- Remove ALL But Digits, +, - And Optionally [.,eE]
    --------- Flags => FILTER_FLAG_ALLOW_THOUSAND
    --------- Flags => FILTER_FLAG_ALLOW_FRACTION

    ------ FILTER_SANITIZE_URL
    ------ Remove All But Letters + Digits + $-_.+!*'(),{}|\\^~[]`<>#%";/?:@&=.
    ------ Test ¥ + Space
  */

  $email = "o@n  ¥   n.sa";

  var_dump(filter_var($email, FILTER_SANITIZE_EMAIL));

  echo "<br>";

  $int = "100 + !@@@LHKLJKJFKLJKLJFKL  f;ldkf;lsdkfl;ksdf;lkdsf===-100";

  var_dump(filter_var($int, FILTER_SANITIZE_NUMBER_INT));

  echo "<br>";

  $float = "1,950,150.65AAASSS    sdfdsfsdfsdf@@@@41";

  var_dump(filter_var(
    $float,
    FILTER_SANITIZE_NUMBER_FLOAT,
    ["flags" => FILTER_FLAG_ALLOW_THOUSAND | FILTER_FLAG_ALLOW_FRACTION]
  ));

  echo "<br>";

  $url = "https://el         zer¥¥¥¥¥o.org";

  var_dump(filter_var($url, FILTER_SANITIZE_URL));

  echo "<br>";



  echo "<br><br>&&&&&&&&&&&&&&&&&&";
  echo "<br>&&&&&&&&&&&&&&&&&&";
  echo "<br>&&&&&&&&&&&&&&&&&&<br><br>";



  /*
    Filter Functions

    - filter_input(Type[Required], Value[Required], Filter[Optional], Options[Optional])
    --- INPUT_GET
    --- INPUT_POST
    --- INPUT_COOKIE
    --- INPUT_SERVER
    --- INPUT_ENV

    -- FILTER_VALIDATE_INT
    -- FILTER_NULL_ON_FAILURE
  */

  // echo $_GET["num"];

  echo filter_input(INPUT_GET, "num", FILTER_SANITIZE_NUMBER_INT);

  // 
  // 

  // <form action="" method="GET">
  // <input type="text" name="num">
  // <input type="submit" value="Send">
  // </form>





  echo "<br><br>&&&&&&&&&&&&&&&&&&";
  echo "<br>&&&&&&&&&&&&&&&&&&";
  echo "<br>&&&&&&&&&&&&&&&&&&<br><br>";





  /*
  File System Functions
  - disk_total_space()
  --- Get Total Space In Bytes => Then We Can Get [KB, MB, GB]
  - disk_free_space() || diskfreespace()
  --- Get Free Space In Bytes => Then We Can Get [KB, MB, GB]
  - file_exists(Path)
  --- Checks If A File Or Directory Exists
  - filesize(File_Name)
  --- Get Space In Bytes
  */

  echo round(disk_total_space("C:") / 1024 / 1024 / 1024) . "<br>";
  echo round(disk_free_space("C:") / 1024 / 1024 / 1024) . "<br>";
  var_dump(file_exists("elzero.txt"));
  echo '<br>';
  echo filesize("elzero.txt");




  echo "<br><br>&&&&&&&&&&&&&&&&&&";
  echo "<br>&&&&&&&&&&&&&&&&&&";
  echo "<br>&&&&&&&&&&&&&&&&&&<br><br>";



  /*
    File System Functions
    - is_dir(Name)
    --- Tells If The Filename Is A Directory
    - mkdir(Path[Required], Mode[Optional] = 0777, Recursive[Optional], Context[Optional])
    --- Permissions Is Ignored On Windows
    --- Permissions Is Octal Number Start With 0
    ------ Second Number Is => Owner Permission
    ------ Third Number Is => User Group Permission
    ------ Fourth Number Is => Others Permissions
    - rmdir(Name[Required], Context[Optional])
  */

  // var_dump(is_dir("Lessons"));
  echo '<br>';
  // var_dump(is_dir("elzero.txt"));
  echo '<br>';
  // mkdir("Test/Upload/Files", 0777, true);
  echo '<br>';
  // rmdir("Test");
  // var_dump(file_exists("Test/Upload/Files"));



  echo "<br><br>&&&&&&&&&&&&&&&&&&";
  echo "<br>&&&&&&&&&&&&&&&&&&";
  echo "<br>&&&&&&&&&&&&&&&&&&<br><br>";




  /*
    File System Functions
    - chmod(File[Required], Mode[Required])
    --- Change Mode
    - fileperms(Name)
    --- Gets File Permissions
    - clearstatcache()
    --- Clear Cache

    - You Can Change Owner chown()
    - You Can Change Group chgrp()
  */

  // mkdir("Y", 0700);
  // echo fileperms("Y") . "<br>";
  // chmod("Y", 0644);
  // clearstatcache();
  // echo fileperms("Y") . "<br>";




  echo "<br><br>&&&&&&&&&&&&&&&&&&";
  echo "<br>&&&&&&&&&&&&&&&&&&";
  echo "<br>&&&&&&&&&&&&&&&&&&<br><br>";





  /*
    File System Functions
    - basename(Path[Required], Suffix[Optional])
    --- Returns Trailing Name Component Of Path
    - dirname(Path[Required], Levels[Optional] = 1)
    --- Returns A Parent Directory's Path
    --- Levels => Number of Parent Directories To Go Up
    - realpath(Path[Required])
    --- Returns Absolute Path
    - pathinfo(Path[Required], Flags[Optional]) => Return Array
    --- PATHINFO_DIRNAME
    --- PATHINFO_BASENAME
    --- PATHINFO_EXTENSION
    --- PATHINFO_FILENAME
  */

  echo basename(__FILE__) . "<br>";
  echo basename(__FILE__, ".php") . "<br>";

  echo dirname(__FILE__, 3) . "<br>";

  echo realpath(__FILE__) . "<br>";

  echo "<pre>";
  print_r(pathinfo(__FILE__));
  echo "</pre>";

  echo pathinfo(__FILE__)["extension"] . "<br>";
  echo pathinfo(__FILE__)["dirname"] . "<br>";

  echo pathinfo(__FILE__, PATHINFO_DIRNAME) . "<br>";
  echo pathinfo(__FILE__, PATHINFO_DIRNAME) . "<br>";




  echo "<br><br>&&&&&&&&&&&&&&&&&&";
  echo "<br>&&&&&&&&&&&&&&&&&&";
  echo "<br>&&&&&&&&&&&&&&&&&&<br><br>";



  /*
    File System Functions
    - Fopen(FileName[Required], Mode[Required], IncludePath[Optional], Context[Optional])

    --- Mode
    --- [r] For Read => Pointer At The Beginning
    --- [r+] For Read & Write => Pointer At The Beginning
    --- [w] For Write => Pointer At The Beginning + Truncate To 0 Length => Create If Not Exists
    --- [w+] For Read & Write => Pointer At The Beginning + Truncate To 0 Length => Create If Not Exists

    - fgets(File[Required], Length[Optional])
    --- Get A Line From An Open File
    --- Length => Number Of Bytes To Read || End Of Line If No Length
    - fread(File[Required], Length[Required])
    --- Get A Data From An Open File
    --- Length => Maximum Number Of Bytes To Read
    - fclose(File[Required])
    --- Closes An Open File Pointer
  */

  // $handle = fopen("elzero.txt", "r");

  // echo fgets($handle, 4);

  // echo fread($handle, 1024);

  // fclose($handle);




  echo "<br><br>&&&&&&&&&&&&&&&&&&";
  echo "<br>&&&&&&&&&&&&&&&&&&";
  echo "<br>&&&&&&&&&&&&&&&&&&<br><br>";



  /*
  File System Functions
  - Fopen(FileName[Required], Mode[Required], IncludePath[Optional], Context[Optional])

  --- Mode

  --- [a] For Write => Pointer At The End + Create If Not Exists
  --- [a+] For Read & Write => Pointer At The End + Create If Not Exists
  --- [x] Create + Open For Write => Pointer At The Beginning
  --- [x+] Create + Open For Read & Write => Pointer At The Beginning

  - fwrite(File[Required], String[Required], Length[Optional])
  --- Write To An Open File
  --- Length => Maximum Number Of Bytes To Write
*/

  // $handle = fopen("elzero.txt", "r");

  // fwrite($handle, "\r\nThis Is A New Line 1", 5);
  // fwrite($handle, "\r\nThis Is A New Line 2");

  // fclose($handle);



  echo "<br><br>&&&&&&&&&&&&&&&&&&";
  echo "<br>&&&&&&&&&&&&&&&&&&";
  echo "<br>&&&&&&&&&&&&&&&&&&<br><br>";



  /*
  File System Functions
  - Fopen(FileName[Required], Mode[Required], IncludePath[Optional], Context[Optional])

  --- [c]
  ------ For Write
  ------ Create If Not Exists
  ------ No Problem If Its Exists
  ------ No Truncation
  ------ Pointer At The Beginning
  --- [c+] For Read &#038; Write

  - file(File[Required], Flag[Optional], Context[Optional])
  --- Read Entire File Into Array
  - feof(File[Required])
  --- Tests For EOF On A File Pointer
*/

  // echo '<pre>';
  // print_r(file("elzero.txt"));
  // echo '</pre>';

  // echo count(file("elzero.txt"));

  // $handle = fopen("elzero.txt", "r");

  // $line = 1;

  // while (! feof($handle)) {

  //   echo "Line $line => " . fgets($handle) . "<br>";

  //   $line++;

  // }

  // for ($i = 0; $i < count(file("elzero.txt")); $i++) {

  // echo fgets($handle) . "<br>";
  // }

  // fclose($handle);



  echo "<br><br>&&&&&&&&&&&&&&&&&&";
  echo "<br>&&&&&&&&&&&&&&&&&&";
  echo "<br>&&&&&&&&&&&&&&&&&&<br><br>";


  /*
  File System Functions
  - Fopen(FileName[Required], Mode[Required], IncludePath[Optional], Context[Optional])

  - rewind(File[Required])
  --- Return The Pointer To The Beginning Of The File

  - ftell(File[Required])
  --- Return Current Position Of The Pointer

  - fseek(File[Required], Offset[Required], Whence[Optional] = SEEK_SET)
  --- Go To A Position
  --- Offset In Bytes
  --- SEEK_SET => Equal To Offset
  --- SEEK_CUR => Current + Offset
  --- SEEK_END => EOF + Offset [Accept Negative]
*/

  // $handle = fopen("elzero.txt", "r");

  // echo ftell($handle) . "<br>"; // 0

  // echo fgets($handle) . "<br>";

  // echo fgets($handle) . "<br>";

  // rewind($handle);

  // echo fgets($handle) . "<br>"; // Elzero

  // echo ftell($handle) . "<br>"; // 8

  // echo fgets($handle) . "<br>"; // Elzero

  // fseek($handle, -6, SEEK_END);

  // echo fgets($handle) . "<br>"; // zero Web School

  // fclose($handle);

  // echo mb_strlen("School", "8bit");



  echo "<br><br>&&&&&&&&&&&&&&&&&&";
  echo "<br>&&&&&&&&&&&&&&&&&&";
  echo "<br>&&&&&&&&&&&&&&&&&&<br><br>";



  /*
  File System Functions

  - glob(Pattern[Required], Flags[Optional])
  --- Find Pathnames Matching A Pattern And Return Array

  - rename(Old[Required], New[Required]) => Move
  --- Renames A File Or Directory

  - copy(Old[Required], New[Required], Context[Optional])
  --- Copy A File

  - unlink(File[Required], Context[Optional])
  --- Delete A File

  Same Concept
  - opendir()
  - readdir()
  - closedir()
*/

  // echo "<pre>";
  // print_r(glob("Old/*.*"));
  // echo "</pre>";

  // Rename => Same Place
  // rename("Old/Test.txt", "Old/Testing.txt");

  // Rename => Other Place => "Cut" || "Move"
  // rename("Old/Testing.txt", "New/Testing_2.txt");

  // Move To Other Place
  // rename("Old/Elzero.pptx", "New/Elzero.pptx");

  // Copy Without Rename
  // copy("Old/Info.docx", "New/info.docx");

  // Copy With Rename
  // copy("Old/Work.txt", "New/working.txt");

  // unlink("Old/Work.rtf");



  echo "<br><br>&&&&&&&&&&&&&&&&&&";
  echo "<br>&&&&&&&&&&&&&&&&&&";
  echo "<br>&&&&&&&&&&&&&&&&&&<br><br>";




  /*
  File System Functions

  - file_get_contents(File[Required], Include_Path[Optional], Context[Optional], Start[Optional], MaxLength(Optional))
  --- Reads Entire File Into A String

  - file_put_contents(File[Required], Data[Required], Mode[Optional], Context[Optional])
  --- Write Data To File
  --- Mode
  ------ FILE_APPEND => If File Exists Append To It

  - Create If Not Exists
  - Open And Close
  - Return Number Of Bytes

  Search
  - Get Set Include Path

*/

  // echo get_include_path() . "<br>";

  // echo file_get_contents("elzero.txt", true, NULL, 4, 5);

  // echo file_get_contents("https://elzero.net");

  // print_r(file("https://elzero.net"));

  // echo file_put_contents("elzero.txt", "\r\nThis Is New Line", FILE_APPEND);



  echo "<br><br>&&&&&&&&&&&&&&&&&&";
  echo "<br>&&&&&&&&&&&&&&&&&&";
  echo "<br>&&&&&&&&&&&&&&&&&&<br><br>";



  /*
    Date And Time Functions

    - date_default_timezone_get()

    - date_default_timezone_set(timezone[Required])

    - date_create(Date/Time[Optional], Timezone[Optional])
    --- Time: Date/Time String || Current Time If NULL
    --- Timezone: Timezone String || Current Timezone

    - timezone_open(Timezone)

    - checkdate(M, D, Y) => All Required
    --- Validate A Gregorian Date

    Will Cover Later
    - date()
    - date_format()

  */

  // Get Timezone

  echo date_default_timezone_get() . "<br>";

  // Print Date And Time

  echo date("Y-m-d H:i:s") . "<br>";

  // Change Timezone

  date_default_timezone_set("Africa/Cairo");

  // Print Date And Time Again

  echo date("Y-m-d H:i:s") . "<br>";

  // Get Timezone Again

  echo date_default_timezone_get() . "<br>";

  // Create Date Object

  $d = date_create("", timezone_open("Indian/Antananarivo"));

  // Echo Date With Format

  echo date_format($d, "Y-m-d H:i:s");

  // Check Date

  echo "<br>";
  var_dump(checkdate(10, 25, 1982));
  echo "<br>";
  var_dump(checkdate(31, 02, 1982));
  echo "<br>";
  var_dump(checkdate(31, 02, 3500));
  echo "<br>";
  var_dump(checkdate(-2, 02, 1982));





  echo "<br><br>&&&&&&&&&&&&&&&&&&";
  echo "<br>&&&&&&&&&&&&&&&&&&";
  echo "<br>&&&&&&&&&&&&&&&&&&<br><br>";




  /*
    Date And Time Functions

    - date_format()

    [Year]
    - Y => Four Digits
    - y => Two Digits

    [Month]
    - m => 01-12
    - M => Text Month => 3 Letters
    - F => Full Text
    - t => Number Of Days In This Month

    [Day]
    - d => Day of The Month 1-31
    - j => Day Without Leading Zero
    - D => Text Day => 3 Letters
    - l => Full Text
    - z => Day Of The Year 0-365
    - S => st, rd, nth Suffix For Day Of The Month

    [Time]
    - a => Small am/pm
    - A => Capital AM/PM

    [Hour]
    - g => 1-12
    - h => 01-12
    - G => 0-23
    - H => 00-23

    [Minutes, Seconds, Micro]
    - i => 00-59
    - s => 00-59
    - u => Microseconds

  */

  date_default_timezone_set("Africa/Cairo");

  // $d = date_create("2022-10-01 15:5:3");
  $d = date_create();

  // Year
  echo date_format($d, "Y") . "<br>"; // 2022
  echo date_format($d, "y") . "<br>"; // 22

  // Month
  echo date_format($d, "Y-m") . "<br>";
  echo date_format($d, "Y-M") . "<br>";
  echo date_format($d, "Y-F") . "<br>";
  echo date_format($d, "t") . "<br>"; // 30

  // Day
  echo date_format($d, "Y-m-d") . "<br>";
  echo date_format($d, "Y-m-j") . "<br>";
  echo date_format($d, "Y-m-D") . "<br>";
  echo date_format($d, "Y-m-l") . "<br>";
  echo date_format($d, "Y-m-l z") . "<br>";
  echo date_format($d, "Y-m-l djDl") . "<br>";
  echo date_format($d, "Y-m-l S") . "<br>";




  /*
    Date And Time Functions

    - date_format()

    [Year]
    - Y => Four Digits
    - y => Two Digits

    [Month]
    - m => 01-12
    - M => Text Month => 3 Letters
    - F => Full Text
    - t => Number Of Days In This Month

    [Day]
    - d => Day of The Month 1-31
    - j => Day Without Leading Zero
    - D => Text Day => 3 Letters
    - l => Full Text
    - z => Day Of The Year 0-365
    - S => st, rd, nth Suffix For Day Of The Month

    [Time]
    - a => Small am/pm
    - A => Capital AM/PM

    [Hour]
    - g => 1-12
    - h => 01-12
    - G => 0-23
    - H => 00-23

    [Minutes, Seconds, Micro]
    - i => 00-59
    - s => 00-59
    - u => Microseconds

  */

  date_default_timezone_set("Africa/Cairo");

  // $d = date_create("2022-10-01 15:5:3");
  $d = date_create();

  // Year
  echo date_format($d, "Y") . "<br>"; // 2022
  echo date_format($d, "y") . "<br>"; // 22

  // Month
  echo date_format($d, "Y-m") . "<br>";
  echo date_format($d, "Y-M") . "<br>";
  echo date_format($d, "Y-F") . "<br>";
  echo date_format($d, "t") . "<br>"; // 30

  // Day
  echo date_format($d, "Y-m-d") . "<br>";
  echo date_format($d, "Y-m-j") . "<br>";
  echo date_format($d, "Y-m-D") . "<br>";
  echo date_format($d, "Y-m-l") . "<br>";
  echo date_format($d, "Y-m-l z") . "<br>";
  echo date_format($d, "Y-m-l djDl") . "<br>";
  echo date_format($d, "Y-m-l S") . "<br>";

  // Time
  echo date_format($d, "Y-m-d g a") . "<br>";
  echo date_format($d, "Y-m-d g A") . "<br>";
  echo date_format($d, "Y-m-d h a") . "<br>";
  echo date_format($d, "Y-m-d G") . "<br>";
  echo date_format($d, "Y-m-d H") . "<br>";
  echo date_format($d, "Y-m-d H/i/s") . "<br>";
  echo date_format($d, "Y-m-d H/i/s u") . "<br>";







  /*
    Date And Time Functions

    - date_format()

    [Year]
    - Y => Four Digits
    - y => Two Digits

    [Month]
    - m => 01-12
    - M => Text Month => 3 Letters
    - F => Full Text
    - t => Number Of Days In This Month

    [Day]
    - d => Day of The Month 1-31
    - j => Day Without Leading Zero
    - D => Text Day => 3 Letters
    - l => Full Text
    - z => Day Of The Year 0-365
    - S => st, rd, nth Suffix For Day Of The Month

    [Time]
    - a => Small am/pm
    - A => Capital AM/PM

    [Hour]
    - g => 1-12
    - h => 01-12
    - G => 0-23
    - H => 00-23

    [Minutes, Seconds, Micro]
    - i => 00-59
    - s => 00-59
    - u => Microseconds

  */

  date_default_timezone_set("Africa/Cairo");

  // $d = date_create("2022-10-01 15:5:3");
  $d = date_create();

  // Year
  echo date_format($d, "Y") . "<br>"; // 2022
  echo date_format($d, "y") . "<br>"; // 22

  // Month
  echo date_format($d, "Y-m") . "<br>";
  echo date_format($d, "Y-M") . "<br>";
  echo date_format($d, "Y-F") . "<br>";
  echo date_format($d, "t") . "<br>"; // 30

  // Day
  echo date_format($d, "Y-m-d") . "<br>";
  echo date_format($d, "Y-m-j") . "<br>";
  echo date_format($d, "Y-m-D") . "<br>";
  echo date_format($d, "Y-m-l") . "<br>";
  echo date_format($d, "Y-m-l z") . "<br>";
  echo date_format($d, "Y-m-l djDl") . "<br>";
  echo date_format($d, "Y-m-l S") . "<br>";

  // Time
  echo date_format($d, "Y-m-d g a") . "<br>";
  echo date_format($d, "Y-m-d g A") . "<br>";
  echo date_format($d, "Y-m-d h a") . "<br>";
  echo date_format($d, "Y-m-d G") . "<br>";
  echo date_format($d, "Y-m-d H") . "<br>";
  echo date_format($d, "Y-m-d H/i/s") . "<br>";
  echo date_format($d, "Y-m-d H/i/s u") . "<br>";



  /*
    Date And Time Functions

    - date_interval_create_from_date_string()
    - date_add()
    - date_sub()
    - date_modify()

  */

  date_default_timezone_set("Africa/Cairo");

  $d = date_create();

  // date_add($d, date_interval_create_from_date_string("1 year 2 months 5 days"));

  // date_sub($d, date_interval_create_from_date_string("1 year 2 months 5 days"));

  date_modify($d, "+20 months");

  echo date_format($d, "Y/m/d H-i-s a");




  /*
    Date And Time Functions

    - time()
    --- Unix Timestamp => Seconds Since 01 Jan 1970

    - getdate()

    - date_parse()

  */

  date_default_timezone_set("Africa/Cairo");

  echo time() . "<br>";

  echo time() / 60 . " Minutes<br>";
  echo time() / 60 / 60 . " Hours<br>";
  echo time() / 60 / 60 / 24 . " Days<br>";
  echo time() / 60 / 60 / 24 / 365 . " Years<br>";

  echo "<pre>";
  print_r(getdate());
  echo "</pre>";

  $t = getdate();

  echo $t["year"] . "<br>";

  echo "<pre>";
  print_r(date_parse("1985-2-31 5:25:15 UTC"));
  echo "</pre>";



  /*
    Date And Time Functions

    - date_diff()
    - strtotime(DateTime, Base)

  */

  date_default_timezone_set("Africa/Cairo");

  $reg = date_create("2022-01-09");
  $now = date_create("now");

  $diff = date_diff($reg, $now);

  echo '<pre>';
  print_r($diff);
  echo '</pre>';

  echo "You Are A Member For " . $diff->days . " Days<br>";

  echo date("Y-m-d H:i:s", strtotime("next Friday")) . "<br>";
  echo date("Y-m-d H:i:s", strtotime("+1 year")) . "<br>";
  echo date("Y-m-d H:i:s", strtotime("tomorrow")) . "<br>";
  echo date("Y-m-d M D H:i:s", strtotime("tomorrow", strtotime("1982-10-25"))) . "<br>";




  echo "<br><br>&&&&&&&&&&&&&&&&&&";
  echo "<br>&&&&&&&&&&&&&&&&&&";
  echo "<br>&&&&&&&&&&&&&&&&&&<br><br>";


  /*
    Cookies

    - Examples
    --- Popup
    --- Custom Settings
    --- Remember Me => Login

    - setcookie(Name[Required], Value, Expire, Path, Domain, Secure, HTTP_Only);
    --- Name
    --- Value
    --- Expire
    --- Path
    --- Domain
    --- Secure
    --- HTTP_Only
  */

  setcookie("style", "dark", time() + 60 * 60 * 24 * 30);


  /*
    Cookies

    - setcookie(Name[Required], Value, Expire, Path, Domain, Secure, HTTP_Only);
    --- Name
    --- Value
    --- Expire
    --- Path
    --- Domain
    --- Secure
    --- HTTP_Only

    Important
    - DO NOT Store Sensitive Information
    - Not Everything Saved To Cookies
  */

  setcookie("style", "dark", time() + 60 * 60 * 24 * 30, "/");
  setcookie("popup", "done", strtotime("+1 month"));

  echo "<pre>";
  print_r($_COOKIE);
  echo "</pre>";

  echo $_COOKIE["style"];


  /*
    Cookies
    - Modify
    - Delete
    - Add Array
  */

  setcookie("style[color]", "red");
  setcookie("style[font]", "Tahoma");
  setcookie("style[layout]", "boxed");

  echo "<pre>";
  print_r($_COOKIE);
  echo "</pre>";

  if (isset($_COOKIE["style"])) {
    echo $_COOKIE["style"]["font"];
  }


  /*
    Cookies
    - Practice
  */

  if (isset($_COOKIE["background"])) {
    echo "<style>body { background-color: " . $_COOKIE["background"] . " }</style>";
  }

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    setcookie("background", $_POST["bg-color"], strtotime("+1 year"));
    header("Location: " . $_SERVER["REQUEST_URI"]);
    exit();
  }



  echo "<br><br>&&&&&&&&&&&&&&&&&&";
  echo "<br>&&&&&&&&&&&&&&&&&&";
  echo "<br>&&&&&&&&&&&&&&&&&&<br><br>";


  /*
    Sessions
    - Session Is Stored On The Server
    - Session Store Only A User Key In Cookie To Know Its You
    - Key Are Generated By PHP Engine So Its Almost Impossible To Guess
    - You Need To Add It Before Any Output
  */

  session_start();

  $_SESSION['name'] = "Ahmed";
  $_SESSION['id'] = 1005;

  echo '<pre>';
  print_r($_SESSION);
  echo '</pre>';

  echo '<a href="test.php">Test</a>';



  /*
    Sessions
    - Advanced Information
    - Edit
    - Views Count
  */

  // session_id("lkjsdklfjksdfsdf");

  session_start();

  // echo session_id();

  $_SESSION['name'] = "Elzero";

  isset($_SESSION['views']) ? $_SESSION['views']++ : $_SESSION['views'] = 1;

  echo "Hello " . $_SESSION['name'] . " Views Count Is " . $_SESSION['views'];

  echo '<a href="about.php">About</a>';



   /*
    Sessions
    - Unset And Destroy
    - Login And Logout Simulation
  */
   /*

  session_start();

  // $_SESSION['name'] = "Elzero";
  // session_unset();
  // session_destroy();

  if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if ($_POST['user'] === "Osama") {
      $_SESSION['username'] = "Elzero";
      $_SESSION['id'] = 1005;
    }
  }

  echo '<pre>';
  print_r($_SESSION);
  echo '</pre>';

  if (isset($_SESSION['username'])) {
    echo "Welcome " . $_SESSION['username'];
  } else {

?>

<form action="" method="POST">
  <input type="text" name="user">
  <input type="submit" value="Login">
</form>

<?php } ?>

<a href="logout.php">Logout</a>
  */


  // logout.php
// session_start();
  // session_unset();
  // session_destroy();


  /*
    Header
    - Send RAW HTTP Header To Client To Manipulate Info Sent By Web Server Before Any Output
    - You Can Use To Control Cache Or Force File Download

    header(Header[Required], Replace[Optional] = True, Response_Code[Optional])
  */

  // header("HTTP/1.0 404 Not Found");
  // header("expires: Sat, 01 Jan 2022 01:00:00");
  // header("cache-control: no-cache, must-revalidate");
  // echo "<a href='test.php'>Test</a>";
  // header("Refresh:5; url=test.php");
  // header("Location: test.php");
  // exit;
