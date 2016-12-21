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
        $class     = Input::get('class');
        $school    = Input::get('school');
        $password = password_hash($password, PASSWORD_DEFAULT);
        
        //var_dump(input::get('rol'));
        //exit;
        if(!empty(input::get("username"))) {
          if(preg_match("/^[a-zA-Z ]*$/",$username)){
            if(!empty(input::get("password"))) {
                if (!empty(input::get("f_name"))){
                   if(preg_match("/^[a-zA-Z ]*$/",$fname)) {
                     if(preg_match("/^[a-zA-Z ]*$/",$insertion)) {
                      if(!empty(input::get("l_name"))) {
                        if(preg_match("/^[a-zA-Z ]*$/",$lname)) {
                          if (preg_match("/^[a-zA-Z0-9 ]*$/",$class)) {
                           if(preg_match("/^[a-zA-Z ]*$/",$school)) {
                              if(filter_var($email, FILTER_VALIDATE_EMAIL) || empty(input::get("email")))  {
                                //$_SESSION['alert'] = true; 
                                //$_SESSION['message'] = '<div class="alert alert-danger">email is goed</div>';
                                   if(preg_match("/^[0-9]*$/",$tel)) {
                                      if ($register->setRegister($username,$password,$fname,$insertion,$lname,$rol,$email,$tel,$dys,$comment,$date,$class,$school)) {
			                                         $_SESSION['alert'] = true; 
                                                    $_SESSION['message'] = '<div class="alert alert-success">Gebruiker succesvol opgeslagen!</div>';}
                                       
                                   } else {
                                    $_SESSION['alert'] = true; 
                                $_SESSION['message'] = '<div class="alert alert-danger">telnr is verkeerd</div>'; 
                                   }
                               } else {
                                 $_SESSION['alert'] = true; 
                                $_SESSION['message'] = '<div class="alert alert-danger">email is verkeerd</div>';  
                               } 
                           } else {
                    $_SESSION['alert'] = true; 
            $_SESSION['message'] = '<div class="alert alert-danger">School is verkeerd</div>';
                           }  
                          }  else {
                               $_SESSION['alert'] = true; 
            $_SESSION['message'] = '<div class="alert alert-danger">klas is verkeerd</div>'; 
                          }
                        }  else {
                             $_SESSION['alert'] = true; 
            $_SESSION['message'] = '<div class="alert alert-danger">Achternaam is verkeerd</div>';   
                        }
                      } else {
                       $_SESSION['alert'] = true; 
            $_SESSION['message'] = '<div class="alert alert-danger">Achternaam is verplicht</div>';    
                      }
                     }  else {
                       $_SESSION['alert'] = true; 
            $_SESSION['message'] = '<div class="alert alert-danger">Tussenvoegsel is verkeerd</div>';  
                     }
                   } else {
                     $_SESSION['alert'] = true; 
            $_SESSION['message'] = '<div class="alert alert-danger">Voornaam is verkeerd</div>';  
                   }
                } else {
                   $_SESSION['alert'] = true; 
            $_SESSION['message'] = '<div class="alert alert-danger">Voornaam is verplicht</div>'; 
                }
            }  else {
              $_SESSION['alert'] = true; 
            $_SESSION['message'] = '<div class="alert alert-danger">Wachtwoord is verplicht</div>';  
            }
          } else {
           $_SESSION['alert'] = true; 
            $_SESSION['message'] = '<div class="alert alert-danger">Gebruikersnaam is verkeerd</div>';   
          }
        } else {
         $_SESSION['alert'] = true; 
            $_SESSION['message'] = '<div class="alert alert-danger">Gebruikersnaam is verplicht</div>';   
        }
        
        /*
        
        if(preg_match("/^[a-zA-Z ]*$/",$insertion)) {
           if (preg_match("/^[a-zA-Z ]*$/",$class)) {
              if(preg_match("/^[a-zA-Z ]*$/",$school)) {
                 if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    if (preg_match("/^[a-zA-Z ]*$/",$tel)) {
                        
                    } else {
                        $_SESSION['alert'] = true; 
            $_SESSION['message'] = '<div class="alert alert-danger">telis verplicht</div>';  
                    }
                 } else {
                   $_SESSION['alert'] = true; 
            $_SESSION['message'] = '<div class="alert alert-danger">email is verplicht</div>';    
                 }
              } else {
                 $_SESSION['alert'] = true; 
            $_SESSION['message'] = '<div class="alert alert-danger">school is verplicht</div>';  
              }
           } else {
             $_SESSION['alert'] = true; 
            $_SESSION['message'] = '<div class="alert alert-danger">klas is verplicht</div>';    
           }
        } else {
            $_SESSION['alert'] = true; 
            $_SESSION['message'] = '<div class="alert alert-danger">tussenvoegsel is verplicht</div>'; 
        }
        
        
        if(!empty(input::get("username"))) {
            if(preg_match("/^[a-zA-Z ]*$/",$username)) {
                if (!empty(input::get("password"))) {
                   if(!empty(input::get("f_name"))) {
                     if(preg_match("/^[a-zA-Z ]*$/",$fname)) {
                       if(!empty(input::get("l_name"))) {
                          if(preg_match("/^[a-zA-Z ]*$/",$lname)) {
                                
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
	
	//Database zoekfunctie
	public static function userInfo(){
		$userInfo = new dataAccountManagement;
		return $userInfo->getInfo();
	}

    
	public static function kindInfo(){
		$kindInfo = new dataAccountManagement;
		return $kindInfo->kindInfo();
	}
    
    public static function vakInfo(){
		$vakInfo = new dataAccountManagement;
		return $vakInfo->vakInfo();
	}

public static function deleteUser() {
		$userDel = new dataAccountManagement;
            if($userDel->delUser(Input::get('username'))) {
                 $_SESSION['alert'] = true; 
                 $_SESSION['message'] = '<div class="alert alert-success">Succesvol verwijderd!</div>';
            }
		}
    
    public static function deleteParent() {
		$parentDel = new dataAccountManagement;
        //var_dump()
            if($parentDel->delParent(Input::get('child'),Input::get('parent'))) {
                 $_SESSION['alert'] = true; 
                 $_SESSION['message'] = '<div class="alert alert-success">Succesvol verwijderd!</div>';
            }
		}
    
     public static function deleteVak() {
		$vakDel = new dataAccountManagement;
        //var_dump()
            if($vakDel->delVak(Input::get('username'),Input::get('subject'))) {
                 $_SESSION['alert'] = true; 
                 $_SESSION['message'] = '<div class="alert alert-success">Succesvol verwijderd!</div>';
            }
		}
    
	}



