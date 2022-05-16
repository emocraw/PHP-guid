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
foreach($age as $key=>$val){
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



?>
</body>
</html>
