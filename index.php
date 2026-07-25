<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learn php</title>
</head>

<body>


    <?php
    $name = "Golam Faruk Adnan";
    $roll = 5;
    $instituteName = "Feni computer institute";

    echo "<h1> Hellow PHP </h1>";
    echo "Student name: " . $name . "<br>";
    echo "Roll: " . $roll . "<br>";
    echo "Campus Name: " . $instituteName  . "<br>";

    $learn_Tech = 'I am a good learner and i work on fulll stack developer in dhaka,bd';
    echo $learn_Tech;
    echo strlen($learn_Tech);


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


    $people = array("teach", 4, true, 4.5);
    echo "<br>";

    print_r($people);
    echo "<br>";
    var_dump($people);


    class Phone
    {
        var  $model;

        function phoneModel($number)
        {
            global $model;
            $model = $number;
            echo "This is $model <br>";
        }
    }

    $apple = new Phone;
    echo "<br>";
    $apple->phoneModel('iPhone 18');


    print(5 + 6 . '<br>');
    echo 5 + 5;

    echo "<br> <br>";




    $homeDistrict = 'My Home distict is Noakhali';
    echo str_word_count($homeDistrict) . "<br>";


    echo strrev($homeDistrict) . "<br>";
    echo strpos($homeDistrict, 'a12',) . "<br>";


    $replaceAddress = str_replace('Noakhali', 'dhaka', $homeDistrict);

    echo $replaceAddress . "<br>";
    var_dump($replaceAddress);


    echo (abs(-5));

    echo "<br>";
    define('a', 6); //global 
    define('cars', ['BMW', 'Prado', 'Mazda']);
    echo (count(cars));


    $num = 4;
    function name()
    {
        // echo $num;
        echo (cars[1]);
    }
    name();

    switch ('green') {
        case 'red':
            echo 'Apple is red';
            break;
        case 'green':
            echo "Mango is greee";
            break;
    }

    $aa = 4;

    while ($aa !== 10) {
        echo $aa;
        $aa += 1;
    };

    abstract class Vehicle
    {

        abstract public function drive();
    }

    class Car extends Vehicle
    {
        #[Override]
        public function drive()
        {
            return "Driving a car";
        }
    }
    class Bike extends Vehicle
    {

        #[Override]
        public function drive()
        {
            return "Driving a Bike";
        }
    }

    $car = new Car();
    echo $car->drive();



    class Animal
    {
        const type = "Cat";
    };


    class Dog extends Animal
    {
        public function getType()
        {
            return self::type;
        }
    }

    $dog  = new Dog();
    echo $dog->getType();

    echo "<br>";

    abstract class PaymentGetWay
    {

        abstract public function pay($amount);

    }

    class Bkash extends PaymentGetWay
    {

        public function pay($amount)
        {
            echo "payment by a Bkash" . $amount . "<br>";
        }
    }

    $bk = new Bkash();
    $bk->pay(400);


    // interface 

    interface  Notification
    {

        public function send($meessage);
    }


    class Email implements Notification
    {

        #[Override]
        public function send($meessage)
        {
            echo 'Send email notifications' . $meessage . "<br>";
        }
    }

    class Push implements Notification
    {


        #[Override]
        public function send($meessage)
        {
            echo 'Send Push notification' . $meessage . "<br>";
        }
    }

    function messagesend(Notification $notifiable, $meessage)
    {

        $notifiable->send($meessage);
    }

    $email = new Email();
    $push = new Push();


    messagesend($email, 'Your order has been shippded');
    messagesend($push, 'You have a new message');




    ?>
</body>

</html>