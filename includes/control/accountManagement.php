<?php 
class accountManagement
{

//Registreren gebruiker
	public static function register()
	{
		$register  = new dataAccountManagement;
		$username  = Input::get('username');
		$password  = password_hash(Input::get('password'), PASSWORD_DEFAULT);
		$fname     = Input::get('f_name');
		$insertion = Input::get('insertion');
		$lname     = Input::get('l_name');
		$rol       = Input::get('rol');
		$email     = Input::get('email');
		$tel       = Input::get('tel');
		$dys       = Input::get('dys');
		$comment   = Input::get('comment');
		$date      = Input::get('join_date');

			
		
	
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
        
       	
		if (password_verify($password, $login->login($username)) == true) {
			exit('hoi');
			$_SESSION['some'] = $username;
            header("location: index.php");
			
		} else {
			exit('kut');
			echo "error";
		}			
	}
    
    	public static function rol()
	{
		$rol  = new dataAccountManagement;
		$username  = Input::get('username');
		$password  = Input::get('password');
        $role = Input::get('rol');
        
       
		if ($rol->login($username,$password && $role)) {
			$_SESSION['admin'] = $username;
            header("location: index.php");
			
		} else {
			echo "error";
		}			
	}
    

}
