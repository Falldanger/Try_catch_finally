<?php
	echo '<b>Try-catch-finally :</b>'.'</br>';

	class Valid{

		public static $reg = '/[a-z0-9_]+(\.[a-z0-9_-]+)*@([0-9a-z][0-9a-z]*\.)+(([a-z]){2,4})$/';

		public static function validEmail($email){
			

			if($email=='') {throw new Exception('Email  not specified');
			}
			if(strlen($email)>255){throw new Exception('Email too long');
			}
			if(!preg_match(self::$reg, $email)){throw new Exception('Email incorrectly specified');
			}
			else{
				echo '</br>Email is correct';
			}

		}
	}

	$valid = new Valid();

	try{
		$valid::validEmail('');
	}
	catch(Exception $e){
		echo '</br>Error heppened = '.$e->getMessage();
	}

	try{
		$valid::validEmail('fuckthepolice..._uytt@email.coupum');
	}
	catch(Exception $e){
		echo '</br>Error heppened = '.$e->getMessage();
	}

	try{
		$valid::validEmail('someunexpectemailhererealqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqq@gmail.com');
	}
	catch(Exception $e){
		echo '</br>Error heppened = '.$e->getMessage();
	}

	try{
		$valid::validEmail('bohdan.murha@gmail.com');
	}
	catch(Exception $e){
		echo '</br>Error heppened = '.$e->getMessage();
	}

	finally{
		echo '</br><b>4 variants of the entered data were tested</b>';
	}

?>