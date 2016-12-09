<?php 
class accountManagement
{

//Registreren gebruiker
	public static function register()
	
		// variabelen voor het opslaan van de gegevens
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
			
		// password hash
		$password = password_hash($password, PASSWORD_DEFAULT);
		
		// geeft aan dat registratie gelukt is
		if ($register->setRegister($username,$password,$fname,$insertion,$lname,$rol,$email,$tel,$dys,$comment,$date)) {
			echo 'Succesvol aangemaakt';
		} else {
			echo "error";
		}			
		
	}

}
