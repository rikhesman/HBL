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

	
		if ($register->setRegister($nameP1, $nameP2, $email,$tel,$fName,$lName,$bDate,$school,$class,$dys,$comment)) {
			echo 'Succesvol aangemaakt';
		} else {
			echo "error";
		}			
		
	}

}
