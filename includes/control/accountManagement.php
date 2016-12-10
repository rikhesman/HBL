<?php 
class accountManagement
{

//Registreren gebruiker
	public static function register()
	{
		$register  = new dataAccountManagement;
		$username  = Input::get('username');
		$password  = Input::get('password');
		$fname     = Input::get('f_name');
		$insertion = Input::get('insertion');
		$lname     = Input::get('l_name');
		$rol       = Input::get('rol');
		$email     = Input::get('email');
		$tel       = Input::get('tel');
		$dys       = Input::get('dys');
		$comment   = Input::get('comment');
		$date      = Input::get('join_date');

			
		$password = password_hash($password, PASSWORD_DEFAULT);
	
		if ($register->setRegister($username,$password,$fname,$insertion,$lname,$rol,$email,$tel,$dys,$comment,$date)) {
			echo 'Succesvol aangemaakt';
		} else {
			echo "error";
		}			
		
	}
	
	public static function login()
	{
		$login  = new dataAccountManagement;
		$username  = Input::get('username');
		$password  = Input::get('password');
			
		if ($login->login($username, password_verify($password, PASSWORD_DEFAULT))) {
			$_SESSION['some'] = $username;
			
		} else {
			echo "error";
		}			
		
	}

}
