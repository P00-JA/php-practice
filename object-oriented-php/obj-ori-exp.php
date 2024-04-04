<?php
require 'Item.php';
require 'getter-setter.php';
require 'inheritance.php';
require 'job.php';
//static properties
var_dump(Item::$count);
echo "<br>";
$my_item = new Item('Women clothing','Kuthis,Croptops, Salwars,Denims,Accessories',299,3.5);
var_dump(Item::$count);
echo "<br>";
echo $my_item->getContent();
echo"<br>";
$item2 = new Item("Mens Clothing","t-shirts,suits,jackets,jeans",199,3.7);
var_dump(Item::$count);
echo "<br>";
echo $item2->getContent();
echo"<br>";
$item3 = new Item("kids Clothing","trousers,frocks,t-shirts & many more",99,4.7);
var_dump(Item::$count);
echo "<br>";
echo $item3->getContent();
echo"<br>";
//public and private class
//public class is accessible from outside the class
//such as
var_dump($my_item->name);
//static methods
Item::showCount();
//private function and variables in a class cant be accessed to side the class as it shows error
echo $my_item->getRating();

//getters and setters

//setters are used to assign value to the properties
$user1 = new User();

$user1->setId(0);
$user1->setUsername('Pooja');
$user1->setEmail('pooja@gmail.com');
$user1->setPassword('pOOja1234');
echo "<br>";
echo $user1->getId();
echo "<br>";
echo $user1->getUsername();
echo "<br>";
echo $user1->getEmail();
echo "<br>";
echo $user1->getPassword();
echo "<br>";
//constants in php
define('MAXIMUM',100);
define('COLOR','Red');

echo MAXIMUM;

echo "<br>";

echo Item::MAX_ORDERS;

echo "<br>";
//inheritance
$person1 = new Person();
$person1->fname = "Aravind";
$person1->lname = "K S";
echo $person1->getFullName();
echo "<br>";
echo $person1->getEmployeeId();
echo "<br>";
//protected property cant be accessed alone
//echo $person1->getId();

$jobDetails1 = new JobDetails();
$jobDetails1->fname = "Aravind";
$jobDetails1->lname = "K S";
$jobDetails1->designation = "Software Engineer";
$jobDetails1->company = "Aivery";

echo $jobDetails1->getJobDetails();
echo "<br>";
echo $jobDetails1->getFullName();
