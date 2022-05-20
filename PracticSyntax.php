<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    //variable declaration
$name = "Michel";
$age = "33";

// send to web page by echo 
// you can put directly html tag in side quot or double quot 
echo "<br>My name is $name i'm $age yers old <br>"; //Double quot can put directry variables in side  
echo 'My name is '.$name ."i'm ".$age." yers old <br>"; //If it is single quot u have to use "." for concatenation
function run (){ // creating function same as js.
    global $name ,$age ; //this is how to declar the variable to be global
    echo "$name is running.<br>";
    $name = "Sansa";
};
run(); // run the fuction 
echo "$name out side the fuction <br>"; 
echo "Using var_dump keyword :";var_dump($name); //var_dump(); is how to show data types and value
echo "<br>";

// class creation
class Car {
    //attibute creation must has modifier public,private,protected
    public $color;
    public $model;
    //constructor creation 
    public function __construct($color,$model){
        $this->color = $color; //%this->color refer to color attibute line 34
        $this->model = $model;
    }
    public function message (){
        return "My car is a"." ".$this->color." ".$this->model;
    }
};
$mycar = new Car("red","Honda");
echo $mycar -> message();
echo "<br>";
echo "strlen hello world =";echo strlen('Hello world'); //strlen for return String's lenght
echo "<br>";
echo "str_word_count hello world =";echo str_word_count("hello woeld"); //str_word_count return words in case return 2
echo "<br>";
echo "strrev hello world =";echo strrev("hello world");//reverse the String
echo "<br>";
echo "strpos hello world =";echo strpos("hello world","wor");//find index of the word
echo "<br>";
echo "str_replace hello world : find world replace to Tony=";echo str_replace("world","Tony","hello world");//find index of the word
echo "<br>";
// cast float or string to int 
$x = 7465.365;$y = "7465.365";
echo $int_case = (int)$x;//output = 7465
echo "<br>";
echo $int_case = (int)$y;//output = 7465
echo "<br>";
// php math
echo(pi()."<br>");// output 3.1415926535898
echo(min(0,5,8,7,41,23,65)."<br>"); //output 0
echo(max(0,5,8,7,41,23,65)."<br>"); //output 65
echo(abs(-6.7)."<br>"); // out put positive value = 6.7
echo(sqrt(81)."<br>"); // out put square root of a number = 9
echo(round(0.5)."<br>");echo(round(0.49)."<br>"); //ปัดเศษ if >=50 go up if <50 go down
echo(rand()."<br>");//rand for random 
echo(rand(000,999)."<br>");// specify values min max
 //constant are global automatic cally 
 // constant variable
define("constantName","constant value"); 
echo constantName;
echo "<br>";
//constant array
define("constArray",[
    "a",
    "b",
    "c"
]);
echo (constArray[2]."<br>");
//operator in php
// and	And	$x and $y	True if both $x and $y are true	
// or	Or	$x or $y	True if either $x or $y is true	
// xor	Xor	$x xor $y	True if either $x or $y is true, but not both	
// &&	And	$x && $y	True if both $x and $y are true	
// ||	Or	$x || $y	True if either $x or $y is true	
// !	Not	!$x	True if $x is not true
//operator array in php
// +	Union	$x + $y	Union of $x and $y	ต่อ array
// ==	Equality	$x == $y	Returns true if $x and $y have the same key/value pairs	
// ===	Identity	$x === $y	Returns true if $x and $y have the same key/value pairs in the same order and of the same types	
// !=	Inequality	$x != $y	Returns true if $x is not equal to $y	
// <>	Inequality	$x <> $y	Returns true if $x is not equal to $y	
// !==	Non-identity	$x !== $y	Returns true if $x is not identical to $y
//Conditional Assignment Operators
// ?:	Ternary	$x = expr1 ? expr2 : expr3	Returns the value of $x.
// The value of $x is expr2 if expr1 = TRUE.
// The value of $x is expr3 if expr1 = FALSE	
// ??	Null coalescing	$x = expr1 ?? expr2	Returns the value of $x.
// The value of $x is expr1 if expr1 exists, and is not NULL.
// If expr1 does not exist, or is NULL, the value of $x is expr2.
// Introduced in PHP 7	


//if else statement
// if (condition) {
//     code to be executed if this condition is true;
//   } elseif (condition) {
//     code to be executed if first condition is false and this condition is true;
//   } else {
//     code to be executed if all conditions are false;
//   }


