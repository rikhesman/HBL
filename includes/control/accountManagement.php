<?php 
class accountManagement
{

//Registreren gebruiker
	public static function register()
	{
		$register = new dataAccountManagement;
		$nameP1 = Input::get('first_name_v');
		$nameP2 = Input::get('first_name_m');
		$email = Input::get('email_1');
		$tel = Input::get('telefoon_1');
		$fName = Input::get('first_name_k');
		$lName = Input::get('last_name_k');
		$bDate = Input::get('birth_date');
		$school = Input::get('school');
		$class = Input::get('vak');
		$dys = Input::get('dyslexie');
		$comment = Input::get('opmerking');

	
		if ($register->setRegister($nameP1, $nameP2, $email,$tel,$fName,$lName,$bDate,$school,$class,$dys,$comment)) {
			echo 'Succesvol aangemaakt';
		} else {
			echo "error";
		}			
		
	}

}
