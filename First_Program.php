<?php
	
	class Student{
		private $id;
		private $name;
		private $gender;
		
		public function __construct($id, $name, $gender){
			$this->id = $id; 
			$this->name = $name;
			$this->gender = $gender;
		}
		
		function get_id(){
			return $this->id;
		}
		
		function get_name(){
			return $this->name;
		}
		
		function get_gender(){
			return $this->gender;
		}
		
		function showStudentInfo(){
			print "Student Name: ".$this->name.", ID: ".$this->id.", Gender: ".$this->gender."<br>";
		}
		
	}
	
	class Department{
		private $dept_id;
		private $dept_name;
		private $students;
		
		public function __construct($id, $name){
			$this->dept_id = $id;
			$this->dept_name = $name;
			$this->students = array();
		}
		
		function get_dept_id(){
			return $this->dept_id;
		}
		
		function get_dept_name(){
			return $this->dept_name;
		}
		
		function addStudent($id, $name,$gender){
			$newStudent = new Student($id, $name, $gender);
			$this->students[] = $newStudent;
		}
		
		function deleteStudent($id){
			for($i=0;$i<count($this->students);$i++){
				if($this->students[$i]->get_id()==$id){
					unset($this->students[$i]);
					break;
				}
			}
		}
		
		function showStudents(){
			print $this->dept_name." Students List: <br>";
			for($i=0;$i<count($this->students);$i++){
				if(!isset($this->students[$i])){
				continue;
				}
				print $this->students[$i]->showStudentInfo();
				
			}
		}
	}
	
	$dept1 = new Department(1100,"CSE");
	$dept2 = new Department(2211,"EEE");
	$dept3 =new Department(3322,"BBA");
	
	$dept1->addStudent(11,"Evan","Male");
	$dept1->addStudent(12,"Arifa","Female");
	$dept1->addStudent(13,"Sarwer","Male");
	$dept1->showStudents();
	$dept1->deleteStudent(12);
	$dept1->showStudents();
	
?>