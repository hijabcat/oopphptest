<?php
class User{
    //Constructor & Destructor
    public $name;
    public $age;

    // Runs when an object is created
    public function __construct($name, $age){
        echo ' Class ' . __CLASS__ . ' instantiated<br> ';
        // This-> allows us to access properies and methods within the class
        $this->name = $name;
        $this->age = $age;
    }

    public function sayHello(){
        return $this->name. ' Says Hello';
    }

    //Called when no other references to a certain object
    //Used for cleanup, closing connections, etc
    public function __destruct(){

        echo 'destructor ran..';
    }
}

$user1 = new User('Brad', 36);

echo $user1->name . ' is ' . $user1->age. ' years old';
echo '<br>';
echo $user1->sayHello();

echo '<br>';

$user2 = new User('zaim', 25);

echo $user2->name . ' is ' . $user2->age. ' years old';
echo '<br>';
echo $user2->sayHello();