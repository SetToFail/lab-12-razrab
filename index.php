<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>lab12</title>
</head>
<body>
<!-- 	<form method="POST">
		<input type="text" name="x" placeholder="x">
		<input type="text" name="a" placeholder="a">
		<input type="text" name="b" placeholder="b">
		<input type="text" name="c" placeholder="c">
		<input type="submit" name="submit">
	</form>
	-->	<?php
	class Animal{
		public $food;
		public $location;
		function __construct($food, $location){
			$this->food=$food;
			$this->location=$location;
		}
		public function makeNoise(){
			echo 'животное издаёт звук';
		}
		public function eat(){
			echo 'животное есть';
		}
		public function sleep(){
			echo 'животное спит';
		}
	}
	class Dog extends Animal{
		public $name;
		function __construct($eat, $sleep, $name){
			parent::__construct($food, $location);
			$this->name=$name;
		}
		public function name(){
			echo 'Собаку зовут: '.$this->name;	
		}
		public function makeNoise(){
			echo 'Собака лает<br>';
		}
		public function eat(){
			echo 'Собака ест<br>';
		}
		public function sleep(){
			echo 'Собака спит<br>';
		}
	}
	class Cat extends Animal{
		public $name;
		function __construct($eat, $sleep, $name){
			parent::__construct($food, $location);
			$this->$name=$name;
		}
		public function name(){
			echo 'Кота зовут: '.$this->name;	
		}
		public function makeNoise(){
			echo 'Кот мяукает<br>';
		}
		public function eat(){
			echo 'Кот ест<br>';
		}
		public function sleep(){
			echo 'Кот спит<br>';
		}
	}
	class Horse extends Animal{
		public $name;
		function __construct($eat, $sleep, $name){
			parent::__construct($food, $location);
			$this->name=$name;
		}
		public function name(){
			echo 'Лошадь зовут '.$this->name;	
		}
		public function makeNoise(){
			echo 'Лошадь гогочет<br>';
		}
		public function eat(){
			echo 'Лошадь ест<br>';
		}
		public function sleep(){
			echo 'Лошадь спит<br>';
		}
	}
	$aa=new Horse("11","22","33", "44", "55");
	$aa->sleep();

	?>
</body>
</html>