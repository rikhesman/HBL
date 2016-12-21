<?php

class reviewManagement {

//registreren Review
    public static function reviewRegister() {
        $register = new dataReview;
        $rating = Input::get('rating');
        $rtext = Input::get('review');
        $username = $_SESSION['user']['username'];
        $datum = date("Y-m-d");
        $check = TRUE;

        foreach (reviewManagement::getReview() as $review) {
            if ($review['username'] == $username && $review['rev_date'] == $datum) {
                $check = FALSE;
            }
        }

        if ($check) {
            if (Input::has('rating') OR Input::has('review')) {
                if (Input::has('rating')) {
                    $rating = $rating;
                    if (Input::has('review')) {
                        $rtext = $rtext;
                        if ($register->setRegister($username, $rating, $rtext)) {
                            $_SESSION['alert'] = true;
                            $_SESSION['message'] = '<div class="alert alert-success form-group">Review is aangemaakt!</div>';
                        } else {
                            $_SESSION['alert'] = true;
                            $_SESSION['message'] = '<div class="alert alert-danger form-group">Database error!</div>';
                        }
                    } else {
                        $_SESSION['alert'] = true;
                        $_SESSION['message'] = '<div class="alert alert-danger form-group">Review tekst mag niet leeg zijn!</div>';
                    }
                } else {
                    $_SESSION['alert'] = true;
                    $_SESSION['message'] = '<div class="alert alert-danger form-group">Er moet een rating gegeven worden</div>';
                }
            } else {
                $_SESSION['alert'] = true;
                $_SESSION['message'] = '<div class="alert alert-danger form-group">Alle velden moeten worden ingevuld!</div>';
            }
        } else {
            $_SESSION['alert'] = true;
            $_SESSION['message'] = '<div class="alert alert-danger form-group">U kunt slechts een review per dag plaatsen!</div>';
        }
    }

    public static function getReview() {
        $getReview = new dataReview;
        return $getReview->getReview();
    }

}
