

<?php
$name = "Golam Faruk Adnan";
$roll = 5;
$instituteName = "Feni computer institute";

echo "<h1> Hellow PHP </h1>";
echo "Student name: " . $name . "<br>";
echo "Roll: " . $roll . "<br>";
echo "Campus Name: " . $instituteName  . "<br>";



// indexing array
$subjects = ['chemistry', 'physics', 'math', 'english'];

echo "subject name: " . $subjects[0] . "<br>";
$totalSubjects = count($subjects);
echo "Total subjects: " . $totalSubjects . "<br>";


// associative array 
$userInfo = [
    "name" => "Adnan",
    "email" => "golamfaruk@gmail.com",
    "roll" => 4,
    "role" => "Admin"
];

echo "Email" . $userInfo['email'] . "<br>" . "<br>";



// foreach loop 
echo "For Each loop " . "<br>" . "<br>";
$techs = ['javascript', 'python', 'ts', 'c++', 'c', 'node js'];

echo "<ul>";
foreach ($techs as $tech) {

    echo  "<li>" . $tech . "</li>" . "<br>";
};

echo "</ul>" . "<br>";



//  array methods 

$numbers = [3, 51, 20, 40, 50, 60, 70];

array_push($numbers, 50);
array_unshift($numbers, 10);

echo "Numbers: ";
print_r($numbers);


if (in_array("ts", $techs)) {
    echo "This is value is exits in techs";
}
echo "<br>";

if (array_key_exists("role", $userInfo)) {
    echo "This role exists in associative array" . "<br>";
};


// sort means ascending order
// rsort mean descending order

rsort($numbers);



// asort means ascending oder value wise (associative array)
// ksort means descending order key wise (associative array)
ksort($userInfo);



print_r($userInfo);




?>