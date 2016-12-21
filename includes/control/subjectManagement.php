<?php 
class subjectManagement
{
    //Vakken
    public static function subject() {
        $subject = new dataSubjectManagement;
	return $subject->subject();
    }

    public static function subjectUser() {
        $_SESSION['subjectUser'] = Input::get('username');
    }

    public static function getUserSubject($username) {
        $userSubject = new dataSubjectManagement;
        $output = $userSubject->getUserSubject($username);
	return $output;
    }

    public static function setUserSubject() {
        $register = new dataSubjectManagement;
        $username = Input::get('username');
        $subject = Input::get('subject');

        if ($register->setUserSubject($username, $subject)) {
            echo "Vak succesvol gekoppeled";
        } else {
            echo "error";
        }
    }
}