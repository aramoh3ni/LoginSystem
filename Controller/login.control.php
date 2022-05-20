<?php
class LoginController extends Login
{

    private $usrName;
    private $pwd;

    public function __construct($usrName, $pwd)
    {
        $this->usrName = $usrName;
        $this->pwd = $pwd;
    }

    public function loginUser()
    {
        if ($this->emptyIntputs() == false) {
            header("Location: ../index.php?error=emptyinputs");
            exit();
        }
       
        $this->getUser($this->usrName, $this->pwd);
    }

    private function emptyIntputs()
    {
        $result = null;
        if (empty($this->usrName) || empty($this->pwd)) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }
}
