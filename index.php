<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>4711 Lab 1</title>
	</head>
	<body>
		<?php
		
		include('Student.php');
		
		$students = array();
		
		/* Adds a new student "John Doe" */
		$first = new Student();
		$first->surname = "Doe";
		$first->first_name = "John";
		$first->add_email('home','john@doe.com');
		$first->add_email('work','jdoe@mcdonalds.com');
		$first->add_grade(65);
		$first->add_grade(75);
		$first->add_grade(55);
		$students['j123'] = $first;
		
		/* Adds a new student "Albert Einstein" */
		$second = new Student();
		$second->surname = "Einstein";
		$second->first_name = "Albert";
		$second->add_email('home','albert@braniacs.com');
		$second->add_email('work1','a_einstein@bcit.ca');
		$second->add_email('work2','albert@physics.mit.edu');
		$second->add_grade(95);
		$second->add_grade(80);
		$second->add_grade(50);
		$students['a456'] = $second;
		
		/* Adds a new student "Robert Arendac", myself */
		$third = new Student();
		$third->surname = "Arendac";
		$third->first_name = "Robert";
		$third->add_email('school', 'rarendac@my.bcit.ca');
		$third->add_grade(96);
		$third->add_grade(90);
		$third->add_grade(93);
		$students['r789'] = $third;
		
		/* Sorts the student by array key order */
		ksort($students);
		
		/* Prints each student in the students array */
		foreach($students as $student)
			echo $student->toString();
			
		?>
	</body>
<html>