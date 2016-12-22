<?php
/*
 * 
 */
 
class dataSubjectManagement extends connection {
    
    public function subject() {
        $sql = "SELECT * FROM subject";
        $q = $this->conn->prepare($sql);
        $q -> execute();
        return $q->fetchAll();
    }
    
    public function getUserSubject($username) {
        $sql = "SELECT subject FROM user_subject WHERE username = :username";
        $q = $this->conn->prepare($sql);
        $q -> bindValue(':username', $_SESSION['subjectUser'], PDO::PARAM_STR);
        $q -> execute();
        return $q->fetchAll();
    }
    
    public function addUserSubject($username, $subject) {
        $sql = "INSERT INTO user_subject (username, subject)
        VALUES (:username, :subject)";
        $q = $this -> conn -> prepare($sql);
        $q -> bindValue(':username', $username, PDO::PARAM_STR);
        $q -> bindValue(':subject', $subject, PDO::PARAM_STR);
        $q -> execute();
    }
    
    public function removeUserSubject($username, $subjects) {
        $query = "DELETE FROM user_subject
        WHERE username = '" . $username;
        if (!empty($subjects)) {
            foreach ($subjects as $subject) {
                $query .= "' AND subject <> '" . $subject;
            }
        }
        $query .= "'";
        
        $sql = $query;
        $q = $this -> conn -> prepare($sql);
        $q -> execute();
    }
}