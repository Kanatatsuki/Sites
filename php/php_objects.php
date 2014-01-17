<?php 

class User{
	// const
	const CHINA = 0;
	const AUSTRILIA = 1;
	const JAPAN = 2;

	//	static
	public static $user_number = 0;

	// var
	protected $name;

	// class func
	function __construct($g_name){
		self::$user_number++;
		$this->name = $g_name;
	}

	function __destruct(){

	}

	// methods
	function show(){
		echo $this->name; echo '<br />';
	}
}

class User_Student extends User{
	
	// static
	public static $user_number = 0;

	// var
	private $student_id;

	// class func
	function __construct($g_name, $g_sid){
		parent::__construct($g_name);
		$this->student_id = $g_sid;
	}

	// methods
	function show(){
		echo $this->name."\r".$this->student_id; 
		echo '<br />';
	}
}

?>