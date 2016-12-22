<?php 
class subjectManagement
{
    //Vakken ophalen
    public static function subject() {
        $subject = new dataSubjectManagement;
	return $subject->subject();
    }
    
    //Gebruiker voor selectie vakken opslaan
    public static function subjectUser() {
        $_SESSION['subjectUser'] = Input::get('username');
    }
    
    //Vakken van gebruiker selecteren
    public static function getUserSubject($username) {
        $userSubject = new dataSubjectManagement;
        $output = $userSubject->getUserSubject($username);
	return $output;
    }

    //Vakken van gebruiker opslaan
    public static function setUserSubject() {
        $username = Input::get('username');
        $subjects = Input::get('subject');
        if (!empty($subjects)) {
            foreach ($subjects as $subject) {
                $register = new dataSubjectManagement;
                $register->addUserSubject($username, $subject);
            } 
        } else {
        	$_SESSION['alert'] = true; 
            $_SESSION['message'] = '<div class="alert alert-success">Er is een fout opgetreden!</div>';
        }
        $register = new dataSubjectManagement;
        $register->removeUserSubject($username, $subjects);

    }
}