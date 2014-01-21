<?php 

// class User{
// 	// const
// 	const CHINA = 0;
// 	const AUSTRILIA = 1;
// 	const JAPAN = 2;

// 	//	static
// 	public static $user_number = 0;

// 	// var
// 	protected $name;
// 	protected $intro;
// 	public $user_info = array();

// 	protected $com;

// 	// class func
// 	function __construct($g_name){
// 		self::$user_number++;
// 		$this->name = $g_name;
// 	}

// 	function __destruct(){

// 	}

// 	// methods
// 	function set_user_info($g_attr, $g_value){
// 		$this->user_info[$g_attr] = $g_value;
// 	}

// 	function show_user_info(){
// 		echo '<pre>';
// 		foreach ($this->user_info as $key => $value) {
// 			echo $key.":\t".$value."<br />";
// 		}
// 		echo '</pre>';
// 	}

// 	function show(){
// 		echo $this->name; echo '<br />';
// 	}

// 	function set_intro($g_intro){
// 		if(is_string($g_intro))
// 			$this->intro = $g_intro;
// 		else 
// 			echo 'ERROR: illegal introdution';
// 	}

// 	function split_intro(){
// 		$arr = explode(' ', $this->intro);

// 		echo '<pre>';
// 		foreach ($arr as $key => $value){
// 			echo $key.':'.$value.'<br />';
// 		}
// 		echo '</pre>';
// 	}

// 	function user_compact(){
// 		$name = $this->name;
// 		$intro = $this->intro;
// 		$user_info = $this->user_info;
// 		$this->com = compact('name', 'intro', 'user_info');

// 		echo '<pre>';
// 		print_r($this->com);
// 		echo '</pre>';
// 	}

// 	function user_extract(){
// 		echo '<pre>';
// 		foreach ($this->com as $key => $value) {
// 			echo $key.":\n\t";
// 			print_r($value);
// 			echo "\n";
// 		}
		
// 		reset($this->com);
// 		while(list($x, $y)=each($this->com)){
// 			echo $x.":\n\t";
// 			print_r($y);
// 			echo "\n";	
// 		}
// 		echo '</pre>';
// 	}
// }

// class User_Student extends User{
	
// 	// static
// 	public static $user_number = 0;

// 	// var
// 	private $student_id;

// 	// class func
// 	function __construct($g_name, $g_sid){
// 		parent::__construct($g_name);
// 		$this->student_id = $g_sid;
// 	}

// 	// methods
// 	function show(){
// 		echo $this->name."\r".$this->student_id; 
// 		echo '<br />';
// 	}
// }
?>