//Switch case 
// switch (condition) {
//     case label1:
//       code to be executed if n=label1;
//       break;
//     case label2:
//       code to be executed if n=label2;
//       break;
//     case label3:
//       code to be executed if n=label3;
//       break;
//       ...
//     default:
//       code to be executed if n is different from all labels;
//   }

// loop 
// while loop  executes a block of code as long as the specified condition is true.
$testloop = 0;
while($testloop<=10){
    echo ($testloop." ");
    $testloop++;
};

//do while loop will run code 1 time first then executes a block of code as long as the specified condition is true
$do_whileloop = 0;
echo "<br>";
do{
    echo($do_whileloop." ");
    $do_whileloop+=2;
}while($do_whileloop<=10);
echo "<br>";
//foreach loop this loop use for array
$number = array(7,8,5,4,6,3,2,1,9,8);
$age = array("boy"=> 10,"bob"=> 15, "amit"=>30);
foreach($number as $val){
echo($val." ");
};
echo "<br>";
//foreach loop Associative array
foreach($age as $key=>$val){ //ตัวแปรสำหรับค่า KeyและValue
    echo($key." is ".$val." years old"."<br>");
};
// break and continue
echo "break if x == 4 <br>"; //end loop if break 
for ($x = 0; $x < 10; $x++) {
    if ($x == 4) {
      break;
    }
    echo "The number is: $x <br>";
  }
echo "continue if x ==4 <br>"; //จะกลับไปวนลูบใหม่โดยไม่อ่านโค้ดด้านล่าง  
  for ($x = 0; $x < 10; $x++) {
    if ($x == 4) {
      continue;
    }
    echo "The number is: $x <br>";
  }
    
