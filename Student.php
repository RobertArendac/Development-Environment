<?php

/**
 *Student class
 */
class Student {
	/* Constructor for student.  Creates a student with no values */
	function __construct() {
		$this->surname = '';
		$this->first_name = '';
		$this->emails = array();
		$this->grades = array();
	}
	
	/* Adds an email address to the student.  Parameters are email type
	   and address */
	function add_email($which, $address) {
		$this->emails[$which] = $address;
	}
	
	/* Adds a grade to the student */
	function add_grade($grade) {
		$this->grades[] = $grade;
	}
	
	/* Calculates the average grade of the student */
	function average() {
		$total = 0;
		foreach ($this->grades as $value)
			$total += $value;
		return $total / count($this->grades);
	}
	
	/* Formats a students information for printing.  A students first name
	   and last name is printed followed by their average grade in parenthesis.
	   Each email is then printed on a seperate line */
	function toString() {
		$result = $this->first_name . ' ' . $this->surname;
		$result .= ' ('.$this->average().")\n";
		foreach($this->emails as $which=>$what)
			$result .= $which . ': '. $what. "\n";
		$result .= "\n";
		return '<pre>'.$result.'</pre>';
	}
}