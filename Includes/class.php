<?php
class Student
{
	private $name, $mobile, $email;
	function GetData($name,$mobile,$email)
	{
		this->name=$name;
		this->mobile=$mobile;
		this->email=$email;
	}
	function ShowData()
	{
		echo "Name:-.$name.";
		echo "Name:-.$mobile.";
		echo "Name:-.$email.";
	}
	obj1 = new Student();
	obj1->GetData("Dileep Kumar Patel","8409900949","pateldileep51@gmail.com");
	obj1->ShowData();
}
 ?>