//Function    
/*การกำหนดชนิดข้อมูลและค่าดีฟอลในพารามิเตอร์จำเป็นต้องเขียนคำสั่งไว้ด้านบนสุดของtag php 
<?php declare(strict_types=1); // strict requirement 

function addNumbers(int $a, int $b) {
  return $a + $b;
}
echo addNumbers(5, "5 days");
// since strict is enabled and "5 days" is not an integer, an error will be thrown
กำหนดค่าดีฟอล
function setHeight(int $minheight = 50) {
  echo "The height is : $minheight <br>";
}
setHeight(350);
setHeight(); // will use the default value of 50
setHeight(135);
setHeight(80);
?>
การกำหนดชนิดข้อมูลในการรีเทิร์นค่าให้ใส่ :ชนิดข้อมูล หน้า { ของฟังก็ชั่น และกำหนดชนิดข้อมูลที่คำสั่ง Return ด้วย
<?php declare(strict_types=1); // strict requirement
function addNumbers(float $a, float $b) : int {
  return (int)($a + $b);
}
echo addNumbers(1.2, 5.2);
?>

ฟังก์ชั่นแบบเปลี่ยนชนิดข้อมูลตามค่าจริงที่ได้ ต้องใส่&หน้าตัวแปร
function add_five(&$value) {
  $value += 5;
}

$num = 2;
add_five($num);
echo $num;

Array
$car = array(a,b,c,d);
นับจำนวนสมาชิก array 
count($car);

Associative Arrays
$car = array("bm" => 5000,"ben" => 7500,"volvo"=>8000);
การเรียกใช้
echo $car["bm"];


คำสั่งจัดเรียง Array
sort() - sort arrays in ascending order
rsort() - sort arrays in descending order
asort() - sort associative arrays in ascending order, according to the value
ksort() - sort associative arrays in ascending order, according to the key
arsort() - sort associative arrays in descending order, according to the value
krsort() - sort associative arrays in descending order, according to the key

ตัวแปร SuperGlobal
$GLOBALS['ชื่อต้วแปรไม่ต้องใส่$']=value ทำให้เข้าถึงตัวแปรได้จากทุกที่ใน PHP Script
หรือใช้เก็บค่าตัวแปรอื่นๆมาเป็น superGlobal
$x = 75;
$y = 25; 
function addition() {
$GLOBALS['a'] = "im in";  	
  $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
}
addition();
echo $z;
echo $a; 
$_SERVER
$_SERVER['PHP_SELF']	Returns the filename of the currently executing script
$_SERVER['GATEWAY_INTERFACE']	Returns the version of the Common Gateway Interface (CGI) the server is using
$_SERVER['SERVER_ADDR']	Returns the IP address of the host server
$_SERVER['SERVER_NAME']	Returns the name of the host server (such as www.w3schools.com)
$_SERVER['SERVER_SOFTWARE']	Returns the server identification string (such as Apache/2.2.24)
$_SERVER['SERVER_PROTOCOL']	Returns the name and revision of the information protocol (such as HTTP/1.1)
$_SERVER['REQUEST_METHOD']	Returns the request method used to access the page (such as POST)
$_SERVER['REQUEST_TIME']	Returns the timestamp of the start of the request (such as 1377687496)
$_SERVER['QUERY_STRING']	Returns the query string if the page is accessed via a query string
$_SERVER['HTTP_ACCEPT']	Returns the Accept header from the current request
$_SERVER['HTTP_ACCEPT_CHARSET']	Returns the Accept_Charset header from the current request (such as utf-8,ISO-8859-1)
$_SERVER['HTTP_HOST']	Returns the Host header from the current request
$_SERVER['HTTP_REFERER']	Returns the complete URL of the current page (not reliable because not all user-agents support it)
$_SERVER['HTTPS']	Is the script queried through a secure HTTP protocol
$_SERVER['REMOTE_ADDR']	Returns the IP address from where the user is viewing the current page
$_SERVER['REMOTE_HOST']	Returns the Host name from where the user is viewing the current page
$_SERVER['REMOTE_PORT']	Returns the port being used on the user's machine to communicate with the web server
$_SERVER['SCRIPT_FILENAME']	Returns the absolute pathname of the currently executing script
$_SERVER['SERVER_ADMIN']	Returns the value given to the SERVER_ADMIN directive in the web server configuration file (if your script runs on a virtual host, it will be the value defined for that virtual host) (such as someone@w3schools.com)
$_SERVER['SERVER_PORT']	Returns the port on the server machine being used by the web server for communication (such as 80)
$_SERVER['SERVER_SIGNATURE']	Returns the server version and virtual host name which are added to server-generated pages
$_SERVER['PATH_TRANSLATED']	Returns the file system based path to the current script
$_SERVER['SCRIPT_NAME']	Returns the path of the current script
$_SERVER['SCRIPT_URI']	Returns the URI of the current page


$_REQUEST
เก็บค่าที่ submit จากฟอร์มผ่าน name ของ html
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name: <input type="text" name="fname">
  <input type="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $name = htmlspecialchars($_REQUEST['fname']);
    if (empty($name)) {
        echo "Name is empty";
    } else {
        echo $name;
    }
}
?>

$_POST
ทำงานเหมือนด้านบนแต่จะไม่โชว์ในแทบ URL
$_GET
ทำงานPOSTด้านบนแต่จะโชว์ URI ในแทบ URL

Regular Expression Functions
echo preg_match("/คำที่ให้ค้นหา/i","String ทั้งหมด"); ผลลัพธ์จะเป็น 1 หรือ 0
echo preg_match_all("/คำที่ให้ค้นหา/i","String ทั้งหมด"); ผลลัพธ์จะได้เท่ากับจำนวนคำที่หาเจอในชุดสตริง ตั้งแต่1ขึ้นไป หากไม่เจอเลยจะเป็น 0
replace
echo preg_replace("/คำที่ให้ค้นหา/i", "คำที่จะให้วางทับ", "String ทั้งหมด"); ผลลัพธ์เป็นสตริง

Forms
เวลาที่เรากดปุ่ม Submit ไม่ว่าจะเป็น Method get หรือ Post จะสร้าง Array ($_ประเภทMethod(key1=>value1,key2=>value2,key3=>value3)) key คือค่า name จากฟอร์มและ Value คือค่าจาก Input
$_GET is an array of variables passed to the current script via the URL parameters.

$_POST is an array of variables passed to the current script via the HTTP POST method.

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  htmlspecialchars คือฟังก์ชั่นที่ใช้แปลงอักขระไปเป็นรหัส HTML entities เพื่อป้องกันการฉีดโค้ด
HTML หรือ JS ที่ฟอร์ม

  $data = trim($data); ตัดอักษรว่างหน้าหลังออก
  $data = stripslashes($data); ลบเครื่องหมาย \
  $data = htmlspecialchars($data); 
*/
    


?>
</body>
</html>
