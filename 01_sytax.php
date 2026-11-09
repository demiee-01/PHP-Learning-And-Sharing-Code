
<?php


// ======================================
// 1. PHP OUTPUT
// ======================================

// echo displays text or values.
echo "<h1>PHP Basic Syntax</h1>";

echo "Hello PHP!";
echo "<br>";

// print also displays output.
print "Welcome to PHP Programming!";

echo "<hr>";


// ======================================
// 2. VARIABLES
// ======================================

// Variables start with the $ symbol.
// PHP automatically determines data types.

$name = "Demiee";
$age = 20;
$height = 1.65;
$isStudent = true;

// Variable names are case-sensitive.
$Name = "Alphabat";

echo "<h2>Variables</h2>";

echo "Name: " . $name . "<br>";
echo "Age: " . $age . "<br>";
echo "Height: " . $height . "<br>";
echo "Another Name: " . $Name . "<br>";

echo "<hr>";


// ======================================
// 3. DATA TYPES
// ======================================

// String: Text
$studentName = "Demiee";

// Integer: Whole number
$studentAge = 20;

// Float: Decimal number
$studentHeight = 1.65;

// Boolean: true or false
$studentStatus = true;

// Array: Stores multiple values
$subjects = ["PHP", "Java", "Python"];

// NULL: No value
$grade = null;

echo "<h2>Data Types</h2>";

echo "<pre>";
// check datatype with size variable
var_dump($studentName);
var_dump($studentAge);
var_dump($studentHeight);
var_dump($studentStatus);
var_dump($subjects);
var_dump($grade);

echo "</pre>";

echo "<hr>";


// ======================================
// 4. Check for datatype
// ======================================

echo "<h2>Checking Data Types</h2>";
// use getting to check datatype
echo gettype($studentName) . "<br>";
echo gettype($studentAge) . "<br>";
echo gettype($studentHeight) . "<br>";
echo gettype($studentStatus) . "<br>";

echo "<hr>";


// ======================================
// 5. contant
// ======================================

// Constants cannot be reassigned.

const UNIVERSITY = "RUPP";

define("COUNTRY", "Cambodia");

echo "<h2>Constants</h2>";

echo UNIVERSITY . "<br>";
echo COUNTRY . "<br>";

echo "<hr>";


// ======================================
// 6. string operation
// ======================================

$firstName = "Demiee";
$lastName = "C1ph3r.";

$fullName = $firstName . " " . $lastName;

echo "<h2>String Operators</h2>";

echo "Full Name: " . $fullName . "<br>";

// Variable interpolation
echo "Hello, $firstName!";

echo "<hr>";


// ======================================
// 7. ARITHMETIC OPERATORS
// ======================================

$a = 20;
$b = 10;

echo "<h2>Arithmetic Operators</h2>";

echo "Addition: " . ($a + $b) . "<br>";
echo "Subtraction: " . ($a - $b) . "<br>";
echo "Multiplication: " . ($a * $b) . "<br>";
echo "Division: " . ($a / $b) . "<br>";
echo "Modulus: " . ($a % $b) . "<br>";

echo "<hr>";


// ======================================
// 8. COMPARISON OPERATORS
// ======================================

$x = 20;
$y = "20";

echo "<h2>Comparison Operators</h2>";

echo "<pre>";

// == compares values with type conversion.
var_dump($x == $y);

// === compares value and data type.
var_dump($x === $y);

// Greater than
var_dump($x > 10);

// Less than or equal
var_dump($x <= 20);

echo "</pre>";

echo "<hr>";


// ======================================
// 9. CONDITIONAL STATEMENTS
// ======================================

$score = 85;

echo "<h2>Conditions</h2>";

if ($score >= 90) {
    echo "Grade A";
} elseif ($score >= 80) {
    echo "Grade B";
} else {
    echo "Grade C or Below";
}

echo "<hr>";


// ======================================
// 10. ARRAYS
// ======================================

$languages = ["PHP", "Python", "Java"];

echo "<h2>Arrays</h2>";

echo $languages[0] . "<br>";
echo $languages[1] . "<br>";
echo $languages[2] . "<br>";

echo "<hr>";


// ======================================
// 11. LOOPS
// ======================================

echo "<h2>For Loop</h2>";

for ($i = 1; $i <= 5; $i++) {
    echo "Number: " . $i . "<br>";
}

echo "<h2>Foreach Loop</h2>";

foreach ($languages as $language) {
    echo $language . "<br>";
}

echo "<hr>";


// ======================================
// 12. function
// ======================================

// Define a function.
function greet($name) {
    return "Hello, " . $name;
}

echo "<h2>Functions</h2>";

// Call the function.
echo greet("demiee");

echo "<hr>";


// ======================================
// 13. TYPE CASTING
// ======================================

$number = "100";

echo "<h2>Type Casting</h2>";

echo "<pre>";

var_dump($number);

// Convert String to Integer.
$number = (int) $number;

var_dump($number);

echo "</pre>";

echo "<hr>";



?>
