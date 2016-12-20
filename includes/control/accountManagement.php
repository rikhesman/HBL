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
	
        
        if(!empty(input::get("username"))) {
            if(preg_match("/^[a-zA-Z ]*$/",$username)) {
                if (!empty(input::get("password"))) {
                   if(!empty(input::get("f_name"))) {
                     if(preg_match("/^[a-zA-Z ]*$/",$fname)) {
                       if(!empty(input::get("l_name"))) {
                          if(preg_match("/^[a-zA-Z ]*$/",$lname)) {
                                if ($register->setRegister($username,$password,$fname,$insertion,$lname,$rol,$email,$tel,$dys,$comment,$date)) {
			                     $_SESSION['alert'] = true; 
                                $_SESSION['message'] = '<div class="alert alert-success">Gebruiker succesvol opgeslagen!</div>';}
  
                          } else {
                            $_SESSION['alert'] = true; 
            $_SESSION['message'] = '<div class="alert alert-danger">Achternaam is verplicht</div>';  
                          }
                       } else {
                        $_SESSION['alert'] = true; 
            $_SESSION['message'] = '<div class="alert alert-danger">Achternaam is verplicht</div>';  
                       }
                     } else {
                    $_SESSION['alert'] = true; 
            $_SESSION['message'] = '<div class="alert alert-danger">Voornaam is verplicht</div>'; 
                     }
                   } else {
                      $_SESSION['alert'] = true; 
            $_SESSION['message'] = '<div class="alert alert-danger">Voornaam is verplicht</div>'; 
                   }
                } else {
                   $_SESSION['alert'] = true; 
            $_SESSION['message'] = '<div class="alert alert-danger">Wachtwoord is verplicht</div>';  
                }
            } else {
               $_SESSION['alert'] = true; 
            $_SESSION['message'] = '<div class="alert alert-danger">Gebruikersnaam is verplicht</div>';   
            }
        } else {
            $_SESSION['alert'] = true; 
            $_SESSION['message'] = '<div class="alert alert-danger">Gebruikersnaam is verplicht</div>'; 
        }
        
        
        
         /*if ($register->setRegister($username,$password,$fname,$insertion,$lname,$rol,$email,$tel,$dys,$comment,$date)) {
			                     $_SESSION['alert'] = true; 
                                $_SESSION['message'] = '<div class="alert alert-success">!!!!!!Gebruiker succesvol opgeslagen!</div>';
  
		                          } else {
            
			                             $_SESSION['alert'] = true; 
                                        $_SESSION['message'] = '<div class="alert alert-danger">Error!</div>';
				} */
        
		//if ($register->setRegister($username,$password,$fname,$insertion,$lname,$rol,$email,$tel,$dys,$comment,$date)) {
		//	 $_SESSION['alert'] = true; 
          // $_SESSION['message'] = '<div class="alert alert-success">!!!!!!Gebruiker succesvol opgeslagen!</div>';
  
		//} else {
            
			//$_SESSION['alert'] = true; 
             //$_SESSION['message'] = '<div class="alert alert-danger">Error!</div>';
				}
	
	public static function login()
	{
		$login  = new dataAccountManagement;
		$username  = Input::get('username');
		$password  = Input::get('password');        

       	
		if (password_verify($password, $login->login($username)) == true) {
			$_SESSION['user']['loggedin'] = true;
			$_SESSION['user']['username'] = Input::get('username');
			$role = $login->getRole(Input::get('username'));				
			$_SESSION['user']['role'] = $role[0]['rol'];				
			header('Location: admin/index.php');			

		} else {
            
             $_SESSION['alert'] = true; 
             $_SESSION['message'] = '<div class="alert alert-danger">Gebruikersnaam of wachtwoord verkeerd!</div>';
            
		}			
	}
    
    	public static function rol()
	{
		$rol  = new dataAccountManagement;
		$username  = Input::get('username');
        $role = Input::get('rol');
        
       
		//if ($rol->login($username,$role)) {
			//$_SESSION[$role] === "admin";
            //header("location: home.php");
		//} else {
			//echo "error";
		//}			
	}
	public static function getParents(){
		$getOuder = new dataAccountManagement;
		return $getOuder->getParents();
	}
	public static function getChild(){
		$getKind = new dataAccountManagement;
		return $getKind->getChild();
	}
	
	public static function parenthood()
	{
		$register  	= new dataAccountManagement;
		$child  	= Input::get('child');
		$parent  	= Input::get('parent');
		
		if ($register->setParenthood($child,$parent)) {
			 $_SESSION['alert'] = true; 
             $_SESSION['message'] = '<div class="alert alert-success">Kind aan Ouder gekoppeld!</div>';
		} else {
			 $_SESSION['alert'] = true; 
             $_SESSION['message'] = '<div class="alert alert-danger">Error!</div>';
		}			
	}
	
	//Vakken
	public static function Subject(){
		$subject = new dataAccountManagement;
		return $subject->Subject();
	}
	
	public static function setUserSubject()
	{
		$register	= new dataAccountManagement;
		$username	= Input::get('username');
		$subject	= Input::get('subject');
		
		if ($register->setUserSubject($username, $subject)) {
			echo "Vak succesvol gekoppeled";
		} else {
			echo "error;";
		}
	}
}