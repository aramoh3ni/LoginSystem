<?php
class SignupController extends Signup
{
    private $usrName;
    private $firstName;
    private $lastName;
    private $email;
    private $pwd;
    private $rePwd;

    public function __construct($usrName, $firstName, $lastName, $email, $pwd, $rePwd)
    {
        $this->usrName = $usrName;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
        $this->pwd = $pwd;
        $this->rePwd = $rePwd;
    }

    public function signupUser()
    {
        if($this->emptyIntputs() == false)
        {
            header("Location: ../sign-up.php?error=emptyinputs");
            exit();
        }
        if($this->invalidUsername() == false) 
        {
            header("Location: ../sign-up.php?error=invalidusername");
            exit();
        }
        if($this->passwordMatch() == false)
        {
            header("Location: ../sign-up.php?error=passwordsnotmatch");
            exit();
        }
        if($this->userAccountExists() == false)
        {
            header("Location: ../sign-up.php?error=accountexists");
            exit();
        }
        if($this->invalidEmail() == false)
        {
            header("Location: ../sign-up.php?error=invalidemail");
            exit();
        }

        $this->setUser($this->usrName, $this->pwd, $this->email, $this->firstName, $this->lastName);

    }

    private function emptyIntputs()
    {
        $result = null;
        if (empty($this->usrName) || empty($this->firstName) || empty($this->lastName) || empty($this->email) || empty($this->pwd) || empty($this->rePwd)) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }

    private function invalidUsername()
    {
        $result = null;
        if(!preg_match("/^[a-zA-Z0-9]*$/", $this->usrName)) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }

    private function invalidEmail()
    {
        $result = null;
        if(!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }

    private function passwordMatch()
    {
        $result = null;
        if($this->pwd !== $this->rePwd)
        {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }

    private function userAccountExists()
    {
        $result = null;
        if(!$this->checkUserIfExists($this->usrName, $this->email)) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }
}
