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
        $username = Input::get('username');
        $subjects = Input::get('subject[]');
        foreach ($subjects as $subject) {
            $register = new dataSubjectManagement;
            $register->setUserSubject($username, $subject);
        }
        $register = new dataSubjectManagement;

        if ($register->setUserSubject($username, $subject)) {
            echo "Vak succesvol gekoppeled";
        } else {
            echo "error";
        }
    }
}