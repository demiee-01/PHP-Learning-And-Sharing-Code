<!-- Requirements:
1. បង្កើត Variables $name, $age, $gender និង $university។
2. បង្កើត Variables $php, $java និង $database សម្រាប់រក្សាទុកពិន្ទុ។
3. គណនា $total និង $average។
4. ប្រើ echo ដើម្បីបង្ហាញព័ត៌មានទាំងអស់។
5. ប្រើ gettype() ដើម្បីពិនិត្យ Data Type របស់ $name, $age និង $average។ -->

<?php 

// this is delcare variable
$name = "Demiee";
$age = 23;
$gender ='M';
$university = "Rupp";
$php = 90;
$java = 85;
$database = 95;

echo "<h2> Student imformation </h2>";
echo "<br>";

echo "Name: $name <br>";
echo "Age: $age <br>";
echo "Gender: $gender <br>";
echo "University: $university <br>";

echo "<h2> Student Scores </h2>";
echo "<br>";

echo "PHP: $php <br>";
echo "Java: $java <br>";
echo "Database: $database <br>";


// make calculat socre total
$total = $php + $java + $database;

// make calculat socre average
$average = $total / 3;

echo "Total Score: $total <br>";
echo "Average Score: $average <br>";

echo "<h2> Check for datatype </h2>";
echo "<br>";


// check for datatype
echo "Name: " . gettype($name) . "<br>";
echo "Age: " . gettype($age) . "<br>";
echo "Average: " . gettype($average) . "<br>";
?>